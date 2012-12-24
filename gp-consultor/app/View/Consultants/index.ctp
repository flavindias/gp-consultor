
<h1>Consultores</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Cor</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($consultants as $consul): ?>
    <tr>
        <td><?php echo $consul['Consultant']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($consul['Consultant']['name'],
array('controller' => 'Consultants', 'action' => 'view', $consul['Consultant']['id'])); ?>
        </td>
        <td><?php echo $consul['Consultant']['acronym_color']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>