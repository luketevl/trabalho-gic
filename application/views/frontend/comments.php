				<!-- comments list -->
				<div id="comments-wrap">
					<h4 class="heading">{qtd_comentarios} {tipo}</h4>
					
					<ol class="commentlist">
					  
					           {comen}
						<li class="comment even thread-even depth-1" id="li-comment-1">
							
							<div id="comment-1" class="comment-body cf">
						     	<img alt='' src="<?php echo base_url();?>resources/img/uploads/{avatar_usu}" class='avatar avatar-35 photo' height='35' width='35' />      
						     	<div class="comment-author vcard">{nome_usuario}</div>
						        <div class="comment-meta commentmetadata">
							  		<span class="comment-date">{tempo} atrás  </span>
								</div>
						  		<div class="comment-inner">
							   		<p>{comentario_coment}</p>
						 		</div>
					     	</div>
					           {/comen}
					
					
							<!-- child -->
<!-- 							<ul class='children'> -->
<!-- 					  			<li class="comment even alt depth-2" id="li-comment-2-1"> -->
<!-- 									<div id="comment-2" class="comment-body cf"> -->
<!-- 										<img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />       -->
<!-- 					      				<div class="comment-author vcard">Jhon</div> -->
<!-- 										<div class="comment-meta commentmetadata"> -->
<!-- 					  						<span class="comment-date">1 hour ago  </span> -->
<!-- 										</div> -->
<!-- 					  					<div class="comment-inner"> -->
<!-- 								   			<p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p> -->
<!-- 					     			 	</div> -->
<!-- 					 				</div> -->
<!-- 								</li> -->
								
<!-- 								<li class="comment odd alt depth-2" id="li-comment-2-2"> -->
<!-- 									<div id="comment-3" class="comment-body cf"> -->
<!-- 										<img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />       -->
<!-- 					      				<div class="comment-author vcard">Jhon</div> -->
<!-- 										<div class="comment-meta commentmetadata"> -->
<!-- 					  						<span class="comment-date">1 hour ago  </span> -->
<!-- 										</div> -->
<!-- 					  					<div class="comment-inner"> -->
<!-- 								   			<p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p> -->
<!-- 					     			 	</div> -->
<!-- 					 				</div> -->
<!-- 								</li> -->
								
								
<!-- 							</ul> -->
							<!-- ENDS child -->
<!-- 						</li> -->
						
						
<!-- 						<li class="comment odd thread-even depth-1" id="li-comment-3"> -->
							
<!-- 							<div id="comment-4" class="comment-body cf"> -->
<!-- 						     	<img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />       -->
<!-- 						     	<div class="comment-author vcard">Jhon</div> -->
<!-- 						        <div class="comment-meta commentmetadata"> -->
<!-- 							  		<span class="comment-date">3 days ago  </span> -->
									
<!-- 								</div> -->
<!-- 						  		<div class="comment-inner"> -->
<!-- 							   		<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p> -->
<!-- 						 		</div> -->
<!-- 					     	</div> -->
<!-- 					    </li> -->
					    
					    
					    
					    
					    
<!-- 					    <li class="comment even thread-even depth-1" id="li-comment-4"> -->
							
<!-- 							<div id="comment-5" class="comment-body cf"> -->
<!-- 						     	<img alt='' src='http://0.gravatar.com/avatar/4f64c9f81bb0d4ee969aaf7b4a5a6f40?s=35&amp;d=&amp;r=G' class='avatar avatar-35 photo' height='35' width='35' />       -->
<!-- 						     	<div class="comment-author vcard">Jhon</div> -->
<!-- 						        <div class="comment-meta commentmetadata"> -->
<!-- 							  		<span class="comment-date">3 days ago  </span> -->
									
<!-- 								</div> -->
<!-- 						  		<div class="comment-inner"> -->
<!-- 							   		<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p> -->
<!-- 						 		</div> -->
<!-- 					     	</div> -->
<!-- 					    </li> -->
					    
					    
					    
					    
					   
						
					</ol>
				</div>
				<!-- ENDS comments list -->
					
				<!-- Respond -->				
				<div id="respond">
				
					<h3 id="reply-title">{texto_comments} <small><a rel="nofollow" id="cancel-comment-reply-link" href="/themes/wp-simpler/archives/34#respond" style="display:none;">Cancel reply</a></small></h3>
					
					
					<?php 
					echo form_open('index.php/frontend/{form_name}/comentar' , 'id="commentform"');
					echo form_hidden('id_submit');
// 					?>
<!-- 					<form action="index.php/frontend/single/comentar" method="post" id="commentform"> -->
<!-- 					<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p> -->
					
<!-- 					<p class="comment-form-author"><label for="author">Name<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true"></p> -->
					
<!-- 					<p class="comment-form-email"><label for="email">Email<span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required="true"></p> -->
<!-- 	<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30"></p> -->
					
					<p class="comment-form-comment"><label for="comment">{tipo}</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						
													
					<!-- allowed tags -->
<!-- 					<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						 -->
					<!-- ENDS allowed tags -->
					
					<p class="form-submit">
						<input name="submit" type="submit" id="submit" value="Comentar">
						<input type="hidden" name="hd_id" value="{id}" id="comment_post_ID">
					</p>
					
					<?php 
						echo form_close();
					?>
				</div>
				<!-- ENDS Respond -->
					
					