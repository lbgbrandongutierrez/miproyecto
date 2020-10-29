|<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'idtipo' => 'myform');
	echo form_open_multipart('tipo/modificarbd',$atributos);
	foreach ($infotipo->result() as $row)
	{
	?>
	<input type="hidden"  name="idtipo" value="<?php echo $row->idtipo; ?>">

	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="tipo" class="form-control" value="<?php echo $row->tipo; ?>">
	
	<button type="submit" class="btn btn-primary btn">Modificar</button>
	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/tipo/index">Cancelar</a>
	<?php
	}
	echo form_close();
	?>
	

</div>