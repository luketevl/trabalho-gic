<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TopicosT extends CI_Controller{

	public function index(){
		$this->load();
	}
	
	public function trata_dados(){
		$t = new Topicos();
		$t = $t->getAll();
		$u = new Usuarios();
			$dados = array();
			$dados['dados'] = array();
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
			return $dados;
	}
	
	public function load(){
		$this->parser->parse('common/topicos',$this->trata_dados());
	}
}
?>