<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>CodeIgniter</title>
		<script type="text/javascript" src="<?php echo base_url()?>resources/js/common/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>resources/sidr-menu-responsive/jquery.sidr.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>resources/sidr-menu-responsive/stylesheets/jquery.sidr.dark.css" />
	</head>
	<body>
		<section id="pagiframe">
			<iframe src="http://www.google.com" />
			</iframe>
		</section>
		<div id="container">
			<a id="simple-menu" href="#sidr">Toogle menu</a>
			<div id="sidr">
				<ul>
					<li class="active">
						<a href="#">Inicio</a>
					</li>
					<li class>
						<a href="#">Cadastros</a>
						<ul>
							<li>
								<a>Perfil</a>
								<?php echo form_hidden('hd_link',$perfil);?>
							</li>
							<li>
								<a>Usuarios</a>
								<?php echo form_hidden('hd_link',$usuarios);?>
							</li>
							<li>
								<a name="<?php echo $materias;?>">Materias</a>
								<?php echo form_hidden('hd_link',$materias);?>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<section>
			</section>
			<script>
				$(document).ready(function() {
					$('#simple-menu').sidr();
					$('li ul li a').click(function(){
						var link = $('input:hidden').val();
						$('iframe').attr('src',link);
						$('#sidr').removeAttr('style');						  
						});
				});
			</script>
		</div>

	</body>
</html>