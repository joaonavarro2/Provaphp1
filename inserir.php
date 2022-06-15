<?php 
	include "conecta.php";

	$title = $_POST['title'];
	$descricao = $_POST['descricao'];

	$stmt = $conecta->prepare("INSERT INTO posts(title,descricao)VALUES (:TITLE, :DESCRICAO)");

	$stmt->bindParam(":TITLE",$title);
	$stmt->bindParam(":DESCRICAO",$descricao);

	$stmt->execute();

	echo "enviado";

 ?>