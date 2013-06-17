<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testes_model extends CI_Model{

	public function getTeste(){
		$query = $this->db->get('estacionamento');
		return $query->result();
	}

}


?>