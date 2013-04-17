<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_cadastro extends CI_Controller {
	
	public function index(){
		$data = array ('teste' => 'atoa');
		$p = new Perfis();
		$this->parser->parse('intranet/perfil_cadastro',$data);
	}
	
	public function save(){
		$dados = array(
			'id_perf' 	     => null, 
			'nome_perf'	 	 => ($this->input->post('nome')),
			'funcoes_perf'	 => ($this->input->post('ck_criar') . $this->input->post('ck_aprovar') .$this->input->post('ck_alterar').$this->input->post('ck_apagar')),
			'acesso_perf'	 => ($this->input->post('ck_criar') . $this->input->post('ck_aprovar') .$this->input->post('ck_alterar').$this->input->post('ck_apagar'))
		);
        print_r($dados);
        die;
		if($this->perfil_dados($dados)){
			redirect('welcome');	
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */