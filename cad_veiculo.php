<?php
	include "assets/imports/import.php";
	$y = date("Y");

	if (isset($_POST['cad_veiculo'])) {
		$rota = $_POST['rota'];
		$turno = $_POST['turno'];
		$placa = $_POST['placa'];
		$combustivel = $_POST['combustivel'];
		$tipo_veiculo = $_POST['tipo_veiculo'];
		$ano = $_POST['ano'];
		$quilometragem = $_POST['quilometragem'];
		$tipo_empresa = $_POST['tipo_empresa'];
		$proprietario = $_POST['proprietario'];
		$motorista = $_POST['motorist'];



				$query = mysqli_query($conn ,"SELECT * FROM veiculo WHERE placa = '$placa'");
				if (mysqli_num_rows($query) < 1) {
					mysqli_query($conn, "INSERT INTO veiculo(rota, turno, placa, combustivel, tipo_de_veiculo, ano, quilometragem, tipo_de_empresa, propietario, motorista) VALUES ('$rota','$turno','$placa','$combustivel','$tipo_veiculo','$ano','$quilometragem','$tipo_empresa','$proprietario', '$motorista')");
						echo "
					<div class=\"alert alert-success\" role=\"alert\">
					  Cadastrado.
					</div>";
				}else{
					echo "
					<div class=\"alert alert-danger\" role=\"alert\">
					  Placa do veículo já cadastrada, informação não inserida no banco de dados, por favor insira dados validos e não redundantes.
					</div>
				";
				}
		
			}

?>
<!DOCTYPE html>
<html>


<head>
	<title>Cadastro de Veiculos</title>
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
						<h1>Cadastrar Veiculos</h1>
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
						<div class="field half">
						<label>Rota</label>
								<input type="text" name="rota">
												</div>
						
						<div class="field half first">
								<label>Turno</label>
		<select name="turno">
			<option>Manhã</option>
			<option>Tarde</option>
		</select>
						</div>
						<div class="field half">
						<label>Placa</label>
		<input type="text" name="placa">
						</div>

						<div class="field half first">
						<label>Combustivel</label>
		<select name="combustivel">
			<option>Diesel</option>
			<option>Gosolina Comum</option>
			<option>Gasolina Aditivada</option>
		</select>
						</div>
						<div class="field half ">
							<label>Tipo de Veículo</label>
		<select name="tipo_veiculo">
			<option>Ônibus</option>
			<option>Micro-Ônibus</option>
		</select>
						</div>
						<div class="field half first">
						<label>Ano</label>
			<select name="ano">
				<?php 
					for ($i=$y; $i > 0; $i--) { 
						echo "<option>".$i."</option>";
					}
				?>
			</select>
												</div>
						
						<div class="field half">
								<label>Quilometragem</label>
		<input type="text" name="quilometragem">
						</div>
						<div class="field half first">
						<label>Tipo de Empresa</label>
		<input type="text" name="tipo_empresa">
						</div>
						<div class="field half">
						<label>Proprietário</label>
		<input type="text" name="proprietario">
		</select>
						</div>
						<div class="field half first">
						<label>Motorista</label>
		<select name="motorist">
			<option>Nenhum</option>
			<?php 
				$queryMot = mysqli_query($conn ,"SELECT * FROM motorista ORDER BY id DESC");
				while ($mot = mysqli_fetch_array($queryMot)) {
					echo '
							<option>'.$mot['nome_do_motorista'].'</option>		
					';
				}
			?>
		</select> 
						</div>

						<div class="field half">
						<label></label>
						
						</div>
						
						<ul class="actions">
							<ul class="actions">
							<input type="submit" value="Cadastrar" name="cad_veiculo" class="alt" /></li>
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

