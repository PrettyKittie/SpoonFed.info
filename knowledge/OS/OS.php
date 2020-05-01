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
						<p>Here's a list of some of our favorite boot disks, and operating systems:</p>
						
						<h4>Security</h4>
						<ul>
							<li><a href="https://www.kali.org/downloads/" target="_blank">Kali Linux!</a> - From your friends at <a href="https://www.offensive-security.com" target="_blank">OffSec!</a></li>
						</ul>

						<h4>Home Use</h4>
						<ul>
							<li><a href="https://linuxmint.com/download.php" target="_blank">Mint</a> - Quick, Fully-featured desktop distro</li>
							<li><a href="https://www.pclinuxos.com/get-pclinuxos/" target="_blank">PCLinuxOS</a> - Super friendly home desktop distro</li>							
						</ul>

						<h4>Privacy</h4>
						<ul>
							<li><a href="https://tails.boum.org/" target="_blank">TAILS</a> - Live distro for privacy and anonymity</li>
						</ul>						

						<h4>Surgery</h4>
						<ul>
							<li><a href="" target="_blank"></a></li>
						</ul>

						<h4>Special tools</h4>
						<ul>
							<li><a href="https://dban.org" target="_blank">DBAN disk eraser </a></li>
							<li><a href="http://www.piotrbania.com/all/kon-boot/" target="_blank">KonBoot</a> - Covertly bypass Windows and Mac passwords</li>
							<li><a href="http://clonezilla.org/downloads.php" target="_blank">Clonezilla</a></li>							
							<li><a href="https://www.acronis.com/en-us/personal/true-image-comparison/" target="_blank">Acronis True Image</a> - Windows tool for backing up volumes, but not free</li>
							<li><a href="http://trinityhome.org/Home/index.php?content=TRINITY_RESCUE_KIT_DOWNLOAD&front_id=12&lang=en&locale=en" target="_blank">Trinity Rescue Kit</a></li>
							<li><a href="http://www.hirensbootcd.org/download/" target="_blank">Hiren's Boot CD</a> - Great boot disk for doing work on Windows</li>							
						</ul>
			
						<hr />			    
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