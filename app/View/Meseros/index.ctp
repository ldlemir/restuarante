<br>
<br>
<br>
<br>


<div class="container">

<h2>Lista de Meseros</h2>

<?php echo $this->Html->link('Agregar Nuevo Meser@', array('controller'=>'meseros', 'action'=>'nuevo'), array('class'=>'btn btn-sm btn-info')); ?>

<br>
<br>

	<div class="row">
		<div class="col-md-12">
			<table class= "table table-bordered">
		<tr>
			<td>Id</td>
			<td>Documento</td>
			<td>Nombre</td>
			<td>Detalle</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
		<?php foreach ($meseros as $meseros): ?>
			<tr>
				<td><?php echo $meseros['Mesero']['id']; ?></td>
				<td><?php echo $meseros['Mesero']['documento']; ?></td>
				<td><?php echo $meseros['Mesero']['nombre']; ?></td>
				<td class = "actions"><?php echo $this->Html->link('Detalle',array('controller'=>'meseros', 'action'=>'detalle', $meseros['Mesero']['id']), array('class'=>'btn btn-sm btn-warning')); ?></td>
				<td class = "actions"><?php echo $this->Html->link('Editar',array('controller'=>'meseros', 'action'=>'editar', $meseros['Mesero']['id'])); ?></td>
				<td class = "actions"><?php echo $this->Form->postLink('Eliminar', array('controller'=>'meseros', 'action'=>'eliminar', $meseros['Mesero']['id']), array('confirm'=>'Esta seguro de eliminar a'." ".$meseros['Mesero']['nombre'].'?')); ?></td>
			</tr>
		<?php endforeach ?>
	</table>
		</div>
	</div>
</div>