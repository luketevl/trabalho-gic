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
		
		public function inserir(){
            $p = new Perfis();
			$p->nome_perf = $this->campos['nome_perf'];
			$p->funcoes_perf = $this->campos['funcoes_perf'];
			$p->acesso_perf = $this->campos['acesso_perf'];
			$p->editavel = $this->campos['editavel'];
			$p->save();
		}
	}
?>