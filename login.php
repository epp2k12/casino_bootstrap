<?php
session_start();
//error_reporting(E_ALL);

if(isset($_POST['submitted'])) {

		//******** test


		//initialize an error array
		$errors = array();


		//check for user ID;
		if(empty($_POST['userId'])) {
			$errors[] = 'You forgot to enter your user ID!';
		}else{
			$userId = $_POST['userId'];
		}

		//check for password;
		if(empty($_POST['pass'])) {
			$errors[] = 'You forgot to enter your user Password!';
		}else {
			$pass = $_POST['pass'];
		}


		//check if there were errors
		if(empty($errors)) {

			require_once('conn.php'); //connect to the db

			//Retrive the user_id from the database.
			$result = mysql_query("SELECT * FROM UserList where members_code='$userId'") or die("no good result");
			$numRows = mysql_num_rows($result);

				//check if id exist
				if($numRows!=0) { //if it exist

					$row = mysql_fetch_array($result);
					//check if password is correct
						if($pass==$row{1}) {

							$_SESSION['userId'] = $userId;
							$_SESSION['pass'] = $pass;

							//header('location:soaMenu.php');
							header('location:soaMenu.php');
							echo 'enter the kingdom!';

						}else{

							$errors[] ='Invalid User ID or Password!';

						}

				}else{ //if id does not exist
							$errors[] ='Invalid User ID or Password!';
				}
		}else{
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
?>


<div class="panel panel-danger" >
<div class="panel-heading">
<h3 class="panel-title">PLEASE LOGIN</h3>
</div>

<form action="login.php" method="post" role="form" style="margin: 30px;">
  <div class="form-group">
    <label for="userId">Enter ID :</label>
    <input type="text" class="form-control" id="email" name="userId" value="<?php if(isset($_POST['userId'])) echo $_POST['userId']; ?>">
  </div>
  <div class="form-group">
    <label for="pass">Enter Password :</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <input type="hidden" name="submitted" value="TRUE" />
  <button type="submit" class="btn btn-default">LOGIN</button>
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