<?php 

$to = 'lucas@lucas.com';
$subject = 'Email de teste PHP';
$message = "
<p><strong>Nome</strong> {$name}</p>
<p><strong>Nome</strong> {$url}</p>
<p><strong>Nome</strong> {$email}</p>
<p><strong>Nome</strong> {$description}</p>
";

$additional_headers = 'From: ' . $email . '\r\n';
$additional_headers = 'Reply-To: ' . $email . '\r\n';
$additional_headers = 'X-Mailer: ' . phpversion();

if(mail($to, $subject, $additional_headers)) {
    die('Ok, email enviado');
} else {
    die('Falha ao enviar');
}