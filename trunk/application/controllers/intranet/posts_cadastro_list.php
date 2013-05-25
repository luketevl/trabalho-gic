<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts_Cadastro_List extends CI_Controller{
	
	function index(){
		$id_usu = $this->session->userdata('id_usu');
		$p = new Posts();
		$p = $p->get_posts_dono($id_usu);
		$dados = array(array());
		foreach($p as $key => $posts){
			$dados[$key]['id_post'] = $posts->id_post					;
			$dados[$key]['titulo_post'] = $posts->titulo_post					;
			$dados[$key]['resumo_post'] = $posts->resumo_post					;
			$dados[$key]['conteudo_post'] = $posts->conteudo_post				;
			$dados[$key]['ref_post'] = $posts->ref_post					;
			$dados[$key]['status_post'] = $posts->status_post					;
			$dados[$key]['dt_criacao'] = $posts->dt_criacao;
			$dados[$key]['dt_modificacao']= $posts->dt_modificacao			;
			$dados[$key]['img_principal_post'] = $posts->img_principal_post			;
			$dados[$key]['url_youtube']= $posts->url_youtube					;
			$dados[$key]['obs_post']= $posts->obs_post					;
			$dados[$key]['keywords_post']= str_replace('|',',',$posts->keywords_post);
			$dados[$key]['id_usu_aprovou']= $posts->id_usu_aprovou				;
			$dados[$key]['id_usu']= $posts->id_usu						;
			$dados[$key]['id_cat']= $posts->id_cat;
		}
		echo "<pre>";
		echo print_r($dados);
		echo "</pre>";
		$this->parser->parse('intranet/posts_cadastro_list',$dados);
	}

	public function preenche_list(){
		$id_usu = $this->session->userdata('id_usu');
		$p = new Posts();
		$p = $p->get_posts_dono($id_usu);
		echo "<pre>";
		echo print_r($p);
		echo "</pre>";
	}
}

/* End of file perfil_cadastro_list.php */
/* Location: ./application/controllers/intranet/posts_cadastro_list.php */