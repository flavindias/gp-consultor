//Quando o documento (pagina) estiver Ready(carregado) ele chama as funções
$('document').ready(function(){

	//Menu
	var flag = false;
	$('#botao_home').click(function(e){
		if (flag==false){
			$('#Menu_Home').animate({'margin-left':'-10px'});	
			flag = true;
		}
		else{
			$('#Menu_Home').animate({'margin-left':'-500px'});	
			flag =false;
		}		
	});
	$('#Menu_Home').click(function(e){
		e.stopPropagation();
	})
	$('html').click(function(){
		flag = false;
		$('#Menu_Home').animate({'margin-left':'-500px'});	
	});
	//endmenu

	
	//Mascaras
	$("#cpf").mask("999.999.999-99");
	$("#phone1").mask("(99)9999-9999");
	$("#phone2").mask("(99)9999-9999");
	$("#zip_code").mask("99.999-999");
	$('#cnpj').focus();
    $("#cnpj").mask("99.999.999/9999-99");
	$("#phone_financial").mask("(99)9999-9999");
	$("#phone_sponsor").mask("(99)9999-9999");
	$("#phone_sepg").mask("(99)9999-9999");		
	//end mascaras

	//Buscar Endereço ao digitar o CEP
	$('#zip_code').keypress(function(){
		var cep = $(this).val();
		cep = cep.replace('-','').replace('.','').cep.replace('_','');
		var tamanho = cep.length;
		if(tamanho == 8){
			//Função de buscar endereço pelo cep
			getEndereco();
		}
	});
	//end buscar cep

	
	//Função para a Verificação se as informações dos campos ja existem
	
	 $('#red').blur(function(){ 
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

function checkAcronym(src){
	d = src;
	var acronym = $(d).val();
	$.get("ajaxMsg/"+acronym,null,
		function(data) {   
			if(data == 'true'){
				d.setCustomValidity("Abreviação já utilizada");
			}
			else {
				d.setCustomValidity("");
			}
	});
};
