<?php
session_start();
include_once 'config.php';
//Before Login
$name="";
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

//for id + 1
$last_id=mysqli_query($conn,"SELECT id FROM `tool` ORDER BY id DESC LIMIT 0 , 1" );
$row=mysqli_fetch_assoc($last_id);
$nextid=$row['id']+1;
//for id + 1

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
                <li class="active"><a href="addtool.php">Add Item</a></li>

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
								class="text-black">Add tool</strong>
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
    if(isset($_SESSION['name'])){
    echo" <form action='added.php' method='post' enctype='multipart/form-data'>";

    echo"       <div class='p-3 p-lg-5 border'>";
    echo" <div class='form-group row'>";
    echo " <h2>Last id inserted is  $row[id] so next one will be auto generated to  $nextid.</h2>";
    echo " <div class='col-md-6'  >";
    //ID
    echo" <label for='c_fname' class='text-black'>ID</label>";
    echo " <input type='text' class='form-control' id='id' name='id'  value=$nextid readonly>";
    //ID
    echo" </div>";
    echo " <div class='col-md-6'  >";
    //English Name
    echo " <label for='c_fname' class='text-black'>English name </label>";
    echo " <input type='text' class='form-control' id='name_en' name='name_en'  required>";
    //English Name
    echo " </div>";
    echo " <div class='col-md-6'   >";
    //Arabic Name
    echo " <label for='c_lname' class='text-black'>Arabic Name</label>";
    echo " <input type='text' class='form-control' id='name_ar' name='name_ar'   required>";
    //Arabic Name
    echo " </div>";

    echo " <div class='col-md-6'>";
    //Category
    echo " <label for='c_subject' class='text-black'>Category</label>";
    echo " <input type='text' class='form-control' id='category' name='category' required>";
    //Category


    echo " </div>";

    echo "<div class='col-md-6'>";
    //Image
    echo " <label for='c_subject' class='text-black'>Jpeg Image</label>";
    echo " <input type=file class='form-control' id='img' name='img' accept='.jpg' required>";
    //Image

    echo " </div>";
    echo " </div>";

    echo " <div class='form-group row'>";
    echo " <div class='col-md-12'>";
    //Description
    echo " <label for='c_message' class='text-black'>Description</label>";
    echo " <textarea name='description' id='description' cols='30' rows='7' class='form-control' required></textarea>";
    //Description
    echo " </div>";
    echo " </div>";
    echo " <div class='form-group row'>";
    echo " <div class='col-lg-12'>";
    //submit
    echo " <input type='submit' class='btn btn-primary btn-lg btn-block' name='submit' value='Add'>";
    //submit
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </form>";

    }
    else

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
