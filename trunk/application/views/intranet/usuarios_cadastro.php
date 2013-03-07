<?php 
	echo form_open('intranet/usuarios_cadastro');
	echo form_fieldset('Dados pessoais');
	echo form_label('Nome','lbl_name');
	echo form_input('nome');
	echo form_fieldset_close();		
	echo form_fieldset('Dados de acesso');
	echo form_label('Codigo de acesso','lbl_cod');
	echo form_input('login');	
	echo form_label('Senha','lbl_pass');	
	echo form_password('pass');		
	echo form_label('Confirmar senha','lbl_conf_pass');
	echo form_password('repeat_pass');		
	echo form_fieldset_close();
	echo form_submit('enviar','Salvar');
	echo form_close();	
?>