<?php

	/*send mail and save in database */

include 'strings.php';

$dbhost = 'localhost';
$dbuser = $global_dbuser;
$dbpass = $global_dbpass;
$dbname = $global_dbname;
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysql_select_db($dbname);
date_default_timezone_set('America/Argentina/Buenos_Aires');

$mail = $_POST["mail"];


if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
{
     header( 'Location:http://' . $path  . "/index.php?result=error");
} else{
	$mail = mysql_real_escape_string($mail); 
	$mysqldate = date( 'Y-m-d H:i:s');
	$logquery = "insert into mails (mail, date) values('$mail','$mysqldate')";
	$ans = mysql_query($logquery, $conn);
	if (!$ans){
		header( 'Location:http://' . $path  . "/index.php?result=error");
	}else{
		header( 'Location:http://' . $path  . "/index.php?result=success");
	}
}
?>