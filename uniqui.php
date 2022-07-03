<?php
	include "assets/imports/import.php";

	if (!isset($_COOKIE['hash'])) {
	header("location: ./");
	}
	$id = $_GET['id'];

	$qqisso = mysqli_query($conn, "SELECT * FROM escola WHERE id = '$id'");
	$qiso = mysqli_fetch_array($qqisso);

	$data_atual = date("d/m/Y");
	$data = $_GET['data'];
	$turno = $_GET['turno'];
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
					<li><a href="menu.php">Home</a></li>
					<li><a href="uniqui.php?id=<?php echo $id ?>&turno=<?php echo 'manhã' ?>&data=<?php echo $data ?>">Manhã</a></li>
					<li><a href="uniqui.php?id=<?php echo $id ?>&turno=<?php echo 'tarde' ?>&data=<?php echo $data ?>">Tarde</a></li>
					<li><a href="sair.php">Sair</a></li>
					<?php
					$queryESC = mysqli_query($conn ,"SELECT DISTINCT data_da_frequencia FROM frequencia ORDER BY id DESC");
							while ($arrE = mysqli_fetch_array($queryESC)) {	 
									echo '<div>
								<div class="content">
									<header>
										<li><button><a href="uniqui.php?id='.$id.'&data='.$arrE['data_da_frequencia'].'" style="text-decoration: none;"><h2>'.$arrE['data_da_frequencia'].'</h2></a></button><li>
									</header>
								</div>
						</div>';
								}
								?>
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
						if($turno != ""){
							$queryESC = mysqli_query($conn ,"SELECT * FROM frequencia WHERE  escola = '".$qiso['nome_de_escola']."' && turno = '$turno' && data_da_frequencia = '$data' ORDER BY id DESC");
							while ($arrE = mysqli_fetch_array($queryESC)) {	
									echo '<div>
							<div class="box">
								<div class="content">
									<header class="align-center">
										<p></p>
										<h2>'.$arrE['nome_motorista'].'</h2>
									</header>
									<h1>Situação</h1><p>'.$arrE['presenca'].'</p>
									<h1>Turno</h1><p>'.$arrE['turno'].'</p>
									<h1>Data</h1><p>'.$arrE['data_da_frequencia'].'</p>
								</div>
							</div>
						</div>';

									}
								}else{
									$queryESC = mysqli_query($conn ,"SELECT * FROM frequencia WHERE  escola = '".$qiso['nome_de_escola']."' && data_da_frequencia='$data' ORDER BY id DESC");
							while ($arrE = mysqli_fetch_array($queryESC)) {	
									echo '<div>
							<div class="box">
								<div class="content">
									<header class="align-center">
										<p></p>
											<h2>'.$arrE['nome_motorista'].'</h2>
									</header>
									<h1>Situação</h1><p>'.$arrE['presenca'].'</p>
									<h1>Turno</h1><p>'.$arrE['turno'].'</p>
									<h1>Data</h1><p>'.$arrE['data_da_frequencia'].'</p>
								</div>
							</div>
						</div>';
								}
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