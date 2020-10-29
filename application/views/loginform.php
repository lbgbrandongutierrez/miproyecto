<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login de usuario</title>
</head>
<body>
	<?php 
	switch ($msg) {
	 	case '1':
	 		echo "Error de ingreso";
	 		break;
	 	case '2':
	 		echo "acceso no valido";
	 		break;
	 	case '3':
	 		echo "salida";
	 		break;		
	 	
	 	default:
	 		echo "";
	 		break;
	 } ?>
	 <?php
	 	echo form_open_multipart('usuario/validarusuario'); 
	  ?>
	  <input type="texy" name="usuario">
	  <input type="password" name="clave">
	  <button type="submit">acceder</button>
	  <?php
	 	echo form_close(); 
	  ?>

</body>
</html>