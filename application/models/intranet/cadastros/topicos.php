<?php

class Topicos extends DataMapper{

	private $campos = array(	'id_top'     		 =>"" ,
			'nome_top'   			 =>"" ,
			'resumo_top'			 =>"" ,
			'dt_criacao'  			 =>"" ,
			'status_top'  			 =>"" ,
			'id_usu'  				 =>"" 
	);

	function Topicos(){
		parent::DataMapper();
	}

	public function getAll(){
		$t = new Topicos();
		return $t->get();
	}

	public function get_by_id($id){
		$t = new Topicos();
		return $t->where('id_top',$id)->get();
	}
	public function get_last_id(){
		$t = new Topicos();
		return $t->select('id_top')
		->order_by('id_top','desc')
		->get(1);
	}

	public function existe_top($id=0){
		$t = new Topicos();
		$t->where('id_top',$id)->get();
		return ($t->id_top>0)?true:false;
	}

	public function setTopicos(Topicos $data){
		$t = new Topicos();
	}

	public function getFields(){
		return $this->campos;
	}
	 
	public function setFields(array $campos){
		$this->campos = $campos;
	}

	public function inserir(){
		$t = new Topicos();
		$t->nome_top							=$this->campos['nome_top'];
		$t->dt_criacao							=$this->campos['dt_criacao'];
		$t->resumo_top							=$this->campos['resumo_top'];
		$t->status_top							=$this->campos['status_top'];
		$t->id_usu								=$this->campos['id_usu'];
		$t->save();
	}

	public function editar($id=0){
		$t = new Topicos();
		$t->nome_top							=$this->campos['nome_top'];
		$t->resumo_top							=$this->campos['resumo_top'];
		$t->status_top							=$this->campos['status_top'];
		$t->id_usu								=$this->campos['id_usu'];
		$t->where('id_top',$id);
		$t->update($this->campos);
	}

// 	public function aprovar($id,$id_usu_aprovou=0){
// 		$t = new Topicos();
// 		$t->where('id_top',$id)
// 		->update(array('status_top' => APROVADO , 'dt_modificacao' => unix_to_human(time(), TRUE, 'us') ,
// 				'id_usu_aprovou' => $id_usu_aprovou));
// 	}

// 	public function rejeitar($id){
// 		$t = new Topicos();
// 		$t->where('id_top',$id)
// 		->update(array('status_top' => REJEITADO , 'dt_modificacao' => unix_to_human(time(), TRUE, 'us')));
// 	}

	public function fechar($id){
		$t = new Topicos();
		$t->where('id_top',$id)
		->update(array('status_top' => FECHADO));
	}

	public function deletar($id){
		$this->db->query('delete from topicos where id_top = ' .$id);
	}

	public function get_topicos_dono($id){
		$t = new Topicos();
		return $t->where('id_usu',$id)->order_by('id_top','desc')
		->get();
	}
	public function teste(){
		$t = new Topicos();
		$t->where('id_Topicos',120)->get();
		echo "<pre>";
		echo print_r($this->has_one);
		echo print_r();
		echo "</pre>";
	}

// 	public function atualiza_principal_video($id,$url){
// 		$t = new Topicos();
// 		$t->where('id_top',$id)
// 		->update('url_youtube',$url);
// 	}

// 	public function count_aberto(){
// 		$t = new Topicos();
// 		return $t->where('status_top',ABERTO)->count();
// 	}

// 	public function count_aprovado(){
// 		$t = new Topicos();
			
// 		return $t->where('status_top',APROVADO)->count();
// 	}
// 	public function count_rejeitado(){
// 		$t = new Topicos();
// 		return $t->where('status_top',REJEITADO)->count();
// 	}

// 	public function count_publicado(){
// 		$t = new Topicos();
// 		return $t->where('status_top',PUBLICADO)->count();
// 	}

// 	public function count_aberto_usu($id){
// 		$t = new Topicos();
// 		return $t->where('status_top',ABERTO)
// 		->where('id_usu',$id)
// 		->count();
// 	}

// 	public function count_aprovado_usu($id){
// 		$t = new Topicos();
// 		return $t->where('status_top',APROVADO)
// 		->where('id_usu',$id)
// 		->count();
// 	}
// 	public function count_rejeitado_usu($id){
// 		$t = new Topicos();
// 		return $t->where('status_top',REJEITADO)
// 		->where('id_usu',$id)
// 		->count();
// 	}

// 	public function count_publicado_usu($id){
// 		$t = new Topicos();
// 		return $t->where('status_top',PUBLICADO)
// 		->where('id_usu',$id)
// 		->count();
// 	}

}