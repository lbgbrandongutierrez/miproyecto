|<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'idtipotienda' => 'myform');
	echo form_open_multipart('tipotienda/modificarbd',$atributos);
	foreach ($infotipotienda->result() as $row)
	{
	?>
	<input type="hidden"  name="idtipotienda" value="<?php echo $row->idtipotienda; ?>">

	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="nombre" class="form-control" value="<?php echo $row->nombre; ?>">
	
	<input type="text" required="required" maxlength="30" pattern="[A-Za-z]+" name="descripcion" class="form-control" value="<?php echo $row->descripcion; ?>">

	<button type="submit" class="btn btn-primary btn">Modificar</button>
	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/tipotienda/index">Cancelar</a>
	<?php
	}
	echo form_close();
	?>
	

</div>