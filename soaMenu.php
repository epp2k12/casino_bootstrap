<?php
session_start();
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
if(isset($_SESSION['userId'])) {



   	echo '<a href="contacts.php" class="btn btn-info" role="button">Email Us</a>';
    echo '<a href="changepass.php" class="btn btn-info" role="button">Change Password</a>';


	//connect to database
	require_once('conn.php');

	//date_default_timezone_set('Asia/Manila');
	$currentDate = date('Y-m-d');


	$userId = $_SESSION['userId'];
	$pass = $_SESSION['pass'];



//echo "ID: ".$userId."<br>PASSWORD:".$pass."<br>";
//echo "set the date last access to :".$currentDate;

//get the members name
$result = mysql_query("SELECT * FROM members where members_code='$userId'") or die("no result from table members!");
$numRows = mysql_num_rows($result);
while($row = mysql_fetch_array($result)) {
	$members_name = $row{3};
	$asof_date = $row{2};
	$address = $row{4}."<br>".$row{5}."<br>".$row{6};
}



//get and set the date last access
$getLastAccess = mysql_query("SELECT * FROM UserList where members_code='$userId'") or die("no result from soax");
while($row = mysql_fetch_array($getLastAccess)) {
	//echo "LAST DATE ACCESS : ".$row{2};
	$date_last_access = $row{2};
}
$lastAccess = mysql_query("UPDATE UserList set last_access='$currentDate' where members_code='$userId'")
or die("cannot set last access date!");

//get the current statement of account
$getStatement = mysql_query("SELECT * FROM invoices where members_code='$userId' ORDER BY invoice_date") or die("cannot get statement of account");
echo "<br>";

//get the statement from ar_stmt
$getStatementNew = mysql_query("SELECT * FROM ar_stmt where custid='$userId' ORDER
BY cutoffdt DESC LIMIT 10") or die("cannot get statements");



  	echo '<table class="table table-hover table-condensed" style="background-color:#ebebeb">';


	echo '<tr class="t_title"><td colspan="2"><strong>'.$userId.'</strong></td><td colspan="2"><strong>Date : '.$currentDate.'</strong></td></tr>';
	echo '<tr class="t_title"><td colspan="4"><strong>'.$members_name.'</strong></td></tr>';

	echo '<colgroup>';
		echo '<col id="sd" />';
		echo '<col id="dd" />';
		echo '<col id="amount" />';
		echo '<col id="vd" />';
	echo '</colgroup>';

	echo '<tr><td class="tc_header">Statement Date</td>';
  	echo '<td class="tc_header">Due Date</td>';
  	echo '<td class="tc_header">Amount</td>';
  	echo '<td class="tc_header">View Details</td></tr>';

  while($row = mysql_fetch_array($getStatementNew)) {
	echo '<tr>';
	echo '<td>'.$row{'cutoffdt'}.'</td>';
	echo '<td>'.$row{'duedate'}.'</td>';
	echo '<td class="amount">'.number_format($row{'total'},2).'</td>';
	echo '<td>';
	echo '<a href="soa.php?var1='.$userId.'&var2='.$row{'cutoffdt'}.'">Veiw Details</a><br>';
	echo '</tr>';
  }

  echo '</table>';

  mysql_close($conn);

}else{



			echo '<div id="small_errors">';
			echo '<p><span class="fline">Please login at our home page. Thanks!</span><br />';
			echo '</div>';


}
?>






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