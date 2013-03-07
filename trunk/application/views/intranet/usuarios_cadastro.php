<?php 
	echo form_open('intranet/usuarios_cadastro');
	echo form_fieldset('Dados pessoais');
	echo "Nome:";
	echo form_input('nome');
	echo form_fieldset_close();		
	echo form_fieldset('Dados de acesso');
	echo "C—digo de acesso:";
	echo form_input('login');		
	echo "Senha:";
	echo form_password('pass');		
	echo "Confirmar senha:";
	echo form_password('repeat_pass');		
	echo form_fieldset_close();	
	echo form_close();	
?>