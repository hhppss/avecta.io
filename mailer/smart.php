<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_mail'];
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();   
$mail->SMTPDebug = 1;                                   // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'musica.mailer@mail.ru';                 // Наш логин
$mail->Password = 'Ovegin67';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('musica.mailer@mail.ru', 'Music-A');   // От кого письмо 
$mail->addAddress('wo.tank2015@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на сайте Music-A';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Имя: ' . $name . ' <br>
	Почта: ' . $email . ' <br>
	Телефон: ' . $phone . '';
$mail->AltBody = 'Это альтернативный текст';
header ('location: ../index.html');
?>