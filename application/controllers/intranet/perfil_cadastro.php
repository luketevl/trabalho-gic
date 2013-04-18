<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_cadastro extends CI_Controller {
	
	public function index(){
        $data = array();
		$this->parser->parse('intranet/perfil_cadastro',$data);
	}
	
	public function save(){
		$p = new Perfis();
		$campos = $p->getFields();    
		$campos['id_perf']            = $this->input->post('hd_id');
		$campos['nome_perf']          = ($this->input->post('nome'));
        $campos['funcoes_perf']	      = ($this->input->post('ck_criar') . $this->input->post('ck_aprovar') .$this->input->post('ck_alterar').$this->input->post('ck_apagar'));
		$campos['acesso_perf']    	  = ($this->input->post('ck_perfil') . $this->input->post('ck_users') .$this->input->post('ck_posts'));
		$campos['editavel']           = $this->input->post('hd_editavel');
	    $p->setFields($campos);
        if(empty($campos['id_perf'])){
        	$p->inserir();
            echo "nao existe";
			redirect('index.php/intranet/perfil_cadastro');	
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/perfil_cadastro.php */