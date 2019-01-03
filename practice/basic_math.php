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

