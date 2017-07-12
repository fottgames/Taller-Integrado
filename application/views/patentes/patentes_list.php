<div class="container">
	<h1 class="text-center">Lista de patentes</h1>
	<table class="table table-bordered table-responsive table-striped">
		<thead style="background-color: #2aabd2">
			<tr>
				<th>N° Solicitud</th>
				<th>N° Registro</th>
				<th>Fecha de Registro</th>
				<th>Solicitante</th>
				<th>Descripcion</th>
				<th>Archivo</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($actor as $key => $value): ?>
				<tr>
				<td><?php echo $value->n_solicitud ?></td>
				<td><?php echo $value->n_registro ?></td>
				<td width="100px"><?php echo $value->fecha_registro ?></td>
				<td width="150px"><?php echo $value->solicitante ?></td>
				<td><?php echo $value->descripcion ?></td>
				<td><span class="btn" data-toggle="modal" data-backdrop="static" data-target="#redirectModal-<?php echo $value->id; ?>" alt="Ver PDF" title="Ver PDF"><a target="_blank" href="http://barion.inapi.cl/BuscaBiblio/<?php echo $value->archivo; ?>"><img width="40px" src=<?php echo base_url()."assets/img/pdfIMG.png" ?> alt=""></span></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<?php echo $this->pagination->create_links(); ?>
</div>