<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Social extends CI_Controller{

	public function index(){
		$data = array('title' => 'Titulo');
		$this->parser->parse('common/social',$data);
	}

}



?>