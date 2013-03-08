<?php
	echo form_open('index.php/intranet/perfil_cadastro/save');
	echo form_fieldset('Dados do perfil');
	echo form_label('Nome','lbl_nome');
	echo form_input('nome');
	echo form_fieldset_close();
	echo form_fieldset('Permissoes');
	echo form_checkbox('ck_criar');
	echo form_label('Criar','lbl_criar');
	echo form_checkbox('ck_aprovar');
	echo form_label('Aprovar','lbl_aprovar');
	echo form_checkbox('ck_editar');
	echo form_label('Editar','lbl_editar');
	echo form_checkbox('ck_apagar');
	echo form_label('Apagar','lbl_apagar');
	
	echo form_fieldset_close();
	echo form_submit('enviar','Enviar');
	echo form_close();
?>