<head>
<meta charset="utf-8">
<title>Layout Padrao</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css" />
	
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>resources/icheckmaster/css/demo.css?v=0.7" />
<link rel="stylesheet" href="<?php echo base_url(); ?>resources/icheckmaster/skins/all.css?v=0.7" />

<script type="text/javascript"
	src="<?php echo base_url()?>resources/js/common/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>resources/sidr-menu-responsive/jquery.sidr.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/tooltipster-master/js/jquery.tooltipster.min.js"></script>
<link rel="stylesheet"
	href="<?php echo base_url()?>resources/sidr-menu-responsive/stylesheets/jquery.sidr.dark.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />




<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>resources/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script>window.jQuery || document.write('<script src="../resources/icheckmaster/js/jquery.js">\x3C/script>');</script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/icheckmaster/js/jquery.icheck.min.js?v=0.7"></script>
	
	
<script>window.jQuery || document.write('<script src="../resources/icheckmaster/js/jquery.js">\x3C/script>');</script>

<script type="text/javascript"
	src="<?php echo base_url(); ?>resources/icheckmaster/js/jquery.icheck.min.js?v=0.7"></script>

</head>


<header style="text-align:center;">Titulo: {nome_top}</header>

<?php 
echo form_open('index.php/common/topicost/comentar');
echo form_hidden('hd_id','{id_top}');
echo form_hidden('hd_id_perf',$this->session->userdata('id_perf'));
?>
<table>
			<thead>
				<tr>
					<td class="coluna" name="id_top" style="display: none">id_top</td>
					<td class="coluna" style="width: 72%;">Titulo</td>
					<td class="coluna" style="width: 200px;">Resumo</td>
					<td class="coluna" style="width: 5px;">Data Criacao</td>
					<td class="coluna" style="width: 5px;">Status</td>
					<td class="coluna" name="status" style="display: none">sts_top</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="display: none" name="hd_id">{id_top}</td>
					<td>{nome_top}</td>
					<td>{resumo_top}</td>
					<td class="center">{dt_criacao}</td>
					<td>{status}</td>
					<td style="display: none" name="hd_status">{status_top}</td>
				</tr>
			</tbody>
		</table>
	
		<section class="comentario">
		<table>
			<thead>
				<tr>
					<td class="coluna" name="id_top" style="display: none">id_coment</td>
					<td class="coluna" style="width: 200px;">Usuario</td>
					<td class="coluna" style="width: 72%;">Comentario</td>
				</tr>
			</thead>
			<tbody>
			{dados}
				<tr>
					<td style="display: none" name="hd_id">{id_coment}</td>
					<td><img src="<?php echo base_url()?>resources/img/uploads/{avatar_usu_comentou}" width=34px height=34px; />{nome_usu_comentou},{perfil_comentou}</td>
					<td>{comentario_coment}</td>
				</tr>
				{/dados}
			</tbody>
		</table>
		</section>
		<?php 
			$this->load->view('common/comentar');
			echo form_close();
		?>
<script>
$(document).ready(function() {
	if($('[name="hd_id_perf"]').val()>1){
		$('#comentariosss').hide();
		}
	$('[name="salvar"]').click(function(){
		$('form').submit();
		});

	
	$('article a').click(function(){
		var id = $(this).find('[name="hd_id"]').val();
		var href = $(this).attr('href');
		$(this).attr('href',href+id);
		});
	$(".fancybox-media").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>