<?php

try{
	$pdo = new PDO("mysql:dbname=rossett1_bancoverdanna;host=localhost","rossett1_marciel","xzsawq21");

}catch(PDOException $e){
	echo "ERRO:".$e->getMessage();
	exit;

}


?>