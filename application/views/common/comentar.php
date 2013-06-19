<div id="comentariosss">
<header>Comentar</header>
		<section>
		<img src="<?php echo base_url()?>resources/img/uploads/<?php echo $this->session->userdata('avatar_usu')?>" width=34px height=34px; style="margin-left:10px;" />
		<?php 
		echo form_fieldset('','class="lblInput" style="width:100%;"');
			echo form_textarea('comentario','','style="width:98%;"');
			echo "<br />";
			echo form_button('salvar','<img  src='. base_url() .'resources/icons/save.png width= 22 height= 22 /> <span></span>','class="tooltip btn btn-large btn-block btn-primary" title="'.lang('btn_apagar').'"');
			echo form_fieldset_close();
		?>
</section>
</div>