<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('converte_status')){
	function converte_status($sigla){
		if($sigla == APROVADO){
			return'Aprovado';
		}
		else if($sigla == REJEITADO){
			return 'Rejeitado';
				
		}
		else if($sigla == PUBLICADO){
			return'Publicado';
		}
		else{
			return'Normal';
		}
	}
}