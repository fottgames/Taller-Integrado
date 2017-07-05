<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse navbar-ex1-collapse">
	<ul class="nav navbar-nav">
		<li class="<?php if ($currentPage == "Home") echo "active";?>"><a href="home" ><b>Inicio</b></a></li>
		<li class="<?php if ($currentPage == "Patentes") echo "active";?>"><a href="patentes" ><b>Patentes</b></a></li>
	</ul>

	</div>
</nav>