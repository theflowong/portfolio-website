<?php include "header.php";?>

		<div id = "container">
			<div class="scroll-gallery_container xrow">

				<div class="scroll-gallery_text">

					<div class="title">
						<div class="title-main">
							Coding + Art
						</div>
						<div class="title-info">
							Processing<br>
							October 2016
						</div>
					</div>

					<div class="description">
						<article>

								<p>On a recent trip to my alma mater, I was inspired by the
									amount of life in the Arboretum, and decided to create
									an animated visualization of a breathing autumn landscape.
								</p>

								<p>This was made with <a href="http://processingjs.org/">
									Processing</a>, a language that combines coding
									with art. I used object-oriented programming to
									create animated mathematical functions resulting in a rhythm
									of colors and pulses for the trees, moon, and land.
								</p>

								<p>See my code
								for <a href="https://github.com/theflowong/trippy_trees">Breathing Trees</a>
								on Github!

								</p>
						<!--</section>-->
						</article>
					</div>
				</div>


				<div class="scroll-gallery_art">
					<ul>
							<li>
								<canvas class="processing-canvas" data-processing-sources="img/processing/trippy_trees_total.pde"></canvas>
							</li>
					</ul>
				</div>
			</div>
		</div>

<?php include "footer.php"; ?>
