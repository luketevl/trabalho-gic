<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_Cadastro_List extends CI_Controller{
	
	function index(){
		$this->lang->load('posts');
		$id_usu = $this->session->userdata('id_usu');
		$id_perf = $this->session->userdata('id_perf');
		$u = new Usuarios();
		$p = new Perfis();
		if($id_perf == COMUM){
			$u = $u->get_by_id($id_usu);
		}
		else{
			$u = $u->getAll();
		}
		$dados['dados']=array();
		foreach($u as $key => $usuarios){
			$dados['dados'][$key]['id_usu'] = $usuarios->id_usu;
			$dados['dados'][$key]['nome_usu'] = $usuarios->nome_usu;
			$dados['dados'][$key]['email_usu'] = $usuarios->email_usu					;
			$dados['dados'][$key]['pass_usu'] = $usuarios->pass_usu				;
			$dados['dados'][$key]['dt_nascimento'] = $usuarios->dt_nascimento				;
			$dados['dados'][$key]['dt_criacao'] = mdate('%d/%m/%Y',human_to_unix($usuarios->dt_criacao));
			$dados['dados'][$key]['avatar_usu'] = $usuarios->img_principal_post			;
			$dados['dados'][$key]['id_perf']= $usuarios->id_perf;
			$p = $p->get_by_id($usuarios->id_perf);
			$dados['dados'][$key]['perfil']= $p->nome_perf;
			
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
			$this->parser->parse('intranet/usuarios_cadastro_list',$dados);
	}

	public function preenche_list(){
		$id_usu = $this->session->userdata('id_usu');
		$u = new Usuarios();
		$u = $u->get_by_id($id_usu);
		echo "<pre>";
		echo print_r($u);
		echo "</pre>";
	}
}

/* End of file perfil_cadastro_list.php */
/* Location: ./application/controllers/intranet/Usuarios_Cadastro_list.php */