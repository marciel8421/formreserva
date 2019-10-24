<?php 
  require 'cabecalho.php';
 ?>


<?php
 session_start();
 require 'config.php';
 if (!empty($_POST['senha'])) {
 	
 	$senha = MD5(addslashes($_POST['senha']));

 	$sql = $pdo->prepare("SELECT * FROM login WHERE senha = :senha");
 	$sql->bindValue(":senha",$senha);
 	$sql->execute();

 	if ($sql->rowCount() > 0) {

 		$sql = $sql->fetch();
 		$_SESSION['mmnlogin'] = $sql['id'];

 		header("Location: cadastrousuario.php");

 	
 	}else{
 		
  				
			  
         echo"<br><div class='alert alert-danger container' role='alert'>Senha incorreta.
        Você não tem permissão para cadastrar usuário!</div>";
 	}
 	
 }

?>

 


 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Senha para cadastrar</h5>
        
          
        
      </div>
    <div class="modal-body">
      <div >
      	<form method="POST">
<div class="form-group"  class="container col-md-4">
		<br>

	Senha:<br><br>
	<input class="form-control"type="password" autofocus name="senha"placeholder="Digite a senha para cadastrar novo usuário."/><br><br>
	<input class="btn btn-primary btn-lg"type="submit" value="Entrar"/><br><br>
</div>
</form>
      	
              </div>
            </div>
          </div>
        </div>
</body>
</html>