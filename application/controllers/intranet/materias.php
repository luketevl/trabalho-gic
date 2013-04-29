<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$this->load->view('intranet/materias');
		}else{
			redirect('index.php/intranet/login');
		}
	}
}