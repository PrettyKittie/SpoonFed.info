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
						<p>Here's a list of some of our favorite tools and apps:</p>
						<ul>
							<li> Enumeration </li>
							<li> Forensics </li>
							<li> Backdoors </li>
							<li> SQL </li>
							<li> Web Spidering </li>
							<li> Password Cracking </li>
							<li> Vulnerability Scanning </li>
							<li> Denial of Service </li>
							<li> Anonymity </li>
							<li> Encryption </li>
							<li> Administration </li>
							<li> Port Scanning </li>
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