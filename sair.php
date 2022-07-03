<?php
	unset($_COOKIE['hash']);
	setcookie("hash", "", time() - 3600);
	unset($_COOKIE['id']);
	setcookie("id", "", time() - 3600);
	header("location: ./");
	  ?>