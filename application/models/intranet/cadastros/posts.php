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
									'url_youtube'		 =>"" ,
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
		
		public function get_by_id($id){
			$p = new Posts();
			return $p->where('id_post',$id)->get();
		}
		public function get_last_id(){
			$p = new Posts();
			return $p->select('id_post')
			->order_by('id_post','desc')
			->get(1);
		}
		
		public function existe_post($id=0){
			$p = new Posts();
			$p->where('id_post',$id)->get();
			return ($p->id_post>0)?true:false;
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
			$p->url_youtube							=$this->campos['url_youtube'];
			$p->obs_post							=$this->campos['obs_post'];
			$p->keywords_post						=$this->campos['keywords_post'];
			$p->id_usu_aprovou						=$this->campos['id_usu_aprovou'];
			$p->id_usu								=$this->campos['id_usu'];
			$p->id_cat								=$this->campos['id_cat'];
			$p->save();
		}
		
		public function editar($id=0){
			$p = new Posts();
			$p->titulo_post							=$this->campos['titulo_post'];
			$p->resumo_post							=$this->campos['resumo_post'];
			$p->conteudo_post						=$this->campos['conteudo_post'];
			$p->ref_post							=$this->campos['ref_post'];
			$p->status_post							=$this->campos['status_post'];
			$p->dt_criacao							=$this->campos['dt_criacao'];
			$p->dt_modificacao						=$this->campos['dt_modificacao'];
			$p->img_principal_post					=$this->campos['img_principal_post'];
			$p->url_youtube							=$this->campos['url_youtube'];
			$p->obs_post							=$this->campos['obs_post'];
			$p->keywords_post						=$this->campos['keywords_post'];
			$p->id_usu_aprovou						=$this->campos['id_usu_aprovou'];
			$p->id_usu								=$this->campos['id_usu'];
			$p->id_cat								=$this->campos['id_cat'];
			$p->where('id_post',$id);
			$p->update_all('is_all_powerful' , TRUE);
		}
	
		public function aprovar($id){
			$p = new Posts();
			$p->where('id_post',$id)
				->update(array('status_post' => APROVADO , 'dt_modificacao' => unix_to_human(time(), TRUE, 'us')));
		}
		
		public function rejeitar($id){
			$p = new Posts();
			$p->where('id_post',$id)
				->update(array('status_post' => REJEITADO , 'dt_modificacao' => unix_to_human(time(), TRUE, 'us')));
		}
}