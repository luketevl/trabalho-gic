
<?php 
				echo form_open('index.php/frontend/project/index','id="project"');
					echo form_hidden('id_submit');
				echo form_close();
				
				echo form_open('index.php/frontend/single/index','id="project"');
					echo form_hidden('id_submit');
				echo form_close();
			?>
			<script>
					$(document).ready(function(){
						$('div .recent-post').click(function(){
							var id = $(this).find('[name="id_post"]').val();
							$('[name="id_submit"]').val(id);
							$('#project').submit();
							});
						});
				</script>
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<ul  class="widget-cols cf">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>Matérias Recentes</h4>
							{posts_recentes}
							<div class="recent-post cf">
							<?php echo form_hidden('id_post','{id_post}');?>
								<a href="#" class="thumb">
								<img src="<?php echo base_url(); ?>resources/img/uploads/{img_principal_post}" alt="alt" width="54" height="54" /></a>
								<div class="post-head">
									<a href="#">{titulo_post}</a><span> {dt_modificacao}</span>
								</div>
							</div>
							{/posts_recentes}
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
		