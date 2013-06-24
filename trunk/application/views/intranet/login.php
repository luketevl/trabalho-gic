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
	src="<?php echo base_url();?>resources/pnotify-master/jquery.pnotify.min.js"></script>
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
	
	
	
	
	</head>
<section class="tira">
<?php
echo form_hidden('hd_uc','login');
echo form_button('btn_login',lang('btn_login'),'style="width:25%;" class="tooltip btn btn-large btn-block btn-primary"  title="'.lang('info_login').'"');
echo form_button('btn_cadastro',lang('btn_cadastro'),'style="width:25%;" class="tooltip btn btn-large btn-block btn-primary"  title="'.lang('info_cadastro').'"');
echo form_button('btn_inicio',lang('btn_inicio'),'style="width:25%;" class="tooltip btn btn-large btn-block btn-primary"  title="'.lang('info_inicio').'"');
?>

<!-- <section id="signFb" class="tooltip" title=" -->
<?php #echo $tp_fb_login;?>
<!-- " > -->
<!-- 	<a href="https://www.facebook.com/dialog/oauth?client_id= -->
	<?php #echo FB_APP_ID;?>
<!-- 	&redirect_uri= -->
	<?php #echo base_url().FB_SITELOGIN;?>
<!-- 	&scope= -->
	<?php #echo FB_SCOPE;?>
<!-- 	" name="fb_login"> -->
<!-- 	<img src=" -->
	<?php #echo base_url();?>
<!-- 	resources/icons/fb2.png" style="position:absolute;" /> -->
	<span>
	<?php #echo lang('btn_continuar');?>
<!-- 	</span> -->
<!-- 	</a> -->
<!-- </section> -->

</section>
<?php 
echo form_fieldset('Entrar','class="fieldsetLogin"');
echo form_open('index.php/intranet/login/entrar','id="formLogin"');
echo form_label(lang('lbl_email'),'lbl_email');
echo form_input('email','','class="email required"');
echo form_label(lang('lbl_pass'),'lbl_senha');
echo form_password('senha','','class="required"');
echo form_button('logar','Entrar','style="width:100%; margin-top:10px;" class="btn btn-large btn-block btn-primary"');
echo form_close();
echo form_fieldset_close();

echo form_open('index.php/intranet/login/cadastrar','id="formNew"');
echo form_fieldset('Cadastrar','class="fieldsetCadastro"');
echo form_label(lang('lbl_nome'),'lbl_nome') ;
echo form_input('nome','','class="required"');
echo form_label(lang('lbl_email'),'lbl_email');
echo form_input('email','','class="required email"');
echo form_label(lang('lbl_pass'),'lbl_senha');
echo form_password('senha','','class="required"');
echo form_label(lang('lbl_pass_repeat'),'lbl_rpsenha');
echo form_password('rp_senha','','class="required equalTo"');
echo form_button('cadastrar',lang('btn_cadastrar'),'style="width:100%; margin-top:10px;" class="btn btn-large btn-block btn-primary"');
echo form_close();
echo form_fieldset_close();
?>


</section>
<script>
	$(document).ready(function(){
		$('.tooltip').tooltipster();
		$('button').click(function(ev){
			var name = $(this).attr('name'); 
			if(name == 'cadastrar'){
				$('#formNew').validate();
				pass_rules('#formNew');
				pass_repeat_rules('#formNew');
				if($('#formNew').valid()){
					valida('login/cadastrar','#formNew');
					}
			}
			else if(name == 'logar'){
				$('#formLogin').validate();
				pass_rules('#formLogin');
				if($('#formLogin').valid()){
					valida('login/entrar','#formLogin');
					}
			}
			else if(name == 'btn_cadastro'){
				$('.fieldsetLogin').hide(700);;
				$('.fieldsetCadastro').toggle();
				}
			else if(name == 'btn_login'){
				$('.fieldsetCadastro').hide(700);;
				$('.fieldsetLogin').toggle();
			}
			else if(name= 'btn_inicio'){
				window.location = '../frontend/home';
				}
			});

		function pass_rules(form){
			$(form +' [name="senha"]').rules( "add", {
				  required: true,
				  minlength: 6,
				  messages: {
				    required: "Campo obrigatório",
				    minlength: $.format("Por favor, digite no minimo {0} caracteres.")
				  }
				});
			}
		function pass_repeat_rules(form){
			$(form +' [name="rp_senha"]').rules( "add", {
				  required: true,
				  equalTo: $(form +' [name="senha"]'),
				  messages: {
				    required: "Campo obrigatório",
				    minlength: $.format("Por favor, digite no minimo {0} caracteres.")
				  }
				});
			}
		
		function valida(pag,formulario){
			$.ajax({
				type:'post',
				url:pag,
				data: $(formulario).serialize(), 
				success: function(retorno){
						if(retorno == 0){
							if(formulario == '#formLogin'){
								alerta_msg('error','Usuario nao cadastrado','top');	
								} 
							else{
								alerta_msg('error','Usuario ja existe','top');	
								}
						}
						else{
							window.location = "../intranet/principal/";
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