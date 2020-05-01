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
					<h1> Welcome to ##SpoonFed! </h1>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include("../../leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
<!-- Because I'm Lazy...
						<h4></h4>
						<ul>
							<li><a href="" target="_blank"></a></li>
						</ul>
-->					
						<p>Here's a list of some of our favorite tutorials:</p>
						
						<h4>Exploit Sources</h4>
						<ul>
							<li><a href="https://www.exploit-db.com/" target="_blank">Exploit Database</a> - From OffSec</li>
							<li><a href="http://www.securityfocus.com/bit" target="_blank">Bugtraq</a></li>
							<li><a href="https://cve.mitre.org/" target="_blank">CVE List</a></li>
							<li><a href="https://isc.sans.edu/dashboard" target="_blank">Internet Storm Center</a></li>
							<li><a href="https://nvd.nis.gov" target="_blank">National Vuln Database (NVD)</a></li>
							<li><a href="http://www.tenable.com/plugins/index.php?view=search" target="_blank">Nessus Plugin Search</a></li>
							<li><a href="https://blog.osvdb.org/" target="_blank">Open Source Vuln DB</a></li>
							<li><a href="http://map.norsecorp.com/" target="_blank">Realtime Attack Map</a></li>
						</ul>
						
						<h4>Kali</h4>
						<ul>
							<li>Kali Linux Revealed: <a href="https://kali.training/introduction/kali-linux-revealed-book" target="_blank">Kali Linux Revealed eBook</a> / <a href="www.amazon.com/Kali-Linux-Revealed-Penetration-Distribution/dp/0997615605/ref=pd_sim_14_4" target="_blank">Book</a></li>
						</ul>
						
						<h4>Metasploit Framework</h4>
						<ul>
							<li><a href="https://www.offensive-security.com/metasploit-unleashed/" target="_blank"> Metasploit Unleashed </a></li>
						</ul>
						
						<h4>VPS Setup</h4>
						<ul>
							<li><a href="http://spoonfed.info/knowledge/tutorials/vpshardening.php">VPS hardening</a> - Basic Tips</li>
							<li><a href="http://spoonfed.info/knowledge/tutorials/configuressh.php">Configuring SSH</a> - Secure Setup with Keys</li>
							<li><a href="http://spoonfed.info/knowledge/tutorials/configurefail2ban.php">Configuring Fail2Ban</a> - Simple Install for Protecting SSH</li>
							<li><a href="http://spoonfed.info/knowledge/tutorials/passwords.php">Choosing Strong Passwords</a> - Work in progress</li>							
						</ul>
						
						<h4>Git &amp; Github</h4>
						<ul>
							<li><a href="https://git-scm.com/book/en/v2" target="_blank">Git</a> --everything-is-local</li>
						</ul>

						<h4>Privilege Escalation</h4>
						<ul>
							<li><a href="https://blog.g0tmi1k.com/2011/08/basic-linux-privilege-escalation/" target="_blank">g0tmi1k's Linux priv-esc explanation</a> - This is arguably one of the best tutorials ever written on the topic!</li>
<!--						<li><a href="" target="_blank"></a></li>
							<li><a href="" target="_blank"></a></li>
							<li><a href="" target="_blank"></a></li>
							<li><a href="" target="_blank"></a></li>
-->
						</ul>

						<h4>Tools &amp; Resources</h4>
						<ul>
							<li><a href="http://www.amanhardikar.com/mindmaps/practice.html" target="_blank">MindMaps</a> - Practice</li>
							<li><a href="http://www.amanhardikar.com/mindmaps/webapptest.html" target="_blank">MindMaps</a> - Web App Testing</li>
							<li><a href="https://vim.rtorr.com/" target="_blank">Cheatsheet</a> - Vi/Vim</li>							
						</ul>
						
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
