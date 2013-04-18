<?php

	class Perfis extends DataMapper{
		
		private $campos = array(	'id_perf'       ,
		                            'nome_perf'     ,
		                            'funcoes_perf'  ,
		                            'acesso_perf'   ,
		                            'editavel'
									
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
        
        public function setFields(array $campos){
            $this->campos = $campos;
        }
        
        public function get_by_id($id=0){
            $p = new Perfis();
            return $p->where('id_perf',$id)
            ->get();
        }
	}
?>