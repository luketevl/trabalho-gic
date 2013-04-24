<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{
	
	function index(){
		$menu = array('principal' 	=> base_url().'index.php/intranet/principal',
					  'usuarios'	=> base_url().'index.php/intranet/usuarios_cadastro_list',
					  'perfil'		=> base_url().'index.php/intranet/perfil_cadastro_list',
					  'materias'	=> base_url().'index.php/intranet/materias_cadastro_list'
				);
		$this->load->view('intranet/principal',$menu);
	}
}
?>