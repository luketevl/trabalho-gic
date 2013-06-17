<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil_Dados extends CI_MODEL{
	public function get_all(){
		$query = $this->db->get('perfil');
		return $query->result();
	}

	public function set_all($dados = array()){
		$this->db->insert('perfil',$dados) ;
		return $this->db->affected_rows();
	}
}
?>