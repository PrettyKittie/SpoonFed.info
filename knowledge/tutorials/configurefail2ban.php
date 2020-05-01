<!DOCTYPE html>
<html>
    <head>
        <title>SpoonFed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/foundation.css" />
        <link rel="stylesheet" type="text/css" href="../../css/spoon.css" />
    </head>
    <body>
		<div class="base"></div>
	    <div id="header">
			<?php include("../../header.php"); ?>
	    </div>

	    <div id="content">
			<div class="row">
				<div class="small-24 medium-14 large-16 medium-push-4 large-push-4 columns">
					<h1><a name="top" id="top"></a>Configuring Fail2Ban:</h1>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include("../../leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
						
						<section>
							<h4>Overview:</h4>
							<ol start="0">
								<li><a href="#0">Intention</a></li>
								<li><a href="#1">Fail2Ban Overview</a></li>
								<li><a href="#2">Install Fail2Ban</a></li>
								<li><a href="#3">Configure jail.local</a></li>
								<li><a href="#4">Configure defaults-debian.local</a></li>
								<li><a href="#5">Permanence and Persistence &lt;optional&gt;</a></li>
								<li><a href="#6">Restart the Service</a></li>
								<li><a href="#7">Closing Thoughts</a></li>
							</ol>					
						</section>
						
						<section>
							<a class="anchor" name="0" id="0"></a>
							<h4>0)  Introduction & Intention</h4>
							<p>This write-up is intended to be a walkthrough for configuring Fail2Ban to help thwart brute-force attempts targeting an ssh server.  Check <a href="http://www.spoonfed.info/knowledge/tutorials/configuressh.php">here</a> for the explanation of how to install and set-up an SSH server.  I'll be configuring Fail2Ban on a Debian box hosted by Digital Ocean.  While there are many other great options out there, this is simply my preferred platform and should provide some fairly solid guidelines for most distributions.</p>
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>
						
						<section>
							<a class="anchor" name="1" id="1"></a>
							<h4>1)  Fail2Ban Overview</h4>
							<p>Fail2Ban is a nifty tool that monitors for failed login attempts and bans the offending source IP, via iptables, once the failed attempts meet a user-defined threshold.</p>	
							<p>Fail2Ban utilizes 2 types of files for configurations;  *.conf and *.local; the *.local files over-ride the settings in the *.conf.  Occasionally, updates to the Fail2Ban applications may over-write the a *.conf file with a new version that alters the default configurations.  This may be done to increase stability or security, or to incorporate new features.  For this reason, best practice is to leave the *.conf files untouched, and only edit the *.local.</p>
                            <p>You can create a clean *.local file and add only the configurations you need.  However, a common method is to copy a *.conf file to *.local.  From there, you simply modify the settings that you want to explicitly alter, and then comment out all of the rest.  This makes it easier to implement quick alterations without having to remember every option and the associated command syntax.  The 2 primary configuration files ( as of version 0.9.6 ) are</p>
                                <pre>/etc/fail2ban/jail.conf</pre>
                            <p>and</p>
                                <pre>/etc/fail2ban/jail.d/defaults-debian.conf</pre>
							<a class="back-to-top" href="#top">Back to top</a>
						</section>
						
						<section>
							<a class="anchor" name="2" id="2"></a>
							<h4>2)  Install Fail2Ban</h4>
							<p>Fail2Ban is included in the repositories for most linux distributions, so the initial install is pretty straightforward:</p>
								<pre> sudo apt-get install fail2ban</pre>
							<p>Next, make a *.local copy of each file:</p>
								<pre>
    cp /etc/fail2ban/jail.conf /etc/fail2ban/jail.local
    cp /etc/fail2ban/jail.d/defaults-debian.conf /etc/fail2ban/jail.d/defaults-debian.local
                                </pre>			
							<a class="back-to-top" href="#top">Back to top</a>
						</section>
						
						<section>
							<a class="anchor" name="3" id="3"></a>
							<h4>3)  Configure jail.local</h4>
                            <p>This file holds the various options that will be applied to Fail2Ban globally, as well as to each service Fail2Ban will protect.  The options presented here are some basic settings which should work for most installs but, as always, it is highly encouraged to review what each option does and to adjust them as appropriate.  Requirements may vary based on environment, implementation, threat model, etc.</p>
                            <p>Under the [DEFAULT] entry, Fail2Ban will be configured to look for connections that fail 5 times within 600 seconds (10 minutes).  Connections from that IP will be banned for 600 seconds.  To do so, add/edit the following entries:</p>
                                <pre>
    [DEFAULT]
    bantime = 600
    findtime = 600
    maxentry = 5
                                </pre>
                            <p>Located further in the file is a section for jails, which should include an entry for SSH servers.  Under that entry should be the following:</p>
                                <pre>
    [sshd]
    
    port    = ssh
    logpath = %(sshd_log)s
    backend = %(sshd_backend)s
                                </pre>
                            <p>If the above code doesn't exist, be sure to add it.  All other lines in this file should be commented out.</p>
                            <p>If your IP address doesn't change on the machine you SSH with, you could tell Fail2Ban to ignore connections from your ip (or subnet) by adding it to the ignoreip entry under the [DEFAULT] block.  Multiple ip addresses can be specified by separating them with a space or comma.
                                <pre>
    [DEFAULT]
    ....
    ignoreip = 127.0.0.1/8
                                </pre>
							<a class="back-to-top" href="#top">Back to top</a>
						</section>
						
						<section>
							<a class="anchor" name="4" id="4"></a>
							<h4>4)  Configure defaults-debian.local</h4>
							<p> This file specifies the services Fail2Ban will be applied to.  Edit it to ensure it contains the following text, if it doesn't already:</p>
                                <pre>
    [sshd]
    enabled = true
                                </pre> 
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>

						<section>
							<a class="anchor" name="5" id="5"></a>
							<h4>5)  Permanence and Persistence &lt;optional>&gt;</h4>
                            <p>The current configuration will ban an offending IP for 1 hour, at which point the ban will expire.  A few additional modifications can be made to make the bans permanent.</p>

							<p>In the /etc/fail2ban/jail.local file, you can change the bantime to -1.  A good recommendation is to comment out the existing entries and write a new one:</p>
					    		<pre>
    # "bantime" is the number of seconds that a host is banned.
    bantime  = 600
                                </pre>
							    <pre>
    # Permanent ban
    bantime = -1
                                </pre>
                            <p>This adjustment creates bans that are permanent (don't expire) but they are not yet persistent.  If the Fail2Ban service is restarted, such as by a system reboot, then then bans will be cleared.</p>
                            <p>First, create a file to hold the list of IP address bans that should persist through service restarts:</p>
                                <pre>
    touch persistence.lst
                                </pre>
                            <p>Next, check your /etc/fail2ban/jail.conf file to verify the default ban action.</p>
                                <pre>
    # ACTIONS
    ....
    banaction = iptables-multiport
                                </pre>
                            <p>iptables-multiport is the default setting, but there are other possible options for banaction to be set to.  Each action has a unique configuration file associated with it, which will need to be edited in order to complete the persistence.  So in this case, the corresponding file for iptables-multiport is /etc/fail2ban/action.d/iptables-multiport.conf.  Add an additional line at the end of the actionstart block:</p>
                                <pre>
    cat /etc/fail2ban/persistence.lst | while read IP; do iptables -I f2b-&lt;name&gt; 1 -s $IP -j DROP; done
                                </pre>
                            <p>An additional line will also need to be added at the end of the actionban block:</p>
                                <pre>
    echo &lt;ip&gt; &gt;&gt; /etc/fail2ban/persistence.lst
                                </pre>
                            <p>The following command can also be used to manually ban/unban an ip:</p>
                                <pre>
    sudo fail2ban-client set <jail> <action> <ip>
                                </pre>
                            <p>In this case, the jail can be any jail specified in the /etc/fail2ban/jail.d/defaults-debian.local file, such as 'sshd'.  The action is either 'ban' or 'unban', and the IP is whatever IP address you would like the action to affect.</p>
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>

						<section>
							<a class="anchor" name="6" id="6"></a>
							<h4>6)  Restart the Service</h4>
                            <p>Finally, restart the Fail2ban service to ensure the new configuration entries are loaded</p>
    							<pre>
    sudo service fail2ban restart 
                                </pre>
                            <p>You can verify that Fail2Ban is running using this command:</p>
                                <pre>
    service fail2ban status
                                </pre>
                            <p>Here are some other commands for viewing additional status information:</p>
                                <pre>
    fail2ban-client status
    fail2ban-client status sshd # specifically view ssh status info
                                </pre>
							<a class="back-to-top" href="#top">Back to top</a>
				
						</section>						

						<section>
							<a class="anchor" name="7" id="7"></a>
							<h4>7) Closing Thoughts</h4>
							<p> This breakdown should hopefully give you a basic understanding of how to configure Fail2Ban to help protect an SSH server.  These are the settings that I recommend, although it is important to keep in mind that your needs and your environment will determine which, if any, of these recommendations work for you.  You should always keep your threat model in mind when implementing configuration changes, and never blindly follow advice on the internet.  Remember: Trust, but verify!  Do you think I missed something?  Did a step not work?  Could this simply be the most bestest article you've ever seen on the interwebz?  Feel free to stop by the <a href="http://www.spoonfed.info/index.php">channel</a> and let us know what you think.  You can send your flames or flattery for this article to PrettyKittie via <a href="http://www.spoonfed.info/index.php" target="_blank">IRC</a> or <a href="http://www.spoonfed.info/whoami.php" target="_blank">email.</a> </p>
							<a class="back-to-top" href="#top">Back to top</a>

							<h4>Recommended Reading</h4>
							<ul>
								<li><a href="https://www.fail2ban.org/wiki/index.php/Main_Page" target="_blank">Fail2Ban Home</a></li>
                                <li>And a huge thanks to David Egan/Carawebs for <a href="https://dev-notes.eu/2018/04/persistent-banning-of-ip-addresses-with-fail2ban" target="_blank">this gem</a> which filled in the missing pieces I needed to get the persistence to work properly!</li>
							</ul>
						</section>
						
					</div>
				</div>
				<div class="small-24 medium-24 large-6 columns">
					<?php include("../../rightside.php"); ?>
				</div>
			</div>
	    </div>

		<?php include("../../footer.php"); ?>
	    
    </body>
</html>
