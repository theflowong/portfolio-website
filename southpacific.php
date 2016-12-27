<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "style.css" />
		<title>Florence Wong</title>
		<!--shortcut icon; should make new one-->
		<link rel = "shortcut icon" href = "flo.ico" />
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<body>
		<div id = "header">
			<h1><a id="title_flo" href="index.php">Florence Wong</a></h1>
			<?php include "menu.php"; ?>
			<!-- to designate menu page as "selected" -->
			<script type=”text/javascript”>
				var element = document.getElementById("southpacific");
				element.className = element.className + "selected";
			</script>
		</div>
		<div id = "container">
			<div id = "content_art">
				<table>
					<tr>
						<td id = "art_title_filler">
							<div id = "art_title">
								<p>South Pacific Observations<br>
								Pen and watercolor<br>
								2015<br><br></p>
								<p><h3>Winter of 2015, I had the chance to study abroad and travel
									around cities and national parks in the Cook Islands, New Zealand, and Australia with
									<a href="http://www.people.carleton.edu/~fhagstro/index.html">Fred Hagstrom</a>.
									I carried hand-bound sketchbooks with me, so whenever I observed
									something intriguing, I recorded it visually.
									Being constantly surrounded by pristine landscapes and cityscapes
									makes one realize the beauty and magnitude of nature.
								</h3>
								</p>
							</div>
						</td>
						<td id = "horizontal_gallery">
							In the process of photographing and uploading images - more to come soon!
							<!--<img class="img_hover" src="prints/musicians1.jpg" height="100%" border="0" />-->
							<!--<p class="caption">Musicians Gone Wild - Violin</p>-->
							<!--<img class="img_hover" src="prints/musicians2.jpg" height="100%" border="0" />-->
							<!--<p class="caption">Musicians Gone Wild - Trombone</p>-->
							<!--<img class="img_hover" src="prints/musicians3.jpg" height="100%" border="0" />-->
							<!--<p class="caption">Musicians Gone Wild - Piano</p>-->
							<!--<img class="img_hover" src="prints/musicians4.jpg" height="100%" border="0" />-->
							<!--<p class="caption">Musicians Gone Wild - Finale</p>-->
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>