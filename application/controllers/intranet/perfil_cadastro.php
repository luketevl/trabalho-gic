<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_cadastro extends CI_Controller {
	
	public function index(){
        $data = array();
// 		$this->parser->parse('intranet/perfil_cadastro',$data);
		$this->load_form_edit();
	}
	
	public function save(){
		$p = new Perfis();
		$campos = $p->getFields();   
		$campos['id_perf']            = $this->input->post('hd_id');
		$campos['nome_perf']          = trim($this->input->post('nome'));
        $campos['funcoes_perf']	      = ($this->input->post('ck_criar')	 	.	 
        								$this->input->post('ck_aprovar')	.
        								$this->input->post('ck_alterar')	.
        								$this->input->post('ck_apagar'));
		$campos['acesso_perf']    	  = ($this->input->post('ck_perfil') 	.
										$this->input->post('ck_users') 		.
										$this->input->post('ck_posts')		);
		$campos['editavel']           = $this->input->post('hd_editavel');
	    $p->setFields($campos);
        if(empty($campos['id_perf'])){
        	$p->inserir();
        }
        else{
        	$p->editar($campos["id_perf"]);
        	
        }
			redirect('index.php/intranet/perfil_cadastro');	
	}
	
	public function load_form_edit($id=2){
		$p = new Perfis();
		$p = $p->get_by_id($id);
		$campos = array();
		foreach($p as $key=>$v){
			$campos['id_perf'] 		= $id;
			$campos['nome_perf'] 	= $v->nome_perf;
			$campos['funcoes_perf'] = $v->funcoes_perf;
			$campos['acesso_perf'] 	= $v->acesso_perf;
			$campos['editavel'] 	= $v->editavel;
		}
		$this->parser->parse('intranet/perfil_cadastro',$campos);		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/perfil_cadastro.php */