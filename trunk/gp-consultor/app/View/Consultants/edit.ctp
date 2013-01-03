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
  