

<?php //provavelmente na view add, ou o equivalente para adicionar a pessoa
		echo $this->Form->create('Consultant', array('action' => 'add')); ?>
			<fieldset id="dados_pessoais">
				<legend>Dados Pessoais</legend>
					
					<?php echo $this->Form->input('Consultant.name', array('label' => 'Nome: ','placeholder'=>'')); ?>
					<?php echo $this->Form->input('Consultant.cpf', array('label' => 'CPF: ','placeholder'=>'')); ?>
					<?php echo $this->Form->input('Consultant.acronym', array('label' => 'Abreviação do Nome: ','placeholder'=>'Abreviação ')); ?>
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
					<?php echo $this->Form->input('Address.code_zip', array('label' => 'CEP: ')); ?>
			</fieldset>
			<?php echo $this->Form->end('Confirmar Cadastro'); ?>
		</form>
	
			<?php /*
			
			
			========== Dados Futuros para o sistema
			
			
			<fieldset id="Dados_sistema">
				<legend>Dados do Sistema</legend>
				<form>
					<label for="usuario">Usuario:</label><br>
					<input name="usuario" type="text" placeholder="4-20 caracteres" maxlength='20' required><br>
					
					<label for="senha">Senha:</label><br>
					<input name="senha" type="password" placeholder="6-20 caracteres" maxlength='20' required><br>
					
					<label for="repetir_senha">Repetir Senha:</label><br>
					<input name="repetir_senha" type="password" placeholder="6-20 caracteres" maxlength='20' required><br>
	
					<label for="sigla">Sigla:</label><br>
					<input name="sigla" type="text" placeholder="2 caracteres" maxlength='2' required><br>
	
					<label for="cor">Cor:</label><br>
					<input name="cor" type="color" required><br>
	
					
					
				</form>
	
			</fieldset>
			<fieldset>
				<legend>Dados Bancários</legend>
				<form>
					<label for="nome_banco">Nome do Banco:</label><br>
					<input name="nome_banco" type="text" required><br>
	
					<label for="agencia">Agência:</label><br>
					<input name="agencia" type="text" required><br>
				</form>
	
			</fieldset>
	
		
	
	
		</form>
		<fieldset>
			<legend>Anexar Arquivos</legend>
			<input name="add_files" type="file" value="Add files..."/>
			<input name="start_upload" type="submit" value="Start Upload"/>
			<input name="cancel_upload" type="submit" value="Cancel Upload"/>
			<input name="delete" type="submit" value="Delete"/>
		</fieldset>*/ ?>