<div class="container">
<h1>Listar zonas</h1>
<?php
		$atributos = array('class' => 'form-group', 'id' => 'myform');
		echo form_open_multipart('zona/agregar',$atributos); ?>
		<button type="submit" class="btn btn-primary btn">Agregar zona</button>
		<?php echo form_close(); ?>
<table class="table table-dark table-hover">
	<thead class="thead-light">
		<tr>
			<th>No.</th>
			<th>zona</th>
			<th>detalle</th>
			<th>Editar</th>
			<th>Borra</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$indice=1;
			foreach ($zona->result() as $row)
			{
				?>
				<tr>
					<td><?php echo $indice; ?></td>
					<td><?php echo $row->zona; ?></td>
					<td><?php echo $row->detalle; ?></td>
					<td>
						
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('zona/modificar',$atributos); ?>

						<input type="hidden" name="idzona" value="<?php echo $row->idzona; ?>">
						
						<button type="submit" class="btn btn-primary btn">Modificar</button>
						<?php echo form_close(); ?>
						</td>
						<td >
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('zona/eliminarbd',$atributos); ?>
						<input type="hidden" name="id" value="<?php echo $row->idzona; ?>">
						<button type="submit" class="btn btn-danger btn" onclick="return confirm('Desea Borrar esta zona');">Eliminar</button>
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