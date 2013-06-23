<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller{

	public function index(){
		$data = array('title' => 'Titulo');
		$this->parser->parse('frontend/project',$this->dados_posts());
		
	}
	
	public function dados_posts(){
		$p = new Posts();
		$c = new Categorias();
		$t = new Topicos();
		$u = new Usuarios();
		$i = new Imagens();
		$comen = new Comentarios();
		$p = $p->get_by_id(3);
		$dados['dados'] = array();
		$dados['categorias'] = array();
		foreach($p->all as $k=>$v){
			$dados['dados'][$k]['id_post'] = $v->id_post;
			$id_post = $v->id_post;
			$dados['dados'][$k]['titulo_post'] = $v->titulo_post;
			$dados['dados'][$k]['resumo_post'] = $v->resumo_post;
			$dados['dados'][$k]['conteudo_post'] = $v->conteudo_post;
			$dados['dados'][$k]['img_principal_post'] = $v->img_principal_post;
			$dados['dados'][$k]['id_cat'] = $v->id_cat;
			$c = $c->get_by_id($v->id_cat); 
			$u = $u->get_by_id($v->id_usu);
			$id = $v->id_post;
			$dados['dados'][$k]['usuario'] = $u->nome_usu;
			$dados['dados'][$k]['categoria'] = $c->nome_cat;
			$dados['dados'][$k]['categoria-filter'] =  str_replace(' ','_',$c->nome_cat);
		}
		$i= $i->get_by_idpost($id);
		foreach($i->all as $k=>$v){
			$dados['imagens'][$k]['nome_img'] = $v->nome_img;
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
		foreach($p->all as $k=>$v){
			$dados['posts_recentes'][$k]['id_post'] = $v->id_post;
			$dados['posts_recentes'][$k]['titulo_post'] = $v->titulo_post;
			$dados['posts_recentes'][$k]['img_principal_post'] = $v->img_principal_post;
			$dados['posts_recentes'][$k]['dt_modificacao'] = "lol";
		}	
			
		$t = $t->getAll_filtrado();
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
		$comen = $comen->get_by_id_post($id_post);
		$dados['qtd_comentarios'] = $comen->count_post($v->id_post);
		$dados['id']= $id_post;
		$dados['texto_comments'] = 'Deixe sua Resposta';
		$dados['comen']= array();
		foreach($comen->all as $k=>$v){
			$dados['comen'][$k]['id_coment'] = $v->id_coment;
			$dados['comen'][$k]['dt_criacao'] = $v->dt_criacao;
			$dados['comen'][$k]['comentario_coment'] = $v->comentario_coment;
			$dados['comen'][$k]['id_usu'] = $v->id_usu;
			$u= $u->get_by_id($v->id_usu);
			$dados['comen'][$k]['nome_usuario'] = $u->nome_usu;
			$dados['comen'][$k]['avatar_usu'] = $u->avatar_usu;
			$dados['comen'][$k]['id_post'] = $v->id_post;
			$dados['comen'][$k]['id_top'] = $v->id_top;
			$time = strtotime($v->dt_criacao);
			$agora = time();
			$dados['comen'][$k]['tempo'] = timespan($time,$agora);
		}
		
		return $dados;
	}
	
	public function comentar(){
		$c = new Comentarios();
		$dados = $c->getFields();
		$dados['id_post'] = $this->input->post('hd_id');
		$dados['id_top'] = 0;
		$dados['id_usu'] = $this->session->userdata('id_usu');
		$dados['comentario_coment'] = $this->input->post('comment');
		$c->setFields($dados);
		$c->inserir();
		$this->index();
	}
}
?>