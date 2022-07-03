<?php
	include "assets/imports/import.php";

	if (isset($_POST['cad_escola'])) {
		$polo = $_POST['polo'];
		$nome_escola = $_POST['nome_escola'];
		$nome_diretor = $_POST['nome_diretor'];
		$localidade = $_POST['localidade'];
		$tipo_ensino = $_POST['tipo_ensino'];
		$usuario = $_POST['usuario'];

				$query = mysqli_query($conn ,"SELECT * FROM escola WHERE nome_de_escola = '$nome_escola'");
				if (mysqli_num_rows($query) < 1) {
					$senha = generateSenha();
					mysqli_query($conn, "INSERT INTO escola(polos, nome_de_escola, nome_do_diretor, localidade, tipo_de_ensino, usuario, senha) VALUES ('$polo', '$nome_escola', '$nome_diretor', '$localidade', '$tipo_ensino', '$nome_escola', '$senha')");
				}else{
					echo "
					<div class=\"alert alert-danger\" role=\"alert\">
					  Nome de escola já cadastrado, informação não inserida no banco de dados, por favor insira dados validos e não redundantes.
					</div>
				";
				}
		
			}

?>

<!DOCTYPE html>
<html>


<head>
	<title>Cadastro de Escolas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/login.css" />
</head>
<body>

	<header id="header">
				<div class="inner">
					<a href="index.php" class="logo">SGTE</a>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" >
				<div class="inner">
					<header class="major special">
						<h1>Cadastrar Escolas</h1>
						<p></p>
					</header>
					<form method="post">
						<div class="field half first ">
							<label>Polo</label>
		<select name="polo">
			<option>1</option>
			<option>2</option>
			<option>3</option>
		</select>
						</div>
						<div class="field half ">
								<label>Nome da Escola</label>
								<input type="text" name="nome_escola">
						</div>
						
						<div class="field half first">
								<label>Nome do Diretor</label>
								<input type="text" name="nome_diretor">
						</div>
						<div class="field half">
						<label>Localidade</label>
						<input type="text" name="localidade">
						</div>
						<div class="field half first">
						<label>Tipo de Ensino</label>
						<input type="text" name="tipo_ensino">
						</div>
						<div class="field half">
						<label></label>
						
						</div>
						
						<ul class="actions">
							<ul class="actions">
							<li><input type="submit" name="cad_escola" value="Cadastrar" class="alt" /></li>
						</ul>
						</div>
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
   					<p>A educação é um direito garantido na constituição federal a todos os brasileiros, proporcionando a todos um futuro melhor... <br>Segundo a lei maior do nosso país, é dever do e da sociedade garantir o cumprimento desse direito.</p>
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
