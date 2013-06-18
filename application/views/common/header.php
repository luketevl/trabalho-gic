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



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
		<iframe src="http://www.google.com" />
		</iframe>

			<header>Materias</header>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" />
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Quaaase! Rachel vai a casa de Livia de
					surpresa e Wanda se esconde
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
	</section>
		<section id="column-right">
			<header>Videos</header>
			<article>
				<a href="#" title="link">Policial e suspenso por foto comprometedora
					no Facebook e culpa hacker
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
			</article>
			<article>
				<a href="#" title="link">Policial e suspenso por foto comprometedora
					no Facebook e culpa hacker
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/teste.jpg"
					width="200" alt="Imagem teste" />
				</a>
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
				});
			</script>