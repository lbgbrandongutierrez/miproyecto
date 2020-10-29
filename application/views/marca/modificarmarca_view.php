|<div class="container">
	<?php
	$atributos = array('class' => 'form-group', 'idmarca' => 'myform');
	echo form_open_multipart('marca/modificarbd',$atributos);
	foreach ($infomarca->result() as $row)
	{
	?>
	<input type="hidden"  name="idmarca" value="<?php echo $row->idmarca; ?>">

	<input type="text" required="required" maxlength="15" pattern="[A-Za-z]+" name="marca" class="form-control" value="<?php echo $row->marca; ?>">
	
	<button type="submit" class="btn btn-primary btn">Modificar</button>
	<a class="btn btn-primary" href="http://localhost/proyecto/index.php/marca/index">Cancelar</a>
	<?php
	}
	echo form_close();
	?>
	

</div>