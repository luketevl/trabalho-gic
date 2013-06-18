<?php

class Comentarios extends DataMapper{

	private $campos = array('id_coment'     		=>"" ,
			'comentario_coment'   	=>"" ,
			'dt_criacao'		=>"",
			'id_post'		  	=>"" ,
			'id_top'		  	=>"" ,
			'id_usu'		=>""
	);

	function Comentarios(){
		parent::DataMapper();
	}

	public function getAll(){
		$c = new Comentarios();
		return $c->get();
	}

	public function getFields(){
		return $this->campos;
	}

	public function setFields(array $campos){
		$this->campos = $campos;
	}

	public function get_by_id_post($id=0){
		$c = new Comentarios();
		return $c->where('id_post',$id)
		->get();
	}
	
	public function get_by_id_usu($id=0){
		$c = new Comentarios();
		return $c->where('id_usu',$id)
		->get();
	}
	
	public function get_by_id_coment($id=0){
		$c = new Comentarios();
		return $c->where('id_coment',$id)
		->get();
	}

	public function inserir(){
		$c = new Comentarios();
		$c->id_coment			= $this->campos['id_coment'];
		$c->comentario_coment	= $this->campos['comentario_coment'];
		$c->id_usu				= $this->campos['id_usu'];
		$c->id_post				= $this->campos['id_post'];
		$c->id_top				= $this->campos['id_top'];
		$c->dt_criacao			= unix_to_human(time(), TRUE, 'us');
		$c->save();
	}
	
	public function deletar_id_post($id){
		$this->db->query('delete from comentarios where id_post = ' .$id);
	}
	
	public function deletar_id_top($id){
		$this->db->query('delete from comentarios where id_top = ' .$id);
	}
	
	public function deletar_id_usu($id){
		$this->db->query('delete from comentarios where id_usu = ' .$id);
	}
}