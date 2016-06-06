<div class="container">
	<h2>Editar Meser@</h2>

	<?php echo $this->Form->create('Mesero');
	echo $this->Form->input('documento');	
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('telefono');
	echo $this->Form->end('Editar');
	 ?>

	 <?php echo $this->Html->link('Regresar', array('controller'=>'meseros', 'action'=>'index')); ?>
</div>