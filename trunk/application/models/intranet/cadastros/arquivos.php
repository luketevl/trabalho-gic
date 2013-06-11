<?php

	class Arquivos extends DataMapper{
		
		private $campos = array(	'id_arq'       =>"" ,
		                            'nome_arq'     =>"" ,
		                            'id_post'	   =>""
		);
		
		function Arquivos(){
			parent::DataMapper();
		}
		
		public function getAll(){
			$a = new Arquivos();
			return $a->get();
		}
		
		public function getFields(){
			return $this->campos;
		}
        
        public function setFields(array $campos){
            $this->campos = $campos;
        }
        
        public function get_by_idpost($id=0){
            $a = new Arquivos();
            return $a->where('id_post',$id)
            ->get();
        }
        
        public function get_by_nome($nome=""){
            $a = new Arquivos();
            return $a->where('nome_arq',$nome)
            ->get();
        }
        
        public function verifica_arq_post($nome){
        	$a = new Arquivos();
        	$a->where('id_post',$this->campos['id_post']);
        	$a->where('nome_arq',$nome)->get();
        	return $a->exists();
        }
        
        public function insert(){
        	$a = new Arquivos();
        	$a->nome_arq = $this->campos['nome_arq'];
        	$a->id_post = $this->campos['id_post'];
        	$a->save();
        }
	}
?>