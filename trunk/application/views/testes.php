<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>{Titulo}</title>
		<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>resources/jquery-ui/ui/jquery-ui.js"></script>
	<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css" rel="stylesheet">
	<style>
  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
  </style>
  <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: ''
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags" />
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
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>