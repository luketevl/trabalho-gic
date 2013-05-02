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
            return $c->where('id_perf',$id)
            ->get();
        }
		
	}
?>