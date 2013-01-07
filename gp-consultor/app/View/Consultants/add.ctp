
<h1>Cadastrar Consultor</h1>
<?php //provavelmente na view add, ou o equivalente para adicionar a pessoa
		echo $this->Form->create('Consultant', array('action' => 'add')); ?>
			<fieldset id="dados_pessoais">
				<legend>Dados Pessoais</legend>
					
					<?php echo $this->Form->input('Consultant.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name','html'=>'div')); ?>
					<?php echo $this->Form->input('Consultant.cpf', array('label' => 'CPF: ','required'=>'required', 'id'=>'cpf')); ?>
					<?php echo $this->Form->input('Consultant.acronym', array('label' => 'Abreviação do Nome: ','required'=>'required', 'id'=>'acronym')); ?>
					<?php echo $this->Form->input('Consultant.acronym_color', array('type'=> 'color','label' => 'Cor: ','required'=>'required', 'id'=>'acronym_color')); ?>
					<?php echo $this->Form->input('Consultant.phone1', array('label' => 'Telefone: ','required'=>'required', 'id'=>'phone1')); ?>
					<?php echo $this->Form->input('Consultant.phone2', array('label' => 'Celular: ','required'=>'required', 'id'=>'phone2')); ?>
					<?php echo $this->Form->input('Consultant.email', array('label' => 'E-mail: ','required'=>'required', 'id'=>'email')); ?>					
			</fieldset>
			<fieldset id="endereço">
				<legend>Endereço</legend>
					<?php echo $this->Form->input('Address.address', array('label' => 'Endereço: ','required'=>'required', 'id'=>'address')); ?>
					<?php echo $this->Form->input('Address.number', array('label' => 'Número: ','required'=>'required')); ?>
					<?php echo $this->Form->input('Address.complement', array('label' => 'Complemento: ','required'=>'required')); ?>
					<?php echo $this->Form->input('Address.neighborhood', array('label' => 'Bairro: ','required'=>'required','id'=>'neighborhood')); ?>
					<?php echo $this->Form->input('Address.city', array('label' => 'Cidade: ','required'=>'required', 'id'=>'city')); ?>
					<?php echo $this->Form->input('Address.state', array('label' => 'Estado: ','required'=>'required', 'id'=>'state')); ?>
					<?php echo $this->Form->input('Address.zip_code', array('label' => 'CEP: ','required'=>'required', 'id'=>'zip_code')); ?>
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
				<legend>Dados Banc�rios</legend>
				<form>
					<label for="nome_banco">Nome do Banco:</label><br>
					<input name="nome_banco" type="text" required><br>
	
					<label for="agencia">Ag�ncia:</label><br>
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