<div class="container">
	<h2>Editar Mesa</h2>

	<?php echo $this->Form->create('Mesa'); 
		  echo $this->Form->input('codigo');
		  echo $this->Form->input('puestos');
		  echo $this->Form->input('posicion');
		  echo $this->Form->input('mesero_id');
		  echo $this->Form->end('Editar');
	?>

	<?php echo $this->Html->link('Regresar', array('controller'=>'mesas', 'action'=>'index')); ?>
</div>