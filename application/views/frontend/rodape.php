
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<ul  class="widget-cols cf">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>Matérias recentes</h4>
							{posts_recentes}
							<div class="recent-post cf">
								<a href="#" class="thumb">
								<img src="<?php echo base_url(); ?>resources/img/uploads/{img_principal_post}" alt="alt" width="54" height="54" /></a>
								<div class="post-head">
									<a href="#">{titulo_post}</a><span> {dt_modificacao}</span>
								</div>
							</div>
							{/posts_recentes}
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
							<h4>Perguntas Recentes</h4>
							{topicos_recentes}
							<div class="recent-post cf">
							<a href="#" class="thumb">
							<img src="<?php echo base_url(); ?>resources/img/uploads/{avatar_usu}" alt="alt" width="54" height="54" /></a>
							</a>
								<div class="post-head">
									<a href="#">{nome_top}</a><span> {dt_criacao}</span>
								</div>
							</div>
							{/topicos_recentes}
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
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>TWITTER</h4>
		         				<?php $this->load->view('common/social')?>
		         			</div>
		         		</div>
		         		
					</li>
					
					<li class="fourth-col">
						
						<div class="widget-block">
							<h4>Categorias</h4>
							<ul>
							{categorias-footer}
								<li class="cat-item"><a href="#" >{categoria}</a></li>
							{/categorias-footer}
<!-- 								<li class="cat-item"><a href="#" >Photo</a></li> -->
<!-- 								<li class="cat-item"><a href="#" >Art</a></li> -->
<!-- 								<li class="cat-item"><a href="#" >Game</a></li> -->
<!-- 								<li class="cat-item"><a href="#" >Film</a></li> -->
<!-- 								<li class="cat-item"><a href="#" >TV</a></li> -->
							</ul>
						</div>
		         		
					</li>	
				</ul>
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">Por <a href="https://www.facebook.com/AgropecuariaGic" >Grupo Agropecuária</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="https://www.facebook.com/AgropecuariaGic"  title="Seja nosso Fan" class="facebook">Facebbok</a></li>
							<li><a href="http://www.twitter.com/AgropecuariaGIC" title="Siga nosso twitter" class="twitter"></a></li>
						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		