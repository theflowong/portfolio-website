<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "style.css" />
		<title>Florence Wong</title>
		<!--shortcut icon; should make new one-->
		<link rel = "shortcut icon" href = "flo.ico" />
		<!--fonts-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
				var element = document.getElementById("blueberrypb");
				element.className = element.className + "selected";
			</script>
		</div>
		<div id = "container">
			<div id = "content">
				<div id = "parallax_portrait">
				</div>
				<div id = "blog_text">	
					<h2>The Easiest, Greatest, Creamiest Two-Ingredient Breakfast Dessert You'll Ever Taste</h2><br>
					<!--post a pic here -->
					<p>
						I'm not sure where or how I got this idea.<a onclick='help_click(help1, "Footnote 1")'>*</a>
						<div id="help1">idea</div> <!-- empty div tag to insert additional text-->
						<script type="text/javascript">
							function help_click(div, txt) {
								if (div.innerHTML == "") div.innerHTML = "<h3>*\
									Maybe it was in the dining halls,\
									where I grabbed a bunch of things in my bowl\
									of oatmeal during breakfast -\
									including blueberry compote and peanut butter, \
									and they just somehow mixed together. \
									And so I tried it at Farm, \
									where we had a bulk bag of frozen bluberries, \
									and bulk peanut butter. A perfect situation. \
									Either way, it's brilliant.</h3>"; else div.innerHTML = ""; }
						</script>
					</p>
					<p>
						I call it "blueberry peanut butter yogurty texture."
						That's the way I usually describe it. Maybe that's why
						most of my friends are super skeptical. Which is why I'm
						making this post. Rid the skepticism, and bring on
						the admiration. It's incredible!
					</p>
					<p>
						Anyhow, the way someone perceives something is greatly
						influenced by its name. This is a well-known fact,
						known from years of studies (aka my experience).
						So I'll give it a "proper"-sounding name:</p>
						<p><strong>Blueberry Peanut Parfait</strong></p>
						<p>Does that sound better? I bet it does. Actually,
						I don't even know what a parfait is. But it sounds
						great.
					</p>
					<!--post an obnoxious pic here-->
					<br>
					<br>
					<p>
						Here are some obnoxious pics of the Blueberry Peanut Parfait mixture.
						TWO ingredients. TWO minutes. No blender necessary (because seriously,
						who can afford a blender?!
						<em>Except</em>
						when it's free.* I found one that
						was going to be thrown away just a few weeks ago.
						(Dumpsters are great, everyone - check out some fellow Carls'
						<a href="http://wastecarls.blogspot.com/2015/05/7th-weekend-saturday.html">blog</a>
						about dumpsters).</p>
					<p>
						Anyhow, am I getting off-topic? I tend to do that; that's why 
						you see so many footnotes. I'm probably losing some readers.
						Fine, skim through. I don't care. Your loss.
					</p>
					<p>
						This <strong>Blueberry Peanut Parfait</strong>
						is delicious, easy, and simple.
						I'm totally an advertisement right now.
					</p>
					<!--post a pic here, or have some sort of break-->
					<br>
					<br>
					<p><h2>Recipe: Blueberry Peanut Parfait</h2></p>
					<p>
						<h3>Ingredients</h3>
						<ul>
							<li>Frozen blueberries<a onclick='help_click(help2, "Footnote 2")'>*</a>
								<div id="help2"></div>
								<script type="text/javascript">
									function help_click(div, txt) {
										if (div.innerHTML == "") div.innerHTML = "<h3>*I like using frozen organic blueberries. This sounds\
						very privileged - and I really am quite privileged, I think,\
						for a number of reasons,\
						but more on that later, I have many thoughts, which is why\
						this comment is becoming too long -\
						but I've tried two brands: organic and regular.\
						The organic one has much smaller blueberries, which\
						makes the whole parfait juicier and taste a ton better.\
						Maybe it's just the size.\
						Anyway, they were both around the same price, and I recommend\
						using <a href='http://www.wymans.com/product/blueberries/wild-blueberries'>\
						Wyman's of Maine: Fresh Frozen Wild Blueberries.</a>\
						Ooh, product placement. No, I'm not paid by them.\
						They have no clue who in the world I am (unfortunately).\
						Love you too. I can handle being rejected.</h3>"; else div.innerHTML = ""; }
								</script>
							</li>
							<li>Peanut butter*</li>
							<li>Optional toppings: banana, vanilla extract, cinnamon, nuts, etc.</li>
						</ul>
						That's it! Easy peasy.

						<h3>Directions</h3>
						<ol>
							<li>Pour a handful of <strong>frozen blueberries</strong> and 1-3 spoonfuls
								of <strong>peanut butter</strong> in an empty bowl.</li>
							<li><strong>Microwave</strong> it for 30 seconds, or until the
								blueberries are kind of room temperature or warm, and are
								able to be mashed into a juicey substance.</li>
							<li><strong>Mix and mash</strong>!! Woohoo!</li>
							<li>Add some more frozen blueberries to the parfait!
								This will make your parfait juicier, but also cool down
								the parfait into a nice refreshing chilled temperature.</li>
							<li>Adjust the ratio:
								<ul>
									<li>If you want the parfait to be <strong>creamier</strong>,
										add more peanut butter.</li>
									<li>If you want it to be <strong>juicier</strong>,
										add more frozen blueberries! </li>
									<li>If it's getting difficult to mix,
									microwave it for a bit. If it's too warm, add more frozen
									blueberries.</li>
								</ul>
							</li>
							<li>Lastly... toppings. Add whatever you want.
								<ul>
									<li>Like <strong>walnuts</strong>? Go for that crunchy texture.</li>
									<li><strong>Bananas</strong>? It'll expand the parfait and make it more satisfying.
										(Unless you're not a banana person, which I won't ever
										understand.)</li>
									<li><strong>Coconut cream</strong>? Great idea!</li>
									<li>Others are: vanilla extract, cinnamon, raisins, cacao
									(recommended to balance with something sweeter,
									as cacao is naturally bitter).</li>
								</ul>
							</li>
						</ol>
					</p>
					<!--another pic here-->
					<p>There it is! Enjoy.</p>
					<p>*And except computer scientists. (CS-ists are
						some of the most awesome people I know. CS demands attention to detail
						in understanding coding language syntax, but also requires big-picture
						planning and thinking as well.)
					</p>
					<p>**You can also use other nut butters, but I prefer peanut butter,
						as it is the creamiest and sweetest I've tasted. I've tried using
						almond butter, which was alright,
						but wasn't as revolutionary as the Blueberry Peanut Parfait,
						but I haven't tried
						it with others.
					</p>
					<p>*I like using frozen organic blueberries. This sounds\
						very privileged - and I really am quite privileged, I think,\
						for a number of reasons,\
						but more on that later, I have many thoughts, which is why\
						this comment is becoming too long -\
						but I've tried two brands: organic and regular.\
						The organic one has much smaller blueberries, which\
						makes the whole parfait juicier and taste a ton better.\
						Maybe it's just the size.\
						Anyway, they were both around the same price, and I recommend\
						using <a href="http://www.wymans.com/product/blueberries/wild-blueberries">\
						Wyman's of Maine: Fresh Frozen Wild Blueberries.</a>\
						Ooh, product placement. No, I'm not paid by them.\
						They have no clue who in the world I am (unfortunately).\
						Love you too. I can handle being rejected.
					</p>
					<p>
						<br>
						<br>
						<!-- begin htmlcommentbox.com -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(""+window.location).replace(/'/g,"%27") || hcb_user.PAGE, h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end htmlcommentbox.com -->
					</p>
				</div>
				<div id = "contact">
					<h2>Contact Flo</h2>
					<p>Send me a message!</p>
					<p><br><br>
						<a class = "contact_icon" href="mailto:wongf@carleton.edu"><i class="fa fa-google-plus-square"></i></a>
						<a class = "contact_icon" href="https://www.pinterest.com/florencewong102/"><i class="fa fa-pinterest"></i></a>
						<a class = "contact_icon" href="https://www.linkedin.com/profile/view?id=263914176&trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin-square"></i></a>
						<a class = "contact_icon" href="https://www.facebook.com/florencewong1020"><i class="fa fa-facebook-square"></i></a>

					</p>
				</div>

			</div>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>