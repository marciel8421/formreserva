<?php
	session_start();
	require 'config.php';

	if (empty($_SESSION['mmnlogin'])) {
		header("Location: login.php");
		exit;
	}

?>

 <?php 
 	require 'cabecalhopesquisar.php';
 ?>
 <meta id="viewport" name="viewport" content="width=device-width,user-scalable=no">
<div class=" container">
	<h3>Pesquisar reserva</h3>
	
			<?php
			$filtro = isset($_POST['filtro'])?$_POST['filtro']:"";
			$filtro2 = isset($_POST['filtro2'])?$_POST['filtro2']:"";
			$horario1 = isset($_POST['hora1'])?$_POST['hora1']:"";
			$horario2 = isset($_POST['hora2'])?$_POST['hora2']:"";
		
		
				print "<h4>Resultados encontrados entre as datas <strong> $filtro</strong> e <strong>$filtro2</strong>e horários  -<strong> $horario1</strong> e <strong>$horario2</strong> hs.</h4><br>";
				
				
				
				?>
	<div class="table-responsive table-sm">
	<table class="table table-bordered table-hover  table-sm table">
		
	<tr>
		<th>Nome:</th>
		<th>N° pessoas:</th>
		<th>Horario:</th>
		<th>Tipo de Evento:</th>
		<th>Forma pagamento:</th>
		<th>N° mesa:</th>
	
	</tr>
	<?php 

	$sql = "SELECT * FROM clientes WHERE  data BETWEEN '$filtro' AND '$filtro2' AND horario BETWEEN '$horario1' AND '$horario2'ORDER BY `data`ASC";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $key => $clientes) {
				echo '<tr>';
				echo '<td>'.$clientes['nome'].'</td>';
				echo '<td>'.$clientes['num_pessoas'].'</td>';
				echo '<td>'.$clientes['horario'].'</td>';
				echo '<td>'.$clientes['tipo_evento'].'</td>';
				echo '<td>'.$clientes['forma_pagamento'].'</td>';
				echo '<td></td>';
 				
 				echo '</tr>';
		}
	}
	?>
	
</table>
</div>
</div>