<!DOCTYPE html>
<html>
    <head>
        <title>SpoonFed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/foundation.css" />
        <link rel="stylesheet" type="text/css" href="css/spoon.css" />
    </head>
    <body>
		<div class="base"></div>
	    <div id="header">
			<?php include_once("header.php"); ?>
	    </div>

	    <div id="content">
			<div class="row">
				<div class="small-24 medium-14 large-16 medium-push-4 large-push-4 columns">
					<h2>Nope</h2>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include_once("leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
						<p> This is not the page you're looking for! </p>
						<hr />
					</div>
				</div>
				<div class="small-24 medium-24 large-6 columns">
					<?php include_once("rightside.php"); ?>
				</div>
			</div>
	    </div>

	    <?php include_once("footer.php"); ?>
	    
    </body>
</html>
