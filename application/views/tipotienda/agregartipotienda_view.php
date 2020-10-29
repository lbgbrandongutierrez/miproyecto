<div class="container">

	<?php
	
	$atributos = array('class' => 'form-group', 'id' => 'myform');
	echo form_open_multipart('tipotienda/agregarbd',$atributos);
	?>
	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="nombre" class="form-control" placeholder="Ingrese el nombre">
	<input type="text" required="required" maxlength="25" pattern="[A-Za-z]+" name="descripcion" class="form-control" placeholder="Ingrese su descripcion">
	<button type="submit" class="btn btn-primary btn">Agregar</button>
	

	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/tipotienda/index">Regresar</a>
	<?php
	echo form_close();
	?>
</div>