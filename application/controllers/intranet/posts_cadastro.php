<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_Cadastro extends CI_Controller{
	public function index(){
		if($this->login_permission->is_logado()){
			$this->load->view('intranet/posts_cadastro');
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
		
		$aux['titulo_post'] = $this->input->post('titulo');
		$aux['resumo_post'] = $this->input->post('desc_resumida');
		$aux['conteudo_post'] = $this->get_ckeditor_content();
		$aux['ref_post'] = $this->input->post('referencias');
		
		$aux['status_post'] = $this->input->post('');
		$aux['dt_criacao'] = $this->input->post('');
		$aux['dt_modificacao'] = $this->input->post('');
		$aux['img_principal_post'] = $this->input->post('');
		$aux['obs_post'] = $this->input->post('');
		$aux['keywords_post'] = $this->input->post('');
		
		$aux['id_usu_aprovou'] = $this->session->userdata('id_usu');
		$aux['id_usu'] = $this->session->userdata('id_usu');
		$aux['id_cat'] = $this->input->post('hd_cat_id');
		
		echo "<pre>";
		print_r($aux);
		echo "</pre>";
		$p->setFields($aux);
		$p->inserir();
	}
	
	
}