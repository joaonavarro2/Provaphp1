<?php 
	include "conecta.php";

    $stmt = $conecta->prepare("DELETE  FROM posts WHERE id= :id");

	$id = 1;

	$stmt->bindParam(":id",$id);

	$stmt->execute();

	echo "Deletado";
 ?>