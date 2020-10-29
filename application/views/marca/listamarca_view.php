<div class="container">
<h1>Lista de Marcas de Productos</h1>
<?php
		$atributos = array('class' => 'form-group', 'id' => 'myform');
		echo form_open_multipart('marca/agregar',$atributos); ?>
		<button type="submit" class="btn btn-primary btn">Agregar Marca de Productos</button>
		<?php echo form_close(); ?>
<table class="table table-light table-hover">
	<thead class="thead-light">
		<tr>
			<th>No.</th>
			<th>Marca</th>
			<th>Editar</th>
			<th>Borra</th>	
		</tr>
	</thead>
	<tbody>
		<?php
			$indice=1;
			foreach ($marca->result() as $row)
			{
				?>
				<tr>
					<td><?php echo $indice; ?></td>
					<td><?php echo $row->marca; ?></td>
					
					</td>
					<td>
						
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('marca/modificar',$atributos); ?>

						<input type="hidden" name="idmarca" value="<?php echo $row->idmarca; ?>">
						
						<button type="submit" class="btn btn-primary btn">Modificar</button>
						<?php echo form_close(); ?>
						</td>
						<td >
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('marca/eliminarbd',$atributos); ?>
						<input type="hidden" name="id" value="<?php echo $row->idmarca; ?>">
						<button type="submit" class="btn btn-danger btn" onclick="return confirm('Desea Borrar esta marca');">Eliminar</button>
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