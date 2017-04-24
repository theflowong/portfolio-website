<?php include "header.php";?>

		<div id = "container">
			<div id = "content">
				<div class="main-text">
					<!--maybe have a circular icon here? -->
					<h2>Need some art?</h2>
						<p>I'm happy to work with fellow artists, vegans,
							activists, humans, organizations and small businesses,
							especially those promoting:
							<ul>
								<li>social and environmental justice</li>
								<li>LGBTQIA+ and racial equality</li>
								<li>international student and immigrant support</li>
								<li>plant-based advocacy</li>
								<li>mental health and well-being</li>
								<li>artwork</li>
								<li>vegan/food blogs</li>
								<li>community-based projects</li>
								<li><a class="random">weird</a> fun <a class="random2">stuff</a></li>
							</ul>

							Here are a few projects I've worked on recently:
							<ul>
								<li><a href="tabah.php">Album jacket art</a> (with watercolors/pencils for TABAH)</li>
								<li><a href="chili-poster.php">Digital posters & infographics</a> (for Compassionate Action for Animals)</li>
								<li><a href="design.php">Digitally painted icon/trademark</a> (for Robert Lord)</li>
							</ul>

							I wear many hats, and can work on
							creative requests
							with design, web development or art.
							My specialty is in 2d graphics
							(digital illustration/painting, watercolor, animated code, oil painting).
							This can include:
							<ul>
								<li>Commissed personal work (i.e., pet portraits, thank-you postcards, birthday cards)</li>
								<li>Design/layout for event posters and infographics</li>
								<li>Artwork for walls or shows</li>
								<li>Creating illustrations for articles, posts, online content</li>
							</ul>

							Shoot me a <a href="mailto:hello@flowong.com">message</a>
							with any questions you have, or fill out the form below with your project request and medium<span class="whoa">.<span class="secret">Do it! I don't bite.</span><span></p>
					<p>
					</p>
				</div>

				<div id = "contact-filler">
					<div class="main-text">
						<h2>Project Request</h2>
						<p>Fill out the form below,
							and I'll respond as soon as I can.</p>

						<p>I'm currently engaged in several projects
							so cannot guarantee full commitment,
							but will let you know what is in the realm of possibility.</p>


						<!-- Contact Form : from tutorial http://www.htmldog.com/techniques/formtoemail/ -->
						<div class="contact-form__container">
							<form name="contactform" method="post" action="send_form_email.php">
								<table class="contact-form__form">

									<tr>
										<td valign="top">
											<label for="name">Your Name *</label>
										</td>
										<td valign="top">
											<input type="text" name="name" maxlength="50" size="30">
										</td>
									</tr>

									<tr>
										<td valign="top">
											<label for="email">Your Email *</label>
										</td>
										<td valign="top">
											<input type="text" name="email" maxlength="80" size="30">
										</td>
									</tr>

									<tr>
										<td valign="top">
											<label for="comments">What can I do for you? <br>(Project description, with desired medium, timeline and other details)</label>
										</td>
										<td valign="top">
											<textarea  name="comments" maxlength="1000" cols="28" rows="10"></textarea>
										</td>
									</tr>

									<tr>
										<td valign="top">
											<label for="budget">What's your budget?</label>
										</td>
										<td valign="top">
											<input type="text" name="budget" maxlength="1000" size="30">
										</td>
									</tr>

									<tr>
										<td colspan="2" style="text-align:center">
											<input type="submit" value="Submit">
										</td>
									</tr>

								</table>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>

<?php include "footer.php"; ?>
