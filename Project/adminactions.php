<?php
session_start();
include_once 'config.php';//database

//Before Login
$name="";
$url="login/login.php";
$logout="";
$logname="";
$label="You Are Not Allowed Here Unless You Are Admin";
//Before Login

//After Login
if(isset($_SESSION['name'])) //Admin Entered
{
    $name=$_SESSION['name'];//admin
    $logout="logout.php";
    $logname="Logout";
    $url="adminactions.php";
}
//Number Of messeges that not read/
$sqlinbox="SELECT * from messages WHERE status='unread'";
$result = $conn->query($sqlinbox);
   $number= $result->num_rows;
//Number Of messeges that not read/
?>

<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
if(window.history.backward())
	window.location.replace('adminactions.php');

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

    table{
        border:2px solid black;
        vertical-align: middle;
        text-align:center;
		background-color:#fafafa;
    }

	.id{
		width:100px;
	}
		.ar{
		width:200px;
	}
		.en{
		width:200px;
	}
		.des{

	}
		.cat{

	}
		.link{

	}
   th,td{

    text-align:center;
    border:3px solid black;
    color: #82793c;
     vertical-align: middle;

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
  <title>SEE5 &mdash; ADMIN ACTIONS</title>
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
  	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

  <div class="site-wrap">
    <div class="site-navbar py-2">
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
                <li><a href="items.php">Items</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="addtool.php">Add Item</a></li>
               <li> <a href="inbox.php" class="icons-btn d-inline-block bag">
              <span class="icon-inbox"></span>
              <!--Number Of messeges that not read-->
              <span class="number"><?php echo $number; ?></span>
              <!--Number Of messeges that not read-->
            </a></li>

              </ul>
            </nav>
          </div>
		<!-- Home About etc... -->



	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">ADMIN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="<?php echo "$url";?>"><?php echo"Admin Actions"; ?></a>
    <a href="editpass.php"><?php echo"Edit Password"; ?></a>
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
								class="text-black">Admin actions</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>


<?php

	if(isset($_SESSION['name']))
	{
		echo "<table>";
		echo "<tr >
		<th> Id </th>
		<th> Arabic name </th>
		<th> English name </th>
		<th> Description </th>
		<th>Categories</th>
		<th>Admin Actions</th>
		</tr>";
		$sql = "SELECT * FROM tool ";
		$result = $conn->query($sql);

    if ($result->num_rows > 0)
	{
       while($row = $result->fetch_assoc())
	   {
           echo "<tr>";
           echo "<td class='id'>" .$row['id']."</td>
		   <td class='ar'>" .$row['name_ar']."</td>
		   <td class='en'> ".$row['name_en']."</td>
		   <td class='des'>".$row['description']." </td>
		   <td class='cat'>".$row['category']."</td>
		   <td class='link'>
		   <a title='UPDATE' href='./Update.php?data=$row[name_en]' >
		   <img src='images\update.ico' alt='icon' height='50px' width:'50px'>
		   </img>
		   </a>									<hr>
		   <a title='DELETE' href='./delete.php?data=$row[id]'>
		   <img src='images\delete.ico' alt='icon' height='65px' width:'65px'>
		   </img>
		   </a>
		   </td>";
           echo "</tr>";
        }
	}
	else
	{
        echo "0 results";
    }
	echo "</table>";


}


else
{
    echo "<div class='col-md-12 text-center'>";
    echo "<h2 class='display-3 text-black'>$label</h2>";//you are not allowd
    echo "</div>";
}


    ?>

 <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">

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


</body>

</html>
