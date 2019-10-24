<?php 
 	require 'cabecalho.php';
 ?>
 <?php
	session_start();
	require 'config.php';

	$id = 0;


	if (isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
}
	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
 		$data = addslashes($_POST['data']);
 		$num_pessoas = addslashes($_POST['num_pessoas']);
 		$horario = addslashes($_POST['horario']);
 		$telefone = addslashes($_POST['telefone']);
 		$telefone2 = addslashes($_POST['telefone2']);
 		
 		$observacoes = addslashes($_POST['observacoes']);

 		$sql = "UPDATE clientes SET nome = '$nome' , data = '$data' , num_pessoas = '$num_pessoas' , horario = '$horario' , telefone = '$telefone' , telefone2 = '$telefone2' ,  observacoes = '$observacoes' WHERE id = '$id'";
 		$sql = $pdo->query($sql);

 		 echo "<script>alert('Atualizado com sucesso!'); window.location=index.php</script>";
 		header("Location: pesquisar_tudo.php");

	}

	
		$sql = "SELECT * FROM clientes WHERE id = '$id'";
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0){
			$dado = $sql->fetch();

		}	
?>
 
	<div class="container col-md-4">
	<h3>Editar <small>reserva</small></h3>

	<hr>
	
        <form method="POST">
	    <div class="form-group" >
		Nome:
		<input id="nome" class="form-control " type="text" name="nome" value="<?php echo $dado['nome']?>">
		Data: 
		<input class="form-control" id="data" type="date" name="data"value="<?php echo $dado['data']?>">
	
		Número de pessoas;
		<input class="form-control"type="number" name="num_pessoas"value="<?php echo $dado['num_pessoas']?>">
		Horário:
		<input class="form-control" type="time" name="horario"value="<?php echo $dado['horario']?>">
		Telefone:
		<input class="form-control"type="int" name="telefone"value="<?php echo $dado['telefone']?>">
		Telefone:
		<input class="form-control"type="int" name="telefone2"value="<?php echo $dado['telefone2']?>">
		
		 Observações:<br>
		 <textarea class="form-control" name="observacoes" value=""><?php echo $dado['observacoes']?></textarea><br>

		 <input class="btn btn-primary "type="submit"  value="Atualizar">

	

	</form>
</div>

</div>
	


<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>