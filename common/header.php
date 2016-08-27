<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Casino Espanol De Cebu, Inc.</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<style type="text/css">
    body{

    }
    img {

    }
    #myNavbar{
    	margin-bottom: 0px;
    }
    #this-carousel-id{
     	margin-top: 0px;
    }


  .navbar-default .navbar-nav > li > a {
   color: #feff80; /*Change active text color here*/
    }




</style>
<?php
	error_reporting(E_ERROR);
?>
</head>

<body style="padding-top:0px">

	<!-- Brand and toggle get grouped for better mobile display -->

<div class="container" style="background-color:black;padding:0;">

	<div class="header_img clearfix" style="padding:0;margin:0;background-color:#04108b">
			<img class="pull-left" src="images/header/header01.jpg" alt="Casino Espanol de Cebu" >
	</div>
	<nav id="myNavbar" role="navigation" class="navbar navbar-default navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">About Us<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="fact_sheet.php">Fact Sheet</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="mission_vision.php">Mission/Vision</a></li>
                        <li><a href="rules.php">House Rules</a></li>
                        <li class="divider"></li>
                        <li><a href="bod.php">Board of Directors</a></li>
                        <li><a href="management.php">Management Team</a></li>
                    </ul>
                </li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a class="contacts_tip" href="contacts.php">Contact Us</a></li>
       		<?php
					if(isset($_SESSION['userId'])) {
						echo '<style type="text/css">';
						echo '#nav02 { width: 777px; margin:0 auto; }';
						echo '</style>';
						echo '<li><a href="soaMenu.php" id="soaLink">View SOA</a></li>';
						echo '<li><a href="logout.php" id="login_link">Logout</a></li>';
					}else{
						echo '<li><a href="login.php" id="login_link">Login</a></li>';
					}
			?>
             </ul>
        </div>
    </nav>












