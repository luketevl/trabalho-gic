<?php

	class Perfis extends DataMapper{
		
		private $campos = array(	'id_perf' 		,
									'nome_perf' 	,
									'funcoes_perf' 
		);
		
		function Perfis(){
			parent::DataMapper();
		}
		
		public function getAll(){
			$p = new Perfis();
			return $p->get();
		}
		
		public function setPerfil(Perfis $data){
			$p = new Perfis();
		}
		
		public function getFields(){
			return $this->campos;
		}
	}
?>