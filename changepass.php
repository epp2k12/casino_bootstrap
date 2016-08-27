<?php
session_start();

if(isset($_POST['submitted'])) {

		$userId = $_SESSION['userId'];

		//create error array
		$errors = array();
		$success = array();

		if(empty($_POST['pass01'])) {
			$errors[] = 'You forgot to enter a new password!';
		}else{
			$p1= $_POST['pass01'];
		}

		if(empty($_POST['pass02'])) {
			$errors[] = 'You did not confirm your new password!';
		}else{

			$p2= $_POST['pass02'];
		}


		if(empty($errors)) {

			//check if both passwords are the same
			if($p1 == $p2) {
				//connect to database
				require_once('conn.php');

				$selectDB = mysql_select_db($dbname) or die('Cannot select db');
				$result = mysql_query("UPDATE UserList set user_pass='$p1', new_password='Y' where members_code='$userId'") or die("System error, cannot reset password!");
				$pass=$p1; //update password
				mysql_close($conn);

				$success[] = 'Security code was successfully updated. Congratulations!';

				//header('location:soaMenu.php');

			}else{

				$errors[] = 'Error in password confirmation!';
			}
		}
}



include 'common/header.php';
?>


<style type="text/css">
p {
	margin: 15px;
}
img {
	margin: 5px;
}

table#email_foot {
	font-weight: bold;
}


</style>






<div class="clearfix" style="background-color:black">
<div class="col-md-8">

<?php

		if(!empty($errors)) {
			echo '<div id="small_errors">';
			echo '<p><span class="fline">The following error(s) occured:</span><br />';
				foreach($errors as $msg) {
					echo "-$msg<br />\n";
				}
			echo '</p><p>Please try again...</p>';
			echo '</div>';
		}

		if(!empty($success)) {

				echo '<div id="small_errors">';
				echo '<p>';
				echo '<style type="text/css">';
				echo '#small_errors {margin: 0 auto;padding: 5px 0px 5px 25px;background-color: #040265;color: #fff;opacity:0.7;border-radius: 10px;}';
				echo '</style>';
				echo $success[0];
				echo '<a href="soaMenu.php" class="btn btn-info" role="button"><b> &#60;&#60;&nbsp;Go Back!</b></a>';
				echo '</p>';
				echo '</div>';
		}

?>

<div class="panel panel-danger" >
<div class="panel-heading">
<h3 class="panel-title">SECURITY PASSWORD RESET</h3>
</div>

<form action="changepass.php" method="post" role="form" style="margin: 30px;">
  <div class="form-group">
    <label for="pass01">Enter new password:</label>
    <input type="password" class="form-control" id="pass02" name="pass01">
  </div>
  <div class="form-group">
    <label for="pass02">Confirm new Password :</label>
    <input type="password" class="form-control" id="pass02" name="pass02">
  </div>
  <input type="hidden" name="submitted" value="TRUE" />
  <button type="submit" class="btn btn-default">CHANGE PASSWORD</button>
</form>
</div>


</div> <!-- col -->



	<div class="col-md-4" style="margin-right:0px">
	<?php
      include 'common/main_menu.php';
      include 'common/featured.php';
    ?>
	</div> <!-- col-md-4 -->




</div>
<?php
include 'common/footer.php';
?>