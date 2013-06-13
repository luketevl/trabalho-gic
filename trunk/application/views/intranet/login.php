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
</head>
<section class="tira" style="width:100%; height:65px;background-color:rgb(228, 247, 235);border-bottom: solid 1px rgb(156, 185, 180);">
<?php
echo form_button('btn_login',lang('btn_login'),'style="width:25%; margin-top:10px;" class="tooltip btn btn-large btn-block btn-primary"  title="'.lang('info_login').'"');
echo form_button('btn_cadastro',lang('btn_cadastro'),'style="width:25%; margin-top:10px;" class="tooltip btn btn-large btn-block btn-primary"  title="'.lang('info_cadastro').'"');
?>
<section id="signFb" class="tooltip" title="<?php echo $tp_fb_login;?>" >
	<a href="https://www.facebook.com/dialog/oauth?client_id=<?php echo FB_APP_ID;?>&redirect_uri=<?php echo base_url().FB_SITELOGIN;?>&scope=<?php echo FB_SCOPE;?>" name="fb_login">
	<img src="<?php echo base_url();?>resources/icons/fb2.png" style="position:absolute;" />
	<span><?php echo lang('btn_continuar');?></span>
	</a>
</section>

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
				$('#formNew').submit();
			}
			else if(name == 'logar'){
				$('#formLogin').validate();		
				$('#formLogin').submit();
			}
			else if(name == 'btn_cadastro'){
				$('.fieldsetLogin').hide(700);;
				$('.fieldsetCadastro').toggle();
				}
			else if(name == 'btn_login'){
				$('.fieldsetCadastro').hide(700);;
				$('.fieldsetLogin').toggle();
			}
			});
		});
</script>