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

	if (isset($_POST['cad_adm'])) {
		$usuario = $_POST['login'];
		$senha = $_POST['senha'];

				$query = mysqli_query($conn ,"SELECT * FROM adm WHERE usuario = '$usuario'");
				$hash = generateHash();
				if (mysqli_num_rows($query) < 1) {
					mysqli_query($conn, "INSERT INTO adm(usuario, senha, adm, hash) VALUES ('$usuario', '$senha', 1, '$hash')");
					header('location: ./menu.php');
				}else{
					echo "
					<div class=\"alert alert-danger\" role=\"alert\">
					  Nome de adm já cadastrado, informação não inserida no banco de dados, por favor insira dados validos e não redundantes.
					</div>
				";
				}
		
			}

?>

<!DOCTYPE html>
<html>


<head>
	<title>Cadastro de Adm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/login.css" />
</head>
<body>

	<header id="header">
				<div class="inner">
					<a href="menu.php" class="logo">SGTE</a>
					<a href="adms.php">Administradores</a>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<section id="main" >
				
				<div class="inner">
					<header class="major special">
						<h1>Cadastrar Administrador</h1>
						<p></p>
					</header>
					<form method="post">
						<div class="field half first">
							<label for="name">Nome de usuário</label>
							<input type="text" name="login" id="name" />
						</div>
						<div class="field half">
							<label for="senha">Senha</label>
							<input type="password" name="senha" id="senha" />
						</div>
						<ul class="actions">
							<li><input style="border-style: none;" type="submit" name="cad_adm" value="Entrar" class="alt" /></li>
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
   					<p class="mb-1"><br><br>
   					&copy;Yasmim Milhome, Erik Elvis, Willas Nascimento</p>
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
