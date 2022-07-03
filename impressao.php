<?php
	include "assets/imports/import.php";
	
	date_default_timezone_set('America/Fortaleza');

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
		<title><?php echo $data; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/menu.css" />
	</head>
	<script type="text/javascript">
			function Free() {
		    window.print();
			}
		</script>
	<body onmousedown="Free()">

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
									$queryESC = mysqli_query($conn ,"SELECT * FROM frequencia WHERE  escola = '".$qiso['nome_de_escola']."' && data_da_frequencia='$data' ORDER BY id");
										echo '
											<table>
											<tr>
											<td><b>'.$qiso['nome_de_escola'].'</td>
											<td><b>'.$data.'</td>
											<td></td>
											</tr>
												<tr>
											<td><b>Nome</td>
											<td><b>Situação</td>
											<td><b>Turno</td>
											</tr>';
							while ($arrE = mysqli_fetch_array($queryESC)) {	
									echo '
											<tr>
											<td>'.$arrE['nome_motorista'].'</td>
											<td>'.$arrE['presenca'].'</td>
											<td>'.$arrE['turno'].'</td>
											</tr>
											';
								}
									echo '</table>';
							}
						}
						?>
					</div>
				</div>
			</section>

	</body>
</html>