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
			<?php include("header.php"); ?>
	    </div>

	    <div id="content">
			<div class="row">
				<div class="small-24 medium-14 large-16 medium-push-4 large-push-4 columns">
					<h1>Welcome SpoonFeeders!</h1>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include("leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
						<p> This is the official home of the SpoonFed Community!  Got some knowledge you can share or a question to ask?  Then you're in the right place!  Browse our site or join us in ##SpoonFed on the <del>Freenode</del> <a href="https://libera.chat/about/" target="_blank">Libera</a> IRC network.
						<p> We hope you find plenty resources here to help you throughout your learning journey. Please feel free to use and abuse our Knowledge Portal for IT and Security tips, tricks, tools, and tutorials! </p>
						<p> Click our About page to get a feel for who we are and what we do here at ##Spoonfed </p>
						<p> Our whoami page is the place to go to learn all about the founders, staff, contributors and volunteers who are all working hard to make the community grow! </p>
						<p> So kick back, steal some knowledge, share some knowledge, and most importantly HAVE FUN!!! </p>
						<hr />
					</div>
				</div>
				<div class="small-24 medium-24 large-6 columns">
					<?php include("rightside.php"); ?>
				</div>
			</div>
	    </div>

	    <?php include_once("footer.php"); ?>
	    
    </body>
</html>
