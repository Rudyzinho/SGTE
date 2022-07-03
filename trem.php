<?php
  
  
  include "assets/imports/conexao.php";

  if (isset($_POST['cadastrar'])) {
    $turno = $_POST['turno'];
    $rota = $_POST['rota'];
    $escola = $_POST['escola'];
    $motorista = $_POST['motorista'];
    

    $qqui = mysqli_query($conn ,"SELECT * FROM trem WHERE motorista = '$motorista' && turno = '$turno' && escola = '$escola' && rota = '$rota'");
        if (mysqli_num_rows($qqui) < 1) {

    if (($turno != "") && ($rota != "") && ($escola != "") && ($motorista != "")) {
      $query = mysqli_query($conn,"INSERT INTO trem (turno, rota, escola, motorista) VALUES ('$turno', '$rota', '$escola', '$motorista')");
    }
    else{
      echo "<script>alert('Algum dos dados não foi informado!')</script>";
    }
  }
}


?>

<!DOCTYPE HTML>
<!--

-->
<html>
	<head>
		<title>SGTE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
    <link rel="stylesheet" href="assets/css/nsei.css"/>
		<link rel="stylesheet" href="assets/css/menu.css"/>

  
		
	</head>

	</script>
	<body>

		<!-- Header -->
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
					</header>
				</div>
        <center>
     
        	    <form method="post">
        	    	
      <table class="ccp">
	 	
  <thead>
  	<tr>
      <th>Turno</th>
      <th> Rota</th>
      <th>Escola</th>
      <th>Mororista</th>
    </tr>
  	
  </thead>
  <tbody>
    <tr>
    <td data-label='Turno'>
    <select name="turno">
    	<option>
      	</option>
      	<option>
			Manhã
      	</option>
      	<option>
      		Tarde
      	</option>
    </select>
      </td>
      <td data-label='Rota'>
    <select name="rota">
    	<option>
      	</option>
      	<?php
		$r = mysqli_query($conn ,"SELECT * FROM veiculo ORDER BY id ");
			while ($arr = mysqli_fetch_array($r)) {
				echo "
      	<option>
				".$arr['rota']."
      	</option>
        ";
    }
        ?>
    </select>
      </td>
      <td data-label='Escola'>
      <select name='escola'>
      	<option>
      	</option>
      	<?php
		$e = mysqli_query($conn ,"SELECT * FROM escola ORDER BY id ");
			while ($arre = mysqli_fetch_array($e)) {
				echo "
      	<option>
				".$arre['nome_de_escola']."
      	</option>
        ";
    }
        ?>
    </select>
      </td>
      <td data-label='Nome do motorista'>
      <select name='motorista'>
      	<option>
      	</option>
      	<?php
		$m = mysqli_query($conn ,"SELECT nome_do_motorista FROM motorista ORDER BY id ");
			while ($arrm = mysqli_fetch_array($m)) {
				echo "
      	<option>
				".$arrm['nome_do_motorista']."
      	</option>
        ";
    }
        ?>
    </select>
      </td>
  </tbody>
</table>
<input type='submit' name='cadastrar' value="Add+">
</form>
  
                </center>
<section id="one" class="wrapper style2">
        <div class="inner">
          <div class="grid-style">
            <?php 
              $qli = mysqli_query($conn ,"SELECT * FROM trem ORDER BY id DESC");
              while ($arr = mysqli_fetch_array($qli)) { 
                  echo '<div>
              <div class="box">
                <div class="content">
                  <header class="align-center">
                    <p></p>
                    <h2>'.$arr['id'].'</h2>
                  </header>
                  <h1>Escola</h1><p>'.$arr['escola'].'</p>
                  <h1>Motorista</h1><p>'.$arr['motorista'].'</p>
                  <h1>Rota</h1><p>'.$arr['rota'].'</p>
                  <h1>Turno</h1><p>'.$arr['turno'].'</p>
                </div>
              </div>
            </div>';

            }
            ?>
          </div>
        </div>
      </section>

<!-- dribbble -->
</section>


		</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>




