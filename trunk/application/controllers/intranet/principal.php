<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller{
	
	function index(){
		$data  = array('link' => 'http://google.com' );
		
		$this->parser->parse('intranet/principal',$data);
		
	}
	
}


?>