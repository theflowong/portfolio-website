<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Florence Wong</title>
		
		<!--shortcut icon; should make new one-->
		<link rel = "shortcut icon" href = "flo.ico" type="image/x-icon" />

		<!-- Styles -->
		<link href="style.css" rel="stylesheet" type="text/css"/>
		<link href="isotope-portfoliogrid.css" rel="stylesheet" type="text/css"/>

	<!-- for editing and testing purposes;
			merge after final -->
			<link href="style_menuedit.scss.css" rel="stylesheet" type="text/css"/>

		<!-- Fonts (better than @import; doesn't block parallel downloads) -->
		<link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'> <!--for logo icons-->
		
		<!-- Backup font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

		<!-- Other fonts... check to see if I REALLY need these -->
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		
		<!-- Isotope jQuery -->
		<script src="js/jquery.isotope.js" type="text/javascript"></script>

		<!-- Isotope JS -->
		<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js" type="text/javascript"></script>

		<!-- Theme Javascript -->
		<script src="flowong.js" type="text/javascript"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>


	<body>
		<div id = "header">
			<h1><a id="title_florencewong" href="index.php">FLOrence Wong</a></h1>
			<h1><a id="title_flowong" href="index.php">Flo Wong</a></h1>
			
			<!-- Navigation -->
			<nav class="nav">

				<a href="#menu" id="toggle">
					<span></span>
				</a>

				<?php include "menu.php"; ?>

				<div class="nav-mobile"><i class="fa fa-bars"></i>
					<input class="checkbox-toggle" type="checkbox" />
					<div class="hamburger">
						<div id="menu_icon"></div>
					</div>
					<div class="menu">
						<div id="expand-bg"><div id="ease-in-menu">
							<!--<php include "menu.php"; ?>-->
						</div></div>
					</div>
				</div>

			</nav>
		</div>



<!--...................................................
	End header.php
.......................................................-->


<!--...................................................
	Begin main content...
.......................................................-->


		<div id = "container">
			<div id = "content_art">
				<table>
					<tr>
						<td id = "art_title_filler">
							<div id = "art_title">
								<p>Sarcastic Ad series<br>
								Oil, 18"x12"<br>
								2015<br><br></p>
								<h3><article>
									<input type="checkbox" id="read_more" role="button">
									<label for="read_more" onclick""><span>Show More</span><span>Show Less</span></label>
									<section>
										<p>
											<h3>As consumers, we're constantly surrounded by advertisements
											that feed us unreliable information and make us desire more than we need.
											This is a series of more truthful advertisements that comment
											on aspects of our food industry regarding our oppressive relationships with 
											non-human animals, ranging</h3>
									</section>
									<section>
											<h3>from the evident concept that a consumer choice 
											results in the death of an animal, to more obscure, lesser-known realities 
											like artificial insemination processes or the grinding up of male chicks
											in the milk and egg industry. By mimicking particular trademark brands
											and commercials, the series aims to convey the very own hush-hush 
											secrets of the industry that advertisements try to conceal
											in the first place.
											</h3>
										</p>
									</section>
								</article></h3>
							</div>
						</td>
						<td id = "horizontal_gallery">
							<img class="img_hover" src="oil/veganads1.jpg" height="100%" border="0" />
							<img class="img_hover" src="oil/veganads2.jpg" height="100%" border="0" />
							<img class="img_hover" src="oil/veganads3.jpg" height="100%" border="0" />
						</td>
					</tr>
				</table>
			</div>
		</div>

<!--...................................................
	End main content
.......................................................-->


<!--...................................................
	Begin footer
	<php include "footer.php"; ?>

		^ delete script for menu navigation icon?
.......................................................-->

<!-- for menu navigation icon; TESTING - include in separate js file tomorrow -->

		<script>


			// CodePen from http://codepen.io/CreativeJuiz/pen/oCBxz

			var theToggle = document.getElementById('toggle');

			// based on Todd Motto functions
			// http://toddmotto.com/labs/reusable-js/

			// hasClass
			function hasClass(elem, className) {
				return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
			}
			// addClass
			function addClass(elem, className) {
			    if (!hasClass(elem, className)) {
			    	elem.className += ' ' + className;
			    }
			}
			// removeClass
			function removeClass(elem, className) {
				var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
				if (hasClass(elem, className)) {
			        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
			            newClass = newClass.replace(' ' + className + ' ', ' ');
			        }
			        elem.className = newClass.replace(/^\s+|\s+$/g, '');
			    }
			}
			// toggleClass
			function toggleClass(elem, className) {
				var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
			    if (hasClass(elem, className)) {
			        while (newClass.indexOf(" " + className + " ") >= 0 ) {
			            newClass = newClass.replace( " " + className + " " , " " );
			        }
			        elem.className = newClass.replace(/^\s+|\s+$/g, '');
			    } else {
			        elem.className += ' ' + className;
			    }
			}

			theToggle.onclick = function() {
			   toggleClass(this, 'on');
			   return false;
			}



		// other one below

		(function () {
		
		    // Create mobile element
		    var mobile = document.createElement('div');
		    mobile.className = 'nav-mobile';
		    document.querySelector('.nav').appendChild(mobile);
		
		    // hasClass
		    function hasClass(elem, className) {
		        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		    }
		
		    // toggleClass
		    function toggleClass(elem, className) {
		        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
		        if (hasClass(elem, className)) {
		            while (newClass.indexOf(' ' + className + ' ') >= 0) {
		                newClass = newClass.replace(' ' + className + ' ', ' ');
		            }
		            elem.className = newClass.replace(/^\s+|\s+$/g, '');
		        } else {
		            elem.className += ' ' + className;
		        }
		    }
		
		    // Mobile nav function
		    var mobileNav = document.querySelector('.nav-mobile');
		    var toggle = document.querySelector('.nav-list');
		    mobileNav.onclick = function () {
		        toggleClass(this, 'nav-mobile-open');
		        toggleClass(toggle, 'nav-active');
		    };
		})();



		</script>

<!-- end menu nav icon testing -->



	<footer>
		<div id = "footer">
			<div id ="footerfill">
				<div id = "copyright">
					Website Design
					<br>by Florence Wong &copy; 2016
				</div>
			</div>
		</div>
	</footer>

</body>
</html>