<?php //provavelmente na view add, ou o equivalente para adicionar a pessoa
echo 'erick';
echo $this->Form->create('Consultant', array('action' => 'add'));
echo $this->Form->input('Consultant.name');
echo $this->Form->input('Consultant.cpf');
echo $this->Form->input('Consultant.acronym');
echo $this->Form->input('Consultant.acronym_color');
echo $this->Form->input('Address.address');
echo $this->Form->input('Address.number');
echo $this->Form->end('Confirmar cadastro');
?>