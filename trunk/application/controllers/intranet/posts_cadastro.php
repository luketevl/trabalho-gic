<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$p = new Posts();
			$dados = $p->getFields();
			$this->parser->parse('intranet/posts_cadastro',$dados);
		}else{
			redirect('index.php/intranet/login');
		}
	}

	public function get_ckeditor_content(){
		$value = $this->input->post('editor1');
		if ( get_magic_quotes_gpc() ){
			$value = htmlspecialchars( stripslashes((string)$value) );
		}
		else{
			$value = htmlspecialchars( (string)$value );
		}
		return $value;
	}
	
	public function save(){
		$p = new Posts();
		$aux = $p->getFields();
		$aux['id_post'] = $this->input->post('hd_id');
		$aux['titulo_post'] = $this->input->post('titulo');
		$aux['resumo_post'] = $this->input->post('desc_resumida');
		$aux['conteudo_post'] = $this->get_ckeditor_content();
		$aux['ref_post'] = $this->input->post('referencias');
		
		$aux['dt_criacao'] = unix_to_human(time(), TRUE, 'us');
		$aux['dt_modificacao']= null;
		$aux['img_principal_post'] = $this->input->post('');
		$aux['url_youtube'] = $this->input->post('url_youtube');
		$aux['obs_post'] = $this->input->post('');
		$aux['keywords_post'] = $this->input->post('hd_keywords');
		
		$aux['id_usu_aprovou'] = $this->session->userdata('id_usu');
		$aux['id_usu'] = $this->session->userdata('id_usu');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		
		$p->setFields($aux);
		if($aux['id_post']>0){
			$p->inserir();
			$aux['status_post'] = ABERTO;
		}
		else{
			$aux['status_post'] = $this->input->post('hd_status');
			$p->editar($aux['id_post']);
		}
	}
	
	public function load_form_edit($id=1){
		$p = new Posts();
		$p = $p->get_by_id($id);
		foreach($p->all as $key=>$valor){
			$dados['id_post'] = $p->id_post					;
			$dados['titulo_post'] = $p->titulo_post					;
			$dados['resumo_post'] = $p->resumo_post					;
			$dados['conteudo_post'] = $p->conteudo_post				;
			$dados['ref_post'] = $p->ref_post					;
			$dados['status_post'] = $p->status_post					;
			$dados['dt_criacao'] = $p->dt_criacao;
			$dados['dt_modificacao']= $p->dt_modificacao			;
			$dados['img_principal_post'] = $p->img_principal_post			;
			$dados['url_youtube']= $p->url_youtube					;
			$dados['obs_post']= $p->obs_post					;
			$dados['keywords_post']= $p->keywords_post				;
			$dados['id_usu_aprovou']= $p->id_usu_aprovou				;
			$dados['id_usu']= $p->id_usu						;
			$dados['id_cat']= $p->id_cat								;
		}
// 		echo "<pre>";
// 		echo print_r($dados);
// 		echo count($dados);
// 		echo "</pre>";
// 		die;
		$this->parser->parse('intranet/posts_cadastro',$dados);
	}
}