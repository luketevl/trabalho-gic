<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
		if(!function_exists('enviar_email')){
			function enviar_email($from, $to, $subject,$message,$replay_to="",$mailtype='text'){
				$config = array(
					'protocol' => 'smtp',
						"newline"			=> "\r\n",
						"smtp_timeout"		=> 30,
						"validate"			=> TRUE,
						"smtp_host"			=> 'ssl://smtp.gmail.com',
						"smtp_port"			=> '465',
						"smtp_user"			=> 'lukete@gmail.com',
						"smtp_pass"			=> '',
						"mailtype"			=> $mailtype,
						);	
				$this->email->initialize($config);
				$this->email->from($from);
				$this->email->to($to);
				$this->email->cc($cc);
				$this->email->bcc($cco);
				$this->email->subject($subject);
				$this->email->message($message);
				if (!@$this->email->send()){
					echo ("Erro no envio de email. [smtp_host: {$config['smtp_host']}] [smtp_port: {$config['smtp_port']}] [smtp_user: {$config['smtp_user']}]");
					return FALSE;
				}
				return TRUE;
				}
		}
