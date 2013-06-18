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

<!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
	</head>
   -->

</head>
<script>
  $(document).ready(function() {
    var id_top = $('[name="hd_id"]').val();
    $('#failed-fine-uploader').fineUploader({
      request: {
        endpoint: 'uploadArq?id_top='+id_top
      },
      failedUploadTextDisplay: {
        mode: 'custom',
        maxChars: 40,
        responseProperty: 'error',
        enableTooltip: true
      },
      text: {
    	  uploadButton: $('#btnUploadArq').text()
          },
    });
    var thumbnailuploader = new qq.FineUploader({
      element: $('#thumbnail-fine-uploader')[0],
      data: "teste",
      request: {
        endpoint: 'upload?id_top='+id_top
      },
      text: {
    	  uploadButton: $('#btnUpload').text()
          },
      multiple: false,
      validation: {
        allowedExtensions: ['jpeg', 'jpg', 'gif', 'png', 'bmp'],
      },
      deleteFile: {
          enabled: true,
          forceConfirm: true,
          endpoint: 'server/file'
      },
      callbacks: {
        onComplete: function(id, fileName, responseJSON) {
          if (responseJSON.success) {
              fileName = fileName.replace(new RegExp(' ','g'),'_');
            $('#thumbnail-fine-uploader').append('<img src="<?php echo base_url();?>resources/img/uploads/'+fileName+'" alt="' + fileName + '">');
          }
        }
      }
    });
    $("#imagens").slidesjs({
    	pagination: {
    	      active: true,
    	        // [boolean] Create pagination items.
    	        // You cannot use your own pagination. Sorry.
    	      effect: "slide",
    	        // [string] Can be either "slide" or "fade".
    	    }
	  });
  });
</script>
<h1>Cadastrar Topico</h1>
<?php
echo form_hidden('hd_uc','topicos_cadastro');
echo form_open_multipart('index.php/intranet/topicos_cadastro/save');
echo form_hidden('hd_id','{id_top}');
echo form_hidden('hd_status','{status_top}');

echo form_fieldset('Principal');

echo form_fieldset('','class="lblInput" style="width:100%;"');
echo form_label('Titulo','lbl_titulo');
?>
<br />
<?php 
echo form_input('titulo','{nome_top}','class="required"');
echo form_fieldset_close();

echo form_fieldset('','class="lblInput" style="width:100%;"');
echo form_label('Conteudo','lbl_conteudo');
echo form_textarea('desc_resumida','{resumo_top}','style="width:98%;" class="required"');
echo form_fieldset_close();

echo form_fieldset_close();

// echo form_label('Conteudo','lbl_conteudo');
// echo form_textarea('editor1','{desc_resumida}','class="required"');
// echo form_fieldset_close();


echo form_fieldset('Informacoes');
echo form_fieldset('','class="lblInput"');
echo form_label('Status','lbl_status');
echo form_input('status','{status}','readonly=readonly ');
echo form_fieldset_close();

echo form_fieldset('','class="lblInput"');
echo form_label('Data Criacao','lbl_dt_aprovacao');
echo form_input('dtcriacao','{dt_criacao}','readonly=readonly class="center"');
echo form_fieldset_close();

echo form_fieldset('','class="lblInput"');
echo form_label('Criado por:','lbl_usu_criou');
echo form_input('usu_criou','{usu_criou}','readonly=readonly');
echo form_fieldset_close();
echo form_fieldset_close();


echo form_button('adicionar','<img src='. base_url() .'resources/icons/add.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_novo').'"');
echo form_button('enviar','<img src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_salvar').'"');
echo form_button('fechar_forum','<img src='.  base_url() .'resources/icons/fechar.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_fechar_forum').'"');
echo form_button('abrir_forum','<img src='.  base_url() .'resources/icons/abrir.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_abrir_forum').'"');
echo form_button('remover','<img  src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
echo form_close();
?>
<script>
$(document).ready(function(){
	$('[name="enviar"]').click(function(ev){
		ev.preventDefault();
			});
	$('#addUrl').click(function(){
		var qtd 	= 	$('.linkvideo').length;
		var clone 	= 	$('[name="url_youtube"]').clone().attr('name','url_youtube_varios['+qtd+']').val('');
		$(clone).removeClass('error');
		$(clone).html('<span> URL video</span>');
		console.log('<span> URL video</span> '+clone);
		var t= '<span> URL do video</span>';
		$('#addUrl').before(t);
		$('#addUrl').before(clone);
		});
	
});
</script>

