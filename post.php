<?php
include 'views/header.php';
include 'model.php';

if(!empty($_GET['id'])) {

	$post = select_post_for_id($_GET['id']);

	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['comentario'])) {
		insert($_POST['nome'], $_POST['email'], $_POST['comentario'], $_GET['id']);
	}
	$comment = select_comment_for_id($_GET['id']);

}
?>
<a class="button" href="index.php">Home</a>
<center>
		<?php if(!empty($post)) : ?>
			<div class="container">
				<h1><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h1>
				<p><?php echo $post['text_post']; ?></p>
			</div>
		<?php else: ?>
			<p>Conteúdo não encontrado!!</p>
		<?php endif; ?>
	<!---Exibe a quantidade de comentários--->
	<p>
		<?php if(count_comments($_GET['id'])) :

		$qt = count_comments($_GET['id']);
		if($qt == 1) : ?>
			<p class="color_comment"><a href="comments.php?id=<?php echo $_GET['id']; ?>" ><?php echo $qt." comentário"; ?></a></p>
		<?php else: ?>
			<p class='color_comment'><a href="comments.php?id=<?php echo $_GET['id']; ?>" ><?php echo $qt." comentários"; ?></a></p>
		<?php endif; ?>
		<?php else: ?>
			<p class='color_comment'>0 comentário</p>
		<?php endif; ?>
	</p>
	<!----- FIM ----->
<hr/>
<!---------- FORMULÁRIO PARA OS COMENTÁRIOS --------------->

	<div class="form_comment">
		<form method="POST" name="formC" id="form" class="comentario">
			<input type="text" name="nome" id="nome" placeholder="Nome" required="required"><br/><br/>

			<input type="email" name="email" placeholder="Email" required="required" id="email"><br/><br/>

			<textarea name="comentario" placeholder="Comentário" id="comentario" required="required"></textarea><br/><br/>

			<button class="button_comment" id="button" >Comentar</button><br/><br/>
		</form>
	</div>

<!---------- FIM DO FORMULÁRIO PARA OS COMENTÁRIOS--------------->
<div class="area_comments">
	<?php if(!empty($comment)):  ?>
	
		<?php foreach($comment[NULL] as $id_comentario => $value): ?>

		<div class="comments">
			<!---------- EXIBE OS COMENTÁRIOS --------------->
				<div class="box_comments">
					<ul>
						<li class="name_comment"><strong><?php echo $value['name'];  ?></strong></li>
						<li class="date_time"><?php echo formatoDataHora($value['date_time']);  ?></li>
						<li class="comment"><?php echo utf8_decode($value['comment']);  ?></li>
					</ul>
				</div>
				<div class="open_comment">
					<button type="button" class="button_resp">Responder</button>
				</div>
		<!---------- FIM DA EXIBIÇÃO DOS COMENTÁRIOS --------------->
		<!---------- FORMULÁRIO PARA AS RESPOSTAS --------------->
			<div class="comment_hidden" >
				<h4 class="h4_comentario">Sua resposta:</h4>

				<form method="POST" class="form_resposta" name="form_resp" action="responder.php" >
					<input type="hidden" name="id_comentario" value="<?php echo $value['id'];  ?></">
					<input type="hidden" name="id_post" value="<?php echo $_GET['id']; ?>">

					<textarea class="caixa_comentarios" name="comentario" required="required" id="comentario_resposta" class="comentario_resposta"></textarea><br/><br/>

					<input type="text" name="nome" required="required" placeholder="Nome" class="button_comment_resp" id="nome_resposta"><br/><br/>

					<input type="email" name="email" required="required" id="email_reposta" class="button_comment_resp" placeholder="Email" class="button_comment_resp2"><br/><br/>
					
					<button class="button_resp_2" name="submit">Responder</button>
				</form>
			</div><br/>
			<!---------- FIM DO FORMULÁRIO PARA AS RESPOSTAS --------------->
		</div>

<!--Se houver resposta a um cometário, exibe abaixo-->
		<?php if(isset($comment[$id_comentario])): ?>
		<?php foreach($comment[$id_comentario] as $id => $values): ?>
		<div class="answer">
		<!---------- EXIBE AS RESPOSTAS --------------->
			<div class="box_comments">
				<ul>
					<li class="name_comment"><strong><?php echo $values['name'];  ?></strong></li>
					<li class="date_time"><?php echo formatoDataHora($values['date_time']);  ?></li>
					<li class="comment"><?php echo utf8_decode($values['comment']);  ?></li>
				</ul>
			</div>
			<div class="open_comment">
				<button type="button" class="button_resp_2">Responder</button>
			</div>
		<!---------- FIM DA EXIBIÇÃO DAS RESPOSTAS --------------->
			<!---------- FORMULÁRIO PARA ENVIAR AS RESPOSTAS --------------->
			<div class="comment_hidden" >
				<h4 class="h4_comentario">Sua resposta:</h4>

				<form method="POST" class="form_resposta" name="form_resp" action="responder.php" >
					<input type="hidden" name="id_comentario" value="<?php echo $id_comentario;  ?></">
					<input type="hidden" name="id_post" value="<?php echo $_GET['id']; ?>">

					<textarea class="caixa_comentarios" name="comentario" required="required" id="comentario_resposta" class="comentario_resposta"><?php echo $values['name']; ?></textarea><br/><br/>

					<input type="text" name="nome" placeholder="Nome" required="required" class="button_comment_resp" id="nome_resposta"><br/><br/>

					<input type="email" name="email" required="required" id="email_reposta" class="button_comment_resp" placeholder="Email" class="button_comment_resp2"><br/><br/>
					
					<button class="button_resp_2"  name="submit">Responder</button>
				</form>
			</div><br/>
			<!---------- FIM DO FORMULÁRIO PARA ENVIAR AS RESPOSTAS --------------->
		</div>
		<?php endforeach; ?>
		<?php endif; ?>

	<?php endforeach; ?>
	<!-- Se não tiver nenhum comentário cadastrado entra no else abaixo:  -->
	<?php else: ?>
			<p><strong>Seja o primeiro a comentar!</strong></p>
	<?php endif; ?>
</div>
</center>

<?php include 'views/footer.php'; ?>
