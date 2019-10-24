
<!-- Modal login-->
<?php
 session_start();
 require 'config.php';
 if (!empty($_POST['email'])) {
  $email = addslashes($_POST['email']);
  $senha = MD5(addslashes($_POST['senha']));

  $sql = $pdo->prepare("SELECT * FROM login WHERE email = :email AND senha = :senha");
  $sql->bindValue(":email",$email);
  $sql->bindValue(":senha",$senha);
  $sql->execute();

  if ($sql->rowCount() > 0) {

    $sql = $sql->fetch();
    $_SESSION['mmnlogin'] = $sql['id'];

    header("Location: index.php");

  
  }else{
    
    echo"<br><div class='alert alert-danger container' role='alert'>Usuario ou senha incorretos.</div>";
  }
  
 }

?>
<?php 
  require 'cabecalho.php';
 ?>


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        
          
        
      </div>
    <div class="modal-body">
      <div >
           
  <form method="POST">
      <div class="form-group" >
  E-mail:
  <input class="form-control" type="email" name="email"/>
  Senha:
  <input class="form-control" type="password" name="senha"/><br>
  <input class="btn btn-primary btn-lg" type="submit" value="  Entrar  "/>
  <a class="btn btn-primary btn-lg"href="senhaentrar.php" >Cadastrar</a>
</div>
</form>
              </div>
            </div>
          </div>
        </div>
     

</body>
</html>


