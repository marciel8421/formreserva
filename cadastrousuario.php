
<meta charset="utf-8">
<?php
 session_start();
 require 'config.php';
 if (!empty($_POST['email']) && !empty($_POST['senha'])) {
 	$nome = addslashes($_POST['nome']);
 	$email = addslashes($_POST['email']);
 	$senha = md5(addslashes($_POST['senha']));

 	$sql = $pdo->prepare("SELECT * FROM login WHERE nome = :nome AND email = :email AND senha = :senha");
 	$sql->bindValue(":nome",$nome);
 	$sql->bindValue(":email",$email);
 	$sql->bindValue(":senha",$senha);
 	$sql->execute();
 	if($sql->rowCount() == 0){
 		$sql = $pdo->prepare("INSERT INTO login (nome,email,senha) VALUES(:nome,:email, :senha)");
 		$sql->bindValue(":nome",$nome);
 		$sql->bindValue(":email",$email);
 		$sql->bindValue(":senha",$senha);
		$sql->execute();

		header("Location: cadastrousuario.php");
 	}else{
 	 echo "<script>alert('Já existe este usuário cadastrado!!'); window.location=index.php</script>";
 	}

 }
 ?>
 <?php 
 	require 'cabecalho.php';
 ?>
	 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Usuario</h5>
        
          
        
      </div>
    <div class="modal-body">
      <div >
      	<form method="POST">
	    <div class="form-group" >
			 	Nome:
			 	<input  class="form-control" type="text" name="nome">
				E-mail:
				<input   class="form-control"type="email" name="email"/>
				Senha:
				<input  class="form-control" type="password" name="senha"/><br>
				<input class="btn btn-primary btn-lg" type="submit" value="Cadastrar"/>
			 </form>
           
 
              </div>
            </div>
          </div>
        </div>
</body>

</html>    