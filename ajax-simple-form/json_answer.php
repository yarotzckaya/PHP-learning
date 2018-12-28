<?php

// преобразуем JSON-данные в массив
$arr = json_decode($_POST['json'], true);

// объединяем содержимое в строку
$name = trim(implode(" ", $arr));

$result = "Здравствуйте";
if(!empty($name)){
	$result .= ", $name";
}

$result .= "!";

// отдаем результат
echo htmlspecialchars($result);