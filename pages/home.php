<?php
/*
 *
 * This is a sample page you can copy and use as boilerplate for any new page.
 *
 */

// Page-specific preparatory code goes here.

?>

<?php require_once __DIR__ . '/../inc/above.php'; ?>





<!-- Sample Page Content -->
<section class="sample-page-section">
</section>
<!-- END: Sample Page Content -->


<!-- Landing Page Content -->
<section class="landing-page-section space-double-top-bottom">
	<div class="container">
		<div class="row space-one-bottom">
			<div class="columns small-12 space-min">
				<img class="block" src="media/logo-c4d-color.svg<?php echo $ver ?>">
			</div>
		</div>
		<div class="row">
			<div class="columns small-12 large-5 space-min inline-middle">
				<div class="h4 text-uppercase space-half-bottom">
					We turn your <span class="text-strike">Dreams into Reality.</span> Designs into Code.
				</div>
				<div class="h4 text-uppercase">
					On a crusade to break down the barriers between the two primary factions responsible for creating the interweb as we know it.
				</div>
			</div>
			<div class="columns small-12 large-7 space-min inline-middle">
				<div class="factions-img block" style="background-image: url('media/may-the-force.svg');"></div>
			</div>
		</div>
		<div class="row space-half-bottom">
			<div class="columns small-12 large-5 space-min">
				<div class="h6 strong">
					Think of us as that bi-lingual friend who understands exactly what you're saying and can help translate your design intent into "code" (the language of our machine overlords).
				</div>
			</div>
			<div class="columns small-12 large-7 space-min">
				<div class="h6">
					We have nearly a decade's worth of experience in designing as well as coding websites. A process we have refined over numerous projects that positively affects the quality of our products, the development time and as a result, the cost of our service.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="columns small-12 large-5">
				<div class="portfolio space-min">
					<div class="h4 text-uppercase space-quarter-bottom">List of our recent projects:</div>
					<ol class="text-neutral">
						<li class="label"><a class="h5 text-green" href="http://bandbinfra.com/" target="_blank">B&amp;B</a></li>
						<li class="label"><a class="h5 text-green" href="http://bagpacksuites.com/" target="_blank">Bagpack Suites</a></li>
						<li class="label"><a class="h5 text-green" href="https://bigbadbikes.com/store/" target="_blank">Big Bad Bikes</a></li>
						<li class="label"><a class="h5 text-green" href="http://canterburycastles.com/" target="_blank">Canterbury Castles</a></li>
						<li class="label"><a class="h5 text-green" href="http://dasta.in/" target="_blank">Dasta</a></li>
						<li class="label"><a class="h5 text-green" href="http://erisca.com/" target="_blank">Erisca</a></li>
						<li class="label"><a class="h5 text-green" href="https://immersionindia.com/" target="_blank">Immersion India</a></li>
						<li class="label"><a class="h5 text-green" href="https://klassikbuild.com/landmark/" target="_blank">Klassik Landmark</a></li>
						<li class="label"><a class="h5 text-green" href="https://lazaro.in/" target="_blank">Lazaro</a></li>
						<li class="label"><a class="h5 text-green" href="https://livingwalls.in/secret-soil/" target="_blank">LivingWalls - Secret Soil</a></li>
						<li class="label"><a class="h5 text-green" href="https://livingwalls.in/another-sky/" target="_blank">LivingWalls - Another Sky</a></li>
						<li class="label"><a class="h5 text-green" href="http://qwikspec.com/" target="_blank">Qwikspec</a></li>
						<li class="label"><a class="h5 text-green" href="http://vaswanigroup.com/" target="_blank">Vaswani Group</a></li>
						<li class="label"><a class="h5 text-green" href="http://www.vivekshankararchitects.com/" target="_blank">Vivek Shankar Architects</a></li>
						<li class="label"><a class="h5 text-green" href="http://lawns.zotra.in/" target="_blank">Zotra - Lawns</a></li>
					</ol>
				</div>
			</div>
			<div class="columns small-12 large-7">
				<div class="benefits space-half-bottom space-min">
					<div class="h4 text-uppercase space-quarter-bottom">By working with us you get:</div>
					<ol class="text-neutral">
						<li class="label"><strong class="h5 text-dark">Access to our “Designing for Code: Handbook”</strong> <br><div class="h6">This document contains our tried and tested design processes along with best practices and explanations for a non-technical designer to understand the nuances of designing for the modern browser</div></li>
						<li class="label"><strong class="h5 text-dark">Free Design Audits as part of the Build</strong> <br><div class="h6">This is the process where we sit with you during the different stages of design and help you navigate the available modern-browser technologies that you can leverage for your design</div></li>
						<li class="label"><strong class="h5 text-dark">A Robust Codebase</strong> <br><div class="h6">Everything we build utilises our proprietary framework that is constantly being improved on and every new project inherits the benefits of all past projects</div></li>
						<li class="label"><strong class="h5 text-dark">Domain and Hosting Insight</strong> <br><div class="h6">Don’t bother yourself with the black hole of Domain/Hosting providers and plans — <strong>we got this!</strong></div></li>
					</ol>
				</div>
				<div class="action space-half-bottom">
					<div class="h4 text-uppercase space-min">If you'd like to work with us, get in touch:</div>
					<form class="js_contact_form">
						<div class="row ">
							<div class="columns small-12 medium-6 space-min">
								<label class="block name">
									<span class="visuallyhidden">Name</span>
									<input class="block p" type="text" placeholder="Full Name" name="name">
								</label>
							</div>
							<div class="columns small-12 medium-6 space-min">
								<label class="block phone">
									<span class="visuallyhidden">Phone</span>
									<input class="block p" type="text" placeholder="Mobile Number" name="phone-number">
								</label>
							</div>
						</div>
						<div class="row ">
							<div class="columns small-12 medium-6 space-min">
								<label class="block email">
									<span class="visuallyhidden">Email</span>
									<input class="block p" type="email" placeholder="Email ID" name="email">
								</label>
							</div>
							<div class="columns small-12 medium-6 space-min">
								<label class="block submit">
									<span class="visuallyhidden">Submit</span>
									<button class="button block fill-blue js_form_submit" type="submit">Request A Call Back</button>
								</label>
							</div>
						</div>
					</form>
				</div>
				<div class="contact space-min">
					<div class="h4">Or, talk to Mario Directly : <a class="strong text-green" href="tel:+919986882698">+91-99868-82698</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Landing Page Content -->





<?php require_once __DIR__ . '/../inc/below.php'; ?>
