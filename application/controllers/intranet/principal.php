<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{
	
	function index(){
		$this->lang->load('menu');
		$this->lang->load('principal');
		$menu = array('principal' 	=> array('url' => base_url().'index.php/intranet/principal' ,
											 'name' => $this->lang->line('principal')),
				
					  'usuarios'	=> array('url' =>base_url().'index.php/intranet/usuarios_cadastro_list',
					  						 'name' => $this->lang->line('usuarios')),
				
					  'perfil'		=> array('url' =>base_url().'index.php/intranet/perfil_cadastro_list',
					  						 'name' =>$this->lang->line('perfil')),
					  		
					  'posts'	=> array('url' =>base_url().'index.php/intranet/posts_cadastro_list',
					  						 'name' => $this->lang->line('posts')),
				'tp_posts'		=> $this->lang->line('tp_posts')
				);
		$this->load->view('intranet/principal',$menu);
	}
}
?>