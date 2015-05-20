<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Danny Lusk">
		<meta name="description">
		<title>Dive into the Ocean eBrochure</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css">	
	</head>

	<body>

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
				class="parallax-image parallax-image-100"
				style="background-image: url(images/ocean-title.jpg)"
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
				class="parallax-image parallax-image-100"
				style="background-image:url(images/appeal.png)"
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
				class="parallax-image parallax-image-100"
				style="background-image:url(images/initiatives.jpg)"
				data-anchor-target="#mission + .gap"
				data-bottom-top="transform: translate3d(0px, -80%, 0px);"
				data-top-bottom="transform: translate3d(0px, 80%, 0px);"
			></div>

		</div>

		<div id="skrollr-body">
				<div class="header" id="intro"></div>

				<div class="gap gap-100" style="background-image: url(images/ocean-title.jpg)">
					<div class="container-fluid logo">
						<h1><img src="images/diologo.png" alt="Dive into the Ocean" class="img-responsive center-block"></h1>

					</div><!-- container-fluid -->
					
					<div class="container-fluid bottom">
						<div class="row">
							<div class="col-sm-12 col-lg-6 col-lg-offset-3">
								<h2 class="brand-heading"><span class="emphasis">IMAGINE A CHILD</span> growing up just one hour from the ocean without ever actually seeing it.</h2>

							</div><!-- col-md-6 col-md-offset-3 -->

						</div><!-- row -->
						
						<a href="#mission"><img src="images/arrowdown.png" alt="Scroll down for more"></a>

					</div><!-- container -->

				</div><!-- gap gap-100 -->

				<section class="content appeal-container" id="appeal">
					<div class="container">
						<p>There are <span class="strong">brilliant students</span> with a passion for science but who cannot envision themselves as scientists: college seems out of reach, or their gender and skin color do not fit the stereotype.</p>

					</div><!-- container -->

				</section>

				<div class="gap gap-100" style="background-image:url(images/appeal.png);">
					<div class="overlay">
						<div class="container vcenter-parent">
							<div class="vcenter">
								<h2 class="appeal-heading">What can we do?</h2>

								<p class="emphasis">Bring the Ocean to them! Engaging students in activities of <span class="strong">scientific exploration and discovery</span> shows them that the ocean sciences are within reach.</p>
							
							</div><!-- vcenter -->
							
						</div><!-- container vcenter-parent -->

					</div><!-- overlay -->

				</div>

				<section class="content mission-container" id="mission">
					<div class="container">
						<p class="quote">Our goal is to provide students access to the ocean sciences no matter where they live, regardless of their socio-economic status. We believe that knowledge, passion, and curiosity are the most powerful tools we can provide our next generation in order to preserve our planet's greatest resource, the Ocean.</p>

						<p class="signature emphasis">- Leslie Smith, Founder, Executive Director</p>

					</div><!-- container -->

				</section>

				<div class="gap gap-100" style="background-image:url(images/initiatives.jpg);"></div>
				<div class="content" id="done">
					Images from <a href="http://placekitten.com/attribution.html">http://placekitten.com/</a>, thanks!
				</div>
			</div>

		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init({
    	forceHeight: false,
    	smoothScrolling: false
    });
    </script>

  </body>

</html>