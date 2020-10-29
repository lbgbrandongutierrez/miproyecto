<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'id' => 'myform');
	echo form_open_multipart('zona/agregarbd',$atributos);
	?>
	<input type="text" name="zona" class="form-control" placeholder="Ingrese la nueva zona">
	<input type="text" name="detalle" class="form-control" placeholder="Ingrese el detalle">
	<button type="submit" class="btn btn-primary btn">Agregar</button>
	<?php
	echo form_close();
	?>
</div>