<?php
include 'model.php';

$id_post = $_POST['id_post'];

	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['comentario']) && !empty($_POST['id_comentario'])) {
		insert($_POST['nome'], $_POST['email'], $_POST['comentario'], $_POST['id_post'], $_POST['id_comentario']);
		header("Location: post.php?id=$id_post");
	}
?>