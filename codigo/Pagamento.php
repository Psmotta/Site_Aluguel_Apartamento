<?php

$email = utf8_encode($_POST['email']);
$venc_cart = utf8_encode($_POST['venc_cart']);
$cart_pessoa = utf8_encode($_POST['cart_pessoa']);
$mensagem = utf8_encode($_POST['mensagem']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "artursantoscorradi@gmail.com";
$mail->Password = "redesistem09";

$mail->setFrom($mail->Username,"Artur"); //remetente
$mail->addAddress('artursantoscorradi@gmail.com'); //Destinatário
$mail->Subject = "Fale conosco"; //Assunto

$conteudo_email = "
Voce recebeu uma mensagem de $assunto $nome ($email):
<br><br>

Mensagem:<br>
$mensagem
";
$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if( $mail->send()){

    echo "E-mail enviado com sucesso";

} else {

    echo "Falha ao enviar o e-mail." . $mail->ErrorInfo;
}


?>