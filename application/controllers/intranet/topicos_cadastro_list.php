<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topicos_Cadastro_List extends CI_Controller{

	function index(){
		$this->lang->load('posts');
		$id_usu = $this->session->userdata('id_usu');
		$id_perf = $this->session->userdata('id_perf');
		$t = new Topicos();
// 		$c = new Categorias();
// 		if($id_perf == COMUM){
// 			$t = $t->get_posts_dono($id_usu);
// 		}
// 		else{
			$t = $t->getAll();
// 		}
		$dados['dados']=array();
		foreach($t as $key => $topicos){
			$dados['dados'][$key]['id_top'] = $topicos->id_top;
			$dados['dados'][$key]['nome_top'] = $topicos->nome_top;
			$dados['dados'][$key]['resumo_top'] = $topicos->resumo_top;
			$dados['dados'][$key]['status_top'] = $topicos->status_top;
			$dados['dados'][$key]['status'] = converte_status($dados['dados'][$key]['status_top']);
			$dados['dados'][$key]['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($topicos->dt_criacao));
			$dados['dados'][$key]['id_usu']= $topicos->id_usu;
				
			// 			$dados['dados'][$key]['id_cat']= $tosts->id_cat;
		}
		// 		echo "<pre>";
		// 		echo print_r($dados);
		// 		echo "</pre>";
		$id_perf = $this->session->userdata('id_perf');
		$this->parser->parse('intranet/topicos_cadastro_list',$dados);
	}

	public function preenche_list(){
		$id_usu = $this->session->userdata('id_usu');
		$t = new Topicos();
		$t = $t->get_topicos_dono($id_usu);
		echo "<pre>";
		echo print_r($t);
		echo "</pre>";
	}
}

/* End of file perfil_cadastro_list.php */
/* Location: ./application/controllers/intranet/topicos_cadastro_list.php */