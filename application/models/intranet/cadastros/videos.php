<?php

	class Videos extends DataMapper{
		
		private $campos = array(	'id_vid'      =>"" ,
		                            'url_vid'     =>"" ,
		                            'id_post'	  =>""
		);
		
		function Videos(){
			parent::DataMapper();
		}
		
		public function getAll(){
			$v = new Videos();
			return $v->get();
		}
		
		public function getFields(){
			return $this->campos;
		}
        
        public function setFields(array $campos){
            $this->campos = $campos;
        }
        
        public function get_by_idpost($id=0){
            $v = new Videos();
            return $v->where('id_post',$id)
            ->get();
        }
        
        public function get_by_url($nome=""){
            $v = new Videos();
            return $v->like('url_vid',$nome,'both')
            ->get();
        }
        
        public function verifica_url_post($nome){
        	$v = new Videos();
        	$v->where('id_post',$this->campos['id_post']);
        	$v->where('url_vid',$nome)->get();
        	return $v->exists();
        }
        
        public function insert(){
        	$v = new Videos();
        	$v->url_vid = $this->campos['url_vid'];
        	$v->id_post = $this->campos['id_post'];
        	$v->save();
        }
        
	}
?>