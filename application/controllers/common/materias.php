<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias extends CI_Controller{

	public function index(){
		$this->load();
	}
	
	public function trata_dados($filtro=true,$keys_words){
		$p = new Posts();
		$c = new Categorias();
		if($filtro){
			$p = $p->getAll_publicados();
		}else{
			$p  = $p->get_by_key($keys_words);
		}
		$dados['dados']=array();
		foreach($p as $key => $posts){
			$dados['dados'][$key]['id_post'] = $posts->id_post					;
			$dados['dados'][$key]['titulo_post'] = $posts->titulo_post					;
			$dados['dados'][$key]['resumo_post'] = $posts->resumo_post					;
			$dados['dados'][$key]['conteudo_post'] = $posts->conteudo_post				;
			$dados['dados'][$key]['ref_post'] = $posts->ref_post					;
			$dados['dados'][$key]['status_post'] = $posts->status_post				;
			$dados['dados'][$key]['status'] = converte_status($dados['dados'][$key]['status_post']);
			$dados['dados'][$key]['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($posts->dt_criacao));
			$dados['dados'][$key]['dt_modificacao'] = (!empty($posts->dt_modificacao))?mdate('%d/%m/%Y',human_to_unix($posts->dt_modificacao)): "";
			
			$dados['dados'][$key]['img_principal_post'] = (empty($posts->img_principal_post))?'no_img.png':$posts->img_principal_post;
			
			$dados['dados'][$key]['url_youtube']= $posts->url_youtube					;
			$dados['dados'][$key]['obs_post']= $posts->obs_post					;
			$dados['dados'][$key]['keywords_post']= str_replace('|',',',$posts->keywords_post);
			$dados['dados'][$key]['id_usu_aprovou']= $posts->id_usu_aprovou				;
			$dados['dados'][$key]['id_usu']= $posts->id_usu;
			$c = $c->get_by_id($posts->id_cat);
			$dados['dados'][$key]['categoria']= $c->nome_cat;
			// 			$dados['dados'][$key]['id_cat']= $posts->id_cat;
		}
		return $dados;
	}
	
	public function load(){
		$this->parser->parse('common/materias',$this->trata_dados(true,''));
	}
}
?>