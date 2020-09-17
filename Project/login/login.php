<?php
session_start();

//connect to database
$server='localhost';
$usernamedb='root';
$passworddb='';
$db_name='tools';
$Check="";

$conn=mysqli_connect($server,$usernamedb,$passworddb,$db_name);
mysqli_set_charset( $conn, 'utf8');
//connect to database

if(isset($_POST['username'])){ //isset -> if is not null || $_GET[username] -> username from URL

if($_SERVER['REQUEST_METHOD']=='POST') 
	{
    $username= $_POST['username'];//$_GET[username] -> from URL
    $password= $_POST['password'];//$_GET[Password] -> from URL
	
    $sql="SELECT username,password FROM admin WHERE username='$username' and password='$password'";//Query
    $result=mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
   if (mysqli_num_rows($result)>0)
   {
       $resultU=strcmp($row['username'], $username);//username from database is euqal to username from url
       $resultP=strcmp($row['password'], $password);//password from database is euqal to password from url
   
       if($resultP==0 && $resultU==0){//username and password entered TRUE
       $_SESSION['name']=$username;//admin is the session
       
       
       header('location: ../adminactions.php');//every thing is fine Now Enter AdminActions
       }
		else
		{
			$Check="Wrong Username Or Password";
		}
	}
	
  else 
   {
	   $Check="Wrong Username Or Password";
      
   }
   
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN PAGE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<!-- see5  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">


  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">



<!-- see5  -->
</head>
<body>

<div class="limiter">
<div class="site-navbar py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
		
		<!-- Name Of Website -->
          <div class="logo">
            <div class="site-logo">
              <a href="../indexx.php" class="js-logo-clone">SEE5 WEBSITE</a>
            </div>
          </div>
		<!-- Name Of Website -->
		
		<!-- Home About etc... -->
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="../indexx.php">Home</a></li>
                <li><a href="../items.php">Items</a></li>
                   <li><a href="../search.php">Search</a></li>               
                <li><a href="../about.php">About</a></li>
                <li><a href="../contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->
		  
		<!-- LOGIN -->
          <div class="icons">
            <li class="main-nav d-none d-lg-block" >
			
          </div>
		<!-- LOGIN -->
        </div>
      </div>
	  			<div class="bg-light py-3">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-0">
							<a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
								class="text-black">Login</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid username is required: ex :admin">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100"  type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span >
							<p><font color="red"><?php echo"$Check"?></</font></p>
						</span>
						
					</div>
				</form>
			</div>
		</div>
		
		
		
<!-- pharma products+rated -->
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a  class="banner-1 h-100 d-flex" style="background-image: url('../images/left.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>dental instruments</h2>
                
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a  class="banner-1 h-100 d-flex" style="background-image: url('../images/right.jpg');">
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
              <li class="active"><a href="../indexx.php">Home</a></li>
                <li><a href="../items.php">Items</a></li>
                <li><a href="../search.php">Search</a></li>                 
                <li><a href="../about.php">About</a></li>
                <li><a href="../contact.php">Contact</a></li>
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
	
	


				
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	</body>
</html>