
<h1>Editar Projeto</h1>
<?php //provavelmente na view add, ou o equivalente para adicionar a pessoa
		echo $this->Form->create('Project', array('action' => 'edit')); ?>
			<div>
				<fieldset id="dados_projeto">
					<legend>Dados do Projeto</legend>
					
					<?php 
						foreach ($projects as $project) 
							{
								if( $project['Project']['id'] != $id ){
									$list_projects[$project['Project']['id']] =$project['Project']['name'];
								}
							};
					
						foreach ($companies as $company) 
							{
								$list_companies[$company['Company']['id']] =$company['Company']['name'];
							};
						if (!isset($list_projects)){
							$list_projects['none'] = 'Nenhum Projeto Cadastrado';
						}
						elseif(!isset($list_companies)){
							$list_companies['none'] = 'Nenhuma Empresa Cadastrada';
						}
					?>
						<?php echo $this->Form->input('Project.id', array('type' => 'hidden')); ?>
						<?php echo $this->Form->input('Project.name', array('label' => 'Nome: ','required'=>'required', 'id'=>'name')); ?>
						<?php echo $this->Form->input('Project.description', array('label' => 'Descrição: ', 'id'=>'description')); ?>
						<?php echo $this->Form->input('Project.acronym', array('label' => 'Abreviação do Nome: ')); ?>
						<?php echo $this->Form->input('Project.a_hours', array('label' => 'Horas A: ','required'=>'required','id'=>'time_a',)); ?>
						<?php echo $this->Form->input('Project.b_hours', array('label' => 'Horas B: ', 'id'=>'time_b')); ?>
						<?php echo $this->Form->input('Project.c_hours', array('label' => 'Horas C: ', 'id'=>'time_c')); ?>
						<?php echo $this->Form->input('Project.parent_project_id',array('options' => $list_projects,'type' => 'select', 'empty' => 'Selecione','label' => 'Projeto Pai: ', 'id' => 'parent_project')); ?>					
						<?php echo $this->Form->input('Project.company_id',array('options' => $list_companies,'type' => 'select', 'empty' => 'Selecione','label' => 'Projeto Empresa: ', 'id' => 'company', 'required'=>'required')); ?>
						
				</fieldset>
			</div>
			
			<?php echo $this->Form->end('ATUALIZAR'); ?>
	