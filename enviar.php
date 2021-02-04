<?php
date_default_timezone_set('America/Sao_Paulo');
 
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 

 
	$nome = $_POST['cname'];
	$email = $_POST['cemail'];
	$mensagem = $_POST['cmessage'];
	$data = date('d/m/Y H:i:s');
 
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'smartglovebr@gmail.com';
	$mail->Password = '.smartglove01.';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
	$mail->Port = 587;
 
	$mail->setFrom('smartglovebr@gmail.com');
	$mail->addAddress('smartglovebr@gmail.com', 'SMARTGLOVE');
	$mail->addReplyTo($email, $nome);
 
	$mail->isHTML(true);
	$mail->Subject = "Contato - ".$nome;
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
 
	if($mail->send()) {
		header('location:index.html');
	} else {
        echo $mail->ErrorInfo;
        
	}

