<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Cadastro de Consultor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $this->Html->css('styleAddConsultant'); ?>
	<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
	<?php echo $this->Html->script('jquery-1.2.6.pack'); ?>
	<?php echo $this->Html->script('jquery.maskedinput-1.1.4.pack'); ?>
	<?php echo $this->Html->script('aplicacao'); ?>
</head>
<body>
	<div id="Menu_Home">
		<a href="#" id="botao_home"><?php echo $this->Html->image('botao_home.png', array('alt' => ''))?></a>
		<ul>
			<li><?php echo $this->Html->link('Consultor', array('action' =>'../consultants'));?></li>
			<li><a href="">Empresa</a></li>
		</ul>
	</div>
	
	<div class="conteudo">
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
</html>

