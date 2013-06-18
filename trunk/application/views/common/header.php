<!DOCTYPE html>
<html lang="en">
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
<body>
	<header id="cabecalho">
		<nav id="user">
			<span>Bem vindo [Apelido] | <a href="#">{[Cadastrar], [Sair]} 
			</span></a>
		</nav>
		<section>
			<input type="search" autofocus="autofocus" placeholder="Digite sua pesquisa" />
			<?php 
			echo form_button('pesquisa','<img  src='. base_url() .'resources/icons/search.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
			echo form_button('pesquisaGoogle','<img  src='. base_url() .'resources/icons/searchGoogle.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
				
			?>
		</section>
	</header>
	<section id="content">
		<section id="column-left">
		<iframe src="<?php echo base_url();?>index.php/common/materias" style="height:100%;"/>
		</iframe>
		<iframe src="<?php echo base_url();?>index.php/common/topicost" style="height:100%;"/>
		</iframe>

			
	</section>
		<section id="column-right">
			<header>Video</header>
			<article>
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1">Video feito para apresentação da nosso portal Agropecuário
					<img src="<?php echo base_url();?>resources/img/FakeYouTubeVideo.jpg"
					width="280" alt="Clique para assistir" />
				
				
				</a>
					<hr class="clear" /> 
			</article>
			<article>
				<?php 
					echo $this->load->view('common/social');
				?>
			</article>
			
		</section>

	</section>


	<footer>
		<p class="copri">Desenvolvido por luketevl: Todos os direitos
			reservados.</p>
	</footer>

</body>
</html>


<script>
				$(document).ready(function() {
					  $('.tooltip').tooltipster();
					$('ul li a').click(function(){
						var link = $(this).next('input:hidden').val();
						$('iframe').attr('src',link);
						$('li').each(function(){
							$(this).removeAttr('class');
							});
						$(this).parent().attr('class',"active");
						});
		$(".various").fancybox({
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