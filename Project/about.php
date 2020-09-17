<!DOCTYPE html>
<html lang="en">

<head>
<title>SEE5 &mdash; ABOUT US</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link
	href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i"
	rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">


<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/style.css">


</head>

<body>

	<div class="site-wrap">
		<div class="site-navbar py-2">
			<div class="search-wrap">
				<div class="container">
					<a href="#" class="search-close js-search-close"><span
						class="icon-close2"></span> </a>
					<form action="#" method="post">
						<input type="text" class="form-control"
							placeholder="Search keyword and hit enter...">
					</form>
				</div>
			</div>

			<div class="container">
				<div class="d-flex align-items-center justify-content-between">

					<div class="logo">
						<div class="site-logo">
							<a href="indexx.php" class="js-logo-clone">SEE5 WEBSITE</a>
						</div>
					</div>

					<!-- Home About etc... -->
					          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="indexx.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
					<!-- Home About etc... -->

					<!-- LOGIN -->
					<div class="icons">
						<li class="main-nav d-none d-lg-block"></li>
					</div>
					<!-- LOGIN -->

				</div>
			</div>

			<div class="bg-light py-3">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-0">
							<a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
								class="text-black">About</strong>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-blocks-cover inner-page"
			style="background-image: url('images/about_us.png');">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto align-self-center">
						<div class=" text-center">
							<h1>About Us</h1>
							<p>SEE5 TEAM</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- Videos  -->
		<div class="site-section bg-light custom-border-bottom"
			data-aos="fade">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<div class="block-16">
							<figure>
								<img src="IMG_0106.jpg" width="600" height="500" alt="Image placeholder"
									class="img-fluid rounded">
								<a href="https://www.youtube.com/watch?v=5yVNULH6uf4"
									class="play-button popup-vimeo"><span class="icon-play"></span>
								</a>
							</figure>
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div class="site-section-heading pt-3 mb-4">
							<h2 class="text-black">Where We Studied</h2>
						</div>
						<p>Al-Balqa' Applied University جامعة البلقاء التطبيقية <br>
						is a government-supported university located in Salt, Jordan, was founded in 1997, a distinctive state university in the field of Bachelor and associate degree Applied Education, at the capacity of more than 21,000 student distributed into 10,000 at the bachelor's degree program and 11,000 at the associate degree program.</p>
					</div>
				</div>
			</div>
		</div>
<!-- Videos  -->

		<div class="site-section bg-light custom-border-bottom"
			data-aos="fade">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 site-section-heading text-center pt-4">
						<h2>The Supervisor</h2>
					</div>
				</div>
				<div class="row justify-content-center mb-5" class="row">
				<?php

				include_once 'config.php';

				$sql = "SELECT * FROM `about` WHERE rank='supervisor'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					$result = $conn->query($sql);
					// foreach ($files as $file) {
					while(   $row = $result->fetch_assoc()){

						echo "	<div class='col-md-6 col-lg-6 mb-5'>";
						echo "	<div class='block-38 text-center'>";
						echo "	<div class='block-38-img'>";
						echo "	 <div class='block-38-header'>";
						echo "	<img src='images/about_us/$row[id].jpg' alt='$row[name]' class='mb-4'>";
						echo "	<h2 class='block-38-heading h4'>$row[name]</h2>";
						echo "	<p class='block-38-subheading'>$row[position]</p>";
						echo "	</div>";
						echo "	<div class='block-38-body'>";
						echo "	</div>";
						echo "	</div>";
						echo "	</div>";
						echo "	</div>";

					}
				}
				?>
				</div>
			</div>
		</div>

		<!-- The Team -->
		<div class="site-section bg-light custom-border-bottom"
			data-aos="fade">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-7 site-section-heading text-center pt-4">
						<h2>The Team</h2>
					</div>
				</div>
				<div class="row">


				<?php

				include_once 'config.php';

				$sql = "SELECT * FROM `about` WHERE rank='student'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					$result = $conn->query($sql);
					// foreach ($files as $file) {
					while(   $row = $result->fetch_assoc()){

						echo "	<div class='col-md-6 col-lg-6 mb-5'>";
						echo "	<div class='block-38 text-center'>";
						echo "	<div class='block-38-img'>";
						echo "	 <div class='block-38-header'>";
						echo "	<img src='images/about_us/$row[id].jpg' alt='$row[name]' class='mb-4'>";
						echo "	<h2 class='block-38-heading h4'>$row[name]</h2>";
						echo "	<p class='block-38-subheading'>$row[position]</p>";
						echo "	</div>";
						echo "	<div class='block-38-body'>";
						echo "	<p>$row[about]</p>" ;
						echo "	</div>";
						echo "	</div>";
						echo "	</div>";
						echo "	</div>";

					}
				}
				?>




				</div>
			</div>
		</div>
		<!-- The Team -->


<!-- pharma products+rated -->
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a  class="banner-1 h-100 d-flex" style="background-image: url('images/left.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>dental instruments</h2>

              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a  class="banner-1 h-100 d-flex" style="background-image: url('images/right.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>useful knowledge</h2>

              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- pharma products+rated -->

<!-- footer -->
    <footer class="site-footer">

      <!-- about,quick,contact+copyright -->
      <div class="container">

	    <!-- about+quick+contact -->
        <div class="row">

		<!-- about us -->
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>WE ARE THE SEE5 TEAM</p>
            </div>
          </div>
		  <!-- about us -->

		  <!-- Quick links -->
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li class="active"><a href="indexx.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <!-- Quick links -->

		  <!-- Contact info -->
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Irbid-huson</li>
                <li class="phone">+4 444 4444 444</li>
                <li class="email">projectmailsee5@gmail.com</li>
              </ul>
            </div>
          </div>
        <!-- Contact info -->

        </div>
		<!-- about+quick+contact -->

		<!-- copyright -->
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyright &copy;
               All rights reserved
            </p>
          </div>
        </div>
		<!-- copyright -->

      </div>
	  <!-- about,quick,contact+copyright -->
    </footer>
	<!-- footer -->
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>

	<script src="js/main.js"></script>

</body>

</html>
