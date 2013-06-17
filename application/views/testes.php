<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>{Titulo}</title>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/js/common/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery-ui/ui/jquery-ui.js"></script>
<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css"
	rel="stylesheet">
<style>
.ui-autocomplete-loading {
	background: white url('images/ui-anim_basic_16x16.gif') right center
		no-repeat;
}
</style>
<script>
  $(document).ready(function(){
	    $( "#tags" ).autocomplete({
	      source: 'intranet/categoria_cadastro/au_get_all',
	      success: alert()
	    });
	  });
  </script>


<body>

	<div class="ui-widget">
		<label for="tags">Tags: </label> <input id="tags" />
	</div>

	<div class="ui-widget" style="margin-top: 2em; font-family: Arial;">
		Result:
		<div id="log" style="height: 200px; width: 300px; overflow: auto;"
			class="ui-widget-content"></div>
	</div>

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
			<!--
		<?php
			foreach($estacionamentos as $a){
			 echo '<li>' . $a->nome_esta . ' </li>';
			 
			}
			 ?> -->

			{Mensagem}
		</div>

		<p class="footer">
			Page rendered in <strong>{elapsed_time}</strong> seconds
		</p>
	</div>

</body>
</html>
