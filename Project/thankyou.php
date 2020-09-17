<?php

include_once 'config.php';
$first=$_GET['c_fname'];
$last=$_GET['c_lname'];
$email=$_GET['c_email'];
$subject=$_GET['c_subject'];
$msg=$_GET['c_message'];
$unread='unread';

$s="SELECT * FROM contact WHERE email='$email'";//equal to each other
$result=mysqli_query($conn, $s);
if (mysqli_num_rows(mysqli_query($conn, $s))==1)
{
    $sql2="INSERT INTO messages(email,message,subject,status) VALUES ('$email','$msg','$subject','$unread')";
    mysqli_query($conn, $sql2);
}
else{
    $sql="INSERT INTO contact(firstname,lastname,email) VALUES ('$first','$last','$email')";
    $sql2="INSERT INTO messages(email,message,subject,status) VALUES ('$email','$msg','$subject','$unread')";
    mysqli_query($conn, $sql);
    mysqli_query($conn,$sql2);
}

$headers = "From: projectmailsee5@gmail.com\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
$to = $email;
$subject = 'Hello From Team SEE5';
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>THANK YOU</p>
<img src='https://rochestertalon.com/wp-content/uploads/2014/05/THANK-YOU-009-1.jpg' alt=see5-sama >
</body>
</html>
";
//send mail
if (mail($to, $subject, $message, $headers));
//send mail
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SEE5 &mdash; Thank You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
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
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">

        <div class="d-flex align-items-center justify-content-between">

		<!-- Name Of Website -->
          <div class="logo">
            <div class="site-logo">
              <a href="indexx.php" class="js-logo-clone">SEE5 WEBSITE</a>
            </div>
          </div>
		<!-- Name Of Website -->

		<!-- Home About etc... -->
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="indexx.php">Home</a></li>
                <li class="has-children">
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->


      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">Your message has been received </p>
            <p><a href="indexx.php" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to Home</a></p>
          </div>
        </div>
      </div>
    </div>


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
                <li><a href="items.php">Items</a></li>
                <li><a href="search.php">Search</a></li>
				<li><a href="addtool.php">Add item</a></li>
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
