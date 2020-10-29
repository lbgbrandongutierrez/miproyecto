|<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'idzona' => 'myform');
	echo form_open_multipart('zona/modificarbd',$atributos);
	foreach ($infozona->result() as $row)
	{
	?>
	<input type="hidden" name="idzona" value="<?php echo $row->idzona; ?>">

	<input type="text" name="zona" class="form-control" value="<?php echo $row->zona; ?>">
	
	<input type="text" name="detalle" class="form-control" value="<?php echo $row->detalle; ?>">

	<button type="submit" class="btn btn-primary btn">Modificar</button>
	<?php
	}
	echo form_close();
	?>
	

</div>