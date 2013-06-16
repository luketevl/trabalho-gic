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
	<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery.confirm/jquery.confirm/jquery.confirm.js"></script>
	<script type="text/javascript"
	src="<?php echo base_url();?>resources/jquery.confirm/js/script.js"></script>
	<link
	href="<?php echo base_url(); ?>resources/jquery.confirm/jquery.confirm/jquery.confirm.css"
	rel="stylesheet" />
   <!--  
    <script type="text/javascript" src="resources/flat-ui-master/js/application.js"></script>
   -->
   
   <script>
	$(document).ready(function(){
		var uc_case = $('[name="hd_uc"]').val();
		$('[name="adicionar"]').click(function(){
			window.location = "../intranet/"+uc_case+"/";
			});
		$('button').click(function(){
			var id = $('.selected').find('td[name="hd_id"]').text();
        	$('[name="id"]').val(id);
			});
		$('a.active').click(function(){
				nome = $(this).attr('name');
				btn = this;
				if($(btn).attr('style') === undefined){
					$(btn).css('color','red');
				}				
				else{
					$(btn).removeAttr('style');
					}
			$('tbody tr').each(function(){
				var el = this;
				status = $(el).find('td[name="hd_status"]').text();
				if(nome == 'novo' && status=='N'){
					if($(btn).attr('style') !== undefined){
						$(el).hide(700);
					}
					else{
						$(el).show(700);
						}
					}
				else if(nome == 'aprovado' && status=='A'){
					if($(btn).attr('style') !== undefined){
							$(el).hide(700);
								}
						else{
							$(el).show(700);
							}
					}
				else if(nome == 'rejeitado' && status=='R'){
					if($(btn).attr('style') !== undefined){
							$(el).hide(700);
								}
						else{
							$(el).show(700);
							}
					}
				else if(nome == 'publicado' && status=='P'){
					if($(btn).attr('style') !== undefined){
							$(el).hide(700);
								}
						else{
							$(el).show(700);
							}
					}
				});
			});
		 $(':button').click(function(ev){
			ev.preventDefault();
			var temp = $(this).attr('name');
			if(temp == 'aprovar'){
				$('form').attr('action','../intranet/'+uc_case+'/aprovar');
			}
			else if(temp == 'rejeitar'){
				$('form').attr('action','../intranet/'+uc_case+'/telaJustificar');
				}
			else if(temp == 'publicar'){
				$('form').attr('action','../intranet/'+uc_case+'/publicar');
				}
			else if(temp == 'remover'){
				$('form').attr('action','../intranet/'+uc_case+'/deletar');
					confirm_mensagem('Atencao','Confirma a exclusao da materia?');
					
				}
			if(temp != 'adicionar' && temp != 'remover'){
					$('form').submit();	
			}
				
			});
		   function confirm_mensagem(titulo, messagem){
	        	var elem = $(this).closest('.item');
	            $.confirm({
	                'title'		: titulo,
	                'message'	: messagem,
	                'buttons'	: {
	                    'Sim'	: {
	                        'class'	: 'blue',
	                        'action': function(){
	                            elem.slideUp();
	            				$('form').submit();	
	                        }
	                    },
	                    'Nao'	: {
	                        'class'	: 'gray',
	                        'action': function(){
	                        }	// Nothing to do in this case. You can as well omit the action property.
	                    }
	                }
	            });
	        }
		});
   </script>
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
 <form action="../intranet/posts_cadastro/load_form_edit" method="get" accept-charset="utf-8">
<?php  echo form_hidden('id',0);
 echo form_hidden('hd_uc','posts_cadastro');
 	   echo form_close();
 ?>
 
 <section id="list">
 	<nav id="acoes">
 	<?php 
 			echo form_button('adicionar','<img src='. base_url() .'resources/icons/add.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_novo').'"');
 			echo form_button('editar','<img src='.  base_url() .'resources/icons/edit.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_edit').'"');
 			echo form_button('aprovar','<img src='. base_url() .'resources/icons/aprovar.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary tooltip" title="'.lang('btn_aprovar').'"');
 			echo form_button('rejeitar','<img src='. base_url() .'resources/icons/cancel.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_rejeitar').'"');
 			echo form_button('publicar','<img src='. base_url() .'resources/icons/publish.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_publicar').'"');
 			echo form_button('remover','<img title="'.lang('btn_aprovar'). '" src='. base_url() .'resources/icons/remove.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
 	?>
 	</nav>
 	<section id="infoList">
 		<img src="<?php echo base_url();?>resources/icons/menu.png" />
 		<a href="#" class="active" name="novo">{cc_aberto} Novos </a>
 		 | 
 		 <a href="#" class="active" name="aprovado">{cc_aprovado} Aprovados </a>
 		 |
 		 <a href="#" class="active" name="rejeitado">{cc_rejeitado} Rejeitados </a> 
 		 | 
 		 <a href="#" class="active" name="publicado">{cc_publicado} Publicados </a>
 	</section>
 			<hr />
 	<table>
 		<thead>
 			<tr>
	 			<td class="coluna" name="id_post" style="display: none">id_post</td>
	 			<td class="coluna" style="width: 72%;" >Titulo</td>
	 			<td class="coluna" style="width: 5px;">Data Criacao</td>
	 			<td class="coluna" style="width: 5px;">Data Aprovacao</td>
	 			<td class="coluna" style="width: 200px;">Categoria</td> 
	 			<td class="coluna" style="width: 5px;">Status</td>
	 			<td class="coluna" name="status" style="display: none">sts_post</td>
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
 		</tr>
 		 {/dados}
 		</tbody>
 		
 	</table>
 </section>
