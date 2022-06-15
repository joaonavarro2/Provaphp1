<?php 
	include "conecta.php";

	$id = 3;
	$title = "Novo";
	$descricao ="novo";

	$stmt = $conecta->prepare("UPDATE posts SET title= :TITLE, descricao= :DESCRICAO");

	$stmt->bindParam(":TITLE",$title);
	$stmt->bindParam(":DESCRICAO",$descricao);

	$stmt->execute();

	echo "Atualixado";


 ?>