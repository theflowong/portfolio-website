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
				var element = document.getElementById("ceramics");
				element.className = element.className + "selected";
			</script>
		</div>
		<div id = "container">
			<div id = "content_art">
				<table>
					<tr>
						<td id = "art_title_filler">
							<div id = "art_title">
								<p>Ceramics: Functional<br>
								Earthenware with underglaze, slip, and clear glaze<br>
								2016<br><br>
								<h3><p>I'm currently taking Handbuilding this winter with
												<a href="http://www.kipokrongly.com/">Kip O'Krongly</a>,
												an amazing ceramics artist who advocates for environmental
												awareness through her work.</p>
												<p>An invigorating process, it's also the reason
													why I've been spending half of my waking life
													in the studio this term.</p>
												<p>Here are some of my functional works!</p></h3>
							</div>
						</td>
						<td id = "horizontal_gallery">
							<img class="img_hover" src="ceramics/breakfast.jpg" height="100%" border="0" />
							<img class="img_hover" src="ceramics/cup1.jpg" height="100%" border="0" />
							<!--<p class="caption">i'm mournin' it</p>-->
							<img class="img_hover" src="ceramics/cup2.jpg" height="100%" border="0" />
							<!--<p class="caption">got consent?</p>-->
							<img class="img_hover" src="ceramics/cup3.jpg" height="100%" border="0" />
							<img class="img_hover" src="ceramics/cup4.jpg" height="100%" border="0" />
							<img class="img_hover" src="ceramics/cup5.jpg" height="100%" border="0" />
							<img class="img_hover" src="ceramics/cup6.jpg" height="100%" border="0" />
							<img class="img_hover" src="ceramics/plate1.jpg" height="100%" border="0" />
							<!--<p class="caption">kinder</p>-->
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>