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
		
		$config['upload_path'] = './././resources/img/uploads/';
		echo $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '10024';
		$config['max_height']  = '1768';
		$this->upload->initialize($config);
		if($this->upload->do_upload()){
			echo "<pre>";
			echo print_r($this->upload->data());
			echo "</pre>";
			echo "sem erro". $this->upload->display_errors();
		}
		else{
			echo "<pre>";
			echo print_r($this->upload->data());
			echo "</pre>";
			echo "erro". $this->upload->display_errors();
		}
		
		$p = new Posts();
		$aux = $p->getFields();
		$aux['id_post'] = $this->input->post('hd_id');
		$aux['titulo_post'] = $this->input->post('titulo');
		$aux['resumo_post'] = $this->input->post('desc_resumida');
		$aux['conteudo_post'] = $this->get_ckeditor_content();
		$aux['ref_post'] = $this->input->post('referencias');
		$aux['dt_criacao'] = unix_to_human(time(), TRUE, 'us');
		$aux['dt_modificacao']= null;
		$dados_img = $this->upload->data();
		$aux['img_principal_post'] = $dados_img['file_name'];
		$aux['url_youtube'] = $this->input->post('url_youtube');
		$aux['obs_post'] = "";
		$aux['keywords_post'] = $this->input->post('hd_keywords');
		
		$aux['id_usu_aprovou'] = $this->session->userdata('id_usu');
		$aux['id_usu'] = $this->session->userdata('id_usu');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		$p->setFields($aux);
		if(empty($aux['id_post'])){
			$p->inserir();
			$aux['status_post'] = ABERTO;
			$p = $p->get_last_id();
			$aux['id_post'] = $p->id_post;
		}
		else{
			$aux['status_post'] = $this->input->post('hd_status');
			$p->editar($aux['id_post']);
		}
		$this->load_form_edit($aux['id_post']);
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
			$dados['keywords_post']= str_replace('|',',',$p->keywords_post);
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
	
	public function aprovar($id){
		$p = new Posts();
		$this->justificar($justificativa,APROVADO,$id);
		$p->aprovar($this->form->input('hd_id'));
	}
	
	public function rejeitar($id){
		$p = new Posts();
		$this->justificar($justificativa,REJEITADO,$id);
		$p->rejeitar($this->form->input('hd_id'));
	}
	
	public function justificar($justificativa,$status,$id_post){
		$h = new Historicos();
		$aux = $h->getFields();
		$aux['descricao_hist'] = $justificativa;
		$aux['status'] = $status;
		$aux['id_post'] = $id_post;
		$h->setFields($aux);
		$h->inserir();
	}
}