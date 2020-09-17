<?php
session_start();
?>
<?php
include_once 'config.php';

//before login
$name="LOGIN";
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
  <title>SEE5 &mdash; Single Item</title>
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
                <li class="active"><a href="items.php">Items</a></li>
				<li><a href="search.php">Search</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->

			<!-- LOGIN -->
          <div class="icons">
            	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">ADMIN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo "$url";?>"><?php echo"ِAdmin Actions"; ?></a>
    <a href="<?php echo "$logout";?>">   <?php echo"$logname"; ?></a>
  </div>
</div>
          </div>
		<!-- LOGIN -->

        </div>
      </div>
    </div>


<?php

if(isset($_GET["data"]) )
{
    $data = $_GET["data"];
}

$dirname = "images/myway/";
$files=glob($dirname."*.jpg");//Find pathnames matching a pattern

//$image = './uploads/files/imagefile.jpg';
$length=count($files);

for($i=0 ;$i<$length;$i++){

    $info = pathinfo($files[$i]);
    // get the filename without the extension
    $image_name =  basename($files[$i],'.'.$info['extension']);

    // get the extension without the image name
    //$ext = end(explode('.', $files[0]));
    if($data==$image_name)
    {

        $lm=$files[$i];
        break;
    }
}

$sql = "SELECT * FROM tool WHERE id = $data";
$result = $conn->query($sql);
if ($result) {
    $row = $result->fetch_assoc();//single item
	echo "  <div class='bg-light py-3'>";
	echo " <div class='container'>";
	echo " <div class='row'>";
	echo " <div class='col-md-12 mb-0'><a href='indexx.php'>Home</a> <span class='mx-2 mb-0'>/</span> ";
	echo " <a href='items.php'>Items</a> <span class='mx-2 mb-0'>/</span> <strong class='text-black'>$row[name_en] - $row[name_ar]</strong></div>";
	echo " </div>";
	echo " </div>";
	echo " </div>";

	echo "<div class='site-section'>";
	echo "<div  class='container'>";
    echo "<div class='row'>";
    echo "<div class='col-md-5 mr-auto'>";
    echo "<div class='border text-center'>";
    echo "<img src=' $lm' alt=' $row[name_en]' class='img-fluid p-5'>"; //$lm
    echo "</div>";
    echo "</div>";
    echo "<div class='col-md-6'>";
    echo "<h2 class='text-black'>$row[name_en] - $row[name_ar]</h2>";
    echo "<p>$row[description]</p>";

    echo " <div class='tab-content' id='pills-tabContent'>";
    echo " <div class='tab-pane fade show active' id='pills-home' role='tabpanel' aria-labelledby='pills-home-tab'>";
    echo " <table class='table custom-table'>";
    echo " <thead>";
    echo " <th>Category</th>";
    echo " <th>Video</th>";
    echo " <th>Reference</th>";
    echo "</thead>";
    echo " <tbody>";
    echo" <tr>";
    echo " <th scope='row'>$row[category]</th>";
    echo " <td><a href='$row[video]' target='_balnk'>$row[name_en]</a></td>";
    echo " <td> <a target='_blank' href='https://en.wikipedia.org/wiki/$row[name_en]'>Wiki - $row[name_en]</a></td>";
    echo " </tr>";

    echo " </tbody>";
    echo " </table>";
    echo " </div>";
    echo " <div class='tab-pane fade' id='pills-profile' role='tabpanel' aria-labelledby='pills-profile-tab'>";
    echo "  <table class='table custom-table'>";
    echo " <tbody>";
    echo " <tr>";
    echo " <td>HPIS CODE</td>";
    echo" <td class='bg-light'>999_200_40_0</td>";
    echo " </tr>";
    echo " <tr>";
    echo " <td>HEALTHCARE PROVIDERS ONLY</td>";
    echo " <td class='bg-light'>No</td>";
    echo " </tr>";
    echo " <tr>";
    echo " <td>LATEX FREE</td>";
    echo " <td class='bg-light'>Yes, No</td>";
    echo " </tr>";
    echo " <tr>";
    echo " <td>MEDICATION ROUTE</td>";
    echo " <td class='bg-light'>Topical</td>";
    echo " </tr>";
    echo " </tbody>";
    echo " </table>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

}
      ?>
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
