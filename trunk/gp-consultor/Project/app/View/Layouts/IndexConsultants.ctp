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
		
		<div class="consultantindex">

			<table cellpadding="0" cellspacing="0">
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Email</th>
					<th>Telefone 1</th>
					<th>Telefone 2</th>
					<th>Cor</th>
					<th class="actions">Ações</th>
				</tr>

				<?php
			
					$i = 0;
					foreach ($consultants as $consul) 
					{
						$class = null;
				
						if($i++ % 2 == 0)
						{
						$class = 'class="altrow"';
					}
					
				?>

				<tr <?php echo $class; ?>>
					<td class="nome"><?php echo $consul['Consultant']['name']; ?></td>
					<td class="cpf"><?php echo $consul['Consultant']['cpf']; ?></td>
					<td class="email"><?php echo $consul['Consultant']['email']; ?></td>
					<td class="telefone"><?php echo $consul['Consultant']['phone1']; ?></td>
					<td class="telefone"><?php echo $consul['Consultant']['phone2']; ?>
					<td class="cor" style="background-color:<?php echo $consul['Consultant']['acronym_color']; ?>"><?php echo $consul['Consultant']['acronym_color']; ?>
					<div class="actions">
						<td>
							<?php echo $this->Html->link(
							$this->Html->image("view.png", array('alt' => 'Ver')), array('action' => 'view', $consul['Consultant']['id']), array('escape'=>false, 'id'=>'link'))?>

							<?php echo $this->Html->link(
							$this->Html->image("edit.png", array('alt' => 'Editar')), array('action' => 'edit', $consul['Consultant']['id']),
							array('escape'=>false, 'id'=>'link'))?>

							<?php echo $this->Html->link(
							$this->Html->image("delete.png", array('alt' => 'Remover')), array('action' => 'delete', $consul['Consultant']['id']),
							array('escape'=>false, 'id'=>'link'), "Confirmar exclusão do consultor ". $consul['Consultant']['name'] . "?");
					
						echo $this->Session->flash();
					?></td>
					</div>
				</tr>
				<?php } ?>
			</table>
	
</div>

    </body>

</html>
