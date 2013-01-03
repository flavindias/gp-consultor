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
		<form>
			<fieldset id="dados_pessoais">
				<legend>Dados Pessoais</legend>
	
					<label for="nome">Nome:</label><br>
					<input name="nome" type="text" placeholder='Nome Completo (1-50 Caracteres somente letras)' maxlength="50" required autofocus id="nome"/><br>
	
					<label for="email">Email:</label><br>
					<input name="email" type="email" placeholder="email@seuprovedor.com.br"required/><br>
	
	
					<label for="cpf">CPF:</label><br>
					<input name="cpf" type="text" placeholder="111.111.111-11" maxlength="11" required/><br>
	
					<label for="cep">CEP:</label><br>
					<input name="cep" type="text" placeholder="11.111-111" maxlength='8' required/><br>
	
					<label for="logadouro">Logadouro:</label><br>
					<input name="logadouro" type="text" required/><br>
	
					<label for="cidade">Cidade:</label><br>
					<input name="cidade" type="text" required/><br>
	
					<label for="bairro">Bairro:</label><br>
					<input name="bairro" type="text" required><br>
	
					<label for="numero">Número:</label><br>
					<input name="numero" type="text" required/><br>
	
					<label for="complemento">Complemento:</label><br>
					<input name="complemento" type="text" required><br>
	
					<label for="estado">Estado:</label><br>
					<select>
						<option>Acre</option>
						<option>Alagoas</option>
						<option>Amapá</option>
						<option>Amazonas</option>
						<option>Bahia</option>
						<option>Ceará</option>
						<option>Distrito Federal</option>
						<option>Goiás</option>
						<option>Espírito Santo</option>
						<option>Mato Grosso do Sul</option>
						<option>Minas Gerais</option>
						<option>Pará</option>
						<option>Paraiba</option>
						<option>Paraná</option>
						<option>Pernambuco</option>
						<option>Piauí</option>
						<option>Rio de Janeiro</option>
						<option>Rio Grande do Norte</option>
						<option>Rio Grande do Sul</option>
						<option>Rondônia</option>
						<option>Rorâima</option>
						<option>São Paulo</option>
						<option>Santa Catarina</option>
						<option>Sergipe</option>
						<option>Tocantins</option> </select><br>
					
					<label for="telefone1">Telefone 1:</label><br>
					<input name="telefone" type="tel" placeholder="(11)1111-1111" maxlength='11' required><br>
	
					<label for="telefone2">Telefone 2:</label><br>
					<input name="telefone2" type="tel" placeholder="(11)1111-1111" maxlength='11' required><br>
	
			</fieldset>
		</form>
	
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
		</fieldset>
	</div>
</body>
</html>

