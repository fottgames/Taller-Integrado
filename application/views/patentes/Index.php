<div class="col-xs-12">
	<h1><?php echo $titulo; ?></h1>
</div>
<div class="col-xs-12">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"">
		<?php foreach ($patentes as $key => $value): ?>
			<div class="panel panel-primary">
				<div class="panel-heading" role="tab" id="heading<?php echo $key; ?>">
		  			<h4 class="panel-title" data-toggle="collapse" href="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
						<a role="button" href="#collapse<?php echo $key; ?>">N Solicitud: <?php echo $value->n_solicitud; ?>
						</a>
		  			</h4>
				</div>

				<div id="collapse<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key; ?>">
					<div class="panel-body">
						<div class="row" style="margin-bottom: 5px;">
			  				<div class="col-xs-12">
			  					<div class="form-group">
									<label class="col-md-2 control-label text-right" for="textinput">Descripcion:</label>
									<div class="col-md-10" >
										<textarea disabled="disabled" class="form-control" cols="auto" rows="4"><?php echo $value->descripcion; ?></textarea>
									</div>
								</div>
			  				</div>
			  			</div>

			  			<div class="row" style="margin-bottom: 5px;">
			  				<div class="col-xs-6">
			  					<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">N° Registro:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->n_registro; ?>">
									</div>
								</div>
			  				</div>

			  				<div class="col-xs-6">
			  					<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Fecha de Registro:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->fecha_registro; ?>">
									</div>
								</div>
			  				</div>
			  			</div>

			  			<div class="row" style="margin-bottom: 5px;">
			  				<div class="col-xs-6">
			  					<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Solicitante:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<input type="text" disabled="disabled" class="form-control" value="<?php echo $value->solicitante; ?>">
									</div>
								</div>
			  				</div>

			  							  				<div class="col-xs-6">
			  					<div class="form-group">
									<label class="col-md-4 control-label text-right" for="textinput">Ver PDF:</label>
									<div class="col-md-8" style="margin-bottom: 5px;">
										<span class="btn" data-toggle="modal" data-backdrop="static" data-target="#redirectModal-<?php echo $value->id; ?>" alt="Ver PDF" title="Ver PDF"><img width="30px" src=<?php echo base_url()."assets/img/pdfIMG.png" ?> alt=""></span>
									</div>
								</div>
			  				</div>

			  			</div>
					</div>
				</div>
			</div>


			<div class="modal" id="redirectModal-<?php echo $value->id; ?>" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
				<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content panel-green">
			    		<div class="modal-body">
								<div class="text-center">
									<iframe src="http://barion.inapi.cl/BuscaBiblio/<?php echo $value->archivo; ?>" width="720" height="600" frameborder="0" marginheight="0">Cargando...</iframe>
								</div>
								<br>
			    		</div>
			    		<div class="modal-footer">
			    			<span class="btn btn-default" data-dismiss="modal" >Cerrar</span>
			    		</div>
			    	</div>
			  	</div>
			</div>
		<?php endforeach ?>
	</div>
</div>