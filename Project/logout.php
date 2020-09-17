<?php
session_start();
?>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
window.history.forward();

</script>
  <title>SEE5 &mdash; LOGGED OUT</title>
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
                <li><a href="items.php">items</a></li>
				<li><a href="search.php">search</a></li>
				<li></li>
              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->
<!-- LOGIN -->
          <div class="icons">
            <li class="main-nav d-none d-lg-block" >
			<a href="login/login.php">LOGIN</a></li>
          </div>
		<!-- LOGIN -->
		
      </div>
	  
	  
    </div>
		  	<div class="bg-light py-3">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-0">
							<a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
								class="text-black">Logout</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Logged Out</h2>           
            <p><a href="indexx.php" class="btn btn-md height-auto px-4 py-3 btn-primary">Home</a></p>
          </div>
        </div>
      </div>
    </div>
	


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  

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
		
</body>

