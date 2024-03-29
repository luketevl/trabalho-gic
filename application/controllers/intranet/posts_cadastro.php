<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$p = new Posts();
			$dados = $p->getFields();
			$dados['dados']=array();
			$dados['status'] ="";
			$dados['usu_criou'] ="";
			$dados['usu_aprovou'] ="";
			$dados['categoria'] ="";
			$this->lang->load('posts');
			$this->lang->load('upload');
			$dados['urls'] = array();
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
		$aux['img_principal_post'] = $this->input->post('hd_img_principal_post');
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
			$aux['img_principal_post'] = 'no_img.png';
			$p->setFields($aux);
// 			echo "<pre>";
// 							echo print_r($aux);
// 							echo "</pre>";
// 							die;
			$p->inserir();
			$p = $p->get_last_id();
			$aux['id_post'] = $p->id_post;
		}
		else{
			$aux['status_post'] = $this->input->post('hd_status');
			$p->setFields($aux);
			$p->editar($aux['id_post']);
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
		$p = new Posts();
		$p = $p->get_by_id($id);
		$u = new Usuarios();
		$v = new Videos();
		$v = $v->get_by_idpost($id);
		$c = new Categorias();
		$i = new Imagens();
		$i = $i->get_by_idpost($id);
		$a = new Arquivos();
		$a = $a->get_by_idpost($id);
		foreach($p->all as $key=>$valor){
			$dados['id_post'] = $p->id_post;
			$dados['titulo_post'] = $p->titulo_post;
			$dados['resumo_post'] = $p->resumo_post;
			$dados['conteudo_post'] = $p->conteudo_post;
			$dados['ref_post'] = $p->ref_post;
			$dados['status_post'] = $p->status_post;
			$dados['status'] = converte_status($dados['status_post']);
			$dados['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($p->dt_criacao));
			$dados['dt_modificacao']= mdate('%d/%m/%Y',human_to_unix($p->dt_modificacao));
			$dados['img_principal_post'] = $p->img_principal_post;
			$dados['url_youtube']= $p->url_youtube;
			$dados['obs_post']= $p->obs_post;
			$dados['keywords_post']= str_replace('|',',',$p->keywords_post);
			$dados['id_usu_aprovou']= $p->id_usu_aprovou;
			$u = $u->get_by_id($p->id_usu_aprovou);
			$dados['usu_aprovou']= $u->nome_usu;
			$u = $u->get_by_id($p->id_usu);
			$dados['usu_criou']= $u->nome_usu;
				
			$dados['id_usu']= $p->id_usu;
			$dados['id_cat']= $p->id_cat;
			$c = $c->get_by_id($p->id_cat);
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
// 				echo "<pre>";
// 				echo print_r($this->historico_table($dados['id_post']));
// 				echo count($dados);
// 				echo "</pre>";
// 				die;
		$dados = array_merge($dados, $this->historico_table($dados['id_post']));
		$this->parser->parse('intranet/posts_cadastro',$dados);
	}

	public function aprovar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id= $this->input->post('hd_id');
		}
		
		$pdados = new Posts();
		$u = new Usuarios();
		$u_aprovou = new Usuarios();
		$u_aprovou = $u->get_by_id($this->session->userdata('id_usu'));
		$p = new Posts();
		$id_usu_aprovou = $this->session->userdata('id_usu');
		$p->aprovar($id,$id_usu_aprovou);
		$pdados = $pdados->get_by_id($id);
		$u = $u->get_by_id($pdados->id_usu);
		$this->historico($id,APROVADO,"");
		enviar_email($u->email_usu,'Materia Aprovada','Sua Materia publicada em:'.$pdados->dt_criacao. ' foi aprovado por: '.$u_aprovou->nome_usu. ' na data de: '. $pdados->dt_modificacao);
		if(empty($_GET['id'])){
			$this->load_form_edit($id);
		}
		else{
			redirect('index.php/intranet/posts_cadastro_list');
		}
	}

	public function historico($id, $status,$desc=""){
		$h = new Historicos();
		$history = $h->getFields();
		$history['descricao_hist']= $desc;
		$history['status']= $status;
		$history['id_post']= $id;
		$h->setFields($history);
		$h->inserir();
	}
	
	public function rejeitar($id=0){
		$p = new Posts();
		$p->rejeitar($id);
		$this->historico($id,REJEITADO,"");
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
		$this->historico($id,PUBLICADO,"");
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
		$i = new Imagens();
		$v = new Videos();
		$a = new Arquivos();
		$h = new Historicos();
		$c = new Comentarios();
		$p->deletar($id);
		$i->deletar($id);
		$v->deletar($id);
		$a->deletar($id);
		$h->deletar($id);
		$c->deletar_id_post($id);
		redirect('index.php/intranet/posts_cadastro_list');
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
			redirect('index.php/intranet/posts_cadastro_list');
		}
	}
	
	public function historico_table($id){
		$h = new Historicos();
		$h = $h->get_by_id_post($id);
		$dados['dados']=array();
		foreach($h as $key => $hosts){
			$dados['dados'][$key]['id_hist'] = $hosts->id_hist					;
			$dados['dados'][$key]['descricao_hist'] = $hosts->descricao_hist					;
			$dados['dados'][$key]['status_post_hist'] = $hosts->status				;
			$dados['dados'][$key]['status_hist'] = converte_status($dados['dados'][$key]['status_post_hist']);
			$dados['dados'][$key]['dt_criacao_hist'] = mdate('%d/%m/%Y',human_to_unix($hosts->dt_criacao_hist));
		}
		return $dados;
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