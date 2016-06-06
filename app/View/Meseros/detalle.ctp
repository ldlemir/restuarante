<div class="container">
	<h2>Detalle del Meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>

<p>Id:<?php echo $mesero['Mesero']['id']; ?></p>
<p>Documento:<?php echo $mesero['Mesero']['documento']; ?></p>
<p>Nombre:<?php echo $mesero['Mesero']['nombre']; ?></p>
<p>Apellido:<?php echo $mesero['Mesero']['apellido']; ?></p>
<p>Telefono:<?php echo $mesero['Mesero']['telefono']; ?></p>
<p>Fehace de Ingreso:<?php echo $this->Time->format('d-m-Y; h:i A', $mesero['Mesero']['created']); ?></p>
<p>Fecha de Modificación:<?php echo $this->Time->format('d-m-Y; h:i A', $mesero['Mesero']['modified']); ?></p>

<?php echo $this->Html->link('Regresar', array('controller'=>'meseros', 'action'=>'index')); ?>

</div>

