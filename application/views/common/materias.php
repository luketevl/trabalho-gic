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


<header>Materias</header>
{dados}
			<article class="forum" >
				<a href="#" title="{titulo_post}">{resumo_post}
					<hr class="clear" /> <img src="<?php echo base_url();?>resources/img/uploads/{img_principal_post}"
					width="200" alt="{resumo_post}" />
				</a>
			</article>
{/dados}


<script>
$(document).ready(function() {
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