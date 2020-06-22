<?php
include 'model.php';

	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['comentario']) && !empty($_POST['id_comentario'])) {
		insert($_POST['nome'], $_POST['email'], $_POST['comentario'], $_POST['id_post'], $_POST['id_comentario']);
		$redirect = "post.php?id=".$_POST['id_post'];
		header("Location: $redirect");
	}
?>