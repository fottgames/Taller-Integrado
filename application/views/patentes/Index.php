<div class="col-xs-12">
	<h1><?php echo $titulo; ?></h1>
	<?php foreach ($patentes as $key => $value): ?>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom: 3px;">
		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="heading<?php echo $key; ?>">
		  		<h4 class="panel-title" data-toggle="collapse" href="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
				<a role="button" href="#collapse<?php echo $key; ?>">N Solicitud: <?php echo $value->n_solicitud." - ".$value->titulo; ?>
				</a>
		  		</h4>
			</div>
			<div id="collapse<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key; ?>">
		  		<div class="panel-body">
		  			<div class="row">
		  				<div class="col-xs-12">
		  					<div class="form-group">
								<label class="col-md-2 control-label text-right" for="textinput">Resumen:</label>
								<div class="col-md-10" style="padding-left: 10px;">
									<textarea disabled="disabled" class="form-control" style="padding-top: 2px;"><?php echo $value->resumen; ?></textarea>
								</div>
							</div>
		  				</div>
		  			</div>
		  			<div class="container-fluid">
		  				<hr style="margin-bottom: 10px; margin-bottom: 10px;">
		  			</div>
		  			<div class="row">
			  			<div class="col-xs-6">
			  				<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">N Solicitud:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->n_solicitud; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Fecha de Publicacion:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->fecha_publicacion; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">N Registro Patente:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->n_registro_patente; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Tipo de Solicitud:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Prioridad:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->prioridad; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Fecha Solicitud:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->fecha_solicitud; ?>">
								</div>
							</div>
			  			</div>

			  			<div class="col-xs-6">
			  				<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Estado:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->estado; ?>">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Fecha Registro:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->registro; ?>">
								</div>
							</div>
			  			</div>
		  			</div>
		  			<div class="container-fluid">
		  				<hr style="margin-bottom: 10px; margin-bottom: 10px;">
		  			</div>
		  			<div class="row">
		  				<div class="col-xs-10 col-xs-offset-1" style="background-color: #DDEEFF; margin-bottom: 10px;">
		  					<span style="font-size: 18px;">Solicitante</span>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-xs-6">
		  					<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Nombre/Razon Social:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>

							<?php if (!empty($value->n_registro_patente)): ?>
								<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Comuna:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
									</div>
								</div>
							<?php endif ?>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Pais:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>
		  				</div>
		  			</div>


		  			<div class="row">
		  				<div class="col-xs-10 col-xs-offset-1" style="background-color: #DDEEFF; margin-bottom: 10px;">
		  					<span style="font-size: 18px;">Inventor</span>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-xs-6">
		  					<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Nombre/Razon Social:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>

							<?php if (!empty($value->n_registro_patente)): ?>
								<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Comuna:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
									</div>
								</div>
							<?php endif ?>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Pais:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>
		  				</div>
		  			</div>

		  			<div class="row">
		  				<div class="col-xs-10 col-xs-offset-1" style="background-color: #DDEEFF; margin-bottom: 10px;">
		  					<span style="font-size: 18px;">Representante</span>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-xs-6">
		  					<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Nombre/Razon Social:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>

							<?php if (!empty($value->n_registro_patente)): ?>
								<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Comuna:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
									</div>
								</div>
							<?php endif ?>

							<div class="form-group">
								<label class="col-md-4 control-label text-right" for="textinput">Pais:</label>
								<div class="col-md-8" style="margin-bottom: 5px;">
									<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->tipo_solicitud; ?>">
								</div>
							</div>
		  				</div>
		  			</div>


		  		</div>
			</div>
	  	</div>
	</div>
	<?php endforeach ?>
</div>