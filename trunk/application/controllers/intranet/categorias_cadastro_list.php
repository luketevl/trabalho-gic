<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias_Cadastro_List extends CI_Controller{
	
	function index(){
		$this->lang->load('posts');
		$id_usu = $this->session->userdata('id_usu');
		$id_perf = $this->session->userdata('id_perf');
		$c = new Categorias();
		$c = $c->getAll();
		$ctemp = new Categorias();
		$dados['dados']=array();
		foreach($c as $key => $categorias){
			$dados['dados'][$key]['id_cat'] = $categorias->id_cat;
			$dados['dados'][$key]['nome_cat'] = $categorias->nome_cat;
			$dados['dados'][$key]['fk_id_cat'] = $categorias->fk_id_cat;
			
			$ctemp = $ctemp->get_by_id($categorias->fk_id_cat);
			$dados['dados'][$key]['categoria_mae'] = $ctemp->nome_cat;
			
// 			$dados['dados'][$key]['id_cat']= $posts->id_cat;
		}
// 		echo "<pre>";
// 		echo print_r($dados);
// 		echo "</pre>";
// 		$id_perf = $this->session->userdata('id_perf');
// 		if($id_perf == ADM){
// 			$dados['cc_aberto'] 	= $p->count_aberto();
// 			$dados['cc_aprovado'] 	= $p->count_aprovado();
// 			$dados['cc_rejeitado'] 	= $p->count_rejeitado();
// 			$dados['cc_publicado'] 	= $p->count_publicado();
// 		}
// 		else{
// 			$dados['cc_aberto'] 	= $p->count_aberto_usu($id_usu);
// 			$dados['cc_aprovado'] 	= $p->count_aprovado_usu($id_usu);
// 			$dados['cc_rejeitado'] 	= $p->count_rejeitado_usu($id_usu);
// 			$dados['cc_publicado'] 	= $p->count_publicado_usu($id_usu);
					
// 		}
		if($id_perf == COMUM){
			$this->load->view('intranet/deny.html');
		}
		else{
			$this->parser->parse('intranet/categorias_cadastro_list',$dados);
		}
	}

	public function preenche_list(){
		$id_usu = $this->session->userdata('id_usu');
		$c = new Categorias();
		$c = $c->get_by_id($id_usu);
		echo "<pre>";
		echo print_r($c);
		echo "</pre>";
	}
}

/* End of file perfil_cadastro_list.php */
/* Location: ./application/controllers/intranet/categorias_Cadastro_list.php */