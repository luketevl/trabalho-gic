<?php

	class Posts extends DataMapper{
	
		private $campos = array(	'id_post'     		 =>"" ,
									'titulo_post'   	 =>"" ,
									'resumo_post'		 =>"" ,
									'conteudo_post' 	 =>"" ,
									'ref_post'  		 =>"" ,
									'status_post'  		 =>"" ,
									'dt_criacao' 		 =>"" ,
									'dt_modificacao' 	 =>"" ,
									'img_principal_post' =>"" ,
									'obs_post' 			 =>"" ,
									'keywords_post' 	 =>"" ,
									'id_usu_aprovou' 	 =>"" ,
									'id_usu'  			 =>"" ,
									'id_cat'	  		 =>""
		);
	
		function Posts(){
			parent::DataMapper();
		}
	
		public function getAll(){
			$p = new Posts();
			return $p->get();
		}
		
		public function setPosts(Posts $data){
			$p = new Posts();
		}
		
		public function getFields(){
			return $this->campos;
		}
	        
	    public function setFields(array $campos){
	    	$this->campos = $campos;
        }
		
		public function inserir(){
			$p = new Posts();
			$p->titulo_post							=$this->campos['titulo_post'];
			$p->resumo_post							=$this->campos['resumo_post'];
			$p->conteudo_post						=$this->campos['conteudo_post'];
			$p->ref_post							=$this->campos['ref_post'];
			$p->status_post							=$this->campos['status_post'];
			$p->dt_criacao							=$this->campos['dt_criacao'];
			$p->dt_modificacao						=$this->campos['dt_modificacao'];
			$p->img_principal_post					=$this->campos['img_principal_post'];
			$p->obs_post							=$this->campos['obs_post'];
			$p->keywords_post						=$this->campos['keywords_post'];
			$p->id_usu_aprovou						=$this->campos['id_usu_aprovou'];
			$p->id_usu								=$this->campos['id_usu'];
			$p->id_cat								=$this->campos['id_cat'];
			$p->save();
		}
	
}