<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'id' => 'myform');
	echo form_open_multipart('marca/agregarbd',$atributos);
	?>
	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="marca" class="form-control" placeholder="Ingrese la marca">
	
	<button type="submit" required="required" class="btn btn-primary btn">crear</button>
	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/marca/index">Regresar</a>
	<?php
	echo form_close();
	?>
</div>