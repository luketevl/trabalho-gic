<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_cadastro extends CI_Controller {
	
	public function index(){
		$data = array ('teste' => 'atoa');
		$this->parser->parse('intranet/usuarios_cadastro',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */