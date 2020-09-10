<?php
header('Content-Type: text/html; charset=utf-8');
include('mail.php');


//$name = $_POST["ticket_id"];
//$status = $_POST["status"];
//$name = $_POST["name"];
$ask = $_POST["type"];
$values = array();
parse_str($_POST['send'], $values);
if($ask == "ask"){
smtpmail('s.i.vasiliev@exd.ru', 's.i.vasiliev@exd.ru',' ЗАДАТЬ ВОПРОС c внешнего сайта',
'Вопрос с раздела: '.$values["qq"].' <br>
Адрес страницы: '.$values["url"].' <br>
ФИО: '.$values["client"].' <br>
Предприятие: '.$values["pred"].' <br>
Должность: '.$values["dol"].' <br>
e-mail: '.$values["out"].' <br>
Вопрос: '.$values["comment"]);
echo 'Спасибо за отзыв. Наши специалисты проверят его ближайшее время.';
}
if($ask == "error"){
smtpmail('web@exd.ru', 'web@exd.ru',' СООБЩЕНИЕ ОБ ОШИБКЕ c внешнего сайта',
'Зaпрос с раздела: '.$values["qq"].' <br>
Адрес страницы: '.$values["url"].' <br>
Ошибка: '.$values["mis"].' <br>
Комментарий: '.$values["comment"].' <br>
e-mail: '.$values["out"]);
echo 'Спасибо за отзыв. Наши специалисты проверят его ближайшее время.';
}
if($ask == "3d"){
var_dump($values);

smtpmail('sc340@mail.ru', 'sc340@mail.ru',' ЗАПРОС 3D c внешнего сайта',
'Зaпрос с раздела: '.$values["qq"].' <br>
Адрес страницы: '.$values["url"].' <br>
СВЕДЕНИЯ ОБ ОРГАНИЗАЦИИ<br>
Наименование: '.$values["naimorg"].' <br>
Телефон: '.$values["telorg"].' <br>
E-mail: '.$values["emailorg"].' <br>
ПОЧТОВЫЙ АДРЕС<br>
Почтовый индекс: '.$values["indad"].' <br>
Город: '.$values["gorad"].' <br>
Улица, дом: '.$values["ulad"].' <br>
КОНТАКТНАЯ ИНФОРМАЦИЯ<br>
ФИО: '.$values["fioinf"].' <br>
Должность: '.$values["dolinf"].' <br>
Телефон: '.$values["telinf"].' <br>
E-mail: '.$values["emailinf"].' <br>
Комментарий: '.$values["koment"]);
echo 'Спасибо за отзыв. Наши специалисты проверят его ближайшее время.';
}
if($ask == "2d"){
var_dump($values);

smtpmail('sc340@mail.ru', 'sc340@mail.ru',' ЗАПРОС 2D c внешнего сайта',
'Зaпрос с раздела: '.$values["qq"].' <br>
Адрес страницы: '.$values["url"].' <br>
СВЕДЕНИЯ ОБ ОРГАНИЗАЦИИ<br>
Наименование: '.$values["naimorg"].' <br>
Телефон: '.$values["telorg"].' <br>
E-mail: '.$values["emailorg"].' <br>
ПОЧТОВЫЙ АДРЕС<br>
Почтовый индекс: '.$values["indad"].' <br>
Город: '.$values["gorad"].' <br>
Улица, дом: '.$values["ulad"].' <br>
КОНТАКТНАЯ ИНФОРМАЦИЯ<br>
ФИО: '.$values["fioinf"].' <br>
Должность: '.$values["dolinf"].' <br>
Телефон: '.$values["telinf"].' <br>
E-mail: '.$values["emailinf"].' <br>
Комментарий: '.$values["koment"]);
echo 'Спасибо за отзыв. Наши специалисты проверят его ближайшее время.';
}
