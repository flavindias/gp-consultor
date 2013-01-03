<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Cadastro de Consultor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $this->Html->css('styleAddConsultant'); ?>
	<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
	<?php echo $this->Html->script('aplicacao'); ?>
</head>
<body>
	<div id="Menu_Home">
		<a href="#" id="botao_home"><?php echo $this->Html->image('botao_home.png', array('alt' => ''))?></a>
		<ul>
			<li><a href="">Consultor</a></li>
			<li><a href="">Empresa</a></li>
		</ul>
	</div>
	
	<div class="conteudo">
		<h1>Cadastrar Consultor</h1>
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
</html>

