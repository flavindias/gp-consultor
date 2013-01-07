    <!-- Aqui � onde n�s percorremos nossa matriz $consultants, imprimindo
         as informa��es dos posts -->

    <?php foreach ($consultants as $consul): ?>
    	<?php if ($consul['Consultant']['removed'] == false) { ?>
		<li>	
			<ul class="line">
				<li class="nome"><?php echo $this->Html->link($consul['Consultant']['name'],array('controller' => 'Consultants', 'action' => 'view', $consul['Consultant']['id'])); ?></li>
				<li class="cpf"><?php echo $consul['Consultant']['cpf']; ?></li>
				<li class="email"><?php echo $consul['Consultant']['email']; ?></li>
				<li class="tel"><?php echo $consul['Consultant']['phone1']; ?></li>
				<li class="tel"><?php echo $consul['Consultant']['phone2']; ?></li>
				<li class="cor" style="background-color: <?php echo $consul['Consultant']['acronym_color']; ?> "><?php echo $consul['Consultant']['acronym_color']; ?></li>
				<li class="editar"><?php echo $this->Html->link($this->Html->image("edit.png", array("alt" => "Editar")),array('action' => 'edit', $consul['Consultant']['id']),array('escape'=>false));?></li>
				<li class="remover"><?php echo $this->Html->link($this->Html->image("delete.png", array("alt" => "Deletar")),array('action' => 'delete', $consul['Consultant']['id']),array('escape'=>false),"Você quer excluir realmente ?");?></li>
			</ul>
		</li>

    <?php } endforeach; ?>

</table>