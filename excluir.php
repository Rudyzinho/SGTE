<?php 
	include "assets/imports/import.php";
	if (!isset($_COOKIE['hash'])) {
	header("location: ./");
	}else{
			$id = $_GET['id'] OR header("location: ./escolas.php#one");
			mysqli_query($conn, "DELETE FROM escola WHERE id = '$id'");
			header("location: ./escolas.php#one");
		}

 ?>