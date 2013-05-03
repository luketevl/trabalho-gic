<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Categoria_Cadastro extends CI_Controller{
	public function index(){
		$this->load->view('intranet/categoria_cadastro');
	}
	
	public function au_get_all(){
		$c = new Categorias();
		$c = $c->getAll();
		$result = array();
		$result=$this->func_array($c);
		
// 		echo "<pre>";
// 		echo print_r(json_encode($result));
// 		echo "</pre>";die;
		echo json_encode($result);
	}
	
	private function func_array(Categorias $c){
		$campos = array(	
							'id_cat'   		=>$c->id_cat ,
							'value'  	=>$c->nome_cat ,
							'fk_id_cat' 	=>$c->fk_id_cat
					
		);
		return $campos;
		
	}
	
}