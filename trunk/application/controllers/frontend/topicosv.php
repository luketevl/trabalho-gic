<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topicosv extends CI_Controller{

	public function index(){
		$data = array('title' => 'Titulo');
		$this->parser->parse('frontend/topicos',$this->dados_topicos());
	}
	public function dados_topicos(){
		$p = new Posts();
		$c = new Categorias();
		$t = new Topicos();
		$u = new Usuarios();
		$comen = new Comentarios();
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
			$dados['dados'][$k]['categoria'] = $c->nome_cat;
			$dados['dados'][$k]['categoria-filter'] =  str_replace(' ','_',$c->nome_cat);
		}
		$cTemp = $c->get_vinculados_publicados();
		foreach($cTemp->all as $k=>$v){
			$c = $c->get_by_id($v->id_cat);
			$dados['categorias'][$k]['categoria'] = $c->nome_cat;
			$dados['categorias'][$k]['categoria-filter'] =  str_replace(' ','_',$c->nome_cat);
		}
		$dados['categorias-footer'] = array();
		$dados['categorias-footer'] = $dados['categorias'];
		
		$p = $p->getAll_publicados_filtrado();
		$dados['posts_recentes'] = array();
		foreach($p->all as $k=>$v){
			$dados['posts_recentes'][$k]['id_post'] = $v->id_post;
			$dados['posts_recentes'][$k]['titulo_post'] = $v->titulo_post;
			$dados['posts_recentes'][$k]['img_principal_post'] = $v->img_principal_post;
			$dados['posts_recentes'][$k]['dt_modificacao'] = "lol";
		}	
			
		$t = $t->getAll_filtrado();
		$dados['topicos_recentes'] = array();
		foreach($t->all as $k=>$v){
			$dados['topicos_recentes'][$k]['id_top'] = $v->id_top;
			$dados['topicos_recentes'][$k]['nome_top'] = $v->nome_top;
			$dados['topicos_recentes'][$k]['resumo_top'] = $v->resumo_top;
			$dados['topicos_recentes'][$k]['dt_criacao'] = "lol";
			$dados['topicos_recentes'][$k]['id_usu'] = $v->id_usu;
			$u= $u->get_by_id($v->id_usu);
			$dados['topicos_recentes'][$k]['usuario'] = $u->nome_usu;
			$dados['topicos_recentes'][$k]['avatar_usu'] = $u->avatar_usu;
		}
		
		
		$t = $t->getAll();
		$dados['topicos'] = array();
		foreach($t->all as $k=>$v){
			$dados['topicos'][$k]['id_top'] = $v->id_top;
			$dados['topicos'][$k]['nome_top'] = $v->nome_top;
			$dados['topicos'][$k]['resumo_top'] = $v->resumo_top;
			$datas = explode('-',$v->dt_criacao);
			$datas = explode(' ',$datas[2]);
			
			$dados['topicos'][$k]['dt_criacao'] = $datas[0]; 
			$dados['topicos'][$k]['id_usu'] = $v->id_usu;
			$u= $u->get_by_id($v->id_usu);
			$dados['topicos'][$k]['usuario'] = $u->nome_usu;
			$dados['topicos'][$k]['avatar_usu'] = $u->avatar_usu;
			$dados['topicos'][$k]['qtd_comentarios'] = $comen->count_top($v->id_top);
		}		
		
		return $dados;
	}
}
?>