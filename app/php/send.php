<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];

// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.yandex.ru';  
$mail->SMTPAuth = true;                      
$mail->Username = 'delay.il'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = 'reezzywow74'; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->setFrom('delay.il@yandex.ru'); // Ваш Email
$mail->addAddress('iliy1999d@mail.ru'); // Email получателя
$mail->addAddress('belenkiy.p22@gmail.com'); // Еще один email, если нужно.

// Прикрепление файлов
  for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }   

//Кодировка
function adopt($text) {
	return '=?UTF-8?B?'.base64_encode($text).'?=';
}
$header = 'Заголовок';
// Письмо
$mail->isHTML(true); 
$mail->Subject = adopt($header); // Заголовок письма
$mail->Body    = "Имя $name . Телефон $number . Почта $email"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>