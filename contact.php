<?php include "header.php";?>

		<div id = "container">
			<div id = "content">
				<div id = "parallax_portrait">
				</div>

				<div class="main-text">
					<!--maybe have a circular icon here? -->
					<h2>Have an idea for a project?</h2>
						<p>I'm happy to work with fellow artists, vegans,
							activists, humans, organizations and small businesses,
							especially those promoting:
							<ul>
								<li>social and environmental justice</li>
								<li>LGBTQIA+ and racial equality</li>
								<li>help for international students and immigrants</li>
								<li>plant-based advocacy</li>
								<li>mental health and well-being</li>
								<li>artwork</li>
								<li>vegan/food blogs</li>
								<li>community-based projects</li>
								<li>nice things, or spreading kindness in general</li>
							</ul>
							I wear many hats, and am
							available to help with
							creative requests (small or large!)
							with design, web development or arts. This can include:
							<ul>
								<li>Creating illustrations for articles, posts, online content</li>
								<li>Getting feedback on website or app interfaces</li>
								<li>Creating digital painting thank-you postcards</li>
							</ul>

							Here are a few examples of projects I've worked on:
							<ul>
								<li>TABAH: art for album jackets</li>
								<li>Compassionate Action for Animals: event posters</li>
							</ul>
							Shoot me a <a href="mailto:hello@flowong.com">message</a>
							with any ideas, comments, or questions!</p>
					<p>
					</p>
				</div>

				<div id = "contact-filler">
					<div class="main-text">
						<h2>Let's Chat!</h2>
						<p>I'm always up for meeting new people — I'd love to hear your ideas, chat or get coffee (in Minneapolis)!</p>
						<p>Shoot me an <a href="mailto:hello@flowong.com">email</a> at hello@flowong.com, or fill out the form below:</p>


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
											<label for="comments">What can I do for you?</label>
										</td>
										<td valign="top">
											<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
										</td>
									</tr>

									<!--<tr>
										<td valign="top">
											<label for="budget">What's your budget?</label>
										</td>
										<td valign="top">
											<input type="text" name="budget" maxlength="1000" size="30">
										</td>
									</tr>-->

									<tr>
										<td colspan="2" style="text-align:center">
											<input type="submit" value="Submit">
										</td>
									</tr>

								</table>
							</form>
						</div>

						<p>Otherwise, visit me on any of these social media sites.</p>
						<p><br><br>
							<a class = "contact_icon" href="mailto:florencewong1020@gmail.com"><i class="fa fa-envelope-o"></i></a>
							<a class = "contact_icon" href="https://github.com/theflowong"><i class="fa fa-github"></i></a>
							<a class = "contact_icon" href="https://www.linkedin.com/profile/view?id=263914176&trk=nav_responsive_tab_profile_pic"><i class="fa fa-linkedin-square"></i></a>
							<a class = "contact_icon" href="https://dribbble.com/flo_wong"><i class="fa fa-dribbble"></i></a>
							<a class = "contact_icon" href="https://twitter.com/flo_rence_wong"><i class="fa fa-twitter"></i></a>
							<a class = "contact_icon" href="https://www.pinterest.com/florencewong102/"><i class="fa fa-pinterest"></i></a>
							<a class = "contact_icon" href="https://www.facebook.com/florencewong1020"><i class="fa fa-facebook-square"></i></a>
						</p>
					</div>
				</div>

			</div>
		</div>

<?php include "footer.php"; ?>
