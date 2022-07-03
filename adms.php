<?php
	include "assets/imports/import.php";
	$hash = $_COOKIE['hash'];
	$query = mysqli_query($conn, "SELECT * FROM adm WHERE hash = '$hash'");
	$arr = mysqli_fetch_array($query);
	if (!isset($_COOKIE['hash'])) {
	header('location: ./menu.php');
	}
	if ($arr['usuario'] != "admin"){
		header('location: ./menu.php');
	}
?>
<!DOCTYPE HTML>
<!--
[
]
-->
<html>
	<head>
		<title>SGTE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/menu.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php"><span>SGTE</span></a></div>
				<a href="#menu">

				</a>
			</header>

		<!-- Nav -->
	<nav id="menu">
				<ul class="links">
					<li><a href="menu.php">Menu</a></li>
					<li><a href="cad_adm.php">Cadastrar Administradores</a></li>
					<li><a href="sair.php">Sair</a></li>
				</ul>
			</nav>
		
	
		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<?php  
					if (isset($_COOKIE['hash'])) {
							$queryAdm = mysqli_query($conn ,"SELECT * FROM adm ORDER BY id DESC");
							while ($arrA = mysqli_fetch_array($queryAdm)) {	
									echo '<div>
							<div class="box">
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>'.$arrA['usuario'].'</h2>
									</header>
									<h1>Usuario</h1><p>'.$arrA['usuario'].'</p>
									<h1>Senha</h1><p>'.$arrA['senha'].'</p>
								</div>
							</div>
						</div>';

								}
							}
						?>
					</div>
				</div>
			</section>

		<!-- Two -->

		<!-- Three -->

		<!-- Footer -->
			<footer id="footer">
				
				<div class="copyright">
				 Bem vindo Master Admin.<br>
					&copy;	Criado em 2019
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>