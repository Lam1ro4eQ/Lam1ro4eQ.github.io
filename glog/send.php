<?php
//Принимаем постовые данные
$otkuda=$_POST['otkuda'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$peach=$_POST['peach'];
$numberofpersons=$_POST['numberofpersons'];

//Тут указываем на какой ящик посылать письмо
$to = "123proalex890@gmail.com";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта";
$message = "Письмо отправлено из моей формы<br />
Откуда пришла заявка: ".htmlspecialchars($otkuda)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Количество человек: ".htmlspecialchars($numberofpersons)."<br />
Email: ".htmlspecialchars($email);
$headers = "From: glo.ru <no-reply@glo.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit;

?>
