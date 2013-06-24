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
	
	
	<body>
	<?php 
		$this->load->view('frontend/topo');
	?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
				
			<!-- portfolio content-->
        	<div id="portfolio-content" class="cf">        	
				
				
				
				
				<!-- project pager -->
<!-- 				<div class="project-pager cf"> -->
<!-- 					<a class="previous-project" href="#">&#8592; Previous project</a> -->
<!-- 					<a class="next-project" href="#">Next project &#8594;</a> -->
<!-- 				</div> -->
				<!-- ENDS project pager -->
					
					
{dados}
					<!-- project box -->
				<div id="project-box" class="cf">
				
					<!-- slider -->
					<div class="project-slider">
				        <div class="flexslider">
						  <ul class="slides">
						    <li>
						      <img src="<?php echo base_url(); ?>resources/img/uploads/{img_principal_post}" alt="" style="max-height: 300px;" />
						    </li>
				{imagens}
						    <li>
						      <img src="<?php echo base_url(); ?>resources/img/uploads/{nome_img}" alt="" style="max-height: 300px;" />
						    </li>
				{/imagens}
						  </ul>
						</div>
					</div>
		        	<!-- ENDS slider -->


					<div class="info">
	        			<p><strong>Criador </strong>{usuario}</p>
	        			<p><strong>Data </strong> April 25, 2012</p>
	        			<p><a href="http://www.luiszuno.com" class="launch" >Launch Project</a></p>
	        		</div>
	        		
	        		<!-- entry-content -->
	        		<div class="entry-content">
	        		
	        			<h2 class="heading">{titulo_post}</h2>
	        			
	        			<div class="multicolumn">
	        			<p>{conteudo_post}
	        			</p>
	        			</div>
	        		</div>
	        		<!-- ENDS entry content -->
	        		
	        		
		    	<!-- ENDS project box -->
					
					
				<!-- related -->
<!-- 				<div class="related-projects"> -->
<!-- 					<h4 class="related-heading">Related projects</h4> -->
<!-- 					<div class="related-list cf"> -->
<!-- 						<figure> -->
<!-- 							<a href="#" class="thumb"><img src="img/dummies/slides/01.jpg" alt="Alt text" /></a> -->
<!-- 							<a href="single.html" class="heading">Pellentesque habitant morbi</a> -->
<!-- 						</figure> -->
						
<!-- 						<figure> -->
<!-- 							<a href="#" class="thumb"><img src="img/dummies/slides/02.jpg" alt="Alt text" /></a> -->
<!-- 							<a href="single.html" class="heading">Pellentesque habitant morbi</a> -->
<!-- 						</figure> -->
						
<!-- 						<figure>  -->
<!-- 							<a href="#" class="thumb"><img src="img/dummies/slides/03.jpg" alt="Alt text" /></a> -->
<!-- 							<a href="single.html" class="heading">Pellentesque habitant morbi</a> -->
<!-- 						</figure> -->
						
<!-- 						<figure> -->
<!-- 							<a href="#" class="thumb"><img src="img/dummies/slides/04.jpg" alt="Alt text" /></a> -->
<!-- 							<a href="single.html" class="heading">Pellentesque habitant morbi</a> -->
<!-- 						</figure> -->
						
<!-- 					</div> -->
<!-- 				</div> -->
				<!-- ENDS related -->
									
				
	        	</div>
	        		{videos}
	        		<!-- Video -->
					<article class="format-video">
						<div class="video-container">
							<iframe width="640" height="360" src="http://www.youtube.com/embed/{url_cortado}?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						</div>
					</article>
					<!-- ENDS Video -->
	        		{/videos}
					
    		</div>
    		<!-- ENDS portfolio content-->
			
			<?php 
				echo $this->load->view('frontend/comments');
			?>
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		{/dados}
		<?php 
			$this->load->view('frontend/rodape');
		?>
		
		<script>
			$(document).ready(){
				$('form').attr('src','');
				}
		</script>
	</body>
	
</html>