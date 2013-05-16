<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Categoria_Cadastro extends CI_Controller{
	public function index(){
		$this->load->view('intranet/categoria_cadastro');
	}
	
	public function au_get_by_name(){
		$c = new Categorias();
		$c = $c->get_by_nome($_GET['term']);
		$result = array();
		$result=$this->func_array($c);
		
// 		echo "<pre>";
// 		echo print_r($result);
// 		echo "</pre>";

		echo json_encode($result);
	}
	
	
	
	private function func_array(Categorias $c){
		$campos = array(	array(
											'id'   		=>$c->id_cat ,
											'label'  	=>$c->nome_cat ,
											'fk_id_cat' 	=>$c->fk_id_cat
										  ),
									
				array(	
											'id_cat'   		=>$c->id_cat ,
											'label'  	=>$c->nome_cat ,
											'fk_id_cat' 	=>$c->fk_id_cat
							  )
				);
		return $campos;
	}
	
}