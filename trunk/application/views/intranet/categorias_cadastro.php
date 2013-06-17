<head>

<link rel="stylesheet"
	href="<?php echo base_url(); ?>resources/icheckmaster/skins/line/blue.css" />
<link rel="stylesheet"
	href="<?php echo base_url(); ?>resources/css/style.css" />
<link rel="stylesheet"
	href="<?php echo base_url(); ?>/resources/flat-ui-master/css/flat-ui.css" />
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/js/common/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/js/common/load.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/js/common/functions.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/icheckmaster/js/jquery.icheck.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/tooltipster-master/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.tagsinput.js"></script>
<link rel="stylesheet"
	href="<?php echo base_url(); ?>resources/css/style.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.dropkick-1.0.0.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_checkbox_and_radio.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_radio.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/bootstrap-tooltip.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="http://vjs.zencdn.net/c/video.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/ckeditor/ckeditor.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery-ui/ui/jquery-ui.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery.fineuploader/jquery.fineuploader-3.6.0.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/Slides-SlidesJS-3/source/jquery.slides.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery.confirm/jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery.confirm/js/script.js"></script>
<link
href="<?php echo base_url(); ?>resources/jquery.confirm/jquery.confirm/jquery.confirm.css"
rel="stylesheet" />
	
<link
	href="<?php echo base_url(); ?>resources/jquery.fineuploader/fineuploader-3.6.0.css"
	rel="stylesheet">
<link
	href="<?php echo base_url(); ?>resources/jquery-validation/demo/css/screen.css"
	rel="stylesheet" />
<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css"
	rel="stylesheet" />
<link
	href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css"
	rel="stylesheet" />

		
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.min.js"></script>
<link href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.css" media="all" rel="stylesheet" type="text/css" />
<!-- Include this file if you are using Pines Icons. -->
<link href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.icons.css" media="all" rel="stylesheet" type="text/css" />
	
	
	<link href="<?php echo base_url(); ?>resources/pnotify-master/devnote.css" rel="stylesheet" type="text/css" />
	<!-- Page Style -->
	<link href="<?php echo base_url(); ?>resources/pnotify-master/includes/style.css" rel="stylesheet" type="text/css" />
	<!-- jQuery -->
	<link href="<?php echo base_url(); ?>resources/pnotify-master/includes/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/pnotify-master/includes/bootstrap/js/bootstrap.min.js"></script>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Oxygen Icons -->
	<link href="<?php echo base_url(); ?>resources/pnotify-master/oxygen/icons.css" rel="stylesheet" type="text/css" />
	<!-- JavaScript Source Formatting -->
	<link href="<?php echo base_url(); ?>resources/pnotify-master/includes/google-code-prettify/prettify.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/pnotify-master/includes/google-code-prettify/prettify.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/pnotify-master/includes/beautify.js"></script>
	<!-- Pines Notify -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.js"></script>
	<link href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.icons.css" rel="stylesheet" type="text/css" />
	
	
	
	
<!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
	</head>
   -->

</head>
<script>
  $(document).ready(function() {
    var id_cat = $('[name="hd_id"]').val();
  });
</script>
<h1>Cadastrar Categoria</h1>
<?php
echo form_hidden('hd_uc','categorias_cadastro');
echo form_open_multipart('index.php/intranet/categorias_cadastro/save');

echo form_hidden('hd_id','{id_cat}');
echo form_hidden('hd_cat_id','{fk_id_cat}');

echo form_fieldset('Dados');
echo form_fieldset('','class="lblInput"', 'style="width:500px;"');
echo form_label('Nome','lbl_name');
echo form_input('nome','{nome_cat}','class="required"');
echo form_fieldset_close();

echo form_label('Categoria Mae','lbl_name');
echo form_input('nome_mae','{nome_cat_mae}','id="ac_categoria"');
echo form_fieldset_close();

echo form_fieldset_close();

echo form_button('adicionar','<img src='. base_url() .'resources/icons/add.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_novo').'"');
echo form_button('enviar','<img src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_salvar').'"');
echo form_button('remover','<img  src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
echo form_close();
?>