<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<title>CodeIgniter</title>
		<script type="text/javascript" src="<?php echo base_url()?>/resources/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/resources/sidr-menu-responsive/jquery.sidr.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()?>/resources/sidr-menu-responsive/stylesheets/jquery.sidr.dark.css" />
	</head>
	<body>

		<div id="container">
			<a id="simple-menu" href="#sidr">Toogle menu</a>
			<div id="sidr">
				<!-- Your content -->
				<ul>
					<li class="active">
						<a href="#">Início</a>
					</li>
					<li class>
						<a href="#">Cadastros</a>
						<ul>
							<li>
								<a href={link}>Usuarios</a>
							</li>
							<li>
								<a href={link}>Perfil</a>
							</li>
							<li>
								<a href={link}>Materias</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<section>
			</section>
			<iframe src="<?php echo base_url()?>views/intranet/principal" />
  <p>Your browser does not support iframes.</p>
</iframe>
			<script>
				$(document).ready(function() {
					$('#simple-menu').sidr();
				});
			</script>
			<p class="footer">
				Page rendered in <strong>{elapsed_time}</strong> seconds
			</p>
		</div>

	</body>
</html>