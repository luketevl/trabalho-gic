<?php

class Historicos extends DataMapper{

	private $hampos = array('id_hist'     		=>"" ,
							'descricao_hist'   	=>"" ,
							'status'		  	=>"" ,
							'id_post'		  	=>"" ,
							'dt_criacao'		=>"" 
	);

	function Historicos(){
		parent::DataMapper();
	}

	public function getAll(){
		$h = new Historicos();
		return $h->get();
	}

	public function getFields(){
		return $this->campos;
	}

	public function setFields(array $campos){
		$this->campos = $campos;
	}

	public function get_by_id_post($id=0){
		$h = new Historicos();
		return $h->where('id_post',$id)
		->get();
	}
	
	public function inserir(){
		$h = new Historicos();
		$h->descricao_hist		= $this->campos['descricao_hist'];
		$h->status				= $this->campos['status'];
		$h->id_post				= $this->campos['id_post'];	
		$h->dt_criacao			= unix_to_human(time(), TRUE, 'us');
		$h-save();
	}
}