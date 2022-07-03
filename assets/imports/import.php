<?php
	include "conexao.php";

	date_default_timezone_set('America/Fortaleza');

	function generateHash($length = 32){
		$characters = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		$charactersLenght = strlen($characters);
		$hashString = '';
		for ($i=0; $i < $length; $i++) { 
			$hashString .= $characters[rand(0,$charactersLenght - 1)];}
		return $hashString;
	}

	function generateSenha($length = 8){
			$characters = '1234567890QWERTYUIOPASDFGHJKLZXCVBNM';
			$charactersLenght = strlen($characters);
			$senhaString = '';
			for ($i=0; $i < $length; $i++) { 
				$senhaString .= $characters[rand(0,$charactersLenght - 1)];}
			return $senhaString;
		}


?>