<div class="container">
<h1>Lista de categorias de Productos</h1>
<?php
		$atributos = array('class' => 'form-group', 'id' => 'myform');
		echo form_open_multipart('categoria/agregar',$atributos); ?>
		<button type="submit" class="btn btn-primary btn">Agregar categoria de Producto</button>
		<?php echo form_close(); ?>
<table class="table table-light table-hover">
	<thead class="thead-light">
		<tr>
			<th>No.</th>
			<th>categoria</th>
			<th>Editar</th>
			<th>Borra</th>	
		</tr>
	</thead>
	<tbody>
		<?php
			$indice=1;
			foreach ($categoria->result() as $row)
			{
				?>
				<tr>
					<td><?php echo $indice; ?></td>
					<td><?php echo $row->categoria; ?></td>
					
					</td>
					<td>
						
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('categoria/modificar',$atributos); ?>

						<input type="hidden" name="idcategoria" value="<?php echo $row->idcategoria; ?>">
						
						<button type="submit" class="btn btn-primary btn">Modificar</button>
						<?php echo form_close(); ?>
						</td>
						<td >
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('categoria/eliminarbd',$atributos); ?>
						<input type="hidden" name="id" value="<?php echo $row->idcategoria; ?>">
						<button type="submit" class="btn btn-danger btn" onclick="return confirm('Desea Borrar este categoria de producto');">Eliminar</button>
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