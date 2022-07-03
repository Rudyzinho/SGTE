<?php
	include "assets/imports/import.php";

	if (isset($_POST['cad_motorista'])) {
		$tel = $_POST['tel'];
		$nome = $_POST['nome'];

				$query = mysqli_query($conn ,"SELECT * FROM motorista WHERE nome_do_motorista = '$nome'");
				if (mysqli_num_rows($query) < 1) {
						$query = mysqli_query($conn ,"SELECT * FROM motorista WHERE telefone = '$tel'");
							if (mysqli_num_rows($query) < 1) {
					mysqli_query($conn, "INSERT INTO motorista(nome_do_motorista, telefone) VALUES ('$nome','$tel')");
						echo "
					<div class=\"alert alert-success\" role=\"alert\">
					  Cadastrado.
					</div>";
					}else{
						echo "
					<div class=\"alert alert-danger\" role=\"alert\">
					  Telefone do motorista já cadastrado, informação não inserida no banco de dados, por favor insira dados validos e não redundantes.
					</div>";
					}
				}else{
					echo "
					<div class=\"alert alert-danger\" role=\"alert\">
					  Nome do motorista já cadastrado, informação não inserida no banco de dados, por favor insira dados validos e não redundantes.
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
							<label>Telefone</label>
		<input type="text" name="tel">
						</div>
						<div class="field half ">
								<label>Nome do Motorista</label>
		<input type="text" name="nome">
						</div>
						
					
						<div class="field half">
						<label></label>
						
						</div>
						
						<ul class="actions">
							<ul class="actions">
							<li><input type="submit" value="Cadastrar" name="cad_motorista" class="alt"></li>
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

