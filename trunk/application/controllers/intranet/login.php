<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	function index(){
		$this->load->view('intranet/login');
		echo $this->session->userdata('ip_address');
	}
	
	public function verifica(){
		$u = new Usuarios();
		$dados = array( 'nome_usu'		=> $this->input->post('nome') , 
						'email_usu'		=> $this->input->post('email'), 
						'pass'			=> $this->input->post('senha')
					  );
		$u = $u->get_by_id($dados['email_usu']);
		$result = array();
		foreach($u as $key=>$val){
			$result['id_usu']			= $u->id_usu;
			$result['nome_usu']			= $u->nome_usu;
			$result['email_usu']		= $u->email_usu;
			$result['dt_criacao']		= $u->dt_criacao;
			$result['dt_nascimento']	= $u->dt_nascimento;
			$result['avatar_usu']		= $u->avatar_usu;
			$result['id_perf']			= $u->id_perf;
		}
		if(empty($result)){
			
		}
		else{
			$this->session->set_userdata($result);
			redirect('index.php/intranet/principal');
		}
	}
	
	public function deslogar(){
		$this->session->sess_destroy();
		redirect('index.php/intranet/login');
	}
	
}
