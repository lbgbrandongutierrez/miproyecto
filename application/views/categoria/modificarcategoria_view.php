|<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'idcategoria' => 'myform');
	echo form_open_multipart('categoria/modificarbd',$atributos);
	foreach ($infocategoria->result() as $row)
	{
	?>
	<input type="hidden"  name="idcategoria" value="<?php echo $row->idcategoria; ?>">

	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="categoria" class="form-control" value="<?php echo $row->categoria; ?>">
	
	<button type="submit" class="btn btn-primary btn">Modificar</button>
	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/categoria/index">Cancelar</a>
	<?php
	}
	echo form_close();
	?>
	

</div>