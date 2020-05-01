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
						<p>Here's a list of some of our radio and wireless resources:</p>
<!-- Because I'm Lazy...
						<h4></h4>
						<ul>
							<li><a href="" target="_blank"></a></li>
						</ul>
-->						
						<h4>Wifi Tools</h4>
						<ul>
							<li><a href="https://github.com/icsec/airpwn-ng" target="_blank">Airpwn-NG</a> - Maintained by Jack64 and Stryngs</li>
						</ul>
						
						<h4>Wireless cards</h4>
						<ul>
							<li><a href="" target="_blank"></a>Updated Wifi card suggestions coming soon....</li>
						</ul>
						
						<h4>SDR hardware</h4>
						<ul>
							<li><a href="https://greatscottgadgets.com/hackrf/" target="_blank">HackRF</a> - the most versatile SDR device on the market!</li>
						</ul>
						
						<h4>SDR information</h4>
						<ul>
							<li><a href="https://greatscottgadgets.com/sdr/" target="_blank">Complete SDR class</a> - brought to you by Micael Ossmann</li>
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