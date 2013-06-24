		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
<!-- 					<a href="home"><img  src="resources/frontend/html/img/logo.png" alt="Agropecuária"></a> -->
				<?php 
					if($this->session->userdata('id_usu')>0){
				echo '<span style="color:#dcd2be"> Bem vindo, '. $this->session->userdata('nome_usu');
				echo '<a href="'.base_url().'index.php/intranet/login/deslogar" > (sair)';
				echo '</a></span>';
					}
					else{
						echo '<span style="color:#dcd2be"><a href="'.base_url().'index.php/intranet/login" > Entrar';
						echo '</a></span>';

						echo '<span style="color:#dcd2be"><a href="'.base_url().'index.php/intranet/login" >, Cadastrar';
						echo '</a></span>';
					}				
				?>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="<?php echo base_url();?>index.php/frontend/home">INÍCIO</a></li>
					<li><a href="<?php echo base_url();?>index.php/frontend/topicosv">FORUM</a></li>
					<li><a href="<?php echo base_url();?>index.php/intranet/login">GESTÃO</a></li>
<!-- 					<li><a href="page.html">ABOUT</a> -->
<!-- 						<ul> -->
<!-- 							<li><a href="page-elements.html">Elements</a></li> -->
<!-- 							<li><a href="page-icons.html">Icons</a></li> -->
<!-- 							<li><a href="page-typography.html">Typography</a></li> -->
<!-- 						</ul> -->
<!-- 					</li> -->
<!-- 					<li><a href="portfolio.html">WORK</a></li> -->
<!-- 					<li><a href="contact.html">CONTACT</a></li> -->
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->
				
<!--  REMOVI SLIDER -->



			</div>
		</header>
		<!-- ENDS HEADER -->
		