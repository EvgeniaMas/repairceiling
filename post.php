<?php

$name = trim($_POST['fullname']);
$phone = trim($_POST['phone']);
$sitename = "ПотолокМастер";
$recepient = "decor-potolok29@yandex.ru,nikolaevpave@mail.ru";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$type = $_POST['type'];
if ($type == 100){
	$vid = "Матовый";
}
if ($type == 200){
	$vid = "Глянец";
}
if ($type == 300){
	$vid = "Цветной";
}
$summa = $_POST['summa'];
if ($summa != "") {
$message = "Имя: $name \n
						Телефон: $phone \n
						Расчет стоимости: {$_POST['summa']}\n
						Вид потолка: $vid\n
						Обвод трубы: {$_POST['tube']}\n
						Площадь: {$_POST['space']}\n
						Лампы: {$_POST['lamps1']}\n
						Люстры: {$_POST['lamps2']}\n
						Гардина: {$_POST['angle_count']}\n
						";
}
else{
	$message = "Имя: $name \n
						Телефон: $phone \n";
}
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");