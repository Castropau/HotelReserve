<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "hotelmanagementsystemdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name, $address, $phone);

if (!$conn) {
	echo "Connection failed!";
}