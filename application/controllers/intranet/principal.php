<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{
	
	function index(){
		$this->lang->load('menu');
		$this->lang->load('principal');
		$menu = array('principal' 	=> array('url' => base_url().'index.php/intranet/principal' ,
											 'name' => $this->lang->line('principal')),
				
					  'usuarios'	=> array('url' =>base_url().'index.php/intranet/usuarios_cadastro_list',
					  						 'name' => $this->lang->line('usuarios')),
				
					  'categorias'		=> array('url' =>base_url().'index.php/intranet/categorias_cadastro_list',
					  						 'name' =>$this->lang->line('categorias')),

					  'perfil'		=> array('url' =>base_url().'index.php/intranet/perfil_cadastro_list',
					  						 'name' =>$this->lang->line('perfil')),
					  		
					  'posts'	=> array('url' =>base_url().'index.php/intranet/posts_cadastro_list',
					  						 'name' => $this->lang->line('posts')),
				'tp_posts'		=> $this->lang->line('tp_posts')
				);
		$p = new Perfis();
		$u = new Usuarios();
		$u = $u->get_by_id($this->session->userdata('id_usu'));
		$p = $p->get_by_id($this->session->userdata('id_perf'));
		if($this->session->userdata('avatar_usu')=='0'){
				$dados['avatar_usu'] = 'no_avatar.png';
		}
		else{
			$dados['avatar_usu'] = $u->avatar_usu;
		}
		$this->session->set_userdata($dados['avatar_usu']);
		$menu['perfil_usu'] = $p->nome_perf;
		$menu = array_merge($menu, $dados);
		$this->parser->parse('intranet/principal',$menu);
	}
}
?>