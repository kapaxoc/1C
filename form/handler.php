<?php

$admin_email = "test@mail.ru";
$letter_subject = "Данные пользователя с сайта ".$_SERVER["HTTP_REFERER"];
$message = "ФИО поьзователя: ".trim($_POST["fio"])."\nАдрес пользователя: ".trim($_POST["address"])."\nEmail пользователя: ".trim($_POST["email"])."\nТелефон пользователя: ".trim($_POST["phone"])."\nКомментарий пользователя: ".trim($_POST["comment"]);

if (empty(trim($_POST["fio"])) || empty(trim($_POST["email"]))) {
       echo("Вы не заполнили все необходимые поля");
}
elseif (strrpos($_POST["email"], "@gmail.com")) {
       echo("Регистрация пользователей с таким почтовым адресом невозможна :(");
}

$result = mail ($admin_email, $letter_subject, $message);
if ($result) {
       echo("Сообщение успешно отправлено");
}
else {
       echo("При отправке данных возникла ошибка");
}


?>