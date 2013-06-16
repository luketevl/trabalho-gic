<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$u = new Usuarios();
			$dados = $u->getFields();
			$this->lang->load('usuarios');
			$this->lang->load('upload');
			$this->lang->load('posts');
			$this->parser->parse('intranet/usuarios_cadastro',$dados);
		}else{
			redirect('index.php/intranet/login');
		}
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
		$id_usu = $_GET['id_usu'];
		if($this->upload->do_upload('qqfile')){
			$u = new Usuarios();
			$dadosImg = $this->upload->data();
			$dados['nome_img'] = $dadosImg['file_name'];
			$dados['id_usu'] = $id_usu;
			// FALTA ID DO POST
			$u->atualiza_foto($dados['id_usu'], $dados['nome_img']);
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
	
	public function delete_file(){
		
	}
	
	public function save(){
		
		$u = new Usuarios();
		$aux = $u->getFields();
		
		$aux['id_usu'] = $this->input->post('hd_id');
		$aux['nome_usu'] = $this->input->post('nome');
		$aux['email_usu'] = $this->input->post('nome');
		$aux['pass_usu'] = $this->input->post('pass');
		$aux['repeat_pass'] = $this->input->post('repeat_pass');
		$aux['dt_criacao'] = $this->input->post('dt_criacao');
		$aux['dt_nascimento'] = $this->input->post('dt_nascimento');
		$aux['avatar_usu'] = '';
		
		$dados_img = $this->upload->data();
		$aux['id_perf'] = $this->input->post('hd_perf_id');
		
		if(empty($aux['id_usu'])){
			$u->setFields($aux);
			$u->inserir();
			$u = $u->get_last_id();
			$aux['id_usu'] = $u->id_usu;
		}
		else{
			$u->setFields($aux);
			$u->editar($aux['id_usu']);
		}
		$this->load_form_edit($aux['id_usu']);
	}
	
	public function load_form_edit($id=0){
		$this->lang->load('usuarios');
		$this->lang->load('posts');
		$this->lang->load('upload');
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		$u = new Usuarios();
		$u = $u->get_by_id($id);
		foreach($u->all as $key=>$valor){
			$dados['nome_usu'] = $u->nome_usu;
			$dados['email_usu'] = $u->email_usu;
			$dados['pass_usu'] = $u->pass_usu;
			$dados['dt_criacao'] = $u->dt_criacao;
			$dados['dt_nascimento'] = $u->dt_nascimento;
			$dados['avatar_usu'] = $u->avatar_usu			;
			$dados['id_perf']= $u->id_perf;
		}
// 		echo "<pre>";
// 		echo print_r($i);
// 		echo count($dados);
// 		echo "</pre>";
// 		die;
			$this->parser->parse('intranet/usuarios_cadastro',$dados);
	}
	
	

	
	public function deletar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else {
			$id= $this->input->post('hd_id');
		}
		$u = new Usuarios();
		$u->deletar($id);
		redirect('index.php/intranet/usuarios_cadastro_list');
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