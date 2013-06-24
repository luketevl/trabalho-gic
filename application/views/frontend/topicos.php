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
	
	
	<body class="blog">
	<?php 
		$this->load->view('frontend/topo');
	?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
				
				<!-- posts list -->
	        	<div id="posts-list" class="cf">        	
	        		
	        		
	        		<!-- Audio -->
<!-- 					<article class="format-audio"> -->
<!-- 						<div class="box cf"> -->
<!-- 							<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div> -->
							
<!-- 							<div class="excerpt"> -->
<!-- 								<a href="#" class="post-heading" >Miaow Track</a> -->
								<!-- jplayer -->
<!-- 								<script type="text/javascript"> -->
								<![CDATA[
								$(document).ready(function(){
								
									$("#jquery_jplayer_1").jPlayer({
										ready: function () {
											$(this).jPlayer("setMedia", {
												m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
												oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
											}).jPlayer("stop");
										},
										ended: function (event) {
											$(this).jPlayer("play");
										},
										swfPath: "js",
										supplied: "m4a, oga"
									});
								});
								//]]>
								</script>
<!-- 								<div id="jquery_jplayer_1" class="jp-jplayer"></div> -->
<!-- 								<div class="jp-audio-container"> -->
<!-- 									<div class="jp-audio"> -->
<!-- 										<div class="jp-type-single"> -->
<!-- 											<div id="jp_interface_1" class="jp-interface"> -->
<!-- 												<ul class="jp-controls"> -->
<!-- 													<li><a href="#" class="jp-play" tabindex="1">play</a></li> -->
<!-- 													<li><a href="#" class="jp-pause" tabindex="1">pause</a></li> -->
<!-- 													<li><a href="#" class="jp-mute" tabindex="1">mute</a></li> -->
<!-- 													<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li> -->
<!-- 												</ul> -->
<!-- 												<div class="jp-progress-container"> -->
<!-- 													<div class="jp-progress"> -->
<!-- 														<div class="jp-seek-bar"> -->
<!-- 															<div class="jp-play-bar"></div> -->
<!-- 														</div> -->
<!-- 													</div> -->
<!-- 												</div> -->
<!-- 												<div class="jp-volume-bar-container"> -->
<!-- 													<div class="jp-volume-bar"> -->
<!-- 														<div class="jp-volume-bar-value"></div> -->
<!-- 													</div> -->
<!-- 												</div> -->
<!-- 											</div> -->
<!-- 										</div> -->
<!-- 									</div> -->
<!-- 								</div> -->
								<!-- ENDS jplayer -->

<!-- 							</div> -->
							
<!-- 							<div class="meta"> -->
<!-- 								<span class="format">Audio</span> -->
<!-- 								<span class="user"><a href="#">By LuisZuno, </a></span> -->
<!-- 								<span class="comments">16 comments</span> -->
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
<!-- 							</div> -->
								
<!-- 						</div> -->
<!-- 					</article> -->
					<!-- ENDS Audio -->
	        
					
	        		
	        		<!-- Video -->
<!-- 					<article class="format-video"> -->
<!-- 						<div class="video-container"> -->
<!-- 							<iframe  src="http://www.youtube.com/embed/YE7VzlLtp-4" ></iframe> -->
<!-- 						</div> -->
<!-- 						<div class="box cf"> -->
<!-- 							<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div> -->
							
<!-- 							<div class="excerpt"> -->
<!-- 								<a href="#" class="post-heading" >YOUTUBE</a> -->
<!-- 								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p> -->
								
								
<!-- 							</div> -->
							
<!-- 							<div class="meta"> -->
<!-- 								<span class="format">Video</span> -->
<!-- 								<span class="user"><a href="#">By LuisZuno, </a></span> -->
<!-- 								<span class="comments">16 comments</span> -->
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
<!-- 							</div> -->
								
<!-- 						</div> -->
<!-- 					</article> -->
					<!-- ENDS Video -->
					
					
	        		<!-- Link -->
<!-- 					<article class="format-link"> -->
<!-- 						<div class="box cf"> -->
<!-- 							<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div> -->
							
<!-- 							<div class="excerpt"> -->
<!-- 								<a href="http://luiszuno.com" class="post-heading" >This is a link example</a> -->
<!-- 							</div> -->
							
<!-- 							<div class="meta"> -->
<!-- 								<span class="format">Link</span> -->
<!-- 								<span class="user"><a href="#">By LuisZuno, </a></span> -->
<!-- 								<span class="comments">16 comments</span> -->
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
<!-- 							</div> -->
								
<!-- 						</div> -->
<!-- 					</article> -->
					<!-- ENDS Link -->
					<?php 
				echo form_open('index.php/frontend/single/index','id="singleT"');
					echo form_hidden('id_submit');
				echo form_close();
			?>
			
					
					<script>
						$(document).ready(function(){
							$('a').click(function(){
								var id = $(this).find('[name="id_top"]').val();
								$('[name="id_submit"]').val(id);
								$('#singleT').submit();
							});
							});
					</script>
					<!-- Quote -->
					{topicos}
					<article class="format-quote">
						<div class="box cf">
							<div class="entry-date"><div class="number">{dt_criacao}</div><div class="month">JUN</div></div>
							
							<div class="excerpt">
								<a href="#" class="post-heading" >
								{nome_top}
								<?php echo form_hidden('id_top','{id_top}');?>
								</a>
								<p><span class="q-author"></span></p>

							</div>
							
							<div class="meta">
								<span class="format">Topico</span>
								<span class="user"><a href="#">Por {usuario}, </a></span>
								<span class="comments">{qtd_comentarios} comentários</span>
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
							</div>
								
						</div>
					</article>
					<!-- ENDS Quote -->
					{/topicos}
					
					
					<!-- Standard -->
<!-- 					<article class="format-standard"> -->
<!-- 						<div class="feature-image"> -->
<!-- 							<a href="#"> -->
<!-- 								<img src="img/dummies/slides/01.jpg" alt="Alt text" /> -->
<!-- 							</a> -->
<!-- 						</div> -->
<!-- 						<div class="box cf"> -->
<!-- 							<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div> -->
							
<!-- 							<div class="excerpt"> -->
<!-- 								<a href="#" class="post-heading" >LOREM IPSUM DOLOR AMET</a> -->
<!-- 								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed.</p> -->
								
<!-- 								<p><a href="#" class="learnmore">Learn More</a></p> -->
<!-- 							</div> -->
							
<!-- 							<div class="meta"> -->
<!-- 								<span class="format">Post</span> -->
<!-- 								<span class="user"><a href="#">By LuisZuno, </a></span> -->
<!-- 								<span class="comments">16 comments</span> -->
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
<!-- 							</div> -->
								
<!-- 						</div> -->
<!-- 					</article> -->
					<!-- ENDS  Standard -->
					
					
					<!-- Image -->
<!-- 					<article class="format-image"> -->
<!-- 						<div class="feature-image"> -->
<!-- 							<a href="img/dummies/slides/01.jpg" data-rel="prettyPhoto"> -->
<!-- 								<img src="img/dummies/slides/04.jpg" alt="Alt text" /> -->
<!-- 							</a> -->
<!-- 						</div> -->
<!-- 						<div class="box cf"> -->
<!-- 							<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div> -->
							
<!-- 							<div class="excerpt"> -->
<!-- 								<a href="#" class="post-heading" >AN IMAGE</a> -->
<!-- 								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p> -->
								
								
<!-- 							</div> -->
							
<!-- 							<div class="meta"> -->
<!-- 								<span class="format">Image</span> -->
<!-- 								<span class="user"><a href="#">By LuisZuno, </a></span> -->
<!-- 								<span class="comments">16 comments</span> -->
<!-- 								<span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span> -->
<!-- 							</div> -->
								
<!-- 						</div> -->
<!-- 					</article> -->
					<!-- ENDS Image -->
					
					
					<!-- page-navigation -->
<!-- 					<div class="page-navigation cf"> -->
<!-- 						<div class="nav-next"><a href="#">&#8592; Older Entries </a></div> -->
<!-- 						<div class="nav-previous"><a href="#">Newer Entries &#8594;</a></div> -->
<!-- 					</div> -->
					<!--ENDS page-navigation -->
					
				
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