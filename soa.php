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


#goback a:link {
    color: #FFFFFF;
}
#goback a:hover {
    color: #FF0000;
}



</style>






<div class="clearfix" style="background-color:black">
<div class="col-md-8">

<div id="goback">
<a href='javascript:javascript:history.go(-1)' class="btn btn-info" role="button">&#60;&#60;&nbsp;Click here to go back</a>
</div>

<div class="soa_table" style="background-color:#efefef;">
<?php

if(isset($_SESSION['userId'])) {
if(isset($_GET['var1'])) {

	//date_default_timezone_set('Asia/Manila');
	$currentDate = date('Y-m-d');

	$var1 = $_GET['var1'];
	$var2 = $_GET['var2'];

	//connect to database
	require_once('conn.php');



//echo "ID: ".$id."<br>PASSWORD:".$pass."<br>";
//echo "set the date last access to :".$currentDate;

//get the members name
$result = mysql_query("SELECT * FROM members where members_code='$var1'") or die("no result from table members!");
$numRows = mysql_num_rows($result);
//echo "number of rows in name is :".$numRows."<br>";
//echo "member name is ".$id;
while($row = mysql_fetch_array($result)) {
	$members_name = $row{3};
	$asof_date = $row{2};
	$address = $row{4}."<br>".$row{5}."<br>".$row{6};
}



//get and set the date last access
$getLastAccess = mysql_query("SELECT * FROM UserList where members_code='$var1'") or die("no result from soax");
while($row = mysql_fetch_array($getLastAccess)) {
	//echo "LAST DATE ACCESS : ".$row{2};
	$date_last_access = $row{2};
}
$lastAccess = mysql_query("UPDATE UserList set last_access='$currentDate' where members_code='$var1'")
or die("cannot set last access date!");

//get the current statement of account
$getStatement = mysql_query("SELECT * FROM invoices where members_code='$var1' ORDER BY invoice_date") or die("cannot get statement of account");

//open ar_stmt
$get_ar_stmt = mysql_query("SELECT * FROM ar_stmt where custid like '$var1' and cutoffdt='$var2'") or die("cannot open ar_stmt");

while($row = mysql_fetch_array($get_ar_stmt)) {
	//echo "<br>from ar_stmt : ".$row{1};

	$cutOffDate = $row{'cutoffdt'};
	$dueDate = $row{'duedate'};
	$amountDue = $row{'total'};
	$docNum = $row{'docnum'};
	$prevCharge = $row{'prev_charge'};
	$curCharge = $row{'curr_charge'};
	$credits = $row{'totcm'};
	$payments = $row{'totpayment'};
	$financeCharge = $row{'finance_charge'};
	$delayCharge = $row{'delay_charge'};
	$others = $row{'misc_charge'};
	$amountDue = $row{'total'};

}

//get custpymt
$get_payment = mysql_query("SELECT * FROM custpymt where
YEAR(trxdate)=YEAR('$cutOffDate') and MONTH(trxdate)=MONTH('$cutOffDate') and
custid='$var1'") or die("cannot perform call!");

//get invform
$get_inv_form = mysql_query("SELECT * from invfrm where
YEAR(trxdate)=YEAR('$cutOffDate') and MONTH(trxdate)=MONTH('$cutOffDate') and
custid='$var1' order by doctype,trxdate") or die("cannot perform call to invfrm");


//echo "custpayment records : ".$get_payment;

//echo "<br>date cut off : " .$cutOffDate;
echo '<table id="t_main" class="table table-hover table-condensed">';
echo "<tr><td colspan='8'>";

//******************** members detail
echo '<table id="member_detail" class="table table-hover table-condensed">';
echo "<tr><td><b>".$var1."</b></td></tr>";
echo "<tr><td><b>".$members_name."</b></td></tr>";
echo "<tr><td>".$address."</td></tr>";
echo "<tr><td >Date Last Access : ".$date_last_access."</td></tr>";
echo "</table>";

//******************** statement header
echo '<table id="statement_header" class="table table-hover table-condensed">';
echo '<tr class="theader01"><td>STATEMENT DATE</td><td>DUE DATE</td><td>AMOUNT DUE</td></tr>';

echo '<tr><td>'.$cutOffDate.'</td><td >'.$dueDate.'</td><td>'.number_format($amountDue,2).'</td></tr>';

echo '<tr><td>MEMBER ID</td><td colspan=2>REFERENCE NUMBER</td></tr>';
echo '<tr><td>'.$var1.'</td><td colspan=2>'.$docNum.'</td></tr>';
echo '</table>';

echo '<tr><td colspan="8"><b>SUMMARY OF CHARGES</b></td></tr>';
echo '</td></tr>';
echo '<tr class="theader01"><td>Previous</td>
	<td>Purchases(+)</td>
	<td>Credits(-)</td>
	<td>Payment(-)</td>
	<td>Finance	Charge(+)</td>
	<td>Late Charge(+)</td>
	<td>Others(+)</td>
	<td>=Amount Due</td>
	</tr>';

   /**
   $total_balance=0.00;
    $detail_array = array();

    while($row = mysql_fetch_array($getStatement)) {

	    $total_balance+=$row{6};
	    echo '<tr>';
	    echo '<td>&nbsp;</td>';
	    echo '<td>'.$row{1}.'</td>';
	    echo '<td>'.$row{2}.'</td>';
	    echo '<td>'.$row{3}.'</td>';
	    echo '<td>'.$row{4}.'</td>';
	    echo '<td>'.$row{5}.'</td>';
	    echo '<td>'.$row{6}.'</td>';
	    echo '<td>';
	    echo '<a href="http://casinoespanol.ph/getDetails.php?var1=testMe&var2='.$row{1}.'">details</a><br>';
	    echo '</td>';
	    echo '</tr>';
    }
    **/

    echo '<tr>';
    echo '<td>'.number_format($prevCharge,2).'</td>';
	echo '<td>'.number_format($curCharge,2).'</td>';
	echo '<td>'.number_format($credits,2).'</td>';
    echo '<td>'.number_format($payments,2).'</td>';
	echo '<td>'.number_format($financeCharge,2).'</td>';
	echo '<td>'.number_format($delayCharge,2).'</td>';
	echo '<td>'.number_format($others,2).'</td>';
	echo '<td><b>'.number_format($amountDue,2).'</td>';
	echo '</tr>';

	echo '<tr><td colspan="8">';
	echo '<table class="table table-hover table-condensed">';
	echo '<tr><td >DATE</td>';
	echo '<td>TRANSACTION</td>';
	echo '<td>DESCRIPTION</td>';
	echo '<td>AMOUNT</td>';
	echo '</tr>';


	echo '<tr><td>&nbsp;</td><td>&nbsp;</td>';
	echo '<td align="right"><b>PREVIOUS BALANCE</b></td><td style="text-align:right"><b>'.number_format($prevCharge,2).'</b></td></tr>';


	while($row = mysql_fetch_array($get_inv_form))
	{

		if($row{'doctype'}==0) {
			$docType = "Sales";
		}else if($row{'doctype'}==1) {
			$docType = "Adjustment";
			//$totBal = $row{'totbal'};
			//echo "test for total balance : " .$totBal;
		}else{
			$docType = "Debit";
		}

		echo "<tr>";
		echo "<td>".$row{'trxdate'}."</td>";
		echo "<td>".$docType."</td>";
		echo '<td align="left">'.$row{'memo'}.'</td>';
		echo '<td style="text-align:right">'.number_format($row{'totbal'},2).'</td>';
	}

	echo "<tr><td colspan='4' style='text-align:center'><b>---------- NOTHING FOLLOWS ----------</b></td></tr>";



	echo '</table>';
	echo '</td></tr>';

    echo '<tr><td colspan="7" align="right">';
    echo 'Statement as of :';
    echo '</td><td>'.$cutOffDate.'</td></tr>';
    echo '</table>';

    mysql_close($conn);

}

}else{

			echo '<div id="small_errors">';
			echo '<p><span class="fline">Please login at our home page. Thanks!</span><br />';
			echo '</div>';

}

?>




</div> <!-- soa table -->

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