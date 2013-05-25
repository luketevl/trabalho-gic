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
   
   <style>
   #list {
   	margin: -20px;
   	width:103%;
   	border-style: solid;
   	border-width: 2px;
   }
   #list table td.coluna{
   	text-align:center;
   	border-style: solid;
   	border-width:1px;
   	padding: 10px 10px 10px 10px;
   	width: 150px;
   }
   #list table td{
   	border-style:none;
   }
   </style>
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
 
 <section id="list">
 	<table>
 		<tr>
 			<td class="coluna">Titulo</td>
 			<td class="coluna">Resumo</td>
 			<td class="coluna">Data Criacao</td>
 			<td class="coluna">Data Aprovacao</td>
 			<td class="coluna">Categoria</td> 
 			<td class="coluna">Status</td>
 		</tr>
 		<tr>
	 		<td>Content 1</td>
	 		<td>Content 1</td>
	 		<td>Content 1</td>
	 		<td>Content 1</td>
	 		<td>Content 1</td>
	 		<td>Content 1</td>
 		</tr>
 		
 	</table>
 	
 </section>
 {stored}
 {id_post}
 {/stored}
 
 