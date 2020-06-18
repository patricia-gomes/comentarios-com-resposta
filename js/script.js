$(document).ready(function() {
	
	//Revelando e ocultando o formulário de resposta
	$(".open_comment").click(function() {
		$(this).toggleClass("active").next().slideToggle("slow");
		return false;
	});	
	
	//<-------- Evento blur pro formulário de Comentário ---------->///

	//Alterando a cor das bordas do campo input do comentário para Amarelo
	$(".form_comment input").blur(function(){
		//Se o campo input estiver vazio muda a cor das bordas para amarelo
		if($(this).val() == "") {
            $(this).css({"border" : "1px solid #f3c624"});//amarelo
        } else {
        	//muda a cor das bordas do input para cinza (cor padrão)
			$(this).css({"border" : "1px solid #b7ccbd"});
		}
    });
	//Quando clicar no campo textarea e retirar o foco muda a cor das bordas desse campo
	$(".form_comment textarea").blur(function(){
		//Se tiver vazio muda a cor para amarelo, caso contrário for preenchido volta pro cinza
		if($(this).val() == "")  {
			//muda a cor das bordas da textarea para amarelo
            $(this).css({"border-color" : "#f3c624"});
        } else {
        	//muda a cor das bordas para cinza
			$(this).css({"border-color" : "#b7ccbd"});
		}
    });
	
	//<-------- Evento blur pro formulário de resposta ---------->///
	//Alterna a cor da borda do campo input entre amarelo e cinza
	$(".comment_hidden input").blur(function(){
		//Verifica se o campo esta vazio
		if($(this).val() == "") {
            $(this).css({"border" : "1px solid #f3c624"});//input fica amarelo
        } else {
        	//muda a cor das bordas do input para cinza (cor padrão)
			$(this).css({"border" : "1px solid #b7ccbd"});
		}
    });
	//Quando clicar no campo textarea e retirar o foco muda a cor das bordas desse campo
	$(".comment_hidden textarea").blur(function(){

		if($(this).val() == "")  {
            $(this).css({"border-color" : "#f3c624"});//amarelo
        } else {
			$(this).css({"border-color" : "#b7ccbd"});//cinza
		}
    });
	
});