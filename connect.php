<?php

	try {
		global $pdo;
		
		$db_name = "comentarios_resposta";//nome do banco de dados
		$db_host = "localhost";
		$db_user = "root";//nome do usuário
		$db_password = "";

		$pdo = new PDO("mysql:dbname=$db_name;localhost=$db_host", $db_user, $db_password);

	} catch(PDOException $e) {

		echo "Falhou ".$e->getMessage();
	}

?>