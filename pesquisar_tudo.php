	
<?php
	session_start();
	require 'config.php';

	if (empty($_SESSION['mmnlogin'])) {
		header("Location: login.php");
		exit;
	}

?>

 <?php 
 	require 'cabecalho.php';
 ?>
 <meta id="viewport" name="viewport" content="width=device-width,user-scalable=no">
<div class=" container-fluid">
	<h3>Pesquisar reserva</h3>
	<div class="container-fluid">
				<form method="POST" class="form-inline row">
    				<input class="form-control mr-sm-4" name="filtro_pesquisar" required  type="text">
    				
   				 	<button href="pesquisar_tudo.php"class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  				</form>
  			</div>	

	
			<?php
			$filtro_pesquisar = isset($_POST['filtro_pesquisar'])?$_POST['filtro_pesquisar']:"";
			
		
		
				print "<p>Resultados encontrados com a palavra <strong>'  $filtro_pesquisar  '.</strong></p><br>";
				
				
				
				?>
	<div class="table-responsive table-sm">
	<table class="table table-bordered table-hover  table-sm table">
		
		
	<tr>
		<th>Nome:</th>
		<th>Data:</th>
		<th>N° pessoas:</th>
		<th>Horario:</th>
		<th>Ações:</th>
	</tr>
	<?php 

	
	$sql = "SELECT * FROM clientes WHERE  nome  LIKE '%$filtro_pesquisar%' ORDER BY `data`ASC";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach ($sql->fetchAll() as $key => $clientes) {
				echo '<tr>';

				echo '<td>'.$clientes['nome'].'</td>';
				echo '<td>'.$clientes['data'].'</td>';
				echo '<td>'.$clientes['num_pessoas'].'</td>';
				echo '<td>'.$clientes['horario'].'</td>';
				echo '<td> <div  class="container btn-group"  >
							<a class="btn btn-outline-primary pequeno" href="editar_reserva.php?id='.$clientes['id'].'">
							Editar</a><br> <a class="btn btn-outline-danger pequeno " href="excluir_reserva.php?id='.$clientes['id'].'">Excluir</a>
				 			</div?
				 			</td>';
 				
 				echo '</tr>';
		}
	}
	?>
	
		</div>

	</table>
</div>
</div>


	