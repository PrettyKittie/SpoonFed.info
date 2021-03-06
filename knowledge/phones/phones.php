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
						<p>Here's a list of some of our favorite phone tools and parts:</p>

						<h4>Operating Systems</h4>
						<ul>
							<li><a href="https://lineageos.org" target="_blank">LineageOS</a> - Successor to CyanogenMod</li>
							<li><a href="http://n900-hackers.org/" target="_blank">N900-Hackers.org</a> - Home of the Nokia N900 HackPack, written by stryngs </li>
							<li><a href="https://www.kali.org/kali-linux-nethunter/" target="_blank">Nethunter</a> - Brought to you by OffSec </li>
						</ul>
						
						<h4>Parts Suppliers </h4>
						<ul>
							<li><a href="https://phonepartsusa.com" target="_blank">Phone Parts USA</a></li>
							<li><a href="https://www.repairsuniverse.com" target="_blank">Repairs Universe</a>  </li>
							<li><a href="http://www.screencountry.com" target="_blank">Screen Country</a>  </li>
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