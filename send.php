<?php



ini_set('display_errors', 1);

error_reporting(E_ALL);



$config = array('mail_from' => 'noreply@такси-франшиза.рф', 'mail_to' => array('agostyuhin@gmail.com', 'promolist@list.ru'));



$name = isset($_POST['name']) ? trim($_POST['name']) : '';

$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

$subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'Заявка с сайта';

$section = isset($_POST['section']) ? trim($_POST['section']) : '';

$data = array('name' => $name, 'phone' => $phone, 'email' => $email,);



//include('amocrm/handler.php');



$subject .= ' (Такси-Оскар)';





// Функция отправки письма



function send_mail($mail, $subject, $text)

{

    global $config;

    mail($mail, $subject, $text, "From: " . $config['mail_from'] . "\r\n" . "Reply-To: " . $config['mail_from'] . "\r\n" . "Content-type: text/plain; charset=utf-8\r\n" . "X-Mailer: PHP/" . phpversion());

}



// Формируем текст письма



$text = '';

$text .= ($name != '') ? 'Имя: ' . $name . "\r\n" : '';

$text .= ($phone != '') ? 'Телефон: ' . $phone . "\r\n" : '';

$text .= ($email != '') ? 'E-mail: ' . $email . "\r\n" : '';

$text .= ($section != '') ? 'Раздел каталога: ' . $section . "\r\n" : '';

$text .= "\r\n" . 'IP-адрес посетителя: ' . htmlentities($_SERVER['REMOTE_ADDR']) . "\r\n";



$mail_to_count = count($config['mail_to']);



for ($i = 0; $i < $mail_to_count; $i++) {

    send_mail($config['mail_to'][$i], $subject, $text);

}



die($subject . '/' . $text);

?>