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
						<p>Here's a list of some of our favorite OSINT tools and resources:</p>

						<h4>Websites</h4>
						<ul>
							<li><a href="https://inteltechniques.com/" target="_blank">Intel Techniques</a></li>
							<li><a href="https://www.osintframework.com/" target="_blank">OSINT Framework</a></li>
							<li><a href="https://www.learnallthethings.net/creepyosint" target="_blank">Beginner OSINT</a> - Presentations, tools, and resources</li>
						</ul>
						
						<h4>Tools</h4>
						<ul>
							<li><a href="https://www.kitploit.com/2018/07/eagleeye-stalk-your-friends-find-their.html" target="_blank">Eagle Eye</a> - Image Recognition and Reverse Image search tool</li>
						</ul>
						
						<h4>Books</h4>
						<ul>
							<li><a href="https://www.amazon.com/Open-Source-Intelligence-Techniques-Information/dp/1984201573" target="_blank">OSINT Desk Reference</a></li>
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
