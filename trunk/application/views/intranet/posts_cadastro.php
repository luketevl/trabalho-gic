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

echo form_open_multipart('index.php/intranet/posts_cadastro/save');
echo form_hidden('hd_id','{id_post}');
echo form_hidden('hd_status','{status_post}');
echo form_hidden('hd_cat_id','{id_cat}');
echo form_hidden('hd_keywords','{keywords_post}');

echo form_fieldset('Materias');

echo form_label('Titulo','lbl_titulo'). "<br />";
echo form_input('titulo','{titulo_post}');

echo form_label('Data Criacao','lbl_dt_aprovacao');
echo form_input('dtcriacao','{dt_criacao}','readonly=readonly class="center"');


echo form_label('Data Aprovacao','lbl_dt_aprovacao');
echo form_input('dt_aprovacao','{dt_modificacao}','readonly=readonly class="center"') . "<br />";

echo form_label('Status','lbl_status');
echo form_input('status','{status}','readonly=readonly ');

echo form_upload('userfile');

echo form_label('Descricao Resumida','lbl_desc_resumida') . "<br />";
echo form_input('desc_resumida','{resumo_post}') . "<br />";

echo form_label('URL do video','lbl_url_youtube') . "<br />";
echo form_input('url_youtube','{url_youtube}') . "<br />";

echo form_label('Categoria','lbl_categoria') . "<br />";
echo form_input('ac_categoria','{categoria}','id="ac_categoria"') . "<br />";

echo form_label('Conteudo','lbl_conteudo') . "<br />";
echo form_textarea('editor1','{conteudo_post}') . "<br />";
?>

<section class="palavrasChave">
	<h3 class="demo-panel-title">Palavra Chave</h3> 
	<input name="tagsinput" id="tagsinput" class="tagsinput" value="{keywords_post}" style="display: none;">
</section>

<?php  
echo form_label('Referencias','lbl_ref') . "<br />";
echo form_textarea('referencias','{ref_post}') . "<br />"; 
echo form_fieldset_close();
echo form_submit('enviar','Enviar');
echo form_button('aprovar','Aprovar');
echo form_button('rejeitar','Rejeitar');
echo form_button('publicar','Publicar');
echo form_button('remove','Apagar');
echo form_close();
?>

<script>
$(document).ready(function(){
	$(':button').click(function(ev){
		ev.preventDefault();
		var temp = $(this).attr('name');
		if(temp == 'aprovar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/aprovar');
		}
		else if(temp == 'rejeitar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/rejeitar');
			}
		else if(temp == 'publicar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/publicar');
			}
		else if(temp == 'remove'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/deletar');
			}
	$('form').submit();	
		});
});
</script>

