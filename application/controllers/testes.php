<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Testes extends CI_Controller{
		
		public function index(){
			$data = array(
				'Titulo' => 'Ambiente de testes',
				'Mensagem' => 'Ola, tudo bem'
			);
			$this->load->view("testes",$data);
		}
	}	
?>