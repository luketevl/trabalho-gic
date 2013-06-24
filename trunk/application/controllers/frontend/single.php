<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Single extends CI_Controller{

	public function index($id=0){
		$data = array('title' => 'Titulo');
		$this->parser->parse('frontend/single',$this->dados_topicos($id));
	}
	public function dados_topicos($idveio=0){
		if($idveio > 0){
			$idp = $idveio;
		}
		else{
			$idp = $this->input->post('id_submit');
		}
		$p = new Posts();
		$c = new Categorias();
		$t = new Topicos();
		$u = new Usuarios();
		$comen = new Comentarios();
		$p = $p->getAll_publicados();
		$dados['dados'] = array();
		$dados['categorias'] = array();
		$id = $idp;
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
		
		
		$t = $t->get_by_id($idp);
		$id_top = $idp;
		foreach($t->all as $k=>$v){
			$dados['topicos'][$k]['id_top'] = $v->id_top;
			$id_top = $v->id_top;
			$dados['topicos'][$k]['nome_top'] = $v->nome_top;
			$dados['topicos'][$k]['resumo_top'] = $v->resumo_top;
			$datas = explode('-',$v->dt_criacao);
			$datas = explode(' ',$datas[2]);
			$dados['topicos'][$k]['dt_criacao'] = $datas[0]; 
			$dados['topicos'][$k]['id_usu'] = $v->id_usu;
			$u= $u->get_by_id($v->id_usu);
			$dados['topicos'][$k]['usuario'] = $u->nome_usu;
			$dados['topicos'][$k]['avatar_usu'] = $u->avatar_usu;
		}		
		
		$comen = $comen->get_by_id_top($id_top); 
			$dados['qtd_comentarios'] = $comen->count_top($v->id_top);
			$dados['id']= $id_top;
			$dados['texto_comments'] = 'Deixe sua Resposta';
			$dados['form_name'] = 'single';
			$dados['tipo'] = 'Respostas';
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
		$dados['id_top'] = $this->input->post('hd_id');
		$dados['id_post'] = 0;
		$dados['id_usu'] = $this->session->userdata('id_usu');
		$dados['comentario_coment'] = $this->input->post('comment');
		$c->setFields($dados);
		$c->inserir();
		$this->index($dados['id_top']);
	}
}
?>