<header>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/icheckmaster/skins/line/blue.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/resources/flat-ui-master/css/flat-ui.css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/icheckmaster/js/jquery.icheck.js"></script>
	<script src="<?php echo base_url(); ?>/resources/flat-ui-master/js/jquery.tagsinput.js"></script>
	
	
	<!--<link href="<?php echo base_url(); ?>resources/icheckmaster/css/demo.css" rel="stylesheet"> -->
    
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
	<div class="control-group">
	<input type="text" value="" placeholder="Inactive" class="" />
	</div>
	
<?php
	echo form_open('index.php/intranet/perfil_cadastro/save');
	echo form_fieldset('Dados do perfil');
	echo form_label('Nome','lbl_nome');
	echo form_input('nome');
	echo form_fieldset_close();
	echo form_fieldset('Permissoes');
	?>
 <div class="skin skin-line">
  
    <input type="checkbox" name="ck_criar" value="C" />
    <label>Criar</label>
  
    <input type="checkbox" name="ck_aprovar" value="A" />
    <label>Aprovar</label>

    <input type="checkbox" name="ck_alterar" value="E" />
    <label>Alterar</label>
    
    <input type="checkbox" name="ck_apagar" value="T" />
    <label>Apagar</label>
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
      
            <input type="checkbox" name="perfil" />
            <label>Perfil</label>
      
            <input type="checkbox" name="users"/>
            <label>Usuarios</label>
    
             <input type="checkbox" name="posts" />
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
