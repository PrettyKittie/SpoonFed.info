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
					<h1><a name="top" id="top"></a>Hardening SSH:</h1>
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
								<li><a href="#1">Generate Client Key</a></li>
								<li><a href="#2">Test Your Key</a></li>
								<li><a href="#3">Configure Server</a></li>
								<li><a href="#4">Restart Services</a></li>
								<li><a href="#5">Closing Thoughts</a></li>
							</ol>					
						</section>
						
						<section>
							<a class="anchor" name="0" id="0"></a>
							<h4>0)  Introduction & Intention</h4>
							<p>This write-up is intended to be a walkthrough for configuring and hardening SSH.  I'll be configuring OpenSSH on a Debian box hosted by Digital Ocean.  While there are many other great options out there, this is simply my preferred platform and should provide some fairly solid guidelines for most distributions.</p>
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>
						
						<section>
							<a class="anchor" name="1" id="1"></a>
							<h4>1)  Generate an ssh key on your local box</h4>
							<p>Instituting SSH keys is a key foundation to hardening your ssh configuration.  This will be a 3 step process.</p>
							<p>A)  The first thing you need to do is generate the keypair.  By default, </p>
								<pre> ssh-keygen -t rsa -b 4096 -C "VPS to catch Meterpreter shells"</pre>
							<p>All of these arguments are optional.  If you execute ssh-keygen without specifying any options, it will create a 2048-bit RSA key.</p>
							<p>-t to set the encryption type (rsa is recommended, version 2 is the default. other options include dsa, ecdsa, ed25519, and rsa1 for rsa version 1)</p>
							<p>-b is for the size of the key in bits.  For rsa, the default size is 2048 bits.  4096 is a rather paranoid size, but it never hurts to future proof...</p>
							<p>-C is an optional comment field.  You can use this to give some context to a key.  For example "Login for backdoor at EvilCorp"</p>
							<p>-f will let you choose a file name</p>
				
							<p>When given the option, enter a <a href="http://spoonfed.info/knowledge/tutorials/passwords.php">strong password</a> for your key.</p>
							<p>If you decide to remove or change that password in the future, you can do so with:</p>
								<pre>ssh-keygen -p</pre>
							<p>B)  Upload your *public* key to your box.  There are multipl methods to accomplish this.</p>
								<ul>
									<li>My preferred method is with ssh-copy-id</li>
										<pre> ssh-copy-id haxor@ipaddress </pre>
									<li>You can cat your public key over ssh.</li>
										<pre> cat ~/.ssh/id_rsa.pub | ssh haxor@ipaddress "mkdir -p ~/.ssh && cat >> ~/.ssh/authorizedkeys" </pre>
									<li>Copy/paste also works just as well.  You cat/echo your key to the screen, highlight and copy it. Then just ssh into the server, open the auth</li>
								</ul>
							<p>C)  On your server, you should verify the permissions of the ssh folder and the authorized_keys files.  You want to ensure the key is only accessible by you.  Also we'll be setting the ssh server to strictmode, this will be a requirement for the keys to work anyway.</p>
							<p>Check with:</p>
								<pre>ls -al ~/.ssh</pre>
							<p>The .ssh folder should have read/write/execute (rwx) permissions set for your user account and no permissions for anyone else.  The authorized_keys file should have read/write (rw-) permissions set for your account and no permissions for anyone else.  If this is not the case, you can set the permissions like this: </p>
								<pre> 
	chmod 700 ~/.ssh
	chmod 600 ~/.ssh/authorized_keys
								</pre> 
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>
						
						<section>
							<a class="anchor" name="2" id="2"></a>
							<h4>2)  Test Your Key</h4>				
							<p>At this point, i STRONGLY recommend that you ssh into your box with your new user account, to ensure that your account and key are working properly.  If you break your ssh setup, you'll have to login through a console to fix it.</p>
								<pre> 
	ssh haxor@ipaddress
	passwordy stuff....
								</pre>
							<a class="back-to-top" href="#top">Back to top</a>				
						</section>
						
						<section>
							<a class="anchor" name="3" id="3"></a>
							<h4>3)  Configure Your Server</h4>		
							<p>Now that the keys have been generated and uploaded, it's time to focus on the configuration file for the ssh server.  Below are the changes I recommend, along with a description of what those changes accomplish.  Some of these settings may seem a little redundant but are included here anyway for completeness.</p>
								<pre>
	Port 22
	AddressFamily inet
	PermitRootLogin no
	StrictModes yes
	HostbasedAuthentication no
	IgnoreRhosts yes
	PasswordAuthentication no
	PubkeyAuthentication yes
	ChallengeResponseAuthentication no
	UsePAM no
	AllowUsers haxor
	AllowGroup sshusers
	Protocol 2
								</pre>
							<p>The configuration file for the ssh server is located in /etc/ssh/sshd_config.  Open this file with your preferred text editor.  Within the configuration file, comments are created using a '#' symbol.  Many of these options are commented out be default; you can simply delete the comment symbol to activate the option, and change it to your preferred value.</p>						
							<p>By default, SSH runs on tcp port 22.  You can change this to any port you like.  While may help obscure your ssh server from the casual hacker, it is important to remember that security-by-obscurity is not security at all.  Additionally, this may cause issues with some security appliances that don't expect ssh traffic on non-standard ports.</p>
								<pre>Port 22</pre>
							<p>This setting instructs the server to only utilize IPv4.  Alternatively, you can specify IPv6 traffic with AddressFamily inet6</p>
								<pre>AddressFamily inet</pre>
							<p>The prevents the root users from logging in via ssh.  However, if a user logs in via ssh, this does NOT prevent them from becoming root via su</p>
								<pre>PermitRootLogin no</pre>
							<p>This is another setting that is set to yes by default, but we are still going to specify it.  This setting tells the server to only let a user log</p>in if the ssh folder and contents have proper permissions set for their keys, to help prevent logins from a compromised key.
								<pre>StrictModes yes</pre>
							<p>This is another means of using the knownhosts file for authentication.  It gets disabled as we only want the ssh server to accept keys.</p>
								<pre>HostbasedAuthentication no</pre>
							<p>By default, relying on the Rhosts file should already be disabled.  It is an outdated and unreliable mechanism.  We will spell it out anyway, for the sake of being thorough.</p>
								<pre>IgnoreRhosts yes</pre>
							<p>This prevents users from using a password to log in.  This forces the user to log in via an ssh key.  However, this does NOT affect the password set on the ssh key.</p>
								<pre>PasswordAuthentication no</pre>
							<p>This is another way to force the use of ssh keys.</p>
								<pre>PubkeyAuthentication yes</pre>
							<p>Users should *never* be allowed to create accounts without a password.  But even if a user did slip by, this option prevents them (and more importantly, anyone else) from logging in via ssh without a password.  This is another setting to stop users from using a password to log in.  This forces the user to log in via an ssh key.  However, this does NOT affect the password set on the ssh key.</p>
								<pre>ChallengeResponseAuthentication no</pre>
							<p>PAM is Pluggable Authentication Module.  It is another means of utilizing passwords to log in, so should also be turned off.</p>
								<pre>UsePAM no</pre>
							<p>This lets you specify precisely which users are allowed to connect via ssh.  To allow more than one user, list them separated by a space, like this:</p>
							<p>#AllowUsers haxor moarhaxor</p>
								<pre>AllowUsers haxor</pre>
							<p>Alternatively, you don't have to specify each user.  You can add users to an ssh group, and tell the ssh server to only allow the group.  In this case the group is called sshusers, however you can give it any name you like.</p>
								<pre>AllowGroup sshusers</pre>
							<p>Forces the server to utilize SSH version2, as version1 has some weaknesses.</p>
								<pre>Protocol 2</pre>
							<a class="back-to-top" href="#top">Back to top</a>
										
						</section>
						
						<section>
							<a class="anchor" name="4" id="4"></a>
							<h4>4)  Restart the SSH Service</h4>
							<pre> sudo service sshd restart </pre> 
							<a class="back-to-top" href="#top">Back to top</a>
				
						</section>
						
						<section>
							<a class="anchor" name="5" id="5"></a>
							<h4>5) Closing Thoughts</h4>
							<p> This breakdown should hopefully give you a solid understanding of the common configurations options used to harden an SSH server.  These are the settings that I recommend, although it is important to keep in mind that your needs and your environment will determine which, if any, of these recommendations work for you.  You should always keep your threat model in mind when implementing configuration changes, and never blindly follow advice on the internet.  Remember: Trust, but verify!  Do you think I missed something?  Did a step not work?  Could this simply be the most bestest article you've ever seen on the interwebz?  Feel free to stop by the <a href="http://www.spoonfed.info/index.php">channel</a> and let us know what you think.  You can send your flames or flattery for this article to PrettyKittie via <a href="http://www.spoonfed.info/index.php" target="_blank">IRC</a> or <a href="http://www.spoonfed.info/whoami.php" target="_blank">email.</a> </p>
							<a class="back-to-top" href="#top">Back to top</a>

							<h4>Recommended Reading</h4>
							<ul>
								<li><a href="https://www.openssh.com/" target="_blank">OpenSSH Home</a></li>
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