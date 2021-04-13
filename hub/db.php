
<?php

$host = "localhost";
$username = "root";
$upass = "";
$db ="practice";


$con = new mysqli($host, $username, $upass, $db);

if($con->connect_error){
	die("DB connection error.".$con->connect_error);
}

?>

