<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>Titulo</title>
</head>
<body>

<div id="container">
	<h1>Bem vindo</h1>

	<div id="body">
		<?php 
			echo form_open('testes/login');
			echo form_fieldset('Campos');
			echo form_input('User');
			echo form_password('pass');
			echo form_submit('valida','Validar');
			Echo form_fieldset_close();
			echo form_close();
		?>
	<ul>
	
		<?php
			foreach($estacionamentos as $a){
			 echo '<li>' . $a->nome_esta . ' </li>';
			 
			 
				
				
			}
			 ?>
		
		
	</ul>
	</div>
	

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>