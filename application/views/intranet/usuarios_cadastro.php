<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
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


<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.min.js"></script>
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.css"
	media="all" rel="stylesheet" type="text/css" />
<!-- Include this file if you are using Pines Icons. -->
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.icons.css"
	media="all" rel="stylesheet" type="text/css" />


<link
	href="<?php echo base_url(); ?>resources/pnotify-master/devnote.css"
	rel="stylesheet" type="text/css" />
<!-- Page Style -->
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/includes/style.css"
	rel="stylesheet" type="text/css" />
<!-- jQuery -->
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/includes/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet" type="text/css" />
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/pnotify-master/includes/bootstrap/js/bootstrap.min.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- Oxygen Icons -->
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/oxygen/icons.css"
	rel="stylesheet" type="text/css" />
<!-- JavaScript Source Formatting -->
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/includes/google-code-prettify/prettify.css"
	rel="stylesheet" type="text/css" />
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/pnotify-master/includes/google-code-prettify/prettify.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/pnotify-master/includes/beautify.js"></script>
<!-- Pines Notify -->
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.js"></script>
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo base_url(); ?>resources/pnotify-master/jquery.pnotify.default.icons.css"
	rel="stylesheet" type="text/css" />




<!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
	</head>
   -->

</head>
<script>
  $(document).ready(function() {
    var id_usu = $('[name="hd_id"]').val();
    var thumbnailuploader = new qq.FineUploader({
      element: $('#thumbnail-fine-uploader')[0],
      data: "teste",
      request: {
        endpoint: 'upload?id_usu='+id_usu
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

    $('[name="pass"]').rules( "add", {
		  required: true,
		  minlength: 6,
		  messages: {
		    required: "Campo obrigatório",
		    minlength: $.format("Por favor, digite no minimo {0} caracteres.")
		  }
		});

    $('[name="repeat_pass"]').rules( "add", {
		  required: true,
		  equalTo: $('[name="pass"]'),
		  messages: {
		    required: "Campo obrigatório",
		    minlength: $.format("Por favor, digite no minimo {0} caracteres.")
		  }
		});

    $('[name="enviar"]').click(function(ev){
    	ev.preventDefault();
		if($('form').valid()){
			valida('usuarios_cadastro/verifica_usuario','form');
			}
        });
    function valida(pag,formulario){
		$.ajax({
			type:'post',
			url:pag,
			data: $('form').serialize(), 
			success: function(retorno){
					if(retorno == 0){
							alerta_msg('error','Usuario ja existe','top');	
					}
					else{
						$('form').submit();
						}
			    }
			});
		}
	function alerta_msg(tipo, msg,posicao){
		var titulo,texto='';
		if(tipo=='sucesso'){
			titulo = titulo;
			title= msg;
			tipo = 'success';
			classe = 'stack-bar-bottom alert-success';
		}
		else{
			titulo = "Erro!";
			tipo = 'error';
			texto= 'Deu erro';
			classe = 'stack-bar-bottom alert-error';
		}
	    $.pnotify({
	        title: titulo,
	        text: msg,
	        type: tipo,
	        addclass: "stack-bar-"+posicao,
	        cornerclass: "",
	        width: "100%"	
	    });
		}
  });
</script>
<h1>Cadastrar Usuario</h1>
<?php
echo form_hidden('hd_uc','usuarios_cadastro');
echo form_open_multipart('index.php/intranet/usuarios_cadastro/save');

echo form_hidden('hd_id','{id_usu}');
echo form_hidden('hd_perf_id','{id_perf}');
echo form_hidden('hd_avatar_usu','{avatar_usu}');

echo form_fieldset('Dados pessoais');

echo form_label('Foto ','lbl_img');
?>
<img
	src="<?php echo base_url();?>resources/icons/info.png" class="tooltip"
	title="<?php echo lang('info_avatar')?>" />
<section id="imagem" style="max-width: 300px; max-height: 400px;">
	<div id="thumbnail-fine-uploader"></div>
	<span id="btnUpload" style="display: none"><?php echo lang('btn_upload_avatar');?>
	</span>
	<nav id="imagens">
		<img src="<?php echo base_url();?>resources/img/uploads/{avatar_usu}" />
	</nav>
</section>
<?php 
echo form_fieldset('','class="lblInput"', 'style="width:500px;"');
echo form_label('Nome','lbl_name');
echo form_input('nome','{nome_usu}','class="required"');
echo form_fieldset_close();

echo form_fieldset('','class="lblInput"');
echo form_label('Data de Nascimento','lbl_dt_nasc');
?>
<input
	type="date" name="dt_nascimento" value="{dt_nascimento}" />
<?php 
// echo form_input('dt_nascimento','');
echo form_fieldset_close();
echo form_fieldset_close();


echo form_fieldset('Dados de acesso');
echo form_fieldset('','class="lblInput"');
echo form_label('Email','lbl_email');
echo form_input('email','{email_usu}','class="required email"');
echo form_fieldset_close();


echo form_fieldset('','class="lblInput"');
echo form_label('Senha','lbl_pass');
echo form_password('pass','{pass_usu}','class="required"');
echo form_fieldset_close();

echo form_fieldset('','class="lblInput"');
echo form_label('Confirmar senha','lbl_conf_pass');
echo form_password('repeat_pass','{pass_usu}','class="required"');
echo form_fieldset_close();


echo form_fieldset('','class="lblInput" style="width:250px; " id="perf"');
echo form_label('Perfil','lbl_perfil');
echo form_input('ac_perfil','{perfil}','id="ac_perfil" class="required"');
echo form_fieldset_close();

echo form_fieldset_close();
echo form_fieldset_close();

echo form_button('adicionar','<img src='. base_url() .'resources/icons/add.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_novo').'"');
echo form_button('enviar','<img src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_salvar').'"');
echo form_button('remover','<img  src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
echo form_close();
?>