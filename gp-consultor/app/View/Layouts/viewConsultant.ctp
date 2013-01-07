<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('styleViewConsultant'); ?>
		<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
		<?php echo $this->Html->script('aplicacao'); ?>
    </head>

    <body>

        <div id="bt-cadastrar">
            <?php echo $this->Html->link("Cadastrar", array('action' => 'add'),array('class'=>'botao')); ?>
        </div>

		<div id="Menu_Home">
			<a href="#" id="botao_home"><?php echo $this->Html->image('botao_home.png', array('alt' => ''))?></a>
			<ul>
				<li><a href="">Consultor</a></li>
				<li><a href="">Empresa</a></li>
			</ul>
		</div>
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
                        <li class="editar"><b>Editar</b></li>
                        <li class="remover"><b>Remover</b></li>
                        <li class="visualizar"><b>Visualizar</b></li>
                    </ul>
                </li>
				<?php echo $this->fetch('content'); ?>
            </ul>

        </div>

    </body>



</html>
