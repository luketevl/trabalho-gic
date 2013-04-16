<header>
	<script type="text/javascript" src="../../resources/js/jquery.js" ></script>
	<script type="text/javascript" src="../../resources/icheckmaster/js/jquery.icheck.js"></script>
	<link href="../../resources/icheckmaster/skins/line/blue.css" rel="stylesheet">
	<link href="../../resources/css/style.css" rel="stylesheet">
	<!--<link href="../../resources/icheckmaster/css/demo.css" rel="stylesheet"> -->
     <script>
            $(document).ready(function(){
              $('.skin-line input').each(function(){
                var self = $(this),
                  label = self.next(),
                  label_text = label.text();

                label.remove();
                self.iCheck({
                  checkboxClass: 'icheck_line-blue',
                  radioClass: 'icheck_line-blue',
                  insert: '<div class="icheck_line-icon"></div>' + label_text
                });
              });
            });
            </script>
</header>
<h1>Cadastrar Usuarios</h1>
<?php
	echo form_open('index.php/intranet/perfil_cadastro/save');
	echo form_fieldset('Dados do perfil');
	echo form_label('Nome','lbl_nome');
	echo form_input('nome');
	echo form_fieldset_close();
	echo form_fieldset('Permissoes');
	?>
	
 <div class="skin skin-line">
  
    <input type="checkbox" />
    <label>Criar</label>
  
    <input type="checkbox" />
    <label>Aprovar</label>

    <input type="checkbox" />
    <label>Alterar</label>
    
    <input type="checkbox" />
    <label>Excluir</label>
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
    echo form_fieldset('Acesso');
    echo form_fieldset('Cadastros');
    ?>
         <div class="skin skin-line">
      
            <input type="checkbox" />
            <label>Perfil</label>
      
            <input type="checkbox" />
            <label>Usuarios</label>
    
             <input type="checkbox" />
             <label>Posts</label>
        
        </div>

    <?php 
        
    
    echo form_fieldset_close();
    echo form_fieldset_close();
	echo form_submit('save','Salvar');
	echo form_submit('save_create','Salvar e Criar Novo');
	echo form_submit('save_close','Salvar e Fechar');
	echo form_submit('close','Fechar');
	echo form_close();
    ?>
