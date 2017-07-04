<div class="col-xs-12">
	<h1><?php echo $titulo; ?></h1>
	<?php foreach ($ as $key => $value): ?>
		
	<?php endforeach ?>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-primary">
			<div class="panel-heading" role="tab" id="headingOne">
		  		<h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<a role="button" href="#collapseOne">
			  		<?php echo $query[0]->titulo; ?>
				</a>
		  		</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		  		<div class="panel-body">
					R: Representa el compromiso que un académico o académica contrae con su institución para el cumplimiento de sus obligaciones académicas, orientadas a incrementar la productividad de la Universidad, en los ámbitos de la investigación, extensión y perfeccionamiento.
		  		</div>
			</div>
	  	</div>
	</div>
	<?php print_r($query) ?>
</div>