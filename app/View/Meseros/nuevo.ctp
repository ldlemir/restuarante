<div class="container">


	<h2>Agrear un nuevo meser@</h2>
	<form>
	
			<form class="form-signin">
			<?php echo $this->Form->create('Mesero'); 
			echo $this->Form->input('documento', array('class'=>'form-control','required autofocus', 'type'=>'text'));
			echo $this->Form->input('nombre', array('class'=>'form-control','required'));
			echo $this->Form->input('apellido', array('class'=>'form-control','required'));
			echo $this->Form->input('telefono', array('class'=>'form-control','required', 'type'=>'text'));
			?>
			<br>
			<?php echo $this->Form->end(array('label'=>'editar', 'class'=>'btn btn-sm btn-success')); ?>
		
	</form>

</div>