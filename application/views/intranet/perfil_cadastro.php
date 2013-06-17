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
<link rel="stylesheet"
	href="<?php echo base_url(); ?>resources/css/style.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
</head>

<h1>Cadastrar Perfil</h1>
<?php
echo form_open('index.php/intranet/perfil_cadastro/save','id="form"');
echo form_hidden('hd_id','{id_perf}');
echo form_hidden('hd_funcoes','{funcoes_perf}');
echo form_hidden('hd_acesso','{acesso_perf}');
echo form_hidden('hd_editavel','{editavel}');
echo form_fieldset('Dados do perfil');
echo form_label('Nome','lbl_nome');
echo form_input('nome','{nome_perf}','class="number" ');
echo form_fieldset_close();
echo form_fieldset('Permissoes');
?>
<div class="skin skin-line">
	<input type="checkbox" name="ck_criar" value="C" /> <label>Criar</label>

	<input type="checkbox" name="ck_aprovar" value="A" /> <label>Aprovar</label>

	<input type="checkbox" name="ck_alterar" value="E" /> <label>Alterar</label>

	<input type="checkbox" name="ck_apagar" value="T" /> <label>Apagar</label>
</div>
<?php
/*
 echo form_checkbox('ck_criar');
echo form_label('Criar','lbl_criar');
echo form_checkbox('ck_aprovar');
echo form_label('Aprovar','lbl_aprovar');
echo form_checkbox('ck_editar');
echo form_label('Editar','lbl_editar');
echo form_checkbox('ck_apagar');
echo form_label('Apagar','lbl_apagar');
*/
echo form_fieldset_close();
echo form_fieldset('Acesso aos Menus');
echo form_fieldset('Cadastros');
?>
<div class="skin skin-line">
	<input type="checkbox" name="ck_perfil" value="F" /> <label>Perfil</label>

	<input type="checkbox" name="ck_users" value="U" /> <label>Usuarios</label>

	<input type="checkbox" name="ck_posts" value="P" /> <label>Posts</label>

</div>

<?php 
echo form_fieldset_close();
echo form_fieldset_close();
echo form_submit('save','Salvar');
echo form_submit('save','Apagar');
echo form_button('validate','Validar');
// 	echo form_submit('save_create','Salvar e Criar Novo');
// 	echo form_submit('save_close','Salvar e Fechar');
echo form_submit('close','Fechar');
echo form_close();
?>
