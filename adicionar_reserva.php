

<?php
 session_start();
 require 'config.php';

if (empty($_SESSION['mmnlogin'])) {
	header("Location: login.php");
	exit;
	}
 if (!empty($_POST['nome']) && !empty($_POST['data'])) {
 	$nome = addslashes($_POST['nome']);
 	$data = addslashes($_POST['data']);
 	$num_pessoas = addslashes($_POST['num_pessoas']);
 	$horario = addslashes($_POST['horario']);
 	$telefone = addslashes($_POST['telefone']);
 	$telefone2 = addslashes($_POST['telefone2']);
 	$tipo_evento = addslashes($_POST['tipo_evento']);
 	$forma_pagamento = addslashes($_POST['forma_pagamento']);
 	$observacoes = addslashes($_POST['observacoes']);

 	

$sql =  $pdo->prepare("SELECT * FROM clientes WHERE nome = :nome AND data = :data AND num_pessoas = :num_pessoas AND horario = :horario AND telefone = :telefone AND telefone2 = :telefone2 AND tipo_evento = :tipo_evento AND forma_pagamento = :forma_pagamento AND observacoes = :observacoes");

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
 		$sql = $pdo->prepare("INSERT INTO clientes (nome,data,num_pessoas,horario,telefone,telefone2,tipo_evento,forma_pagamento,observacoes) VALUES(:nome,:data, :num_pessoas,:horario,:telefone,:telefone2,:tipo_evento,:forma_pagamento,:observacoes)");
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


		
			  echo "<script>alert('Cadastrado com Sucesso!'); window.location=index.php</script>";

 	}else{
 		 echo "<script>alert('Já existe este usuário cadastrado!'); window.location=index.php</script>";
 	}

 }
 ?>
 <?php 
 	require 'cabecalho.php';
 ?>
<div class="container col-md-6">
	<h3>Cadastro <small>Reserva</small></h3>

	<hr>



  <form  method="POST">
	   
	    	
   				 
			 			Nome:
						<input id="nome" class="form-control" type="text" name="nome" placeholder="Digite o nome">
				 	
						Data: 
						<input class="form-control" id="data" type="date" name="data">
				  
						Número de pessoas;
						<input class="form-control"type="number" name="num_pessoas" placeholder="Digite quantidade de pessoas">
							
						Horário:
						<input class="form-control" type="time" name="horario">
						 
						Telefone:
						<input class="form-control"type="number" name="telefone" placeholder="Digite um nùmero de telefone">
							
						Telefone:
						<input class="form-control"type="number" name="telefone2" placeholder="Digite um nùmero de telefone">
						
						Tipo de Evento:

				<select name="tipo_evento"class="form-control">

					 <option class="form-control" value="" ></option>	
			 		 <option class="form-control" value="aniversario">Aniversário</option>
			 		 <option class="form-control"value="formatura">Formatura</option>
			 		 <option class="form-control" value="casamento">Casamento</option>
			 		 <option class="form-control"value="confraternizacao">Confraternização</option>

				 </select>
				 	
					 Forma de pagamento:
				<select name="forma_pagamento" class="form-control">
					 <option class="form-control" value=""></option>
			 		 <option class="form-control"value="unica">Única</option>
			 		 <option class="form-control"value="individual">Individual</option>
			 		 <option class="form-control"value="unica_individual">Única (rod) Individual (beb)</option>
			 		 <option class="form-control"value="outros">Outros</option>

				 </select>
				
						 Observações:
						 <textarea name="observacoes" class="form-control" placeholder="Digite se houver aguma observação"></textarea><br>

						 <input class="btn btn-primary "type="submit" name="enviar" value="Enviar">

			 </form>
	    
   </div>	
</body>

</html>    