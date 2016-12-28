<?php include "header.php";?>

	<!-- for editing and testing purposes;
		delete after final -->
	
	<!--<div id="header"> <!- Isotope javascript only for index page ->
		<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

		<script src="/resources/isotope-docs/isotope.pkgd.min.js"></script>
	</div>-->


	<div id = "container"> <!-- from original index -->
		<div id = "content">
			<div class="testing">
				<div class="portfolioFilter">
 
				    <a href="#" data-filter="*" class="current">All Categories</a>
				    <a href="#" data-filter=".people">People</a>
				    <a href="#" data-filter=".places">Places</a>
				    <a href="#" data-filter=".food">Food</a>
				    <a href="#" data-filter=".objects">Objects</a>
				 
				</div>
				 
				<div class="portfolioContainer">
				 
				    <div class="objects">
				        <img src="prints/musicians4_small.jpg" alt="image">
				    </div>
				 
				    <div class="people places">
				        <img src="work/workhouse.jpg" alt="image">
				    </div>    
				 
				    <div class="food">
				        <img src="digital-art/carletoncollege-penguin.jpg" alt="image">
				    </div>
				     
				    <div class="people places">
				        <img src="south_pacific/watercolor/watercolor9_small.jpg" alt="image">
				    </div>
				 
				    <div class="places objects">
				        <img src="work/workhouse.jpg" alt="image">
				    </div>
				 
				    <div class="people food objects">
				        <img src="south_pacific/watercolor/watercolor9_small.jpg" alt="image">
				    </div>
				 
				    <div class="food objects">
				        <img src="digital-art/carletoncollege-penguin.jpg" alt="image">
				    </div>    
				     
				    <div class="food">
				        <img src="south_pacific/watercolor/watercolor9_small.jpg" alt="image">
				    </div>    
				 
				</div> <!-- end div for portfolioContainer -->

			</div> <!-- end div for testing -->



		<!-- from original index -->
		<table id = "photo_grid">
			<!--Have image gallery here to link to other pages-->
			<!-- See: (example) http://www.heredesign.co.uk/all-projects/ 
			and (tutorial) http://geekgirllife.com/animate-text-over-images-on-hover-without-javascript/
			https://css-tricks.com/forums/topic/tumblr-how-to-show-caption-on-image-hover/-->
			<tr>
				<td>
					<ul>
						<li>
							<a href="metals.php">
								<figure class="fade" title="Animal Rings">
									<img src="metals/ring_animals.jpg" />
									<figcaption><span>Metal Rings</span></figcaption>
								</figure>
							</a>
						</li>
						
						<li>
							<a href="design.php">
								<figure class="fade" title="Logo Design & Typography">
									<img src="design/logo_orangemoon1.png" />
									<figcaption><span>Logo Design</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="ceramics.php">
								<figure class="fade" title="Functional Ceramics">
									<img src="ceramics/cup2.jpg" />
									<figcaption><span>Functional Ceramics</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="rolereversal.php">
								<figure class="fade" title="Role-Reversal Scenarios">
									<img src="comps/taxidermies.jpg" />
									<figcaption><span>Role-Reversal Scenarios</span></figcaption>
								</figure>
							</a>
						</li>
					
					</ul>
				</td>
			</tr>
			<tr>
				<td>
					<ul>
						<li>
							<a href="surrealist.php">
								<figure class="fade" title="Surrealist Paintings">
									<img src="oil/surrealist1_small.jpg" />
									<figcaption><span>Surrealist Paintings</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="figures.php">
								<figure class="fade" title="Portraits and Figures">
									<img src="south_pacific/people/people2_small.jpg" />
									<figcaption><span>Portraits & Figures<br>from the South Pacific</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="digital-art.php">
								<figure class="fade" title="Digital Art">
									<img src="digital-art/carletoncollege-penguin.jpg" />
									<figcaption><span>Digital Art</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="watercolor.php">
								<figure class="fade" title="Watercolor">
									<img src="south_pacific/watercolor/watercolor9_small.jpg" />
									<figcaption><span>Watercolors<br>from the South Pacific</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="pen.php">
								<figure class="fade" title="Pen and Ink">
									<img src="south_pacific/pen/penink8.jpg" />
									<figcaption><span>Pen and Ink<br>from the South Pacific</span></figcaption>
								</figure>
							</a>
						</li>
					</ul>
				</td>					
			</tr>
			<tr>
				<td>
					<ul>
						<li>
							<a href="workhouse.php">
								<figure class="fade" title="3D Modeling">
									<img src="work/workhouse.jpg" />
									<figcaption><span>3D Modeling</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="fate.php">
								<figure class="fade" title="Fate of an Animal">
									<img src="prints/fate2_small.jpg" />
									<figcaption><span>Fate of an Animal</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="breakfast.php">
								<figure class="fade" title="Ironic Breakfast">
									<img src="ceramics/breakfast.jpg" />
									<figcaption><span>Ironic Breakfast</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="ads.php">
								<figure class="fade" title="Honest Advertisements">
									<img src="oil/veganads1_small.jpg" />
									<figcaption><span>Honest Advertisements</span></figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="musicians.php">
								<figure class="fade" title="Musicians Gone Wild">
									<img src="prints/musicians4_small.jpg" />
									<figcaption><span>Musicians Gone Wild</span></figcaption>
								</figure>
							</a>
						</li>
					</ul>
				</td>
			</tr>
		</table>

	</div>

<?php include "footer.php"; ?>