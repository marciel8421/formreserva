<?php
	session_start();
	require 'config.php';

	if (empty($_SESSION['mmnlogin'])) {
		header("Location: login.php");
		exit;
	}

?>

 <?php 
 	require 'cabecalho_pesquisar_data.php';
 ?>
 <meta id="viewport" name="viewport" content="width=device-width,user-scalable=no">
<div class=" container-fluid">
	<h3>Pesquisar reserva</h3>
	
			<?php
			$filtro = isset($_POST['filtro'])?$_POST['filtro']:"";
			
		
		
				print "<h4>Resultados encontrados na data <strong> $filtro </strong> das 18:00 às 23:59 hs</h4><br>";
				
				
				
				?>
	<div class="table-responsive table-sm">
	<table class="table table-bordered table-hover  table-sm table">
		
		
		
	<tr>
		<th>Nome:</th>
		<th>Data:</th>
		<th>N° pessoas:</th>
		<th>Horario:</th>
		<th>Telefone:</th>
		<th>Telefone:</th>
		<th>Tipo de Evento:</th>
		<th>Forma pagamento:</th>
		<th>Obs:</th>
		<th>Data Emissão:</th>
		<th>Ações:</th>
		 
 	
	</tr>
	<?php 


	$sql = "SELECT * FROM clientes WHERE  data ='$filtro' AND   horario BETWEEN '18:00:00' AND '23:59:00' ORDER BY `data`ASC";
	
	//$sql = "SELECT * FROM clientes WHERE  data = '$filtro' ORDER BY `data`ASC";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $key => $clientes) {
				echo '<tr>';

				echo '<td>'.$clientes['nome'].'</td>';
				echo '<td>'.$clientes['data'].'</td>';
				echo '<td>'.$clientes['num_pessoas'].'</td>';
				echo '<td>'.$clientes['horario'].'</td>';
				echo '<td>'.$clientes['telefone'].'</td>';
				echo '<td>'.$clientes['telefone2'].'</td>';
				echo '<td>'.$clientes['tipo_evento'].'</td>';
				echo '<td>'.$clientes['forma_pagamento'].'</td>';
				echo '<td>'.$clientes['observacoes'].'</td>';
				echo '<td>'.$clientes['data_emissao'].'</td>';
				echo '<td> <div  class="btn-group" >
							<a class="btn btn-primary pequeno" href="editar_reserva.php?id='.$clientes['id'].'">
							Editar</a><br> <a class="btn btn-danger pequeno " href="excluir_reserva.php?id='.$clientes['id'].'">Excluir</a>
				 			</div?
				 			</td>';
 				
 				echo '</tr>';
		}
	}
	?>
	
</div>

<?php 

	$sql = "SELECT SUM(num_pessoas) FROM clientes WHERE  data = '$filtro'AND horario BETWEEN '18:00:00' AND '23:59:00' ORDER BY `data`ASC";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach ($sql->fetch() as $key => $total) {
				
	echo "<th>Total=$total</th>";
				
				
		}
	}
	?>
	</table>
</div>
</div>