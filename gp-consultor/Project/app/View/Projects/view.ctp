
<h1 id="titulo">
	Projeto - <?php echo $project['Project']['name']; ?> 
	<span class="icon-action">
		<?php echo $this->Html->link(
		$this->Html->image("delete.png", array("alt" => "Deletar")),
		array('action' => 'delete', $project['Project']['id']),
		array('escape'=>false),"Você quer excluir realmente ?");?>
	</span>
	
	<span class="icon-action"> 
		<?php echo $this->Html->link(
		$this->Html->image("edit.png", array("alt" => "Editar")),'edit/'.$project['Project']['id'],
		array('escape'=>false)) ?>
	</span> 
	
</h1>

<div> 
	<fieldset id="dadosProjetoView">
		<h2 id="titulodados"> Dados Projeto </h2>
		<p><span>Nome: </span> <?php echo $project['Project']['name']; ?></p>
		<p><span>Descrição: </span><?php echo $project['Project']['description']; ?></p>
		<p><span>Abreviação: </span><?php echo $project['Project']['acronym']; ?></p>
		<p><span>Projeto Pai: </span><?php echo $nameProjectFather; ?></p>
		<p><span>Empresa: </span><?php echo $nameCompany; ?>
		<?php echo $this->Html->link(
					$this->Html->image("view.png", array('alt' => 'Ver')), array('action' => '../companies/view', $project['Project']['company_id']), array('escape'=>false, 'id'=>'link'))?>
		</p>
	</fieldset>
	
	<fieldset id="horasProjetoView">
		<h2 id="titulohoras"> Horas Projeto </h2>
		<p><span>Hora A: </span><?php echo $project['Project']['a_hours']; ?></span></p>
		<p><span>Hora B: </span><?php echo $project['Project']['b_hours']; ?></p>
		<p><span>Hora C: </span><?php echo $project['Project']['c_hours']; ?></p>
	</fieldset>

</div>