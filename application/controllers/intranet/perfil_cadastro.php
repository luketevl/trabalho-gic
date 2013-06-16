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
        	$p->editar($campos['id_perf']);
        }
			redirect('index.php/intranet/perfil_cadastro');	
	}
	
	public function load_form_edit($id=0){
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
	
	public function delete($id){
		$p = new Perfis();
		$p->delete($id);
		redirect('index.php/intranet/perfil_cadastro_list');
		
	}
	
	
	public function au_get_by_name(){
		$p = new Perfis();
		$p = $p->get_by_nome($_GET['term']);
		$result = array();
		$result=$this->func_array($p);
	
		// 		echo "<pre>";
		// 		echo print_r($result);
		// 		echo "</pre>";
	
		echo json_encode($result);
	}
	
	private function func_array(Perfis $p){
		$campos= array();
		// 		$campos = array(	array(
		// 											'id_cat'   		=>$c->id_cat ,
		// 											'nome_cat'  	=>$c->nome_cat ,
		// 											'fk_id_cat' 	=>$c->fk_id_cat
		// 										  ),
			
		// 				array(
		// 											'id_cat'   		=>$c->id_cat ,
		// 											'nome_cat'  	=>$c->nome_cat ,
		// 											'fk_id_cat' 	=>$c->fk_id_cat
		// 							  )
		// 				);
	
		foreach ($p as $key=>$v){
			$campos['dados'][$key]['id_perf'] =		$v->id_perf ;
			$campos['dados'][$key]['nome_perf'] =	$v->nome_perf ;
		}
		// 		echo "<pre>";
		// 		echo print_r($campos);
		// 		echo "</pre>";
		// 				die;
		return $campos;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/perfil_cadastro.php */