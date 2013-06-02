<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$p = new Posts();
			$dados = $p->getFields();
			$dados['status'] ="";
			$dados['categoria'] ="";
			$this->lang->load('posts');
			$this->lang->load('upload');
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
	
	public function upload(){
		$config['upload_path'] = './././resources/img/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '10024';
		$config['max_height']  = '1768';
		$this->upload->initialize($config);
		if($this->upload->do_upload('qqfile')){
// 						echo "<pre>";
// 						echo print_r($this->upload->data());
// 						echo "</pre>";
			$msg['success'] = "true";
			$dados = $this->upload->data();
			$msg['full_path'] = $dados['full_path'];
			echo json_encode($msg); 
		}
		else{
						echo "<pre>";
						echo print_r($this->upload->data());
						echo "</pre>";
						echo "erro". $this->upload->display_errors();
		}
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
		$dados_img = $this->upload->data();
		$aux['img_principal_post'] = $dados_img['file_name'];
		$aux['url_youtube'] = $this->input->post('url_youtube');
		$aux['obs_post'] = "";
		$aux['keywords_post'] = $this->input->post('hd_keywords');
		$aux['id_usu_aprovou'] = null; //= $this->session->userdata('id_usu');
		$aux['id_usu'] = $this->session->userdata('id_usu');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		if(empty($aux['id_post'])){
			$aux['status_post'] = ABERTO;
			$p->setFields($aux);
			$p->inserir();
			$p = $p->get_last_id();
			$aux['id_post'] = $p->id_post;
		}
		else{
			$aux['status_post'] = $this->input->post('hd_status');
			$p->setFields($aux);
			$p->editar($aux['id_post']);
		}
		$this->load_form_edit($aux['id_post']);
	}
	
	public function load_form_edit($id=0){
		$this->lang->load('posts');
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		$p = new Posts();
		$p = $p->get_by_id($id);
		$c = new Categorias();
		foreach($p->all as $key=>$valor){
			$dados['id_post'] = $p->id_post					;
			$dados['titulo_post'] = $p->titulo_post					;
			$dados['resumo_post'] = $p->resumo_post					;
			$dados['conteudo_post'] = $p->conteudo_post				;
			$dados['ref_post'] = $p->ref_post					;
			$dados['status_post'] = $p->status_post;
			$dados['status'] = converte_status($dados['status_post']);
			$dados['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($p->dt_criacao));
			$dados['dt_modificacao']= mdate('%d/%m/%Y',human_to_unix($p->dt_modificacao));
			$dados['img_principal_post'] = $p->img_principal_post			;
			$dados['url_youtube']= $p->url_youtube					;
			$dados['obs_post']= $p->obs_post					;
			$dados['keywords_post']= str_replace('|',',',$p->keywords_post);
			$dados['id_usu_aprovou']= $p->id_usu_aprovou				;
			$dados['id_usu']= $p->id_usu						;
			$dados['id_cat']= $p->id_cat;
			$c = $c->get_by_id($p->id_cat);
			$dados['categoria'] = $c->nome_cat;
		}
// 		echo "<pre>";
// 		echo print_r($dados);
// 		echo count($dados);
// 		echo "</pre>";
// 		die;
			$this->parser->parse('intranet/posts_cadastro',$dados);
	}
	
	public function aprovar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id= $this->input->post('hd_id');
		}
		$p = new Posts();
		$id_usu_aprovou = $this->session->userdata('id_usu');
		$p->aprovar($id,$id_usu_aprovou);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/posts_cadastro_list');
		}
	}
	
	public function rejeitar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
		$id= $this->input->post('hd_id');
		}
		$p = new Posts();
		$this->justificar($justificativa,REJEITADO,$id);
		$p->rejeitar($id);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/posts_cadastro_list');
		}
	}

	public function publicar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
		$id= $this->input->post('hd_id');
		}
		$p = new Posts();
		$p->publicar($id);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/posts_cadastro_list');
		}
	}
	
	public function deletar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else {
		$id= $this->input->post('hd_id');
		}
		$p = new Posts();
		$p->deletar($id);
			redirect('index.php/intranet/posts_cadastro_list');
// 		$this->index();
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
	
	public function testeEmail(){
		$config = array(
				'protocol' => 'smtp',
				"newline"			=> "\r\n",
				"smtp_timeout"		=> 30,
				"validate"			=> TRUE,
				"smtp_host"			=> 'smtp.gmail.com',
				"smtp_port"			=> '465',
				"smtp_user"			=> 'lukete@gmail.com',
				"smtp_pass"			=> 'keporra157',
				"mailtype"			=> 'text',
		);
		$this->email->initialize($config);
		$this->email->from('luketevl@gmail.com');
		$this->email->to('luketevl@gmail.com');
		$this->email->subject('CABULOSO');
		$this->email->message('TRABA');
		if (!@$this->email->send()){
			echo "nao";
		}
	}
}