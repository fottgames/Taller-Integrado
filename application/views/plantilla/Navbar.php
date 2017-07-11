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
                <li class="<?php //if ($currentPage == "Home") echo "active";?>"><a href="<?php echo base_url("home")?>" ><b>Inicio</b></a></li>
		<li class="<?php //if ($currentPage == "Patentes") echo "active";?>"><a href="<?php echo base_url("patentes")?>" ><b>Patentes</b></a></li>
                <li class="<?php //if ($currentPage == "admin") echo "active";?>"><a href="<?php echo base_url("admin")?>" ><b>Back end</b></a></li>
                <?php 
                
                if ($this->session->userdata('logged_in')) {
                    $session_data = $this->session->userdata('logged_in');
                    $data['username'] = $session_data['username'];
                    echo '<li><a href='. base_url("Admin/logout").' ><b>Salir</b></a></li>' ;
                }
                ?>
                
                
        </ul>

	</div>
</nav>