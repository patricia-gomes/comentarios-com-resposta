<?php
include 'views/header.php';
include 'model.php';

$dados = select_all('artigos');

?>

	<center>
		<?php foreach($dados as $values) : ?>
			<div class="container">
				<h1><a href="post.php?id=<?php echo $values['id']; ?>"><?php echo $values['title']; ?></a></h1>
				<p><?php echo $values['text_post']; ?></p>
				<p><?php 
					if(count_comments($values['id'])) {
						$qt = count_comments($values['id']);
						if($qt == 1) {
							echo "<p class='color_comment'>$qt comentário</p>";
						} else {
							echo "<p class='color_comment'>$qt comentários</p>";
						}
						
					} else {
						echo "<p class='color_comment'>0 comentário</p>";
					}
				?></p>
			</div>
		<?php endforeach; ?>
	</center>

<?php include 'views/footer.php'; ?>