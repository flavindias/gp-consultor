//Quando o documento (pagina) estiver Ready(carregado) ele chama as fun��es
$('document').ready(function(){
	//Ai clicar no em botao_home ...
	var flag = false;
	$('#botao_home').click(function(e){
		//O menu_home sofre uma anima��o no margin-left
		
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
		//Usa-se essa fun��o 'stopPropagation();' para que n�o seje disparado a fun��o para a div voltar para o lugar de origem
		//Pois, quando se clica em uma elemento, ele clica em todos que forem pais dele.
		// Se eu tiver '<div><a></a></div>', e tenho um alert ao clicar na div....se eu clica na tag <a>, a fun��o com o alert sera disparado,
		//Para evitar isto, fa�o uma fun��o que ao clicar no <a>, ele chama a fun��o stopPropagation, que no caso vai pausar a propaga��o do clic nos elementos
		//Ficando somente no elemento que foi clicado realmente.
		e.stopPropagation();
	})
	//Ao clicar no resto da pagina no caso, na tag HTML...
	$('html').click(function(){
		//O menu_home volta para o lugar de origem
		flag = false;
		$('#Menu_Home').animate({'margin-left':'-150px'});	
	});

	$("#cpf").mask("999.999.999-99");

});