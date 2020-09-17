<?php
 phpinfo();
 echo "asd";
include_once 'config.php';


session_start();

//before login
$name="";
$logname="";
$logout="";
$url="login/login.php";
//before login

if(isset($_SESSION['name']))
{
    $name=$_SESSION['name'];
	$logname="Logout";
    $url="adminactions.php";
	$logout="logout.php";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SEE5 &mdash; ITEMS</title>
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
                <li class="active"><a href="items.php">Items</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->

                  <div class="icons">
            	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">ADMIN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo "$url";?>"><?php echo"ِAdmin Actions"; ?></a>
    <a href="<?php echo "$logout";?>">   <?php echo"$logname"; ?></a>
  </div>
</div>
          </div>

        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="indexx.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Items</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">

          </div>
                    <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Filter by: </h3>
            <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Categories / Date</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">

			<!--Categories-->
              <a class="dropdown-item" href="./items.php?data=Lab">Lab</a>
              <a class="dropdown-item" href="./items.php?data=Stainless">Staineless steel</a>
              <a class="dropdown-item" href="./items.php?data=Forceps">Forceps</a>
              <a class="dropdown-item" href="./items.php?data=Sharpened">Sharpened</a>
              <a class="dropdown-item" href="./items.php?data=All">All</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./items.php?data=old">Date Added(Oldest)</a>
              <a class="dropdown-item" href="./items.php?data=new">Date Added(Newest)</a>
			<!--Categories-->

            </div>
          </div>
        </div>

		<div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
            </div>
          </div>
        </div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
            </div>
          </div>
        </div>
				<div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
            </div>
          </div>
        </div>


		<div class='row'>
    <!-- TOOLS -->
           <?php

	//Categories
    $sql = "SELECT * FROM `tool`";
    if(isset($_GET["data"]) )
    {
        $data = $_GET["data"];

   if($data=="Lab"){

       $sql = "SELECT * FROM tool WHERE category='Lab'";
   }
   else
       if($data=="Stainless"){

           $sql = "SELECT * FROM tool WHERE category='Stainless steel'";

   }
   else
       if($data=="Forceps"){

           $sql = "SELECT * FROM tool WHERE category='Forceps'";
   }
   else
       if($data=="Sharpened"){

           $sql = "SELECT * FROM tool WHERE category='Sharpened'";
   }
   else
   		if($data=="All"){
       $sql = "SELECT * FROM tool";
   		}

   	else
   		if($data=="new")
   		{
   			$sql="SELECT * FROM tool order by date desc";
   		}
       	else

   		{
   			$sql="SELECT * FROM tool order by date asc";
   		}


    }
	//Categories

	//all items
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
		         echo "<div class='col-sm-6 col-lg-4 text-center item mb-4'>";
		         echo "<a href=./single_item.php?data=".$row['id']."> <img src='images/myway/$row[id].jpg' alt='Image'  width = '200' height ='200'></a>";
             echo "<h3 class='text-dark'><a href='#'> ".$row['name_en']."</a></h3>";
		         echo "</div>";
        }
    }
	//all items

    ?>
		<!-- TOOLS -->

		</div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">

            </div>
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
