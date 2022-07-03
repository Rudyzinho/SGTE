<?php
		include "assets/imports/conexao.php";	

		date_default_timezone_set('America/Fortaleza');

		if (!isset($_COOKIE['id'])) {
		header("location: ./");
		}

		$data = date("d/m/Y");
		$turno = $_GET['turno'];

		$id = $_COOKIE['id'];

		$qq = mysqli_query($conn ,"SELECT * FROM escola WHERE id = '$id'");
		$qqid = mysqli_fetch_array($qq);


		$quem = mysqli_query($conn ,"SELECT * FROM trem WHERE escola = '".$qqid['nome_de_escola']."' && turno = '$turno' ORDER BY id ");
		while ($aff = mysqli_fetch_array($quem)) {

			$query = mysqli_query($conn ,"SELECT * FROM frequencia WHERE nome_motorista = '".$aff['motorista']."' && turno = '$turno' && data_da_frequencia = '$data'");
				if (mysqli_num_rows($query) < 1) {

				mysqli_query($conn, "INSERT INTO frequencia(escola ,nome_motorista, turno, presenca, data_da_frequencia) VALUES ('".$qqid['nome_de_escola']."' ,'".$aff['motorista']."', '$turno', 'Falta', '$data')");
				}
		}

		if(isset($_REQUEST['presenca']))
 			 {
 			 	$data = date("d/m/Y");
				$turno = $_GET['turno'];

		  	$presentes = $_REQUEST['presenca'];

		  		for ($i=0; $i < count($presentes); $i++) { 
		  			$qi = mysqli_query($conn, "SELECT * FROM motorista WHERE nome_do_motorista = '$presentes[$i]'");
						$arr = mysqli_fetch_array($qi);
							mysqli_query($conn, "UPDATE frequencia SET presenca = 'Presença' WHERE nome_motorista = '".$arr['nome_do_motorista']."' && turno ='$turno' && data_da_frequencia='$data'");
        }
        header("location: ./");
	}
	  	else
	  	{
	  		echo 'Nenhum motorista esteve presente';
	  		header("location: ./");
	  	}

?>
