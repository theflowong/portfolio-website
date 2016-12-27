<?php include "header.php";?>

		<div id = "container">
			<div class="scroll-gallery_container xrow">

				<div class="scroll-gallery_text">

					<div class="title">
						<div class="title-main">
							Digital Art
						</div>
						<div class="title-info">
							ProCreate<br>
							2016
						</div>
					</div>

					<div class="description">
						<article>
							<p>
								<strong><em>**For these animations to work, please use Safari!**</em></strong>
							</p>
								<p>I am currently trying to learn <a href="http://processingjs.org/">
									Processing</a>, a language that combines coding
									with art.
								</p>

								<p>I visited my alma mater recently and was inspired by the
									amount of life in the Arboretum, so decided to create an
									animated visualization of trees and a landscape that seemed
									like it was breathing, hence the name "Trees on Acid."
								</p>

								<p>See my code
								for <a href="https://github.com/theflowong/trippy_trees">Trees on Acid</a>
								on Github!

								</p>
						<!--</section>-->
						</article>
					</div>
				</div>


				<div class="scroll-gallery_art">
					<ul>
							<li>
								<script type="text/javascript" src="https://raw.githubusercontent.com/processing-js/processing-js/v1.4.8/processing.js"></script>
								<canvas class="processing-canvas" data-processing-sources="img/processing/trippy_trees_total.pde" style="border: 1px solid black;"/></canvas>
							</li>
							<li>
								<canvas class="processing-canvas" data-processing-sources="img/processing/game.pde" style="border: 1px solid black;"/></canvas>
							</li>
					</ul>
				</div>
			</div>
		</div>

<?php include "footer.php"; ?>
