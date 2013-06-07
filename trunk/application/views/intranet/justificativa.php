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
	<script type="text/javascript" src="<?php echo base_url();?>resources/jquery.fineuploader/jquery.fineuploader-3.6.0.js"></script>
	<link href="<?php echo base_url(); ?>resources/jquery.fineuploader/fineuploader-3.6.0.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css" rel="stylesheet">
   <!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
	</head>
   -->

  </head>
<?php
echo form_open('index.php/intranet/posts_cadastro/justificar');
echo form_hidden('hd_id','{id}');
echo form_hidden('listagem','{list}');
echo form_fieldset('Justificativa');
echo form_textarea('justificativa','','style="width:100%;"');
echo form_close();
echo form_button('enviar','<img src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_salvar').'"');

echo form_fieldset_close();
?>
<script>
$(document).ready(function(){
	$('[name="enviar"]').click(function(){
		$('form').submit();
		});
});
</script>