<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "contatobrechomaria@gmail.com";
$mail->Password = "helena171";

//$mail->SMTPDebug = 2; //dica para listar o erro se houver. pode mudar para 1
//https://myaccount.google.com/lesssecureapps?pli=1  //DICA para  desativei a segurança no link: https://www.google.com/settings/security/lesssecureapps


//quem está enviando
$mail->setFrom("contatobrechomaria@gmail.com", "Alura Curso PHP e MySQL");

//queme está recebendo
$mail->addAddress("contatobrechomaria@gmail.com");

$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";


if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();

?>