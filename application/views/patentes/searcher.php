<div class="container">
	<h1><?php echo $titulo; ?></h1>
	<div class="form_input">
		<form action="<?php echo base_url() ?>patentes" method="POST">

			<div class="form-group">
    			<label for="">Desde - Hasta</label>
    			<div class="row">
    				<div class="col-xs-6">
    					<input type="date" class="form-control" id="date1" name="date1">	
    				</div>


    				<div class="col-xs-6">
    					<input type="date" class="form-control" id="date2" name="date2">	
    				</div>		
    			</div>
    			
  			</div>

			<div class="form-group">
    			<label for="n_solicitud">N° Solicitud :</label>
    			<input type="text" class="form-control" id="n_solicitud" name="n_solicitud">
  			</div>

  			<div class="form-group">
    			<label for="n_registro">N° Registro :</label>
    			<input type="text" class="form-control" id="n_registro" name="n_registro">
  			</div>

  			<div class="form-group">
    			<label for="solicitante">Solicitante :</label>
    			<input type="text" class="form-control" id="solicitante" name="solicitante">
  			</div>

  			<div class="form-group">
    			<label for="descripcion">Descripcion :</label>
    			<input type="text" class="form-control" id="descripcion" name="descripcion">
  			</div>


  			 <button name="enviar" type="submit" class="btn btn-default">Submit</button>
		</form>


	</div>
</div>