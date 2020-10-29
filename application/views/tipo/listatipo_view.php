<div class="container">
<h1>Lista de Tipos de Productos</h1>
<?php
		$atributos = array('class' => 'form-group', 'id' => 'myform');
		echo form_open_multipart('tipo/agregar',$atributos); ?>
		<button type="submit" class="btn btn-primary btn">Agregar Tipo de Producto</button>
		<?php echo form_close(); ?>
<table class="table table-light table-hover">
	<thead class="thead-light">
		<tr>
			<th>No.</th>
			<th>Tipo</th>
			<th>Editar</th>
			<th>Borra</th>	
		</tr>
	</thead>
	<tbody>
		<?php
			$indice=1;
			foreach ($tipo->result() as $row)
			{
				?>
				<tr>
					<td><?php echo $indice; ?></td>
					<td><?php echo $row->tipo; ?></td>
					
					</td>
					<td>
						
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('tipo/modificar',$atributos); ?>

						<input type="hidden" name="idtipo" value="<?php echo $row->idtipo; ?>">
						
						<button type="submit" class="btn btn-primary btn">Modificar</button>
						<?php echo form_close(); ?>
						</td>
						<td >
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('tipo/eliminarbd',$atributos); ?>
						<input type="hidden" name="id" value="<?php echo $row->idtipo; ?>">
						<button type="submit" class="btn btn-danger btn" onclick="return confirm('Desea Borrar este tipo de producto');">Eliminar</button>
						<?php echo form_close(); ?>
						
					</td>
				</tr>
				<?php		
				$indice++;
			}
		?>
	</tbody>
</table>



</div>