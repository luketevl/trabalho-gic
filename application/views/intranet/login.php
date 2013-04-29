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
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
</head>

<?php
echo form_open('index.php/intranet/login/cadastrar','id="formNew"');
echo form_fieldset('Entrar','class="fieldsetLogin"');
echo form_open('index.php/intranet/login/entrar','id="formLogin"');
echo form_label('Email','lbl_email'). "<br />";
echo form_input('email'). "<br />";
echo form_label('Senha','lbl_senha'). "<br />";
echo form_password('senha'). "<br />";
echo form_submit('btn_logar','Entrar'). "<br />";
echo form_close();
echo form_fieldset_close();

echo form_fieldset('Cadastrar','class="fieldsetLogin"');
echo form_label('Nome','lbl_nome') . "<br />";
echo form_input('nome'). "<br />";
echo form_label('Email','lbl_email'). "<br />";
echo form_input('email'). "<br />";
echo form_label('Senha','lbl_senha'). "<br />";
echo form_password('senha'). "<br />";
echo form_label('Confirmar senha','lbl_rpsenha'). "<br />";
echo form_password('rp_senha'). "<br />";
echo form_submit('btn_logar','Cadastrar'). "<br />";
echo form_close();
echo form_fieldset_close();
?>

<section id="signFb">
	<a href="https://www.facebook.com/dialog/oauth?client_id=<?php echo FB_APP_ID;?>&redirect_uri=<?php echo FB_SITELOGIN;?>&scope=<?php echo FB_SCOPE;?>" name="fb_login">
	<img src="<?php echo base_url();?>resources/icons/fb2.png" style="position:absolute;" />
	<span>Continuar</span>
	</a>
</section>