<?php



ini_set('display_errors', 1);

error_reporting(E_ALL);



$config = array('mail_from' => 'noreply@такси-франшиза.рф', 'mail_to' => array('agostyuhin@gmail.com', 'promolist@list.ru'));



$name = isset($_POST['name']) ? trim($_POST['name']) : '';

$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

$subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'Заявка';

$section = isset($_POST['section']) ? trim($_POST['section']) : '';

$data = array('name' => $name, 'phone' => $phone, 'email' => $email,);



//include('amocrm/handler.php');



$subject .= ' с сайта такси-франшиза.рф';





// Функция отправки письма



function send_mail($mail, $subject, $text)

{

    global $config;

    mail($mail, $subject, $text, "Content-type: text/plain; charset=utf-8\r\n" . "X-Mailer: PHP/" . phpversion());

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



$subject2 = "Документы по франшизе"; 

$message2 ='Добрый день!<br>
Вы оставили заявку на нашем сайте Такси-Франшиза.рф<br><br>

Направляю файлы с нашей презентацией, где Вы найдете всю информацию о нашей франшизе "Такси Оскар".<br>
Мы нацелены на долговременное развитие проекта, поэтому помогаем нашим партнерам окупить бизнес и заработать чистую прибыль в максимально короткие сроки. И обязуемся каждого довести до результата.<br><br>

Присоединяйтесь к нашей команде!<br><br>

Ваш личный менеджер Антон: 8-916-614-91-59 (Viber/WhatsApp).<br>
Телефон офиса: 8-495-128-03-08<br><br>

Буду рад ответить на все Ваши вопросы!<br><br>

С Уважением,<br>
команда "Такси-Оскар"'; 

$filename_1 = "Презентация франшизы таксопарка Оскар.pdf";
$filepath_1 = "file/preza.pdf";

$filename_2 = "Диаграмма по запуску таксопарка.xlsx";
$filepath_2 = "file/diagram.xlsx";

$filename_3 = "фин план такси.xlsx";
$filepath_3 = "file/fin_plan.xlsx";


$user_email = $config['mail_from'];



$boundary = "--".md5(uniqid(time())); 
$mailheaders = "MIME-Version: 1.0;\r\n"; 
$mailheaders .="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n"; 
//$mailheaders .= "From: $user_email <$user_email>\r\n"; 
$mailheaders .= "Reply-To: $user_email\r\n"; 
$multipart = "--$boundary\r\n"; 
$multipart .= "Content-Type: text/html; charset=utf-8\r\n";
$multipart .= "Content-Transfer-Encoding: base64\r\n";    
$multipart .= "\r\n";
$multipart .= chunk_split(base64_encode($message2));

$fp_1 = fopen($filepath_1,"r"); 
$file_1 = fread($fp_1, filesize($filepath_1)); 
fclose($fp_1);


$fp_2 = fopen($filepath_2,"r");       
$file_2 = fread($fp_2, filesize($filepath_2)); 
fclose($fp_2);


$fp_3 = fopen($filepath_3,"r");       
$file_3 = fread($fp_3, filesize($filepath_3)); 
fclose($fp_3);


$message_part = "\r\n--$boundary\r\n"; 
$message_part .= "Content-Type: application/octet-stream; name=\"$filename_1\"\r\n";  
$message_part .= "Content-Transfer-Encoding: base64\r\n"; 
$message_part .= "Content-Disposition: attachment; filename=\"$filename_1\"\r\n"; 
$message_part .= "\r\n";
$message_part .= chunk_split(base64_encode($file_1));
$message_part .= "\r\n--$boundary\r\n"; 
$message_part .= "Content-Type: application/octet-stream; name=\"$filename_2\"\r\n";  
$message_part .= "Content-Transfer-Encoding: base64\r\n"; 
$message_part .= "Content-Disposition: attachment; filename=\"$filename_2\"\r\n"; 
$message_part .= "\r\n";
$message_part .= chunk_split(base64_encode($file_2));
$message_part .= "\r\n--$boundary\r\n"; 
$message_part .= "Content-Type: application/octet-stream; name=\"$filename_3\"\r\n";  
$message_part .= "Content-Transfer-Encoding: base64\r\n"; 
$message_part .= "Content-Disposition: attachment; filename=\"$filename_3\"\r\n"; 
$message_part .= "\r\n";
$message_part .= chunk_split(base64_encode($file_3));
$message_part .= "\r\n--$boundary\r\n"; 

$multipart .= $message_part;


if(strlen($email) > 0) {mail($email,$subject2,$multipart,$mailheaders);}



die($subject . '/' . $text);

?>