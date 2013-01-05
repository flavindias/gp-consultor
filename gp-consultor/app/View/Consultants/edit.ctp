
<h1>Editar Consultor</h1>

 <?php echo $this->Form->create('Consultant', array('action' => 'edit')); ?>
			<fieldset id="dados_pessoais">
				<legend>Dados Pessoais</legend>
					
					<?php echo $this->Form->input('Consultant.name', array('label' => 'Nome: ','placeholder'=>'')); ?>
					<?php echo $this->Form->input('Consultant.cpf', array('label' => 'CPF: ','placeholder'=>'')); ?>
					<?php echo $this->Form->input('Consultant.acronym', array('label' => 'Abreviação do Nome: ')); ?>
					<?php echo $this->Form->input('Consultant.acronym_color', array('type'=> 'color','label' => 'Cor: ')); ?>
					<?php echo $this->Form->input('Consultant.phone1', array('label' => 'Telefone: ')); ?>
					<?php echo $this->Form->input('Consultant.phone2', array('label' => 'Celular: ')); ?>
					<?php echo $this->Form->input('Consultant.email', array('label' => 'E-mail: ')); ?>					
			</fieldset>
			<fieldset id="endereço">
				<legend>Endereço</legend>
					<?php echo $this->Form->input('Address.address', array('label' => 'Endereço: ')); ?>
					<?php echo $this->Form->input('Address.number', array('label' => 'Número: ')); ?>
					<?php echo $this->Form->input('Address.complement', array('label' => 'Complemento: ')); ?>
					<?php echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro: ')); ?>
					<?php echo $this->Form->input('Address.city', array('label' => 'Cidade: ')); ?>
					<?php echo $this->Form->input('Address.state', array('label' => 'Estado: ')); ?>
					<?php echo $this->Form->input('Address.zip_code', array('label' => 'CEP: ')); ?>
			</fieldset>
			<?php echo $this->Form->end('Salvar Edição'); ?>
		</form>
	