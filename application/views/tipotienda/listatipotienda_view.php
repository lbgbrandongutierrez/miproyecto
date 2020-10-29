<div class="container">
<h1 style="font-family:'Sansita Swashed','cursive' ">Lista Tipos de Tiendas</h1>
<?php
		$atributos = array('class' => 'form-group', 'id' => 'myform');
		echo form_open_multipart('tipotienda/agregar',$atributos); ?>
		<button style="font-family:'Sansita Swashed','cursive' type="submit" class="btn btn-primary btn">Agregar Tipo de Tienda</button>
		<?php echo form_close(); ?>
<table class="table table-dark table-hover">
	<thead class="thead-light">
		<tr>
			<th class="stilo" >No.</th>
			<th style="font-family:'Sansita Swashed','cursive' ">Tipotienda</th>
			<th style="font-family:'Sansita Swashed','cursive' ">descripcion</th>
			<th style="font-family:'Sansita Swashed','cursive' ">Editar</th>
			<th style="font-family:'Sansita Swashed','cursive' ">Borra</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$indice=1;
			foreach ($tipotienda->result() as $row)
			{
				?>
				<tr>
					<td style="font-family:'Sansita Swashed','cursive' "><?php echo $indice; ?></td>
					<td style="font-family:'Sansita Swashed','cursive' "><?php echo $row->nombre; ?></td>
					<td style="font-family:'Sansita Swashed','cursive' "><?php echo $row->descripcion; ?></td>
					<td style="font-family:'Sansita Swashed','cursive' ">
						
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('tipotienda/modificar',$atributos); ?>

						<input type="hidden" name="idtipotienda" value="<?php echo $row->idtipotienda; ?>">
						
						<button type="submit" class="btn btn-primary btn">Modificar</button>
						<?php echo form_close(); ?>
						</td>
						<td style="font-family:'Sansita Swashed','cursive' ">
						<?php
						$atributos = array('class' => 'form-group', 'id' => 'myform');
						echo form_open_multipart('tipotienda/eliminarbd',$atributos); ?>
						<input type="hidden" name="id" value="<?php echo $row->idtipotienda; ?>">
						<button type="submit" class="btn btn-danger btn" onclick="return confirm('Desea Borrar este Tipo de Tienda');">Eliminar</button>
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