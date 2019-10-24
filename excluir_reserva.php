<?php 
 	require 'cabecalho.php';
 ?>
 <?php
	session_start();
	require 'config.php';

	if (empty($_SESSION['mmnlogin'])) {
		header("Location: login.php");
		exit;
	}

?>

 
<?php 

require 'config.php';

if (isset($_GET['id']) && empty($_GET['id']) == false) {

		$id = addslashes($_GET['id']);
		$sql = "DELETE FROM clientes WHERE id = '$id'";
		$pdo->query($sql);

		echo"<br><div class='alert alert-danger container' role='alert'>Usuario deletado com sucesso!</div>";
			    


}else{
	header("Location: index.php");
}

 ?>
