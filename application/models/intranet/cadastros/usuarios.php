<?php
class Usuarios extends DataMapper{
	public $campos = array( 'id_usu'		=>"",
			'nome_usu'		=>"",
			'email_usu'	 	=>"",
			'pass_usu' 		=>"",
			'dt_criacao' 	=>"",
			'dt_nascimento' =>"" ,
			'avatar_usu' 	=>"",
			'id_perf'		=>""
	);

	function Usuarios(){
		parent::DataMapper();
	}

	public function getFields(){
		return $this->campos;
	}

	public function setFields(array $campos){
		$this->campos = $campos;
	}

	public function getAll(){
		$u = new Usuarios();
		return $u->get();
	}

	public function get_by_email($email,$id=0){
		$u = new Usuarios();
		$u->where('email_usu',$email);
		if($id>0){
			$u->where_not('id_usu',$id);
		}
		return $u->count();
	}

	public function get_by_id($id){
		$u = new Usuarios();
		return $u->where('id_usu',$id)->get();
	}

	public function verifica_usuario($email,$uass){
		$u = new Usuarios();
		return $u->where('email_usu',$email)
		->where('pass_usu',$uass)
		->get();
	}

	public function inserir(){
		$u = new Usuarios();
		$u->nome_usu = $this->campos['nome_usu'];
		$u->email_usu = $this->campos['email_usu'];
		$u->pass_usu = $this->campos['pass_usu'];
		$u->dt_criacao = $this->campos['dt_criacao'];
		$u->dt_nascimento = $this->campos['dt_nascimento'];
		$u->avatar_usu = $this->campos['avatar_usu'];
		$u->id_perf = $this->campos['id_perf'];
		$u->save();
	}

	public function editar($id=0){
		unset($this->campos['dt_criacao']);
		unset($this->campos['avatar_usu']);
		$u = new Usuarios();
		$u->nome_usu							=$this->campos['nome_usu'];
		$u->email_usu							=$this->campos['email_usu'];
		$u->pass_usu							=$this->campos['pass_usu'];
		$u->dt_nascimento						=$this->campos['dt_nascimento'];
		$u->id_perf								=$this->campos['id_perf'];
		$u->where('id_usu',$id);
		$u->update($this->campos);
	}

	public function deletar($id){
		$this->db->query('delete from usuarios where id_usu = ' .$id);
	}

	public function get_last_id(){
		$u = new Usuarios();
		return $u->select('id_usu')
		->order_by('id_usu','desc')
		->get(1);
	}

	public function atualiza_foto($id,$url){
		$u = new Usuarios();
		$u->where('id_usu',$id)
		->update('avatar_usu',$url);
	}

	public function get_by_nome($nome=""){
		$u = new Usuarios();
		return $u->like('nome_usu',$nome,'both')
		->get();
	}
}