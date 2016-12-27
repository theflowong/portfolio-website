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
			<!--<nav id="nav01"></nav>
			<script type="text/javascript" src="menu.js"></script>-->
			<!--<object type="text/html" data="menu.html" width="100%" height="50px">
				Menu
			</object>-->
			<?php include "menu.php"; ?>
			<script type=”text/javascript”>
				var element = document.getElementById("index");
				element.className = element.className + "selected";
			</script><!--for whatever the page is, fill in for "index"-->
		</div>
		<div id = "container">
			<div id = "content"> <!--content for whatever under header-->
				<div id = "main"> <!-- main is for writing purposes -->
					<p> Testing testing <br><br><br> Test.</p>
					<p>Another paragraph. <br><br>with lots of breaks.<br><br></p>
					<p>Images<br><br><br><br><br><br><br><br><br><br><br><br>Breaks</p>
				</div>

			</div>
		</div>
		<div id = "footer">
			<div id ="footerfill">
				<div id = "copyright">
					Website Design
					<br>by Florence Wong &copy; 2015
				</div>
			</div>
		</div>
	</body>
</html>