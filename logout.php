<?php #Script 11.6 - logout.php
session_start();


//This page lets the user logout.
//If no cookie is present, redirect the user:


if(isset($_SESSION['userId'])) {


	$_SESSION = array(); //Clear the session variables
	session_destroy(); //Destroy the session itlself
	setcookie('PHPSESSID','',time()-3600,'/','',0,0); //Destroy the cookie
	header("Location:index.php");

	exit(); //Quit the script.


}else{

	header("Location:index.php");

}



?>