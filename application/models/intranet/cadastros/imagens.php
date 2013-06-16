<?php

	class Imagens extends DataMapper{
		
		private $campos = array(	'id_img'      =>"" ,
		                            'nome_img'     =>"" ,
		                            'id_post'	  =>""
		);
		
		function Imagens(){
			parent::DataMapper();
		}
		
		public function getAll(){
			$i = new Imagens();
			return $i->get();
		}
		
		public function getFields(){
			return $this->campos;
		}
        
        public function setFields(array $campos){
            $this->campos = $campos;
        }
        
        public function get_by_idpost($id=0){
            $i = new Imagens();
            return $i->where('id_post',$id)
            ->get();
        }
        
        public function get_by_nome($nome=""){
            $i = new Imagens();
            return $i->where('nome_img',$nome)
            ->get();
        }
        
        public function verifica_img_post($nome){
        	$i = new Imagens();
        	$i->where('id_post',$this->campos['id_post']);
        	$i->where('nome_img',$nome)->get();
        	return $i->exists();
        }
        
        public function insert(){
        	$i = new Imagens();
        	$i->nome_img = $this->campos['nome_img'];
        	$i->id_post = $this->campos['id_post'];
        	$i->save();
        }
        public function deletar($id){
        	$this->db->query('delete from imagens where id_post = ' .$id);
        }
	}
?>