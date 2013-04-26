<?php

echo form_open('index.php/intranet/login/cadastrar','id="formNew"');
echo form_label('Nome:','lbl_nome');
echo form_input('nome');
echo form_label('Email:','lbl_email');
echo form_input('email');
echo form_label('Senha:','lbl_senha');
echo form_password('senha');
echo form_label('Confirmar senha:','lbl_rpsenha');
echo form_password('rp_senha');
echo form_submit('btn_logar','Entrar');
echo form_close();

echo form_open('index.php/intranet/login/entrar','id="formLogin"');
echo form_label('Email:','lbl_email');
echo form_input('email');
echo form_label('Senha:','lbl_senha');
echo form_password('senha');
echo form_submit('btn_logar','Entrar');
echo form_close();
?>