<?php


// Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30

function changeValueByIfStatement($n)
{
	if ($n > 10) {		// если n будет равен 10 - от него все равно отнимут 10
		$n += 100;
	} else {
		$n -= 30;
	}

	return $n;
}



// Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза

function multiplyIfOdd($n)
{
	if ($n % 2 == 0) {
		$n /= 2;
	} else {
		$n *= 3;
	}

	return $n;
}



// Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка"

function numberSwithcValues($n)
{
	switch ($n) {
		case ($n >= 50):
			return $n * $n;
			break;
		case ($n > 10 && $n < 30):
			return 0;
			break;
		default:
			return "Ошибка";
	}
}



// Дано два числа. Вывести наибольшее из них

function biggerNum($n1, $n2)
{
	switch ($n1 <=> $n2) {
		case 0:
			return "Числа равны";
			break;
		case -1:
			return $n2;
		case 1:
			return $n1;
	}
}



// Дано два числа. Вывести 'YES', если они отличаются на 100, иначе вывести 'NO'

function difference($n1, $n2, $difference)
{
	// я модифицировала пример так, чтобы разница могла быть переменной
	if(($n1 - $n2 == $difference) || ($n2 - $n1 == $difference)){
		return "YES";
	} else {
		return "NO";
	}
	// более продвинутое решение: с использованием модуля числа:

	//return (fabs($n1 - $n2) == $difference) ? "YES" : "NO";
}



// Дано два числа. Вывести 'YES', если они отличаются не более чем на 20, иначе вывести 'NO'

function differenceMoreThan($n1, $n2, $difference)
{
	if ((abs($n1 - $n2) <= $difference) || (abs($n2 - $n1) <= $difference)) {
		return "YES";
	} else {
		return "NO";
	}
}



// Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует

function monthDetect($n)
{
	switch ($n) {
		case ($n <= 0):
			echo "Error";
			break;
		case ($n < 3 || $n == 12):
			echo "Winter";
			break;
		case ($n < 6):
			echo "Spring";
			break;
		case ($n < 9):
			echo "Summer";
			break;
		case ($n < 12):
			echo "Autumn";
			break;
		default :
			echo "Error";
	}
}



// В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных

function theBiggestNumber($n)
{

	$numberString = "$n";
	$numberArray = str_split($numberString);
	rsort($numberArray);

	return $numberArray[0] * 100 + $numberArray[1] * 10 + $numberArray[2];

	// арифметический способ:
	// $result = [];
	// $result[0] = intdiv($n, 100);
	// $result[1] = intdiv(($n % 100), 10);
	// $result[2] = $n % 10;
	// rsort($result);
	// return $result[0] * 100 + $result[1] * 10 + $result[2];
}

