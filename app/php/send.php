<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';
require_once "connection.php";
$problem = mysqli_query($connection, "SELECT * FROM `detector` ");
// $name = $_POST['name'];
// $number = $_POST['number'];
// $email = $_POST['email'];
$name = 'Automated Sensor Accounting Service';
$number = '+7 950 650 64 07';
$email = 'iliy1999d@mail.ru';

// Настройки
$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.yandex.ru';  
$mail->SMTPAuth = true;                      
$mail->Username = ''; // Ваш логин в Яндексе. Именно логин, без @yandex.ru
$mail->Password = ''; // Ваш пароль
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;
$mail->setFrom('delay.il@ya.ru'); // Ваш Email
$mail->addAddress('iliy1999d@mail.ru'); // Email получателя
//$mail->addAddress(''); // Еще один email, если нужно.

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
$header = 'Автоматизированная система учета датчиков';
// Письмо
$mail->isHTML(true); 
$mail->Subject = adopt($header); // Заголовок письма
$mail->Body    = "Name :" . $name . "phone :" .$number . "email :" . $email . "<br>" . 
"Information about miscalculated verification"; // Текст письма

while ($item =  mysqli_fetch_assoc($problem)) {
    trim($item['Verification/Calibration']);
    if ($item['Verification/Calibration'] == 'К' || $item['Verification/Calibration'] == 'Подлежит'){
        if ( strlen($item['Previous calibration']) > 0 ){
            trim($item['Previous calibration']);
            $year = substr($item['Previous calibration'],strlen($item['Previous calibration'])-1);
            $new_year = $year + $item['Intertesting interval'];
            $next_year = substr($item['Previous calibration'],0,strlen($item['Previous calibration'])-1) . $new_year;
            $today = date("m.d.y");
            $today = substr($today,strlen($today)-1);
            if ($today > $new_year){
                $str =  'KKS = ' . $item['KKS']  . '---' . $next_year . '    <-----calibration is overdue<br>' . $str;
                $mail->Body =  $str;
            }
        }
    }
}

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}

mysqli_close($connection); // Закрываем соединение с базой данных
?>
