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
	
	public function get_by_email($email){
		$u = new Usuarios();
		return $u->where('email_usu',$email)->get();
	}
	
	public function verifica_usuario($email,$uass){
		$u = new Usuarios();
		return $u->where('email_usu',$email)
				 	->where('pass_usu',$uass)
					->get();
	}
	
	public function inserir($campos){
		$u = new Usuarios();
		$u->nome_usu = $campos['nome_usu'];
		$u->email_usu = $campos['email_usu'];
		$u->pass_usu = $campos['pass_usu'];
		$u->dt_criacao = 'now()';
		$u->dt_nascimento = $campos['dt_nascimento'];
		$u->avatar_usu = $campos['avatar_usu'];
		$u->id_perf = $campos['id_perf'];
		$u->save();
	}
}