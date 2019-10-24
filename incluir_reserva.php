
<?php
	session_start();
	require 'config.php';

	  if (!empty($_POST['nome']) && !empty($_POST['num_pessoas'])) {
 	$nome = addslashes($_POST['nome']);
 	$data = addslashes($_POST['data']);
 	$num_pessoas = addslashes($_POST['num_pessoas']);
 	$horario = addslashes($_POST['horario']);
 	$telefone = addslashes($_POST['telefone']);
 	$telefone2 = addslashes($_POST['telefone2']);
 	$tipo_evento = addslashes($_POST['tipo_evento']);
 	$forma_pagamento = addslashes($_POST['forma_pagamento']);
 	$observacoes = addslashes($_POST['observacoes']);
 	

 	

 	$sql = "INSERT INTO clientes SET nome = '$nome', data = '$data', num_pessoas = '$num_pessoas', horario = '$horario', telefone = '$telefone', telefone2 = '$telefone2', tipo_evento = '$tipo_evento', forma_pagamento = '$forma_pagamento', observacoes = '$observacoes'";
	$pdo->prepare($sql);

	echo "Cadastrado com sucesso!";

	//header("Location: index.php");
}

/*
 	$sql->bindValue(":nome",$nome);
 	$sql->bindValue(":data",$data);
 	$sql->bindValue(":num_pessoas",$num_pessoas);
 	$sql->bindValue(":horario",$horario);
 	$sql->bindValue(":telefone",$telefone);
 	$sql->bindValue(":telefone2",$telefone2);
 	$sql->bindValue(":tipo_evento",$tipo_evento);
 	$sql->bindValue(":forma_pagamento",$forma_pagamento);
 	$sql->bindValue(":observacoes",$observacoes);

 	$sql->execute();
 	if($sql->rowCount() == 0){
 		$sql = $pdo->prepare("INSERT INTO clientes SET nome = '$nome', data = '$data', num_pessoas = '$num_pessoas', horario = '$horario', telefone = '$telefone', telefone2 = '$telefone2', tipo_evento = '$tipo_evento', forma_pagamento = '$forma_pagamento', observacoes = '$observacoes'");
 		$sql->bindValue(":nome",$nome);
 		$sql->bindValue(":data",$data);
 		$sql->bindValue(":num_pessoas",$num_pessoas);
 		$sql->bindValue(":horario",$horario);
 		$sql->bindValue(":telefone",$telefone);
 		$sql->bindValue(":telefone2",$telefone2);
 		$sql->bindValue(":tipo_evento",$tipo_evento);
 		$sql->bindValue(":forma_pagamento",$forma_pagamento);
 		$sql->bindValue(":observacoes",$observacoes);
		$sql->execute();

		header("Location: index.php");
 	}else{
 		echo "Já existe este usuário cadastrado!";
 	}

 }
 */

?>
 <?php 
 	require 'cabecalho.php';
 ?>
	<div  class="container col-md-8"style="background-color: #FFFAF0 ;margin-top: 15px; border:1px solid black;border-radius: 10px;">
		<br>
		<br>
	<h3>Formulário <small>Reserva</small></h3>

	<hr>
	<div class="container col-md-4" >
        <form method="POST">
			 
						Nome:
						<input id="nome" class="form-control" type="text" name="nome">
						Data: 
						<input class="form-control" id="data" type="date" name="data">
					
						Número de pessoas;
						<input class="form-control"type="number" name="num_pessoas">
						Horário:
						<input class="form-control" type="time" name="horario">
						Telefone:
						<input class="form-control"type="phone" name="telefone1">
						Telefone:
						<input class="form-control"type="phone" name="telefone2">
						Tipo de Evento:

				<select class="form-control">

					 <option class="form-control" value=""></option>	
			 		 <option class="form-control" value="aniversario">Aniversário</option>
			 		 <option class="form-control"value="formatura">Formatura</option>
			 		 <option class="form-control" value="casamento">Casamento</option>
			 		 <option class="form-control"value="confraternizacao">Confraternização</option>

				 </select><br>
					 Forma de pagamento:
				<select class="form-control">
					 <option class="form-control" value=""></option>
			 		 <option class="form-control"value="unica">Única</option>
			 		 <option class="form-control"value="individual">Individual</option>
			 		 <option class="form-control"value="unica_individual">Única (rod) Individual (beb)</option>
			 		 <option class="form-control"value="outros">Outros</option>

				 </select>
						 Observações:<br>
						 <textarea class="form-control"></textarea><br>

						 <input class="btn btn-primary "type="submit" name="enviar" value="Enviar">
			</form>		
	

	
	</div>

</div>
</div>
	



</body>
</html>