<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('style-sws'); ?>
		<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
		<?php echo $this->Html->script('aplicacao'); ?>
    </head>

    <body>

        <div id="bt-cadastrar">
            <?php echo $this->Html->link("Cadastrar", array('action' => 'add'),array('class'=>'botao')); ?>
        </div>

		<?php include 'includes/menu.php'; ?>
		
		<div class="conteudo">
			<h1>Consultores</h1>
	        <div>
	            <ul class="table">
	                <li>
	                    <ul class="line">
	                        <li class="nome"><b>Nome</b></li>
	                        <li class="cpf"><b>CPF</b></li>
	                        <li class="email"><b>E-mail</b></li>
	                        <li class="tel"><b>Telefone 1</b></li>
	                        <li class="tel"><b>Telefone 2</b></li>
	                        <li class="cor"><b>Cor/Sigla</b></li>
	                        <li class="visualizar"><b>Vis.</b></li>
	                        <li class="editar"><b>Edt.</b></li>
	                        <li class="remover"><b>Remover</b></li>
	                    </ul>
	                </li>
					<?php echo $this->fetch('content'); ?>
	            </ul>
	
	        </div>
	   	</div>

    </body>



</html>
