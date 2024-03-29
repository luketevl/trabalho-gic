<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Agropecuaria GIC</title>
		 
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/jquery-1.7.1.min.js"></script>
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/tabs.js"></script>
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/css3-mediaqueries.js"></script>
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/jquery.easing.js"></script>
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/lof-slider.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/jquery.tweet.css" media="all"  /> 
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>resources/frontend/html/css/superfish.css" /> 
		<script  src="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="<?php echo base_url(); ?>resources/frontend/html/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="<?php echo base_url(); ?>resources/frontend/html/js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>resources/frontend/html/css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/lessframework.css"/>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/flexslider.css" >
		<script src="<?php echo base_url(); ?>resources/frontend/html/js/jquery.flexslider.js"></script>

	</head>
	
	
	<body class="home">
	<?php 
		$this->load->view('frontend/topo');
	?>
	
	<script>
  (function() {
    var cx = '005718714053014607788:oxptsytnkmg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			<input type="search" id="pesquisa" placeholder="Digite sua pesquisa" style="width:100%;" autofocus="autofocus" />
			<?php 
				echo form_open('index.php/frontend/project/index','id="project"');
					echo form_hidden('id_submit');
				echo form_close();
			?>
			
				
			<!-- featured -->
			<div class="home-featured">
			
				<ul id="filter-buttons">
					<li><a href="#" data-filter="*" class="selected">Todos</a></li>
					{categorias}
					<li><a href="#" data-filter=".{categoria-filter}">{categoria}</a></li>
					
					{/categorias}
					
<!-- 					<li><a href="#" data-filter=".print">print</a></li> -->
<!-- 					<li><a href="#" data-filter=".design">design</a></li> -->
<!-- 					<li><a href="#" data-filter=".photo">photo</a></li> -->
				</ul>
				<script>
					$(document).ready(function(){
						$('figure').click(function(){
							var id = $(this).find('[name="id_post"]').val();
							$('[name="id_submit"]').val(id);
							$('#project').submit();
							});
						});
				</script>
				<!-- Filter container -->
				<div id="filter-container" class="cf">
				
					{dados}
					<figure class="{categoria-filter}{chaves} {chave}{/chaves}">
						<?php echo form_hidden('id_post','{id_post}');?>
						<a href="#" class="thumb">
							<img src="<?php echo base_url(); ?>resources/img/uploads/{img_principal_post}" alt="alt" /></a>
						<figcaption>
							<a href="#"><h3 class="heading">{titulo_post}</h3></a>
							{resumo_post} [...]
						<hr />
							<div class="portfolio-cat">
							{metas}
								<a href="#">{meta}</a>,
							{/metas}
							</div>
						</figcaption>
					</figure>
					{/dados}
					
<!-- 					<figure class="print"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#"><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="design"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="photo"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="web photo"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="web print"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="photo"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="web photo"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
					
<!-- 					<figure class="web print"> -->
<!-- 						<figcaption> -->
<!-- 							<a href="#" ><h3 class="heading">Pellentesque habitant morbi</h3></a> -->
<!-- 							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption> -->
<!-- 					</figure> -->
					
				</div><!-- ENDS Filter container -->
				
			</div>
			<!-- ENDS featured -->
			
			
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		<?php 
			$this->load->view('frontend/rodape');
		?>
	</body>
	
	
	
</html