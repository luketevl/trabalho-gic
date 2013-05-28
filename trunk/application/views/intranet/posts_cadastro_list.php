<html>

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
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.tagsinput.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.dropkick-1.0.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_checkbox_and_radio.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/custom_radio.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/flat-ui-master/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="http://vjs.zencdn.net/c/video.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resources/jquery-ui/ui/jquery-ui.js"></script>
	<link href="<?php echo base_url(); ?>resources/ckeditor/contents.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>resources/jquery-ui/themes/base/jquery-ui.css" rel="stylesheet">
   <!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
   -->
</head>

<!-- 
<form method="post" action="mostrar.php" id="form">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="number" />
    </div>
    <div>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" class="required" />
    </div>            
    <div class="submit">
        <input type="submit" />
    </div>
</form>

 -->
 <form action="http://localhost/portal-gic/index.php/intranet/posts_cadastro/load_form_edit" method="get" accept-charset="utf-8">
<?php  echo form_hidden('id',0);
 	   echo form_close();
 ?>
 
 <section id="list">
 	<table>
 		<thead>
 			<tr>
	 			<td class="coluna" name="id_post" style="display: none">id_post</td>
	 			<td class="coluna" style="width: 550px;" >Titulo</td>
	 			<td class="coluna" style="width: 5px;">Data Criacao</td>
	 			<td class="coluna" style="width: 5px;">Data Aprovacao</td>
	 			<td class="coluna">Categoria</td> 
	 			<td class="coluna" style="width: 5px;">Status</td>
	 			<td class="coluna" name="status" >Acoes</td>
	 			<td class="coluna" name="status" style="display: none">status_post</td>
	 		</tr>
 		</thead>
 		<tbody>
		 {dados}
 		<tr>
 			<td style="display: none" name="hd_id" >{id_post}</td>
 			<td>{titulo_post}</td>
 			<td class="center" >{dt_criacao}</td>
 			<td class="center" >{dt_modificacao}</td>
 			<td>{categoria}</td>
 			<td>{status}</td>
 			<td style="display: none" name="hd_status" >{status_post}</td>
 			<td name="acoes">
 			<?php 
 			echo form_button('aprovar','<img src='. base_url() .'resources/icons/aprovar.png width= 22 height= 22 /> <span></span>');
 			echo form_button('rejeitar','<img src='. base_url() .'resources/icons/cancel.png width= 22 height= 22 /> <span></span>');
 			echo form_button('publicar','<img src='. base_url() .'resources/icons/publish.png width= 22 height= 22 /> <span></span>');
 			echo form_button('editar','<img src='.  base_url() .'resources/icons/edit.png width= 22 height= 22 /> <span></span>');
 			echo form_button('remover','<img src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>');
 			?>
 			</td>
 		</tbody>
 		</tr>
 		 {/dados}
 		
 	</table>
 </section>
 
 