<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	
	function index(){
		if($this->login_permission->is_logado()){
			redirect('index.php/intranet/principal');
		}else{
			$this->load->view('intranet/login');
		}
	}
	
	public function cadastrar(){
		$u = new Usuarios();
		$dados = array( 'nome_usu'			=> $this->input->post('nome') , 
						'email_usu'			=> $this->input->post('email'), 
						'pass_usu'			=> $this->input->post('senha'),
						'dt_nascimento'		=> $this->input->post('dp_nascimento'),
						'avatar_usu'		=> $this->input->post('img_avatar'),
						'id_perf'			=> $this->input->post('id_perf')
					  );
		
		$aux2 = $this->verifica_dados_usuario($dados); 
		if(!$aux2){
		
			$u->inserir($dados);
			$this->logar($dados);
			
			
		}
	}
	
	public function entrar(){
		$u = new Usuarios();
		$dados = array( 'email_usu'	=> $this->input->post('email'),
						'pass_usu'	=> $this->input->post('senha'),
		);
		$aux = $this->verifica_dados_usuario($dados);
		if(!$aux){
			echo 'Nao cadastrado';
		}
		else{
			$this->logar($aux);
		}
	}
	
	public function deslogar(){
		$this->session->sess_destroy();
		redirect('index.php/intranet/login');
	}
	
	
	public function logar($result){
			$this->session->set_userdata($result);
			redirect('index.php/intranet/principal');
	}
	
	public function verifica_dados_usuario($dados){
		$u = new Usuarios();
		$u = $u->verifica_usuario($dados['email_usu'],$dados['pass_usu']);
		$result = $this->dados_usuario($u);
		if(empty($result)){
			return false;
		}
		else{
			return $result;
		}
	}
	
	public function dados_usuario($u){
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
		return $result;
	}
}
