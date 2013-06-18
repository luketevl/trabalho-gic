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

		$aux['id_top'] = $this->input->post('hd_id');
		$aux['nome_top'] = $this->input->post('titulo');
		$aux['resumo_top'] = $this->input->post('desc_resumida');
// 		$aux['conteudo_post'] = $this->get_ckeditor_content();
		$aux['dt_criacao'] = unix_to_human(time(), TRUE, 'us');
// 		$dados_img = $this->upload->data();
		$aux['id_usu'] = $this->session->userdata('id_usu');
		if(empty($aux['id_top'])){
			$aux['status_top'] = ABERTO;
			$t->setFields($aux);
			$t->inserir();
			$t = $t->get_last_id();
			$aux['id_top'] = $t->id_top;
		}
		else{
			$aux['status_top'] = $this->input->post('hd_status');
			$t->setFields($aux);
			$t->editar($aux['id_top']);
		}
		$this->load_form_edit($aux['id_top']);
	}

	public function load_form_edit($id=0){
		$this->lang->load('posts');
		$this->lang->load('upload');
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		$t = new Topicos();
		$u = new Usuarios();
		$t = $t->get_by_id($id);
		$dados = array();
		foreach($t->all as $key=>$valor){
			$dados['id_top'] = $t->id_top;
			$dados['nome_top'] = $t->nome_top;
			$dados['resumo_top'] = $t->resumo_top;
			$dados['status_top'] = $t->status_top;
			$dados['status'] = converte_status($dados['status_top']);
			$dados['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($t->dt_criacao));
			$u = $u->get_by_id($t->id_usu);
			$dados['usu_criou']= $u->nome_usu;
			$dados['id_usu']= $t->id_usu;
		}
// 				echo "<pre>";
// 				echo print_r($t);
// 				echo count($dados);
// 				echo "</pre>";
// 				die;

// 		$dados['arquivos'] = array();
// 		foreach($a as $ke=>$valor){
// 			$dados['arquivos'][$ke]['nome_arq'] = $valor->nome_arq;
// 			$dados['arquivos'][$ke]['id_arq'] =$valor->id_arq;
// 		}
		$this->parser->parse('intranet/topicos_cadastro',$dados);
	}

// 	public function aprovar($id=0){
// 		if(!empty($_GET['id'])){
// 			$id = $_GET['id'];
// 		}else{
// 			$id= $this->input->post('hd_id');
// 		}
// 		$t = new Topicos();
// 		$id_usu_aprovou = $this->session->userdata('id_usu');
// 		$t->aprovar($id,$id_usu_aprovou);
// 		if(empty($_GET['id'])){
// 			$this->load_form_edit($id);
// 		}
// 		else{
// 			redirect('index.php/intranet/topicos_cadastro_list');
// 		}
// 	}

// 	public function rejeitar($id=0){
// 		$t = new Topicos();
// 		$t->rejeitar($id);
// 	}

	public function fechar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
			$id= $this->input->post('hd_id');
		}
		$t = new Topicos();
		$t->fechar($id);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/topicos_cadastro_list');
		}
	}
	
	public function abrir($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else{
			$id= $this->input->post('hd_id');
		}
		$t = new Topicos();
		$t->abrir($id);
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
		$c = new Comentarios();
		$c->deletar_id_top($id);
		$t->deletar($id);
		redirect('index.php/intranet/topicos_cadastro_list');
		// 		$this->index();
	}


// 	public function telaJustificar(){
// 		$list=0;
// 		if(!empty($_GET['id'])){
// 			$id = $_GET['id'];
// 			$list = 1;
// 		}
// 		else{
// 			$id= $this->input->post('hd_id');
// 		}
// 		$dados['id'] = $id;
// 		$dados['list'] = $list;
// 		$this->lang->load('posts');
// 		$this->parser->parse('intranet/justificativa',$dados);
// 	}
// 	public function justificar(){
// 		$h = new Historicos();
// 		$aux = $h->getFields();
// 		$aux['descricao_hist'] = $this->input->post('justificativa');
// 		$aux['status'] = REJEITADO;
// 		$aux['id_post'] = $this->input->post('hd_id');
// 		$h->setFields($aux);
// 		$h->inserir();
// 		$this->rejeitar($aux['id_post']);
// 		if($this->input->post('listagem')!="1"){
// 			$this->load_form_edit($aux['id_post']);
// 		}
// 		else{
// 			redirect('index.php/intranet/topicos_cadastro_list');
// 		}
// 	}

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