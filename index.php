<?php
	include "assets/imports/conexao.php"; 
	if(isset($_COOKIE['hash']) || isset($_COOKIE['id'])){
		header('location: ./menu.php');
	}
	if (isset($_POST['entrar'])) {
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$query = mysqli_query($conn, "SELECT * FROM escola WHERE usuario = '$login'");
		if (mysqli_num_rows($query) > 0) {
			$arr = mysqli_fetch_array($query);
		if ($senha == $arr['senha']) {
			setcookie("id",$arr['id']);
			header("location: menu.php");
		}
	}
}
	if(isset($_POST['entrar'])){
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$query = mysqli_query($conn, "SELECT * FROM adm WHERE usuario = '$login'");
		if (mysqli_num_rows($query) > 0) {
			$arr = mysqli_fetch_array($query);
		if ($senha == $arr['senha']) {
			setcookie("hash",$arr['hash']);
			header("location: menu.php");
		}
	}
}
?>

<!DOCTYPE HTML>
<!--

-->
<html>
	<head>
		<title>SGTE	</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/login.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">SGTE</a>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		

		<!-- Main -->
			<section id="main" >
				
				<div class="inner">
					<header class="major special">
						<h1>Login</h1>
						<p></p>
					</header>
					<form method="post">
						<div class="field half first">
							<label for="name">Nome de usuário </label><p>(Nome : admin)</p>
							<input type="text" name="login" id="name" />
						</div>
						<div class="field half">
							<label for="senha">Senha </label><p>(Senha : admin)</p>
							<input type="password" name="senha" id="senha" />
						</div>
						<ul class="actions">
							<li><input style="border-style: none;" type="submit" name="entrar" value="Entrar" class="alt" /></li>
						</ul>
				</div>
			</form>
			</section>
		<!-- Footer -->
			
<div style="background-color: #28617D; color: #e9ede1; width: 100%; height:1px;">
			<p>...</p>
		</div>
		<div style="background-color: #e9ede1; color: #28617D;">
			
			<footer class="my-5 pt-5 text-muted text-center text-small">
   				<center> 
   					<p class="mb-1">&copy;  Erik Elvis, Yasmim Milhome,Willas Nascimento</p>
   					<p>A educação é um direito garantido na constituição federal a todos os brasileiros, proporcionando a todos um futuro melhor... <br>Segundo a lei maior do nosso país, é dever do governo e da sociedade garantir o cumprimento desse direito.</p>
   					<p>O trabalho e a dedicação são a única estrada que leva ao verdadeiro sucesso!</p> 

   				 </center>  <br><br>
 		 	</footer>
		</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>