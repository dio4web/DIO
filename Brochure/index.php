<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Danny Lusk">
		<meta name="description">
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<meta name="apple-touch-fullscreen" content="yes" />
		<title>Dive into the Ocean eBrochure</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">	
	</head>

	<body>

		<div class="signup">
			<a href="#connect-form">
				<img src="images/plainsub-sm.png" alt="Sign Up">
			</a>

		</div>

		<!--
		We position the images fixed and therefore need to place them outside of #skrollr-body.
		We will then use data-anchor-target to display the correct image matching the current section (.gap element).
	-->

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#intro + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 intro-bg"
				
				data-anchor-target="#intro + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>
			<!--the +/-80% translation can be adjusted to control the speed difference of the image-->
		</div>

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#appeal + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 appeal-bg"
				data-anchor-target="#appeal + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#mission + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 initiatives-bg"
				data-anchor-target="#mission + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#live + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 live-bg"
				data-anchor-target="#live + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#interactive + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 interactive-bg"
				data-anchor-target="#interactive + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div
			class="parallax-image-wrapper parallax-image-wrapper-100"
			data-anchor-target="#explore + .gap"
			data-bottom-top="transform:translate3d(0px, 200%, 0px)"
			data-top-bottom="transform:translate3d(0px, 0%, 0px)">

			<div
				class="parallax-image parallax-image-100 explore-bg"
				data-anchor-target="#explore + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div id="skrollr-body">

			<div class="header" id="intro"></div>

			<div class="gap gap-100 intro-bg">
				<div class="overlay">
					<div class="container-fluid logo">
						<h1><img src="images/diologo.png" alt="Dive into the Ocean" class="img-responsive center-block"></h1>

					</div><!-- container-fluid -->
					
					<div class="container-fluid bottom">
						<div class="row">
							<div class="col-sm-12 col-lg-6 col-lg-offset-3">
								<h2 class="brand-heading"><span class="emphasis"><span class="emphasis">Imagine</span> growing up near the ocean and never seeing it.</h2>

							</div><!-- col-sm-12 col-lg-6 col-lg-offset-3 -->

							

						</div><!-- row -->
						
						<img src="images/arrowdown.png" alt="Scroll down for more">

					</div><!-- container -->

				</div><!-- overlay -->

			</div><!-- gap gap-100 -->

			<section class="content appeal-container" id="appeal" data-menu-offset="-50">
				<div 
					class="container" 
					data--100-bottom-bottom="opacity: 0"
					data--200-bottom-bottom="opacity: 1">
					<div class="col-sm-12 col-lg-6 col-lg-offset-3">
						<h2 class="brand-heading"><span class="emphasis"><span class="emphasis">Imagine</span> being told your dreams are out of reach.</h2>

					</div><!-- col-sm-12 col-lg-6 col-lg-offset-3 -->

				</div><!-- container -->

			</section>

			<div class="gap gap-100 appeal-bg">
				<div class="overlay">
					<div class="container vcenter-parent fadeInBlockEarlyX" 
						data-bottom-center="opacity: 0"
						data-bottom-bottom="opacity: 1">
						<div class="vcenter">
							<h2 class="appeal-heading emphasis">Now imagine being given the chance to Dive In.</h2>

							<p>At Dive into the Ocean we bring the ocean to the classroom by connecting students with real ocean scientists. Engaging students in activities of <span class="strong">scientific exploration and discovery</span> shows them that the ocean sciences are within reach.</p>
						
						</div><!-- vcenter -->
						
					</div><!-- container vcenter-parent -->

				</div><!-- overlay -->

			</div><!-- gap gap-100 appeal-bg -->

			<section class="content mission-container" id="mission" data-menu-offset="-50">
				<div class="container">
					<p class="appeal-basis" 
					data-bottom-center="opacity: 0"
					data--200-bottom-bottom="opacity: 1">
					There are <span class="strong">brilliant students</span> with a passion for science but who cannot envision themselves as scientists.</p>

					<p class="quote"
					data-bottom-center="opacity: 0"
					data--200-bottom-bottom="opacity: 1">
					Our goal is to provide students access to the ocean sciences no matter where they live, regardless of their socio-economic status. We believe that knowledge, passion, and curiosity are the most powerful tools we can provide our next generation in order to preserve our planet's greatest resource, the Ocean.</p>

					<p class="signature emphasis">- Leslie Smith, Founder, Executive Director</p>

				</div><!-- container -->

			</section>

			<div class="gap gap-100 initiatives-bg">
				<div class="overlay">
					<div class="container vcenter-parent">
						<div class="vcenter">
							<h2 class="initiatives-heading fadeInBlockX"
								data--100-bottom-center="opacity: 0"
								data--200-bottom-bottom="opacity: 1">Dive into the Ocean consists of <span class="strong">three immersive initiatives</span> that bring the ocean to your classroom.</h2>

							<div class="row">
								<div class="col-xs-4 fadeInBlockX"
									data--25-bottom-center="opacity: 0"
									data--75-bottom-bottom="opacity: 1">
									<a href="#live">
										<span class="fa-stack fa-3x">
									  <i class="fa fa-circle-thin fa-stack-2x"></i>
									  <i class="fa fa-flask fa-stack-1x"></i>
										</span>
										<h2 class="icon-heading coral">LIVE!<h2>
									</a>

								</div><!-- col-xs-4 -->

								<div class="col-xs-4 fadeInBlock2X"
									data--100-bottom-center="opacity: 0"
									data--150-bottom-bottom="opacity: 1">
									<a href="#interactive">
										<span class="fa-stack fa-3x">
										  <i class="fa fa-circle-thin fa-stack-2x"></i>
										  <i class="fa fa-cube fa-stack-1x"></i>
										</span>
										<h2 class="icon-heading green">INTERACTIVE!</h2>
									</a>
									
								</div><!-- col-xs-4 -->

								<div class="col-xs-4 fadeInBlock3X"
									data--175-bottom-center="opacity: 0"
									data--250-bottom-bottom="opacity: 1">
									<a href="#explore">
										<span class="fa-stack fa-3x">
										  <i class="fa fa-circle-thin fa-stack-2x"></i>
										  <i class="fa fa-ship fa-stack-1x"></i>
										</span>
										<h2 class="icon-heading purple">EXPLORE!</h2>
									</a>
									
								</div><!-- col-xs-4 -->

							</div><!-- row -->

						</div><!-- vcenter -->

					</div><!-- container vcenter-parent -->

				</div><!-- overlay -->

			</div>

			<div id="live"></div>

			<div class="gap gap-100 live-bg">
				<div class="overlay-or">
					<div class="container vcenter-parent fadeInBlockEarlyX"
						data-bottom-center="opacity: 0"
						data-bottom-bottom="opacity: 1">
						<div class="vcenter">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-flask fa-stack-1x"></i>
							</span>

							<div class="col-xs-12">
								<h2 class="initiative-heading">Dive into the Ocean <span class="uppercase emphasis strong coral shadow">Live!</span></h2>
							
							</div><!-- col-xs-12 -->

							<p>Dr. Leslie and the Dive into the Ocean team will bring the ocean to your classroom with their fun, entertaining, hands-on, inquiry-based programs using real oceanographic data. Students will <span class="emphasis">dive</span> from the ocean surface to the deepest trenches. Discover creatures so small they can only be seen with a microscope and creatures so big they cover a basketball court!</p>

						</div><!-- vcenter -->

					</div><!-- container vcenter-parent -->

				</div><!-- overlay-or -->

			</div><!-- gap gap-100 live-bg -->

			<div id="interactive"></div>

			<div class="gap gap-100 interactive-bg">
				<div class="overlay-gr">
					<div class="container vcenter-parent fadeInBlockEarlyX"
						data-bottom-center="opacity: 0"
						data-bottom-bottom="opacity: 1">
						<div class="vcenter">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-cube fa-stack-1x"></i>
							</span>

							<div class="col-xs-12">
								<h2 class="initiative-heading">Dive into the Ocean <span class="uppercase emphasis strong green shadow">Interactive!</span></h2>
							
							</div><!-- col-xs-12 -->

							<p>Free, online, interactive video games and web-based activities allow students be oceanographers.  Dive into the Ocean has teamed up with Scripps Institution of Oceanography Games Group to bring students state-of-the-art virtual oceanographic experiences.  Students will &quot;dive&quot; from the sea surface to the deep ocean, exploring the marine environment and ocean technology along the way.</p>

						</div><!-- vcenter -->

					</div><!-- container vcenter-parent -->

				</div><!-- overlay-gr -->

			</div><!-- gap gap-100 interactive-bg -->

			<div id="explore"></div>

			<div class="gap gap-100 explore-bg">
				<div class="overlay-pu">
					<div class="container vcenter-parent fadeInBlockEarlyX"
						data-bottom-center="opacity: 0"
						data-bottom-bottom="opacity: 1">
						<div class="vcenter">
							<span class="fa-stack fa-3x">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-ship fa-stack-1x"></i>
							</span>

							<div class="col-xs-12">
								<h2 class="initiative-heading">Dive into the Ocean <span class="uppercase emphasis strong purple shadow">Explore!</span></h2>
							
							</div><!-- col-xs-12 -->

							<p>Set sail with self-guided exploration activities produced by Dive into the Ocean and housed at museums and nature centers. Move mountains with the Augmented Reality Sandbox, or use real ocean tools to solve the mysterious origins of a water sample.</p>

						</div><!-- vcenter -->

					</div><!-- container vcenter-parent fadeInBlockEarly -->

				</div><!-- overlay-pu -->

			</div><!-- gap gap-100 explore-bg -->

			<section id="connect-form">
				<h2 class="form-heading uppercase">Stay in Touch</h2>

				<div class="container">
					<form class="connect" method="post" action="connect.php">
						<div class="form-group">
							<input type="text" class="form-control input-lg" name="Name" placeholder="Name" required>
						</div>

						<div class="form-group">
							<input type="email" class="form-control input-lg" name="Email" placeholder="Email" required>
						</div>

						<p class="text-left">I&apos;m interested in...</p>

						<div class="row checkboxes">
							<div class="col-xs-6 col-xs-offset-3 text-left">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="more-info" value="Yes">
										More information
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="newsletter" value="Yes">
										Monthly newsletter
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="booking" value="Yes">
										Booking a show
									</label>
								</div>							
							</div><!-- row -->
						</div><!-- col-md-6 col-md-offset-3 -->

						<input class="btn btn-default btn-lg uppercase" type="submit" value="Submit">

					</form>

				</div><!-- container -->

			</section>

		</div>

		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/skrollr.min.js"></script>
		<script src="js/skrollr.menu.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    window.onload = function() {
    	var s = skrollr.init({
    		forceHeight: false,
    		smoothScrolling: false
    	});

    	skrollr.menu.init(s, {
    		animate: true,
    		easing: 'swing',
    		duration: function(currentTop, targetTop) {
    			return Math.abs(currentTop - targetTop) * 0.8;
    		},
    		updateUrl: false
    	});
    };
    </script>

  </body>

</html>