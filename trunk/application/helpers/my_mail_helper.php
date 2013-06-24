<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'class.phpmailer.php';


if(!function_exists('enviar_email')){
	function enviar_email($dest ,$assunto, $conteudo){
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug  = 0;
		$mail->Debugoutput = 'html';
		$mail->Host       = 'smtp.gmail.com';
		$mail->Port       = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth   = true;
		$mail->Username   = "agropecuariatrabalhogic@gmail.com";
		$mail->Password   = "Cotemig123456";
		$mail->SetFrom('noreplay@agropecuariatrabalhogic.com', 'Administracao do Portal');
		
		//Adiciona o destinatário
		$mail->AddAddress($dest);
		//Adiciona o assunto
		$mail->Subject = $assunto;
		//Conteúdo do e-mail
		$mail->MsgHTML($conteudo);
		
		if(@!$mail->Send()){
// 			  echo "Erro ao enviar email: " . $mail->ErrorInfo;
		}
		
		else{
// 			echo "E-mail enviado!";
		}
	}
}