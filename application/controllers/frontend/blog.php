<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller{

	public function index(){
		$data = array('title' => 'Titulo');
		$this->parser->parse('frontend/blog',$data);
	}
}
?>