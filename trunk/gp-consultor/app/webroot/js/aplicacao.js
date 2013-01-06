//Quando o documento (pagina) estiver Ready(carregado) ele chama as funções
$('document').ready(function(){
	//Ai clicar no em botao_home ...
	var flag = false;
	$('#botao_home').click(function(e){
		//O menu_home sofre uma animação no margin-left
		
		if (flag==false){
			$('#Menu_Home').animate({'margin-left':'-10px'});	
			flag = true;
		}
		else{
			$('#Menu_Home').animate({'margin-left':'-150px'});	
			flag =false;
		}		
	});
	//Ao clicar na div Menu_Home ...
	$('#Menu_Home').click(function(e){
		//Usa-se essa função 'stopPropagation();' para que não seje disparado a função para a div voltar para o lugar de origem
		//Pois, quando se clica em uma elemento, ele clica em todos que forem pais dele.
		// Se eu tiver '<div><a></a></div>', e tenho um alert ao clicar na div....se eu clica na tag <a>, a função com o alert sera disparado,
		//Para evitar isto, faço uma função que ao clicar no <a>, ele chama a função stopPropagation, que no caso vai pausar a propagação do clic nos elementos
		//Ficando somente no elemento que foi clicado realmente.
		e.stopPropagation();
	})
	//Ao clicar no resto da pagina no caso, na tag HTML...
	$('html').click(function(){
		//O menu_home volta para o lugar de origem
		flag = false;
		$('#Menu_Home').animate({'margin-left':'-150px'});	
	});

	$("input[name=cpf]").mask("999.999.999-99");

});