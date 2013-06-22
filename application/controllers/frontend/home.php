<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		$data = array('title' => 'Titulo');
		$this->parser->parse('frontend/home',$this->dados_posts());
		
	}
	
	public function dados_posts(){
		$p = new Posts();
		$c = new Categorias();
		$p = $p->getAll_publicados();
		$dados['dados'] = array();
		$dados['categorias'] = array();
		foreach($p->all as $k=>$v){
			$dados['dados'][$k]['id_post'] = $v->id_post;
			$dados['dados'][$k]['titulo_post'] = $v->titulo_post;
			$dados['dados'][$k]['resumo_post'] = $v->resumo_post;
			$dados['dados'][$k]['img_principal_post'] = $v->img_principal_post;
			$dados['dados'][$k]['id_cat'] = $v->id_cat;
			$c = $c->get_by_id($v->id_cat); 
			$dados['categorias'][$k]['categoria'] = $c->nome_cat;
		}
		return $dados;
	}
}
?>