<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>CodeIgniter</title>
<script type="text/javascript"
	src="<?php echo base_url()?>resources/js/common/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo base_url()?>resources/sidr-menu-responsive/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>resources/tooltipster-master/js/jquery.tooltipster.min.js"></script>
<link rel="stylesheet"
	href="<?php echo base_url(); ?>resources/css/style.css" />
<link rel="stylesheet"
	href="<?php echo base_url()?>resources/sidr-menu-responsive/stylesheets/jquery.sidr.dark.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/tooltipster-master/css/tooltipster.css" />
	

	
</head>
<body>

<nav id="user">
	<section id="dadosUser">
		<img src="<?php echo base_url();?>resources/icons/{avatar_usu}" id="foto" />
		<span id="userInfo">
		<?php echo $this->session->userdata('nome_usu');?>
		<p>{perfil_usu}</p>
	 </span>
		<a href="<?php echo base_url()?>index.php/intranet/login/deslogar">
		<img src="<?php echo base_url();?>resources/icons/logout.png" class="exit" />
		</a>
		</section>
	 <span id="circle" class="tooltip" title="<?php echo $tp_posts;?>" >
	 	<img src="<?php echo base_url();?>resources/icons/post3.png" />
	 	<p>2</p>
	 </span>
	 <span id="circle" class="tooltip" title="<?php echo $tp_posts;?>" >
	 	<img src="<?php echo base_url();?>resources/icons/post3.png" />
	 	<p>2</p>
	 </span>
</nav>
<a href="#" id="esconderHeader">Esconder Cabeçalho</a>
<!-- Link para abrir menu
	<a id="simple-menu" href="#sidr"><img
		src="<?php echo base_url();?>resources/icons/arrow-right.png"
		style="margin-top: -13px; margin-left: -10px;" /> </a>
		 -->
		 
<!-- IFRAME para páginas -->
	<section id="pagiframe">
		<iframe src="http://www.google.com" />
		</iframe>
	</section>

<!-- MENU -->
	<div id="sidr">
		<!-- style="display: block; left: 0px; -->
		<ul>
		<!-- HOME -->
			<li class="active"><a href="#"> <img
					src="<?php echo base_url();?>resources/icons/home2.png"
					style="margin-top: 20px;" />
					<aside class="sub">
						<?php echo $principal['name']?>
					</aside>
			</a>
			</li>
			<!-- PERFIL -->
			<li><a href="#"> <img
					src="<?php echo base_url();?>resources/icons/perfil.png"
					style="margin-top: 20px;" />
					<aside class="sub">
						<?php echo $perfil['name']?>
					</aside>
			</a> 
			<?php echo form_hidden('hd_link',$perfil['url']);?>
			</li>
			<!-- USER -->
			<li><a href="#"> <img
					src="<?php echo base_url();?>resources/icons/user.png"
					style="margin-top: 20px;" />
					<aside class="sub">
						<?php echo $usuarios['name']?>
					</aside> 
			</a>
					<?php echo form_hidden('hd_link',$usuarios['url']);?>
			</li>
			<!-- POST -->
			<li><a href="#"> <img
					src="<?php echo base_url();?>resources/icons/post2.png" id="arrow" />
					<aside class="sub">
						<?php echo $posts['name']?>
					</aside>
			</a> 
			<?php echo form_hidden('hd_link',$posts['url']);?>
			</li>
		</ul>
	</div>
		<script>
				$(document).ready(function() {
					$('#simple-menu').sidr();
					  $('.tooltip').tooltipster();
					$('#simple-menu').click(function(){
						$('#simple-menu img').toggleClass('rotate');
						});
					$('ul li a').click(function(){
						var link = $(this).next('input:hidden').val();
						$('iframe').attr('src',link);
						$('li').each(function(){
							$(this).removeAttr('class');
							});
						$(this).parent().attr('class',"active");
						});

					$('#esconderHeader').click(function(){
						if(!$('nav#user').is(':visible')){
							$(this).text('Esconder Cabeçalho');
						}
						else{
							$(this).text('Mostrar Cabeçalho');
						}
						$('nav#user').toggle(900);
						});
				});
			</script>
</body>
</html>
