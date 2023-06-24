<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='db_hor';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}