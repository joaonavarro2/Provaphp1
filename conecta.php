<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "atividade";
        
        try {
        	$conecta = new PDO("mysql:host=" . $host . "; dbname=" . $database, $user, $pass);
        	//echo "SUcesso";
        } catch (Exception $e) {
        	echo "Error $e";
        }

 ?>