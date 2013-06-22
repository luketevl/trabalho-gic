<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>FOLDER TEMPLATE</title>
		 
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery-1.7.1.min.js"></script>
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/custom.js"></script>
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/tabs.js"></script>
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/css3-mediaqueries.js"></script>
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery.easing.js"></script>
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/lof-slider.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/jquery.tweet.css" media="all"  /> 
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>resources/frontend/html/css/superfish.css" /> 
		<script  src=="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src=="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src=="<?php echo base_url(); ?>resources/frontend/html/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src=="<?php echo base_url(); ?>resources/frontend/html/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href=="<?php echo base_url(); ?>resources/frontend/html/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href=="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href=="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src=="<?php echo base_url(); ?>resources/frontend/html/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>resources/frontend/html/css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>resources/frontend/html/css/lessframework.css"/>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>resources/frontend/html/css/flexslider.css" >
		<script src=="<?php echo base_url(); ?>resources/frontend/html/js/jquery.flexslider.js"></script>

	</head>
	
	
	<body class="home">
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.html"><img  src="<?php echo base_url(); ?>resources/frontend/html/img/logo.png" alt="Simpler"></a>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="index.html">HOME</a></li>
					<li><a href="blog.html">BLOG</a></li>
					<li><a href="page.html">ABOUT</a>
						<ul>
							<li><a href="page-elements.html">Elements</a></li>
							<li><a href="page-icons.html">Icons</a></li>
							<li><a href="page-typography.html">Typography</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">WORK</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->
				
<!--  REMOVI SLIDER -->



			</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
			
			
				
			<!-- featured -->
			<div class="home-featured">
			
				<ul id="filter-buttons">
					<li><a href="#" data-filter="*" class="selected">Todos</a></li>
					{categorias}
					<li><a href="#" data-filter=".{categoria}">{categoria}</a></li>
					
					{/categorias}
					
					<li><a href="#" data-filter=".print">print</a></li>
					<li><a href="#" data-filter=".design">design</a></li>
					<li><a href="#" data-filter=".photo">photo</a></li>
				</ul>
				
				<!-- Filter container -->
				<div id="filter-container" class="cf">
				
					{dados}
					<figure class="{categoria}">
						<a href="project.html" class="thumb">
							<img src="<?php echo base_url(); ?>resources/img/uploads/{img_principal_post}" alt="alt" /></a>
						<figcaption>
							<a href="project.html"><h3 class="heading">{titulo_post}</h3></a>
							{resumo_post}
						</figcaption>
					</figure>
					{/dados}
					
					<figure class="print">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/02.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html"><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="design">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/03.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/04.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web photo">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/05.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web print">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/06.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="photo">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/04.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web photo">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/05.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
					
					<figure class="web print">
						<a href="project.html" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/featured/01.jpg" alt="alt" /></a>
						<figcaption>
							<a href="project.html" ><h3 class="heading">Pellentesque habitant morbi</h3></a>
							Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. </figcaption>
					</figure>
					
				</div><!-- ENDS Filter container -->
				
			</div>
			<!-- ENDS featured -->
			
			
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<ul  class="widget-cols cf">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>RECENT POSTS</h4>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="<?php echo base_url(); ?>resources/frontend/html/img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>ABOUT</h4>
							<p>Folder it's completely free this means you don't have to pay anything <a href="http://luiszuno.com/blog/license" tar >read license</a>.</p> 
							<p>Visit <a href="http://templatecreme.com/" >Template Creme</a> and find the most beautiful free templates up to date.</p>
						</div>
						
					</li>
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>TWITTER WIDGET</h4>
		         			</div>
		         		</div>
		         		
					</li>
					
					<li class="fourth-col">
						
						<div class="widget-block">
							<h4>CATEGORIES</h4>
							<ul>
								<li class="cat-item"><a href="#" >Design</a></li>
								<li class="cat-item"><a href="#" >Photo</a></li>
								<li class="cat-item"><a href="#" >Art</a></li>
								<li class="cat-item"><a href="#" >Game</a></li>
								<li class="cat-item"><a href="#" >Film</a></li>
								<li class="cat-item"><a href="#" >TV</a></li>
							</ul>
						</div>
		         		
					</li>	
				</ul>
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">by <a href="http://luiszuno.com" >luiszuno.com</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="http://www.facebook.com"  title="Become a fan" class="facebook">Facebbok</a></li>
							<li><a href="http://www.twitter.com" title="Follow my tweets" class="twitter"></a></li>
							<li><a href="http://plus.google.com" title="Enter my circles" class="plus"></a></li>
						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
	</body>
	
	
	
</html>