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
		<a name="top" id="top"></a>
	    <div id="content">
			<div class="row">
				<div class="small-24 medium-14 large-16 medium-push-4 large-push-4 columns">
					<h1>VPS Hardening Checklist:</h1>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include("../../leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
						
						<section>
							<h4>Overview</h4>
							<ol start="0">
								<li><a href="#0">Intention</a></li>
								<li><a href="#1">Root</a></li>
								<li><a href="#2">Update</a></li>
								<li><a href="#3">New User</a></li>
								<li><a href="#4">SSH</a></li>
								<li><a href="#5">Fail2Ban</a></li>
								<li><a href="#6">Services</a></li>
								<li><a href="#7">Closing Thoughs</a></li>
							</ol>
						</section>

						<section>
							<a class="anchor" name="0" id="0"></a>
							<h4>0) Introduction & Intention</h4>
							<p> This write-up is intended to be a generic checklist for hardening a linux VPS.  For a better understanding of some of the tools, I'll add links to some more detailed walkthroughs.  I'm using a Debian box hosted by Digital Ocean.  While there are many other great hosts out there, this is simply my preferred platform and should provide some fairly solid guidelines for most distributions. </p>
							<p> Caveat:  This is a general outline for good security practices but if you're running from MI6, this will not be enough for you.  Every environment is different, and perfect security doesn't exist.  To really harden up your system, you'll need to tailor your settings to your environment, individual needs, threat model, etc. </p>
							<a class="back-to-top" href="#top">Back to top</a>
						</section>

						<section>
							<a class="anchor" name="1" id="1"></a>
							<h4>1) Configure Root</h4>
							<p> A)  Set a strong password using the passwd command: <p>
							<pre> root@haxbox ~ # passwd </pre>
							<p> You can <a href="" target="_blank">go here</a> for my guidelines on choosing a strong password </p>
							<a class="back-to-top" href="#top">Back to top</a>						
						</section>

						<section>
							<a class="anchor" name="2" id="2"></a>
							<h4>2) Update</h4>
							<p> Ensure your packages and OS are fully up to date </p>
							<pre>
	root@haxbox ~ # apt-get update
	root@haxbox ~ # apt-get dist-upgrade
	root@haxbox ~ # apt-get upgrade
							</pre>
							<a class="back-to-top" href="#top">Back to top</a>
						
						</section>

						<section>
							<a class="anchor" name="3" id="3"></a>
							<h4>3) New User</h4>
							<p> It's never a good idea to run as root, so the next step is to create a non-root user and assign it sudo priveleges for when root authority is needed. </p>
							<p> First, get sudo installed if it isn't already </p>
							<pre> root@haxbox ~ # apt-get install sudo </pre>
							<p> Create the user and assign it a strong password </p>
							<pre>
	root@haxbox ~ # adduser haxor
	root@haxbox ~ # passwd haxor
							</pre>
							<p> And allow it to sudo </p>
							<pre> root@haxbox ~ # usermod -aG sudo haxor </pre>
							<a class="back-to-top" href="#top">Back to top</a>
						
						</section>

						<section>
							<a class="anchor" name="4" id="4"></a>
							<h4>4) SSH</h4>
							<p> This is where you start to dig into the fun stuff...</p>
							<p> First you'll need to generate an SSH key-pair on your *local* box. </p>
							<pre> user@homebox ~ $ ssh-keygen -t rsa -b 4096 -C "optional comment goes here" </pre>
							<p> As always, input a strong password when prompted </p>
							<p> Before you continue, you'll need to verify the correct permissions are set on your .ssh folder/files </p>
							<pre> 
	user@homebox ~ $ chmod 700 ~/.ssh
	user@homebox ~ $ chmod 600 ~/.ssh/authorized_keys
							</pre> 
							<p> Now upload your *public* key to your box.  I prefer to use ssh-copy-id, although there are multiple methods to accomplish this. </p>
							<pre> user@homebox ~ $ ssh-copy-id haxor@haxboxipaddress </pre>
							<p> At this point, i STRONGLY recommend that you ssh into your box with your new user account, to ensure that your account and key are working properly.
							<pre> user@homebox ~ $ ssh haxor@haxboxipaddress </pre>
							<p> Lock down your ssh server configurations by adding/modifying the following lines. </p>
							<pre> haxor@haxbox ~ $ vi /etc/ssh/sshd_config </pre>
							<pre>
	 Port 76 (Optional.  Use any non-default port)
	 AddressFamily inet
	 PermitRootLogin no
	 StrictModes yes
	 PubkeyAuthentication yes
	 PasswordAuthentication no
	 PermitEmptyPasswords no
	 ChallengeResponseAuthentication no
	 UsePAM no
	 AllowUsers haxor (or AllowGroup sshusers)
	 Protocol 2
							</pre>
							<p> Restart the ssh service </p>
							<pre> haxor@haxbox ~ $ sudo service sshd restart </pre>    
							<p> You can <a href="http://spoonfed.info/knowledge/tutorials/configuressh.php">go here</a> for a deeper explanation of how these settings work and some alternative configurations</p>
							<a class="back-to-top" href="#top">Back to top</a>
						</section>

						<section>
							<a class="anchor" name="5" id="5"></a>
							<h4>5) Fail2Ban</h4>
							<p> Coming soon...Install and configure Fail2Ban </p>
							<a class="back-to-top" href="#top">Back to top</a>
						
						</section>

						<section>
							<a class="anchor" name="6" id="6"></a>
							<h4>6) Services</h4>
							<p> Coming soon...Disable any unnecessary services </p>
							<a class="back-to-top" href="#top">Back to top</a>
						</section>

						<section>
							<a class="anchor" name="7" id="7"></a>
							<h4>7) Closing Thoughts</h4>
							<p> I'd like to re-iterate that this is simply intended to be a checklist for some generic hardening.  Do you think I missed something?  Did a step not work?  Could this simply be the most bestest article you've ever seen on the interwebz?  Feel free to stop by the <a href="http://www.spoonfed.info/index.php">channel</a> and let us know what you think.  You can send your flames or flattery for this article to PrettyKittie via <a href="http://www.spoonfed.info/index.php" target="_blank">IRC</a> or <a href="http://www.spoonfed.info/whoami.php" target="_blank">email.</a> </p>
							<a href="#top">Back to top</a>
						
							<h4>Recommended Reading</h4>
							<ul>
								<li><a href="https://www.openssh.com/" target="_blank">OpenSSH Home</a></li>
								<li><a href="https://www.fail2ban.org/wiki/index.php/Main_Page" target="_blank">Fail2Ban Home</a></li>
							</ul>
							<a class="back-to-top" href="#top">Back to top</a>						
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