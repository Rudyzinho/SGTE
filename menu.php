<?php
	include "assets/imports/import.php";

	if (!isset($_COOKIE['id']) && !isset($_COOKIE['hash'])) {
	header("location: ./");
	}
	$hash = $_COOKIE['hash'];
	$id = $_COOKIE['id'];
	$queryADM = mysqli_query($conn, "SELECT * FROM adm WHERE hash = '$hash'");
	$queryESC = mysqli_query($conn, "SELECT * FROM escola WHERE id = '$id'");
	$arrADM = mysqli_fetch_array($queryADM);
	$arrESC = mysqli_fetch_array($queryESC);
	
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
					<li><a href="menu.php">
						<?php
							if(isset($_COOKIE['hash'])){
								echo $arrADM['usuario'];
							}else{
								echo $arrESC['usuario'];
							}

						?>
					</a></li>
					<li><a href="menu.php">Home</a></li>
					<?php if (isset($_COOKIE['id'])) {
						echo '
					<li><a href="frequencia.php">Frequência</a></li>';}
					?>
					<li><a href="sair.php">Sair</a></li>
				</ul>
			</nav>
		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							
						</header>
					</div>
				</article>
					</div>
				</article>
			</section>
	
		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<?php 

					if (isset($_COOKIE['hash'])) {
						echo'
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic01.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de escolas</h2>
									</header>
									<p> Aqui contém um formulario, onde você, o administrador irá cadastrar as escolas</p>
									<footer class="align-center">
										<a href="cad_escola.php" class="button alt">Cadastrar escolas</a>
									</footer>
								</div>
							</div>
						</div>
						

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de veiculos</h2>
									</header>
									<p> Aqui contém um formulario, onde você, o administrador irá cadastrar os veiculos</p>
									<footer class="align-center">
										<a href="cad_veiculo.php" class="button alt">Cadastrar Veiculos</a>
									</footer>
								</div>
							</div>
						</div>
<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de Motorista</h2>
									</header>
									<p> Aqui contém um formulario, onde você, o administrador irá cadastrar os motoristas</p>
									<footer class="align-center">
										<a href="cad_motorista.php" class="button alt">Cadastrar Motoristas</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de Monitor</h2>
									</header>
									<p> Aqui contém um formulario, onde você, o administrador irá cadastrar os monitores</p>
									<footer class="align-center">
										<a href="cad_monitor.php" class="button alt">Cadastrar Monitores</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/escolas.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Escolas</h2>
									</header>
									<p> Aqui você pode ver todas as escolas cadastradas.</p>
									<footer class="align-center">
										<a href="escolas.php" class="button alt">Entrar</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/bg.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Rotas dos Motoristas</h2>
									</header>
									<p> Aqui você informa a rota e as escolas de cada motorista.</p>
									<footer class="align-center">
										<a href="trem.php" class="button alt">Entrar</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/fon.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Visualizar frequência</h2>
									</header>
									<p> Aqui você pode visualizar as frequências dos motoristas.</p>
									<footer class="align-center">
										<a href="vfe.php" class="button alt">Entrar</a>
									</footer>
								</div>
							</div>
						</div>
						';}
						if ($arrADM['usuario'] == "admin") {
							echo'
					<div>
							<div class="box">
								<div class="image fit">
									<img src="images/i/master_key.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de Administrador</h2>
									</header>
									<p> Aqui contém um formulario, onde você, o Master Admin irá cadastrar os Administradores</p>
									<footer class="align-center">
										<a href="cad_adm.php" class="button alt">Cadastrar Administradores</a>
									</footer>
								</div>
							</div>
						</div>';
					}

					if (isset($_COOKIE['id'])) {
						echo'
						 <div>
							<div class="box">
								<div class="image fit">
									<img src="images/frequencia.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de Frequência</h2>
										<h4>Manhã</h4>
									</header>
									<p> Aqui contém um formulario, onde você, a escola irá cadastrar a frequência da manhã</p>
									<footer class="align-center">
										<a href="menuesco.php?turno=manhã" class="button alt">Entrar</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/frequencia.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>Cadastro de Frequência</h2>
										<h4>Tarde</h4>
									</header>
									<p> Aqui contém um formulario, onde você, a escola irá cadastrar a frequência da tarde</p>
									<footer class="align-center">
										<a href="menuesco.php?turno=tarde" class="button alt">Entrar</a>
									</footer>
								</div>
							</div>
						</div>
						';
					}
						?>
					</div>
				</div>
			</section>

		<!-- Two -->

		<!-- Three -->

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Estagiários EEEP 2019. TODOS OS DIREITOS RESERVADOS, PLÁGIO É CRIME.
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