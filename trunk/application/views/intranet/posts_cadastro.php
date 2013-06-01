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

    <style>
      /* Fine Uploader
      -------------------------------------------------- */
      .qq-upload-list {
        text-align: left;
      }
 
      /* For the bootstrapped demos */
      li.alert-success {
        background-color: #DFF0D8;
      }
 
      li.alert-error {
        background-color: #F2DEDE;
      }
 
      .alert-error .qq-upload-failed-text {
        display: inline;
      }
    </style>
  </head>
 
    <script>
      function createUploader() {
        var uploader = new qq.FineUploader({
          element: document.getElementById('bootstrapped-fine-uploader'),
          request: {
            endpoint: ' upload'
          },
          text: {
            uploadButton: '<div><i class="icon-upload icon-white"></i> Test me now and upload a file</div>'
          },
          template: '<div class="qq-uploader span12">' +
                      '<pre class="qq-upload-drop-area span12"><span>{dragZoneText}</span></pre>' +
                      '<div class="qq-upload-button btn btn-success" style="width: auto;">{uploadButtonText}</div>' +
                      '<span class="qq-drop-processing"><span>{dropProcessingText}</span><span class="qq-drop-processing-spinner"></span></span>' +
                      '<ul class="qq-upload-list" style="margin-top: 10px; text-align: center;"></ul>' +
                    '</div>',
          classes: {
            success: 'alert alert-success',
            fail: 'alert alert-error'
          }
        });
      }
        
      window.onload = createUploader;
    </script>
	
	
	
<h1>Cadastrar Materia</h1>
<?php
echo form_open_multipart('index.php/intranet/posts_cadastro/save');
?> 
   <div id="bootstrapped-fine-uploader"></div>
<?php 
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
echo form_button('enviar','<img src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_salvar').'"');
echo form_button('aprovar','<img src='. base_url() .'resources/icons/aprovar.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_aprovar').'"');
echo form_button('rejeitar','<img src='. base_url() .'resources/icons/cancel.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_rejeitar').'"');
echo form_button('publicar','<img src='. base_url() .'resources/icons/publish.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_publicar').'"');
echo form_button('remover','<img title="'.lang('btn_aprovar'). '" src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
echo form_close();
?>
<script>
$(document).ready(function(){
	$('[name="enviar"]').click(function(){
		$('form').submit();
		});
});
</script>

