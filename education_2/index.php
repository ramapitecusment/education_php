<?php

echo "<hr>";

$a = 0;
if ($a == 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a > 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a < 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a >= 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a <= 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a != 0) {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a == 'test') {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

if ($a === '1') {
	echo 'Верно';
} else {
	echo 'Неверно';
}

echo "<hr>";
echo "<br>";

$num = 55;
if($num >= 50){
	echo pow($num, 2);
} elseif ($num < 10 and $num > 30){
	echo 0;
} else{
	echo "Ошибка";
}

echo "<hr>";
echo "<br>";

$lang = 'en';
if($lang == 'en'){
	echo "Hello";
} elseif ($lang == 'ru'){
	echo "Привет";
} else{
	echo "Heil";
}

echo "<hr>";
echo "<br>";

$is_authorized = true;
if($lang == 'en'){
	echo "Ваш логин";
} else{
	echo "Ссылка на авторизацию";
}

echo "<hr>";
echo "<br>";

echo "<H2>Работа с empty и isset</H2>";

$a = null;
if(empty($a)){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

if(!empty($a)){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

if(isset($a)){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

if(!isset($a)){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

if (empty($a)) { 
	echo 'Введите $a!';
}
else{
	if ($a > 0) { 
		echo 'Больше нуля!'; 
	} else {
		echo 'Меньше нуля!'; 
	}
}

echo "<hr>";
echo "<br>";

echo "<H2>Работа с логическими переменными</H2>";

$var = true;
if($var){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

$var = true;
if(!$var){
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

echo "<H2>Работа с OR и AND</H2>";

$a = 5;
if ($a < 0 and $a< 5) {
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

if ($a < 0 or $a == 2) {
	echo $a += 2;
}else{
	echo $a /= 10;
}

echo "<hr>";
echo "<br>";

$a = 1;
$b = 3;
if ($a <= 0 or $b >= 3) {
	echo $a + $b;
}else{
	echo $a - $b;
}

echo "<hr>";
echo "<br>";

if (($a > 2 and a < 11) or ($b >= 6 and $b <14)) {
	echo "Верно";
}else{
	echo "Неверно";
}

echo "<hr>";
echo "<br>";

echo "<H2>На switch-case</H2>";

$num = 1;
$rezult = '';
switch ($num) {
	case 1:
	$rezult = 'зима';
		break;
	case 2:
	$rezult = 'лето';
		break;
	case 3:
	$rezult = 'осень';
		break;
	case 4:
	$rezult = 'весна';
		break;
	default:
		break;
}
echo $rezult;

echo "<hr>";
echo "<br>";

$day  = 20;
    if ($day  >=  1  and $day  < 11)
        echo 'Первая  декада ';
    elseif ($day >= 11 and $day < 21)
        echo 'Вторая  декада ';
    elseif ($day >= 21 and $day <= 31 )
        echo 'Третья  декада ';
    else
        echo 'Неправильно введено  число ';

echo "<hr>";
echo "<br>";

$month = 12;
    if ($month >= 3 and $month < 6)
        echo 'Весна';
    elseif ($month >= 6 and $month < 9)
        echo 'Лето';
    elseif ($month >= 9 and $month < 12)
        echo 'Осень';
    elseif ($month ==  1  or $month == 2 or $month == 12)
        echo 'Зима';
    else
        echo 'Неправильно введено  число ';

echo "<hr>";
echo "<br>";

$year = 2016;
    if (($year % 4 == 0 and $year % 100 !== 0) or $year % 400 == 0)
        echo 'Високосный год';
    else
        echo 'Не високосный год';

echo "<hr>";
echo "<br>";

$str = 'abcde';
   	if ($str[0] === 'a')
       echo 'Да';
   	else
       echo 'Нет';

echo "<hr>";
echo "<br>";

$str = '12345';
    if ($str[0] ==  1  or $str[0] == 2 or $str[0] == 3)
        echo 'Да';
    else
        echo 'Нет';

echo "<hr>";
echo "<br>";

$str = '257';
$summa = $str[0]+$str[ 1 ]+$str[2];
echo $summa;

echo "<hr>";
echo "<br>";

 $str = '468249';
if (($str[0] + $str[ 1 ] + $str[2]) == ($str[3] + $str[4] + $str[5]))
    echo 'Да';
else
    echo 'Нет';

echo "<hr>";
echo "<br>";

echo "<H2>Работа с модулем</H2>";

$a = 1;
$b = 3;
echo abs($a - $b);

echo "<hr>";
echo "<br>";



?>