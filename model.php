<?php
include 'connect.php';//conexão com o banco

	//Insere no banco
	function insert($name, $email, $comment, $id_post, $id_resp = NULL, $indice_comment = 0) {
		global $pdo;

		/*Se o id_resp não foi enviado insere como comentário, caso contrário insere como resposta*/
		if($id_resp == NULL) { 
			//Insere como comentário
			$sql = "INSERT INTO comments (name, email, id_post, comment, id_resp, indice_comment, date_time) VALUES (:name, :email, :id_post, :comment, :id_resp, :indice_comment, NOW())";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":name", $name);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":id_post", $id_post);
			$sql->bindValue(":comment", $comment);
			$sql->bindValue(":id_resp", $id_resp);
			$sql->bindValue(":indice_comment", $indice_comment);
			$sql->execute();
		} else {
			//Insere como resposta
			$indice_comment = 1;//valor de resposta
			$sql = "INSERT INTO comments (name, email, id_post, comment, id_resp, indice_comment, date_time) VALUES (:name, :email, :id_post, :comment, :id_resp, :indice_comment, NOW())";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":name", $name);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":id_post", $id_post);
			$sql->bindValue(":comment", $comment);
			$sql->bindValue(":id_resp", $id_resp);
			$sql->bindValue(":indice_comment", $indice_comment);
			$sql->execute();
		}
	}
	//Função que retorna todos os registros no banco
	function select_all($table) {
		global $pdo;
		$sql = "SELECT * FROM {$table}";
		$sql = $pdo->query($sql);

		//Verifica se existe algum usuário cadastrado
		if($sql->rowCount() > 0) {
			//fetchAll() para retornar todos os resultados
			return $sql->fetchAll();
		} else {
			return false;
		}
	}

	//Seleciona apenas um artigo usando o id
	function select_post_for_id($id) {
		global $pdo;
		$sql = "SELECT * FROM artigos WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		//Verifica se existe algo cadastrado
		if($sql->rowCount() > 0) {
			//fetch() para pegar apenas um resultado
			return $sql->fetch(\PDO::FETCH_ASSOC);
		} else {
			return false;
		}

	}

	//Seleciona vários comentários com base no id do post
	function select_comment_for_id($id_post) {
		global $pdo;
		$sql = "SELECT * FROM comments WHERE id_post = :id_post";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':id_post', $id_post);
		$sql->execute();

		//Verifica se existe algo cadastrado
		if($sql->rowCount() > 0) {
			//fetchAll() para pegar todos os resultados
			return $sql->fetchAll(\PDO::FETCH_ASSOC);
		} else {
			return false;
		}

	}
	//Conta a quantidade de comentários tem cada artigo
	function count_comments($id_post) {
		global $pdo;
		$sql = "SELECT count(id) as qt FROM comments WHERE id_post = :id_post";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id_post", $id_post);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$quant = $sql->fetch();
			return $quant['qt'];
		} else {
			return false;
		}
	}
	//Formato: 18 de Junho de 2020
	function formatoDataHora($dados) {

		if(!empty($dados)) { 
			$horaData = setlocale(LC_TIME, 'pt_BR', 'portuguese');

			$horaData = strftime('%A, %d de %B de %Y '.utf8_decode('ás').' %H:%M', strtotime($dados));
			return utf8_encode($horaData);
		} else {
			return false;
		}	
	}

	//Atualiza apenas um comentário usando o id
	function update_comments_for_id($id, $name, $email) {
		global $pdo;
		$sql = "UPDATE comments SET name = :name, email = :email, comment = :comment WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->bindValue(":name", $name);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":comment", $comment);
		$sql->execute();
	}
	//Deleta apenas um comentário usando o id
	function delete_comments_for_id($table, $id) {
		global $pdo;
		$sql = "DELETE FROM {$table} WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
?>