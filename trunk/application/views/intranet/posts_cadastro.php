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
<script>
  $(document).ready(function() {
    var thumbnailuploader = new qq.FineUploader({
      element: $('#thumbnail-fine-uploader')[0],
      request: {
        endpoint: 'upload'
      },
      text: {
    	  uploadButton: $('#btnUpload').text()
          },
      multiple: false,
      validation: {
        allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
      },
      deleteFile: {
          enabled: true,
          forceConfirm: true,
          endpoint: 'server/file'
      },
      callbacks: {
        onComplete: function(id, fileName, responseJSON) {
          if (responseJSON.success) {
            $('#thumbnail-fine-uploader').append('<img src="http://localhost/portal-gic/resources/img/uploads/'+fileName+'" alt="' + fileName + '">');
          }
        }
      }
    });
  });
</script>
<h1>Cadastrar Materia</h1>
<?php
echo form_open_multipart('index.php/intranet/posts_cadastro/save');
echo form_hidden('hd_id','{id_post}');
echo form_hidden('hd_status','{status_post}');
echo form_hidden('hd_cat_id','{id_cat}');
echo form_hidden('hd_keywords','{keywords_post}');

echo form_fieldset('Principal');

echo form_label('Titulo','lbl_titulo');
echo form_input('titulo','{titulo_post}');

echo form_label('Descricao Resumida','lbl_desc_resumida');
echo form_input('desc_resumida','{resumo_post}');


echo form_label('Categoria','lbl_categoria');
echo form_input('ac_categoria','{categoria}','id="ac_categoria"');

echo form_label('Data Criacao','lbl_dt_aprovacao');
echo form_input('dtcriacao','{dt_criacao}','readonly=readonly class="center"');

echo form_label('Conteudo','lbl_conteudo');
echo form_textarea('editor1','{conteudo_post}');
echo form_fieldset_close();


echo form_fieldset('Informacoes');

echo form_label('Data Aprovacao','lbl_dt_aprovacao');
echo form_input('dt_aprovacao','{dt_modificacao}','readonly=readonly class="center"');

echo form_label('Criado por:','lbl_usu_criou');
echo form_input('dt_aprovacao','{dt_modificacao}','readonly=readonly class="center"');

echo form_label('Aprovado por:','lbl_usu_aprovou');
echo form_input('dt_aprovacao','{dt_modificacao}','readonly=readonly class="center"');

echo form_label('Status','lbl_status');
echo form_input('status','{status}','readonly=readonly ');

echo form_fieldset_close();


echo form_fieldset('Extras');
?>
<section id="url">
<?php 
echo form_label('URL do video','lbl_url_youtube');
echo form_input('url_youtube','{url_youtube}','class="linkvideo"');
?>
<img src="<?php echo base_url();?>resources/icons/add.png" id="addUrl"/>
</section>
<section class="palavrasChave">
	<h3 class="demo-panel-title">Palavra Chave</h3> 
	<input name="tagsinput" id="tagsinput" class="tagsinput" value="{keywords_post}" style="display: none;">
</section>
	<h3 class="demo-panel-title">Imagens</h3> 
<section id="imagem">
	<div id="thumbnail-fine-uploader"></div>
	<span id="btnUpload" style="display:none"><?php echo lang('btn_upload');?></span>
</section>

<?php  
echo form_label('Referencias','lbl_ref');
echo form_textarea('referencias','{ref_post}','style="clear:both;"'); 
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
	$('#addUrl').click(function(){
		var qtd = $('.linkvideo').length;
		var clone = $('[name="url_youtube"]').clone().attr('name','url_youtube['+qtd+']');
		console.log(clone);
		$('#url').append(clone);
		});
});
</script>

