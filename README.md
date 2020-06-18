# Comentários com resposta

Nesse pequeno sistema de comentários com resposta a exibição dos comentários funciona da seguinte maneira: o comentário ao artigo (do lado esquerdo) e a resposta a esse comentário (do lado direito). Existe 2 tipos de resposta: a resposta ao comentário e a resposta a resposta. Todas as respostas são exibidas abaixo do comentário principal.<br/>
<img src="images/Sistema-comentarios-resposta.png"><br/>
Os comentários recebem o valor de 0 na coluna <code>indice_comment</code> do banco.<br/>
As respostas recebem o valor 1 na coluna <code>indice_comment</code> do banco de dados.<br/>
Comentário e a resposta são posicionados de maneira diferente no HTML, por isso a coluna <code>indice_comment</code> existe.<br/>

<ul>
	<li>Usa JQuery para mudar a cor das bordas dos campos para amerelo quando não preenche o formulário. E também para revelar e ocultar o formulário de resposta aos comentários.</li>
	<li>A validação do formulário é feita pelo HTML5. Não permitindo assim enviar uma string vazia para o banco.</li>
</ul>

# Install
Use o xampp, wamp e outros.<br/>
Execute o código do arquivo: dados_sql.sql no HeidiSQL ou PHPmyAdmin.<br/>
No arquivo dados_sql.sql estão todos os artigos e alguns comentários e resposta de exemplo.<br/>