<?php
session_start();
include_once 'config.php';
//Before Login
$name="";
$error="";
$url="login/login.php";
$logout="";
$logname="";
$label="You Are Not Allowed Here Unless You Are Admin";
//Before Login

if(isset($_SESSION['name']))
{
  $name=$_SESSION['name'];
	$logname="Logout";
  $url="adminactions.php";
	$logout="logout.php";

}

if(isset($_POST['submit'])){
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$confirm=$_POST['confirm'];



$sql="SELECT * from admin";
$result=mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    if (mysqli_num_rows($result)>0)
   {
   	$checkOld=strcmp($oldpass, $row['password']); //if is equal the value 0 if is not the value 1
   	$checkNew=strcmp($newpass, $confirm);
   	if($checkOld==0){
   		if($checkNew==0){
   			$sql="UPDATE admin SET password = '$newpass' WHERE id = 1";
   			mysqli_query($conn, $sql);
         header("Location: edited.php");

   		}//end of comparison
   		else
   			$error="New Password Does Not Match";
}//end of old password
else{

	$error="Wrong Old Password";
}
   	}//end of num_rows

   }//end of isset


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SEE5 &mdash; ADD ITEM</title>
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
  <script type="text/javascript">
window.history.forward();


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
 <style>

.h2red{

	color:red;
}

  	.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
  </style>
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

          <div class="logo">
            <div class="site-logo">
              <a href="indexx.php" class="js-logo-clone">SEE5 WEBSITE</a>
            </div>
          </div>

          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="indexx.php">Home</a></li>
                <li><a href="items.php">Items</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="addtool.php">Add Item</a></li>

              </ul>
              </ul>
            </nav>
          </div>

         	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">ADMIN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo "$url";?>"><?php echo"Admin Actions"; ?></a>
    <a href="<?php echo "$logout";?>">   <?php echo"$logname"; ?></a>
  </div>
</div>

        </div>
      </div>
	  	  			<div class="bg-light py-3">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mb-0">
							<a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
								class="text-black">Edit Password</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>




    <div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
    <?php
    if($name=="admin"){
    echo" <form action='' method='post' enctype='multipart/form-data'>";



    echo" <label for='c_fname' class='text-black'>Old Password</label>";
    echo " <input type='password' class='form-control'  name='oldpass'  required  >";

    echo" <label for='c_fname' class='text-black'>New Password</label>";
    echo " <input type='password' class='form-control'  name='newpass' required  >";


    echo" <label for='c_fname' class='text-black'>Confirm New  Password</label>";
    echo " <input type='password' class='form-control'  name='confirm'  required >";

    echo" </div>";
    echo " <div class='col-md-6'  >";



    echo " </div>";
    echo " <div class='col-md-6'   >";



    echo " </div>";

    echo " <div class='col-md-6'>";



    echo " </div>";

    echo "<div class='col-md-6'>";



    echo " </div>";
    echo " </div>";

    echo " <div class='form-group row'>";
    echo " <div class='col-md-12'>";



    echo " </div>";
    echo " </div>";
    echo " <div class='form-group row'>";
    echo " <div class='col-lg-12'>";

    echo " <input type='submit' class='btn btn-primary btn-lg btn-block' name='submit' value='Submit'>";

    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </form>";

if(isset($_POST['submit']))
      echo "<div class='col-md-12 text-center'>";
           echo " <h2 class ='h2red'>$error</h2>";
          echo  "  <p class='lead mb-5'> </p>";
         echo " </div>";


    }


            ?>
          </div>

        </div>
      </div>
    </div>

	<!-- pharma products+rated -->


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
                <li><a href="addtool.php">Add Item</a></li>
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

</body>

</html>
