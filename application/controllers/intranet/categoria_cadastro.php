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
		
		foreach ($c as $key=>$v){
			$campos['dados'][$key]['id_cat'] =		$v->id_cat ;
			$campos['dados'][$key]['nome_cat'] =	$v->nome_cat ;
			$campos['dados'][$key]['fk_id_cat'] =	$v->fk_id_cat ;
		}
// 		echo "<pre>";
// 		echo print_r($campos);
// 		echo "</pre>";
// 				die;
		return $campos;
	}
	
}