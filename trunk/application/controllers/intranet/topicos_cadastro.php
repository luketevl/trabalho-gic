<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topicos_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$t = new Topicos();
			$dados = $t->getFields();
			$dados['status'] ="";
			$dados['usu_criou'] ="";
			$dados['usu_aprovou'] ="";
				
			$dados['categoria'] ="";
			$this->lang->load('posts');
			$this->lang->load('upload');
			$dados['urls'] = array();
			$this->parser->parse('intranet/topicos_cadastro',$dados);
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
		$config['allowed_types'] = 'jpeg|bmp|gif|jpg|png';
		// 		$config['max_size']	= '10000';
		// 		$config['max_width']  = '10024';
		// 		$config['max_height']  = '1768';
		$this->upload->initialize($config);
		// 		echo "<pre>"; echo print_r($_FILES); echo "</pre>";
		// 		echo "<pre>". "GET"; echo print_r($_GET); echo "</pre>";
		// 		echo "<pre>". "POST"; echo print_r($_POST); echo "</pre>";die;
		$id_post = $_GET['id_post'];
		if($this->upload->do_upload('qqfile')){
			$img = new Imagens();
			$dados = $img->getFields();
			$dadosImg = $this->upload->data();
			$dados['nome_img'] = $dadosImg['file_name'];
			$dados['id_post'] = $id_post;
			// FALTA ID DO POST
			$img->setFields($dados);
			$img->insert();
			$msg['success'] = "true";
			$msg['full_path'] = $dadosImg['full_path'];
			// 						echo "<pre>";
			// 						echo print_r($dadosImg);
			// 						echo "</pre>";
			echo json_encode($msg);
		}
		else{
			echo "<pre>";
			echo print_r($this->upload->data());
			echo "</pre>";
			echo "erro". $this->upload->display_errors();
		}
	}

	public function uploadArq(){
		$config['upload_path'] = './././resources/arquivos/uploads/';
		$config['allowed_types'] = '*';
		// 		$config['max_size']	= '10000';
		// 		$config['max_width']  = '10024';
		// 		$config['max_height']  = '1768';
		$this->upload->initialize($config);
		// 		echo "<pre>"; echo print_r($_FILES); echo "</pre>";
		// 		echo "<pre>". "GET"; echo print_r($_GET); echo "</pre>";
		// 		echo "<pre>". "POST"; echo print_r($_POST); echo "</pre>";die;
		$id_post = $_GET['id_post'];
		if($this->upload->do_upload('qqfile')){
			$arq = new Arquivos();
			$dados = $arq->getFields();
			$dadosArq = $this->upload->data();
			$dados['nome_arq'] = $dadosArq['file_name'];
			$dados['id_post'] = $id_post;
			// FALTA ID DO POST
			$arq->setFields($dados);
			$arq->insert();
			$msg['success'] = "true";
			$msg['full_path'] = $dadosArq['full_path'];
			// 						echo "<pre>";
			// 						echo print_r($dadosArq);
			// 						echo "</pre>";
			echo json_encode($msg);
		}
		else{
			echo "<pre>";
			echo print_r($this->upload->data());
			echo "</pre>";
			echo "erro". $this->upload->display_errors();
		}
	}

	public function delete_file(){

	}

	public function save(){

		$t = new Topicos();
		$aux = $t->getFields();

		$aux['id_post'] = $this->input->post('hd_id');
		$aux['titulo_post'] = $this->input->post('titulo');
		$aux['resumo_post'] = $this->input->post('desc_resumida');
		$aux['conteudo_post'] = $this->get_ckeditor_content();
		$aux['ref_post'] = $this->input->post('referencias');
		$aux['dt_criacao'] = unix_to_human(time(), TRUE, 'us');
		$aux['dt_modificacao']= null;
		$dados_img = $this->upload->data();
		$aux['img_principal_post'] = $dados_img['file_name'];
		$aux['obs_post'] = "";
		$aux['keywords_post'] = $this->input->post('hd_keywords');
		$aux['id_usu_aprovou'] = null; //= $this->session->userdata('id_usu');
		$aux['id_usu'] = $this->session->userdata('id_usu');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		$aux['url_youtube'] = $this->input->post('url_youtube');
		$extras['url_youtube_varios'] = $this->input->post('url_youtube_varios');
		if(empty($aux['id_post'])){
			$aux['status_post'] = ABERTO;
			$t->setFields($aux);
			$t->inserir();
			$t = $t->get_last_id();
			$aux['id_post'] = $t->id_post;
		}
		else{
			$aux['status_post'] = $this->input->post('hd_status');
			$t->setFields($aux);
			$t->editar($aux['id_post']);
		}
		$v = new Videos();
		$dadosVideo = $v->getFields();
		$dadosVideo['id_post'] = $aux['id_post'];
		if(is_array($extras['url_youtube_varios'])){
			foreach($extras['url_youtube_varios'] as $k=>$valor){
				if(!empty($valor)){
					$dadosVideo['url_vid'] = $valor;
					$v->setFields($dadosVideo);
					if(!$v->verifica_url_post($valor)){
						$v->insert();
					}
				}
			}
		}
		$this->load_form_edit($aux['id_post']);
	}

	public function load_form_edit($id=0){
		$this->lang->load('posts');
		$this->lang->load('upload');
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		$t = new Topicos();
		$t = $t->get_by_id($id);
		$u = new Usuarios();
		$v = new Videos();
		$v = $v->get_by_idpost($id);
		$c = new Categorias();
		$i = new Imagens();
		$i = $i->get_by_idpost($id);
		$a = new Arquivos();
		$a = $a->get_by_idpost($id);
		foreach($t->all as $key=>$valor){
			$dados['id_post'] = $t->id_post;
			$dados['titulo_post'] = $t->titulo_post;
			$dados['resumo_post'] = $t->resumo_post;
			$dados['conteudo_post'] = $t->conteudo_post;
			$dados['ref_post'] = $t->ref_post;
			$dados['status_post'] = $t->status_post;
			$dados['status'] = converte_status($dados['status_post']);
			$dados['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($t->dt_criacao));
			$dados['dt_modificacao']= mdate('%d/%m/%Y',human_to_unix($t->dt_modificacao));
			$dados['img_principal_post'] = $t->img_principal_post			;
			$dados['url_youtube']= $t->url_youtube;
			$dados['obs_post']= $t->obs_post;
			$dados['keywords_post']= str_replace('|',',',$t->keywords_post);
			$dados['id_usu_aprovou']= $t->id_usu_aprovou;
			$u = $u->get_by_id($t->id_usu_aprovou);
			$dados['usu_aprovou']= $u->nome_usu;
			$u = $u->get_by_id($t->id_usu);
			$dados['usu_criou']= $u->nome_usu;
				
			$dados['id_usu']= $t->id_usu;
			$dados['id_cat']= $t->id_cat;
			$c = $c->get_by_id($t->id_cat);
			$dados['categoria'] = $c->nome_cat;
		}
		$dados['urls'] = array();
		foreach($v as $k=>$valor){
			$dados['urls'][$k]['url'] = $valor->url_vid;
			$dados['urls'][$k]['id_vid'] =$valor->id_vid;
		}

		$dados['imagens'] = array();
		foreach($i as $ke=>$valor){
			$dados['imagens'][$ke]['nome_img'] = $valor->nome_img;
			$dados['imagens'][$ke]['id_img'] =$valor->id_img;
		}

		$dados['arquivos'] = array();
		foreach($a as $ke=>$valor){
			$dados['arquivos'][$ke]['nome_arq'] = $valor->nome_arq;
			$dados['arquivos'][$ke]['id_arq'] =$valor->id_arq;
		}
		// 		echo "<pre>";
		// 		echo print_r($i);
		// 		echo count($dados);
		// 		echo "</pre>";
		// 		die;
		$this->parser->parse('intranet/topicos_cadastro',$dados);
	}

	public function aprovar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id= $this->input->post('hd_id');
		}
		$t = new Topicos();
		$id_usu_aprovou = $this->session->userdata('id_usu');
		$t->aprovar($id,$id_usu_aprovou);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/topicos_cadastro_list');
		}
	}

	public function rejeitar($id=0){
		$t = new Topicos();
		$t->rejeitar($id);
	}

	public function publicar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
			$id= $this->input->post('hd_id');
		}
		$t = new Topicos();
		$t->publicar($id);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/topicos_cadastro_list');
		}
	}

	public function deletar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else {
			$id= $this->input->post('hd_id');
		}
		$t = new Topicos();
		$i = new Imagens();
		$v = new Videos();
		$a = new Arquivos();
		$h = new Historicos();
		$t->deletar($id);
		$i->deletar($id);
		$v->deletar($id);
		$a->deletar($id);
		$h->deletar($id);
		redirect('index.php/intranet/topicos_cadastro_list');
		// 		$this->index();
	}



	public function telaJustificar(){
		$list=0;
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
			$list = 1;
		}
		else{
			$id= $this->input->post('hd_id');
		}
		$dados['id'] = $id;
		$dados['list'] = $list;
		$this->lang->load('posts');
		$this->parser->parse('intranet/justificativa',$dados);
	}
	public function justificar(){
		$h = new Historicos();
		$aux = $h->getFields();
		$aux['descricao_hist'] = $this->input->post('justificativa');
		$aux['status'] = REJEITADO;
		$aux['id_post'] = $this->input->post('hd_id');
		$h->setFields($aux);
		$h->inserir();
		$this->rejeitar($aux['id_post']);
		if($this->input->post('listagem')!="1"){
			$this->load_form_edit($aux['id_post']);
		}
		else{
			redirect('index.php/intranet/topicos_cadastro_list');
		}
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
				"smtp_pass"			=> '',
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