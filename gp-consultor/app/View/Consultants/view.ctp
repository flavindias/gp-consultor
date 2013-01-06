<h1>Consultor - <?php echo $consultant['Consultant']['name']; ?> 
<?php echo $this->Html->link(
$this->Html->image("edit.png", array("alt" => "Editar")),'edit/'.$consultant['Consultant']['id'],
array('escape'=>false)) ?> 
<?php echo $this->Html->link(
$this->Html->image("delete.png", array("alt" => "Deletar")),
array('action' => 'delete', $consultant['Consultant']['id']),
array('escape'=>false),"Você quer excluir realmente ?");?>

</h1> 

<h2> Dados Pessoais </h2>
<p><span>Nome: </span> <?php echo $consultant['Consultant']['name']; ?></p>
<p><span>CPF: </span><?php echo $consultant['Consultant']['cpf']; ?></p>
<p><span>Abreviação: </span><?php echo $consultant['Consultant']['acronym']; ?></p>
<p><span>Cor: </span><?php echo $consultant['Consultant']['acronym_color']; ?></p>
<p><span>Telefone: </span><?php echo $consultant['Consultant']['phone1']; ?></p>
<p><span>Celular: </span><?php echo $consultant['Consultant']['phone2']; ?></p>
<p><span>E-mail: </span><?php echo $consultant['Consultant']['email']; ?></p>

<h2>Endereço</h2>

<p><span>Endereço: </span><?php echo $consultant['Address']['address']; ?></p>
<p><span>Número: </span><?php echo $consultant['Address']['number']; ?></p>
<p><span>Complemento: </span><?php echo $consultant['Address']['complement']; ?></p>
<p><span>Bairro: </span><?php echo $consultant['Address']['neighborhood']; ?></p>
<p><span>CEP: </span><?php echo $consultant['Address']['zip_code']; ?></p>
<p><span>Cidade: </span><?php echo $consultant['Address']['city']; ?></p>
<p><span>Estado: </span><?php echo $consultant['Address']['state']; ?></p>

