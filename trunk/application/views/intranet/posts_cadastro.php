<head>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/icheckmaster/skins/line/blue.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/resources/flat-ui-master/css/flat-ui.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/load.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/jquery-validation/dist/jquery.validate.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/common/functions.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/icheckmaster/js/jquery.icheck.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/tooltipster-master/js/jquery.tooltipster.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.tagsinput.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.dropkick-1.0.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_checkbox_and_radio.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_radio.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="http://vjs.zencdn.net/c/video.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resources/jquery-ui/ui/jquery-ui.js"></script>
	<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css" rel="stylesheet">
   <!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
   -->
	</head>

<h1>Cadastrar Materia</h1>
<?php

echo form_open('index.php/intranet/posts_cadastro/save');
echo form_fieldset('Materias');

echo form_label('Titulo','lbl_titulo'). "<br />";
echo form_input('titulo') . "<br />";

echo form_label('Descricao Resumida','lbl_desc_resumida') . "<br />";
echo form_input('desc_resumida') . "<br />";

echo form_label('Categoria','lbl_categoria') . "<br />";
echo form_input('ac_categoria','','id="ac_categoria"') . "<br />";

// echo form_label('Conteudo','lbl_conteudo') . "<br />";
// echo form_textarea('editor1') . "<br />";

// echo form_label('Referencias','lbl_ref') . "<br />";
// echo form_textarea('referencias') . "<br />"; 

?>
 
<div class="ui-widget">
  <label for="city">Your city: </label>
  <input id="city" />
  Powered by <a href="http://geonames.org">geonames.org</a>
</div>
 
<div class="ui-widget" style="margin-top: 2em; font-family: Arial;">
  Result:
  <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>
<!-- <section class="palavrasChave"> -->
<!--           <h3 class="demo-panel-title">Palavra Chave</h3> 
          <input name="tagsinput" id="tagsinput" class="tagsinput" value="" style="display: none;">-->
<!-- </section> -->
        <script>
        $(document).ready(function(){
	        $("#tagsinput").tagsInput();
	            $( "#ac_categoria" ).autocomplete({
		            source: "categoria_cadastro/au_get_by_name",
			            minLength: 1,
			            select: function(event, ui) {
			            	if(ui.item){
			            	alert ($(event.target).val(ui.item.value).val());
			            	}
			            },
			                
	            });
        });
        </script>
<?php //  
// echo form_fieldset_close();
// echo form_submit('Enviar','enviar');
// echo form_close();
?>


