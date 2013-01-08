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

	
	//Mascaras
	$("#cpf").mask("999.999.999-99");
	$("#phone1").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	$("#zip_code").mask("99.999-999");

	//Buscar Endereço ao digitar o dep
	$('#zip_code').keypress(function(){
		var cep = $(this).val();
		cep = cep.replace('-','');
		cep = cep.replace('.','');	
		cep = cep.replace('_','');
		var tamanho = cep.length;
		if(tamanho == 8){
			//Função de buscar endereço pelo cep
			getEndereco();
		}
	});

	
	//Função para a Verificação se as informações dos campos ja existem
	
	 $('input').blur(function(){ 
		 var id =  $(this).attr('id');
		 //Remoção de attr de bloqueio caso eles tenham sido colocados
		 $('.submit input').removeAttr('disabled');
		 $('.div_'+id+' .alert').remove();
		 
		 //Eliminar o '#' da cor, para não gerar comflito na url de envio
		 var obj = $(this).val().replace('#','');
		 		 
		 if ((id == 'acronym') || (id == 'cpf') || (id =='acronym_color')){
			 //chamda ajax
			 $.get("/sws/Consultants/ajaxMsg/"+obj,null,
				function(data) {   
				   if(data != ''){
					   //Adcionar uma tag de aviso que o elemento ja existe
					   $('.div_'+id).append('<h3 class="alert">'+data+'</h3>');
					   //bloquei o botão de submit para que não possa ser enviado o formulario
					   $('.submit input').attr('disabled','disabled');
				   }
				  }
				) ;
		 }
		 else{
			 //Função para verificar se a cor exista caso eu clique em outros input, ele sempre ira verificar
			 funcaoAuxiliarCor();
		 }
      });        
	 
	 
	 
	 //Função Do campo de cor, escolhendo a cor e edicionando ao campo como background a cor e o valor hexadecimal
	 $('#acronym_color').ColorPicker({
		 	///var elemento = this;
			color: '#000001',
			onShow: function (colpkr) {
				$(colpkr).fadeIn(500);
				
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(500);
				return false;
			},
			onChange: function (hsb, hex, rgb) {
				$('#acronym_color').css('backgroundColor', '#' + hex);
				$('#acronym_color').val('#'+hex);
			}
		});


	
	
});


function funcaoAuxiliarCor(){
	var obj = $('#acronym_color').val().replace('#','');
	 $('.div_acronym_color .alert').remove();
	$.get("/sws/Consultants/ajaxMsg/"+obj,null,
			function(data) {   
			   if(data != ''){
				   $('.div_acronym_color').append('<h3 class="alert">'+data+'</h3>');
				   $('.submit input').attr('disabled','disabled');
			   }
			  }
			) ;
}