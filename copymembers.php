<?php

include('conn.php');


$selectDB = mysql_select_db($dbname) or die('Cannot select db');
$result = mysql_query("SELECT * FROM members") or die("no result from table members!");
$numRows = mysql_num_rows($result);


$result_userlist = mysql_query("SELECT * FROM UserList") or die("no result from table members!");
$numRowsUser = mysql_num_rows(result_userlist);


//put in an array
$members_array = array();
$cntr_member = 0;
while($row = mysql_fetch_array($result)) {

		$members_array[$cntr_member] = $row[0];
		//echo "<br />".$cntr_member ."the value". $members_array[$cntr_member];
		$cntr_member++;


}

$userlist_array = array();
$cntr_user = 0;
while($row = mysql_fetch_array($result_userlist)) {

		$userlist_array[$cntr_user] = $row[0];
		//echo "<br />".$cntr_user ."the value". $userlist_array[$cntr_user];
		$cntr_user++;


}

$counter = 0;
	$naa = 0;
	$wala = 0;

for ($i=0 ; $i<count($members_array); $i++) {

	$pair = 0;
			//echo "<br />the number :" . $members_array[$i];
			for ($j=0 ; $j<count($userlist_array); $j++) {


				if($members_array[$i] == $userlist_array[$j]) {

					//echo "<br />naa ni siya na member : ". $members_array[$i];
					$pair = 1;
					$counter++;
					break;

				}






			}

	//point

	if ($pair == 1) {

		echo "<br />naa ";
		$naa++;
	}else {

	$dmember = $members_array[$i];

	$insert = mysql_query("INSERT INTO UserList (members_code,user_pass,last_access,new_password)
		VALUES ('$dmember', '$dmember',CURDATE(),'N')")
		or die ("Could not insert new data :" . mysql_error());



		echo "<br />wala ";
		$wala++;
	}


}

echo "<br />ihapanay =" . $counter;
echo "<br />ang diperensiya =".$naa. "==".$wala;

echo "<br />hello world =". count($userlist_array) ;
echo "<br />hello world =". count($members_array) ;



?>