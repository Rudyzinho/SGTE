<?php
  
  date_default_timezone_set('America/Fortaleza');
  
  include "assets/imports/conexao.php";

  $id = $_COOKIE['id'];
  $quiz = mysqli_query($conn, "SELECT * FROM escola WHERE id = '$id'");
  $ccp = mysqli_fetch_array($quiz);

  $turno = $_GET['turno'];


  


?>

<!DOCTYPE HTML>
<!--

-->
<html>
	<head>
		<title>Frequência <?php echo $turno; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
		<link rel="stylesheet" href="assets/css/nsei.css"/>

  
		
	</head>

	</script>
	<body>

		<!-- Header -->
			<header id="header">
				<div>
					<a href="index.php" class="logo">SGTE</a>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		

		<!-- Main -->
			<section id="main" >
				<div class="inner">
				</div>
        <center>
     
        	    <form method="post" action="frequencia.php?turno=<?php echo $turno ?>">
        	    	
      <table class="ccp">

          <br><br>
	 	
  <thead>
  	<tr>
      <th>Nome</th>
      <th>Presença</th>
    </tr>
  	<?php
			$queryfre = mysqli_query($conn ,"SELECT * FROM trem WHERE escola = '".$ccp['nome_de_escola']."' && turno = '$turno' ORDER BY id ");
			while ($arrf = mysqli_fetch_array($queryfre)) {
				echo "<div class='noticia' align='left'>
			
  </thead>
  <tbody>
    <tr>
      <td data-label='Nome do motorista'>
        ".$arrf['motorista']."
      </td>
      <td data-label='Nome do motorista'>
        <label class='switch-wrap'><input type='checkbox' name='presenca[]' value='".$arrf['motorista']."' checked>
        <div class='switch'></div>
      </td>
    	";}
		?>
  </tbody>
</table>
<input type='submit' name='cadastrar' value="cadastrar">
</form>
  
                </center>

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




