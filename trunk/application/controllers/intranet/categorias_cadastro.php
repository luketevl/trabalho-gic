<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class categorias_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$u = new Usuarios();
			$dados = $u->getFields();
			$this->lang->load('usuarios');
			$this->lang->load('upload');
			$this->lang->load('posts');
			$dados=array();
			$dados['nome_cat']= "";
			$dados['nome_cat_mae']= "";
			$dados['id_cat']="";
			$dados['fk_id_cat']="";
			$this->parser->parse('intranet/categorias_cadastro',$dados);
		}else{
			redirect('index.php/intranet/login');
		}
	}
	
	
	public function delete_file(){
		
	}
	
	public function save(){
		
		$c = new Categorias();
		$aux = $c->getFields();
		$aux['id_cat'] = $this->input->post('hd_id');
		$aux['nome_cat'] = $this->input->post('nome');
		$aux['fk_id_cat'] = $this->input->post('hd_cat_id');
// 		echo "<pre>";
// 		echo print_r($aux);
// 		echo count($dados);
// 		echo "</pre>";
// 		die;
		
		if(empty($aux['id_cat'])){
			$c->setFields($aux);
			$c->inserir();
			$c = $c->get_last_id();
			$aux['id_cat'] = $c->id_cat;
		}
		else{
			$c->setFields($aux);
			$c->editar($aux['id_cat']);
		}
		$this->load_form_edit($aux['id_cat']);
	}
	
	public function load_form_edit($id=0){
		$this->lang->load('usuarios');
		$this->lang->load('posts');
		$this->lang->load('upload');
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		$c = new Categorias();
		$ctemp = new Categorias();
		$c = $c->get_by_id($id);
		$dados = array();
		foreach($c->all as $key=>$valor){
			$dados['id_cat'] = $c->id_cat;
			$dados['nome_cat'] = $c->nome_cat;
			$dados['fk_id_cat'] = $c->fk_id_cat;
			$ctemp = $ctemp->get_by_id($c->fk_id_cat);
			$dados['nome_cat_mae'] =$ctemp->nome_cat;
		}
			$this->parser->parse('intranet/categorias_cadastro',$dados);
	}
	
	public function verifica_usuario(){
		$dados = array();
		$u = new Usuarios();
		$u = $u->get_by_email($this->input->post('email'),$this->input->post('hd_id'));
		echo $u;
		if($u>0){
			echo 0;
		}
		else{
			echo 1;
		}
	}
	

	
	public function deletar($id=0){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}
		else {
			$id= $this->input->post('hd_id');
		}
		$c = new Categorias();
		$c->deletar($id);
		redirect('index.php/intranet/categorias_cadastro_list');
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