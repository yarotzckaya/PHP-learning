<?php

// Даны два числа. Найти их сумму и произведение

function sum($x, $y)
{
	return $x + $y;
}

function multiply($x, $y)
{
	return $x * $y;
}


// Даны два числа. Найдите сумму их квадратов

function sumOfSquares($x, $y)
{
	$xSquare = $x * $x;
	$ySquare = $y * $y;

	return $xSquare + $ySquare;
}


// Даны три числа. Найдите их среднее арифметическое

function average($x, $y, $z){
	return ($x + $y + $z) / 3;
}

// модификация для неизвестного числа аргументов:

function averageMultiParams(...$params)
{
	return (array_sum($params) / count($params));
}


// Даны три ненулевых числа. Найдите всевозможные результаты деления суммы двух из них на оставшееся третье число

function divSumOfTwo($x, $y, $z)
{
	$result = [];

	$result[] = ($x + $y) / $z;
	$result[] = ($x + $z) / $y;
	$result[] = ($y + $z) / $x;

	return $result;
}



// Дано число. Увеличьте его на 30%, на 120%

function percents($n, $percents)
{
	$percent = ($n * $percents) / 100;
	return $n + $percent;
}


// Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа

function sumOfTwoPercents($n1, $n2)
{
	$percentOfN1 = ($n1 * 40) / 100;
	$percentOfN2 = ($n2 * 84) / 100;

	return $percentOfN1 + $percentOfN2;
}


// Дано трехзначное числа. Найдите сумму его цифр

function sumOfNumbers(int $n) : int
{
	return array_sum(str_split($n));
}

// Пример решения с сайта РНР720. Недостаток: число вводится как строка
// // число
// $number = "1547";	// почему число должно иметь тип строки??????
// // суда будем записывать сумму
// $sum = 0;
// // получаем сумму цифр числа
// // доступ к каждой цифре числа можно получить через оператор доступа элементов массива
// for($i = 0; $i <= strlen($number); $i++) {
//     $sum += $number[$i];
// }
// // выводим данные
// echo $number."<br/>";
// echo $sum;



// Дано трехзначное числа. Поменяйте среднюю цифру на ноль

function replaceSecondNumber($n, $position, $newValue) : int
{
	// модифицирую решение так, чтобы любую цифру в числе можно было поменять на любую другую
	$n = "$n";	// превращаем число в троку, чтобы обращаться к символам по отдельности
	$n[$position - 1] = $newValue;
	$n = intval($n);	// возвращаемый результат должен быть числом
	return $n;
}



// Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа

function numReverse($n)
{
	$n = "$n";		// конвертируем в строку для манипуляций	
	$result = array_reverse(str_split($n));	// строку разбиваем в массив и переставляем в обратном порядке значения
	return intval(implode("", $result));	// возвращаем результат как число
}
