    <!-- Aqui é onde nós percorremos nossa matriz $consultants, imprimindo
         as informações dos posts -->

    <?php foreach ($consultants as $consul): ?>
		<li>	
			<ul class="line">
				<li class="nome"><?php echo $this->Html->link($consul['Consultant']['name'],array('controller' => 'Consultants', 'action' => 'view', $consul['Consultant']['id'])); ?></li>
				<li class="cpf"><?php echo $consul['Consultant']['cpf']; ?></li>
				<li class="email"><?php echo $consul['Consultant']['email']; ?></li>
				<li class="tel"><?php echo $consul['Consultant']['phone1']; ?></li>
				<li class="tel"><?php echo $consul['Consultant']['phone2']; ?></li>
				<li class="cor"><?php echo $consul['Consultant']['acronym_color']; ?></li>
				<li class="editar"><a href=""><img src="./img/edit.png" alt="Editar consultor" id="edit"></a></li>
				<li class="remover"><a href=""><img src="./img/delete.png" alt="Remover consultor" id="delete"></a></li>
			</ul>
		</li>
    <?php endforeach; ?>

</table>