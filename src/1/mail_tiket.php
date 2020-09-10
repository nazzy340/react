<?
header('Content-Type: text/html; charset=utf-8');
include('mail.php');


//$name = $_POST["ticket_id"];
//$status = $_POST["status"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$text = $_POST["text"];

smtpmail('sc340@mail.ru', 'sc340@mail.ru','Тикет c внешнего сайта', "ФИО: $name
Почта: $mail
Текст:".$text);
echo 'Спасибо за отзыв. Наши специалисты проверят его ближайшее время.';


?>
