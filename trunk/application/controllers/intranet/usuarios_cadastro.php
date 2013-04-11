<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_cadastro extends CI_Controller {
	
	public $data = array(
		'nome' => 'a'
	);
	
	public function index(){
		$data = array ('teste' => 'atoa');
		$this->parser->parse('intranet/usuarios_cadastro',$data);
	}
	
	public function save(){
		echo $GLOBALS ($data['nome']) ;
		echo $a = "Merda";
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */