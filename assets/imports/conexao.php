<?php


	ini_set('defaut_charset', 'UTF-8');


$servername = "localhost";
$username = "root";
$password = "";
$database = "sgte";

$conn = mysqli_connect($servername, $username, $password, $database);


$conn->query("
			SET NAMES utf8
		");

error_reporting(0);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>