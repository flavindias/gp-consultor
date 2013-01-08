<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php echo $this->Html->css('style-sws'); ?>
		<?php echo $this->Html->script('jquery-1.7.1.min'); ?>
		<?php echo $this->Html->script('aplicacao'); ?>
		<?php echo $this->Html->script('aplicacao'); ?>
        <title>Página Principal</title>
    </head>

    <body>
        
        <div id="bt-cadastrar"><?php echo $this->Html->link("Cadastrar", array('action' => 'add'),array('class' => 'botao')); ?></div>

       <?php include 'includes/menu.php'; ?>
		
		<div class="conteudo">
	        <h1>
	        	<?php echo $this->Html->image('company-logo.png', array('id'=>'companyLogo'))?> 
	            SWSchool - Empresa
	        </h1>
	
			
			<?php echo $this->fetch('content'); ?>
		</div>
    </body>

</html>
