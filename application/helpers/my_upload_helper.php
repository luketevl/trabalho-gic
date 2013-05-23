<?php
		$config['upload_path'] = './resources/img/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
	
		if(!function_exists('do_upload')){
			function do_upload(){
				if($this->upload->do_upload()){
					echo "erro";die;
				}
				else{
					echo "deu";
				}
			}
	}