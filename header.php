<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Twitter Bootstrap 3 Fixed Layout Example</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
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


</style>
</head>
<body style="padding-top:0px">

	<!-- Brand and toggle get grouped for better mobile display -->
<div class="container" style="border:1px solid black;background-color:#ffffff;">

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
                <li class="active"><a href="http://localhost/bootstrap_casino">Home</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">About Us<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="testspy.php">Fact Sheet</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Mission/Vision</a></li>
                        <li><a href="#">House Rules</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Board of Directors</a></li>
                        <li><a href="#">Management Team</a></li>
                    </ul>
                </li>
                <li><a href="#">Membership</a></li>
                <li><a href="#">Dwonloads</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </nav>







