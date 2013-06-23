<?php

class Categorias extends DataMapper{

	private $campos = array(	'id_cat'      =>"" ,
			'nome_cat'    =>"" ,
			'fk_id_cat'	   =>""
				
	);

	function Categorias(){
		parent::DataMapper();
	}

	public function getAll(){
		$c = new Categorias();
		return $c->get();
	}

	public function getFields(){
		return $this->campos;
	}

	public function setFields(array $campos){
		$this->campos = $campos;
	}

	public function get_by_id($id=0){
		$c = new Categorias();
		return $c->where('id_cat',$id)
		->get();
	}

	public function get_by_nome($nome=""){
		$c = new Categorias();
		return $c->like('nome_cat',$nome,'both')
		->get();
	}

	public function inserir(){
		$c = new Categorias();
		$c->id_cat = $this->campos['id_cat'];
		$c->nome_cat = $this->campos['nome_cat'];
		$c->fk_id_cat = $this->campos['fk_id_cat'];
		$c->save();
	}

	public function editar($id=0){
		$c = new Categorias();
		$c->id_cat = $this->campos['id_cat'];
		$c->nome_cat = $this->campos['nome_cat'];
		$c->fk_id_cat = $this->campos['fk_id_cat'];
		$c->where('id_cat',$id);
		$c->update($this->campos);
	}

	public function get_last_id(){
		$c = new Categorias();
		return $c->select('id_cat')
		->order_by('id_cat','desc')
		->get(1);
	}

	public function deletar($id){
		$this->db->query('delete from categorias where id_cat = ' .$id);
	}
	
	public function get_vinculados_publicados(){
		$p = new Posts();
		$p->where('status_post','P');
		$p->group_by('id_cat');
		return $p->get();
	}
}
?>