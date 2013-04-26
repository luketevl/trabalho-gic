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
	
	public function get_by_id($email){
		$u = new Usuarios();
		return $u->where('email_usu',$email)->get();
	}
	
}