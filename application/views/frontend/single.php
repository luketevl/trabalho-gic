<!doctype html> 
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>FOLDER TEMPLATE</title>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="<?php echo base_url()?>resources/frontend/html/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="<?php echo base_url()?>resources/frontend/html/js/jquery-1.7.1.min.js"></script>
		<script src="<?php echo base_url()?>resources/frontend/html/js/custom.js"></script>
		<script src="<?php echo base_url()?>resources/frontend/html/js/tabs.js"></script>
		<script src="<?php echo base_url()?>resources/frontend/html/js/css3-mediaqueries.js"></script>
		<script src="<?php echo base_url()?>resources/frontend/html/js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="<?php echo base_url()?>resources/frontend/html/js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="<?php echo base_url()?>resources/frontend/html/js/jquery.easing.js"></script>
		<script src="<?php echo base_url()?>resources/frontend/html/js/lof-slider.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()?>resources/frontend/html/css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo base_url()?>resources/frontend/html/css/jquery.tweet.css" media="all"  /> 
		<script src="<?php echo base_url()?>resources/frontend/html/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url()?>resources/frontend/html/css/superfish.css" /> 
		<script  src="<?php echo base_url()?>resources/frontend/html/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="<?php echo base_url()?>resources/frontend/html/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="<?php echo base_url()?>resources/frontend/html/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="<?php echo base_url()?>resources/frontend/html/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="<?php echo base_url()?>resources/frontend/html/stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="<?php echo base_url()?>resources/frontend/html/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="<?php echo base_url()?>resources/frontend/html/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="<?php echo base_url()?>resources/frontend/html/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="<?php echo base_url()?>resources/frontend/html/js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="<?php echo base_url()?>resources/frontend/html/css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="<?php echo base_url()?>resources/frontend/html/js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="<?php echo base_url()?>resources/frontend/html/css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="<?php echo base_url()?>resources/frontend/html/css/lessframework.css"/>
		
		<!-- jplayer -->
		<link href="<?php echo base_url()?>resources/frontend/html/player-skin/jplayer-black-and-yellow.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url()?>resources/frontend/html/js/jquery.jplayer.min.js"></script>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="<?php echo base_url()?>resources/frontend/html/css/flexslider.css" >
		<script src="<?php echo base_url()?>resources/frontend/html/js/jquery.flexslider.js"></script>
		
	</head>
	
	
	<body class="single">
	<?php 
		$this->load->view('frontend/topo');
	?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
			<!-- masthead -->
			<div class="masthead cf">
				FORUM
			</div>
			<!-- ENDS masthead -->
			{topicos}
			
				
			<!-- posts list -->
        	<div id="posts-list" class="cf">        	
	        		
	        		
				<!-- Standard -->
				<article class="format-quote">
<!-- 					<div class="feature-image"> -->
<!-- 						<img src="img/dummies/slides/01.jpg" alt="Alt text" /> -->
<!-- 					</div> -->
					<div class="box cf">
						<div class="entry-date"><div class="number">{dt_criacao}</div><div class="month">JUN</div></div>
						
						<div class="excerpt">
							<div class="post-heading" >{nome_top}</div>
							<div class="entry-content">
								<p>
									{resumo_top}
								</p>
							</div>
							
							
						</div>
						
						<div class="meta">
							<span class="format">Topico</span>
							<span class="user"><a href="#">Por {usuario}, </a></span>
							<span class="comments">{qtd_comentarios} respostas</span>
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
						</div>
							
					</div>
				</article>
				<!-- ENDS  Standard -->
					
			{/topicos}
						
				<?php 
				if($this->session->userdata('id_perf')==1){
					$this->load->view('frontend/comments');
				}
				?>							
				
    		</div>
    		
    		<!-- ENDS posts list -->
			
			<!-- sidebar -->
<!--         	<aside id="sidebar"> -->
        		
<!--         		<ul> -->
<!-- 	        		<li class="block"> -->
<!-- 		        		<h4>Text Widget</h4> -->
<!-- 						Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.  -->
<!-- 	        		</li> -->
	        		
<!-- 	        		<li class="block"> -->
<!-- 		        		<h4>Categories</h4> -->
<!-- 						<ul> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li> -->
<!-- 						</ul> -->
<!-- 	        		</li> -->
	        		
<!-- 	        		<li class="block"> -->
<!-- 		        		<h4>Archives</h4> -->
<!-- 						<ul> -->
<!-- 							<li class="cat-item"><a href="#" title="title">January</a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">February</a></li> -->
<!-- 							<li class="cat-item"><a href="#" title="title">March</a></li> -->
<!-- 						</ul> -->
<!-- 	        		</li> -->
        		
<!--         		</ul> -->
        		
<!--         	</aside> -->
			<!-- ENDS sidebar -->
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		<?php 
			$this->load->view('frontend/rodape');
		?>
	</body>
	
	
	
</html>