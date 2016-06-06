<div class="container">
<?php echo $this->Html->link('Nueva Mesa', array('controller'=>'mesas', 'action'=>'nueva')); ?>
	<table>
		<tr>
			<td>codígo</td>
			<td>Puestos</td>
			<td>Posición</td>
			<td>Fecha de Reserva</td>
			<td>Encargado</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
		<?php foreach ($mesas as $mesas): ?>
			<tr>
				<td><?php echo $mesas['Mesa']['codigo']; ?></td>
				<td><?php echo $mesas['Mesa']['puestos']; ?></td>
				<td><?php echo $mesas['Mesa']['posicion']; ?></td>
				<td><?php echo $this->Time->format('d-m-Y; h:i A', $mesas['Mesa']['created']); ?></td>
				<td><?php echo $this->Html->link($mesas['Mesero']['nombre'], array('controller'=>'meseros', 'action'=>'detalle', $mesas['Mesero']['id'])); ?></td>
				<td><?php echo $this->Html->link('Editar', array('controller'=>'mesas', 'action'=>'editar', $mesas['Mesa']['id'])); ?></td>
				<td class = "actions"><?php echo $this->Form->postLink('Eliminar', array('controller'=>'mesas', 'action'=>'eliminar', $mesas['Mesa']['id']), array('confirm'=>'Esta seguro de eliminar a'." ".$mesas['Mesa']['codigo'].'?')); ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</div>