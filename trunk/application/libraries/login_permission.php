<?php
class Login_Permission{

	function Login_Permission(){
		$this->CI =& get_instance();
		$this->session = & $this->CI->session;
	}

	public function is_logado(){
		$id_sessao = $this->session->userdata('email_usu');
		if(!empty($id_sessao)){
			return true;
		}
		return false;
	}
}