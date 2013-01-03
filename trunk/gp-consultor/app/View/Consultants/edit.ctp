<div class="consultants form">
    <?php echo $this->Form->create('Consultant', array('action' => 'edit')); ?>
    <fieldset>
        <legend>Editar</legend>
        <?php
            echo $this->Form->input('Consultant.name');
			echo $this->Form->input('Consultant.cpf');
			echo $this->Form->input('Consultant.acronym');
			echo $this->Form->input('Consultant.acronym_color');
			echo $this->Form->input('Address.address');
			echo $this->Form->input('Address.number');	
        ?>
    </fieldset>
    <?php echo $this->Form->end('ENVIAR'); ?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('Listar', array('action' => 'index')); ?></li>
    </ul>
</div>