<!DOCTYPE html>
<html>
    <head>
        <title>SpoonFed</title>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
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
					<h1>HTML Elements</h1>
				</div>
			</div>

			<div class="row">
				<div class="small-24 medium-5 large-4 columns">
					<?php include_once("leftside.php"); ?>
				</div>
				<div class="small-24 medium-19 large-14 columns">
					<div class="layer">
					
						<p>Samples of HTML elements and how they appear within the context of ##spoonfed, and their related HTML tags available for copy & paste on the right.</p>
					
						<table>
							<tr>
								<td>
									<p>Regular paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat ligula at nunc euismod pharetra ut ut ex. Fusce rutrum magna et est ultricies malesuada.</p>	
								</td>
								<td>
									<pre>&lt;p&gt;&lt;/p&gt;</pre>
									<p>Single line break:</p>
									<pre>&lt;br /&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><small>Small lorem ipsum dolor sit amet text.</small></p>
								</td>
								<td>
									<pre>&lt;small&gt;&lt;/small&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Bold lorem ipsum dolor sit amet text.</strong></p>
								</td>
								<td>
									<pre>&lt;strong&gt;&lt;/strong&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p>This is what <sup>sup</sup> looks like</p>
								</td>
								<td>
									<pre>&lt;sup&gt;&lt;/sup&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p>This is what <sub>sub</sub> looks like</p>
								</td>
								<td>
									<pre>&lt;sub&gt;&lt;/sub&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><em>This is italic text</em></p>
								</td>
								<td>
									<pre>&lt;em&gt;&lt;/em&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><center>This is centered text</center></p>
								</td>
								<td>
									<pre>&lt;center&gt;&lt;/center&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><a href="#">This is a link</a></p>
									<p><a href="#" target="_blank">This is a link that opens in a new window</a></p>
								</td>
								<td>
									<pre>&lt;a href=""&gt;&lt;/a&gt;</pre>
									<pre>&lt;a href="" target="_blank"&gt;&lt;/a&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<h1>H1 Header</h1>
									<h2>H2 Header</h2>
									<h3>H3 Header</h3>
									<h4>H4 Header</h4>
									<h5>H5 Header</h5>
									<h6>H6 Header</h6>
								</td>
								<td>
									<pre>&lt;h1&gt;&lt;/h1&gt;</pre>
									<pre>&lt;h2&gt;&lt;/h2&gt;</pre>
									<pre>&lt;h3&gt;&lt;/h3&gt;</pre>
									<pre>&lt;h4&gt;&lt;/h4&gt;</pre>
									<pre>&lt;h5&gt;&lt;/h5&gt;</pre>
									<pre>&lt;h6&gt;&lt;/h6&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Unordered List:</strong></p>
									<ul>
										<li>List item</li>
										<li>List item</li>
										<li>List item</li>
									</ul>
						
									<p><strong>Nested Unordered List:</strong></p>
									<ul>
										<li>List item
											<ul>
												<li>List item</li>
												<li>List item</li>
												<li>List item</li>
											</ul>
										</li>
										<li>List item</li>
										<li>List item</li>
									</ul>
								</td>
								<td>
<pre>&lt;ul&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
<pre>&lt;ul&gt;
   &lt;li&gt;
      &lt;ul&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p><strong>Ordered List:</strong></p>
									<ol>
										<li>List item</li>
										<li>List item</li>
										<li>List item</li>
									</ol>
						
									<p><strong>Nested Ordered List:</strong></p>
									<ol>
										<li>List item
											<ol>
												<li>List item</li>
												<li>List item</li>
												<li>List item</li>
											</ol>
										</li>
										<li>List item</li>
										<li>List item</li>
									</ol>
								</td>
								<td>
<pre>&lt;ol&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
&lt;/ol&gt;</pre>
<pre>&lt;ol&gt;
   &lt;li&gt;
      &lt;ol&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
         &lt;li&gt;&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
&lt;/ol&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<blockquote>
										This is a blockquote. Great for highlighting quotes or small bits of information.
									</blockquote>
								</td>
								<td>
									<pre>&lt;blockquote&gt;&lt;/blockquote&gt;</pre>
								</td>
							</tr>
							<tr>
								<td>
									<p>Horizontal rule: </p>
									<hr />
								</td>
								<td>
									<pre>&lt;hr /&gt;</pre>
								</td>
							</tr>
						</table>
						
						<p>Content by fuzzybugs</p>
					
					
						
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
