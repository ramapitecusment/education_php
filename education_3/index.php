<?php

	$arr=['a', 'b', 'c'];
	echo "<pre>";
		echo var_dump($arr);
	echo "</pre>";

	echo "<br><hr>";

	$arr=['a', 'b', 'c', 'd'];
	echo "$arr[0] + $arr[1] <br>";
	echo "$arr[2] + $arr[3]";

	echo "<br><hr>";

	$arr=[2, 5, 3, 9];
	$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
	echo $result;
	echo "<br><hr>";

	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;

	echo "<H2>Ассоциативные массивы</H2>";

	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr['c'];
	echo "<br><hr>";
	echo array_sum($arr);
	echo "<br><hr>";

	$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
	echo "Зарплата Пети: ". $arr['Петя']. "\nЗарплата Коли: " . $arr['Коля'];
	echo "<br><hr>";

	$arr = [1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	$day = 5;
	echo $arr[$day];
	echo "<br><hr>";

	echo "<H2>Многомерные массивы</H2>";

	$arr = [
		'cms'=>['joomla', 'wordpress', 'drupal'],
		'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
	];

	echo $arr['cms'][0] . "\t";
	echo $arr['cms'][2] . "\t";
	echo $arr['colors']['green'] . "\t";
	echo $arr['colors']['red'] . "\t";
	echo "<br><hr>";

	$arr = [
		'ru'=>[1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
		'en'=>[1=>'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
	];
	echo $arr['ru'][1];
	echo $arr['en'][3];
	echo "<br><hr>";

	$lang = 'en';
	$day = 3;
	$arr = [
		'ru'=>[1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
		'en'=>[1=>'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
	];
	echo $arr[$lang][$day];
	echo "<br><hr>";

	echo "<H2>Работа с foreach</H2>";

	$arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $key => $value) {
		echo $value . "\t";
	}
	echo "<br><hr>";

	$result = 0;
	$arr = [1, 2, 3, 4, 5];
	foreach ($arr as $key => $value) {
		$result += $value;
	}
	echo $result . "<br><hr>";

	echo "<H2>Работа с ключами</H2>";

	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
	foreach ($arr as $key => $value) {
		echo "$key - $value<br>";
	}
	echo $result . "<br><hr>";

	$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя' =>'400'];
	foreach ($arr as $key => $value) {
		echo "$key - зарплата $value долларов. <br>";
	}
	echo "<br><hr>";

	echo "<H2>Циклы while и for</H2>";

	while ($i++<100) {
		echo "$i<br>";
	}
	echo "<br><hr>";

	for ($i=1; $i <= 100; $i++) { 
		echo "$i<br>";
	}
	echo "<br><hr>";

	$i = 2;
	while ($i<100) {
		echo "$i<br>";
		$i+=2;
	}
	echo "<br><hr>";

	for($i=2; $i<=100; $i+=2){
    	echo "$i<br>";
	}
	echo "<br><hr>";

	echo "<H2>Задачи</H2>";

	$arr = [2, 5, 9, 15, 0, 4];
	foreach ($arr as $value) {
		if ($value < 10 and $value >3) {
			echo "$value<br>";
		}
	}
	echo "<hr>";

	$result = 0;
	$arr = [2, -5, 9, -15, 0, 4];
	foreach ($arr as $value) {
		if ($value > 0) {
			$result += $value;
		}

	}
	echo $result . "<br><hr>";

	$arr = ['10', '20', '30', '50', '235', '3000'];
	foreach ($arr as $value) {
		if ($value[0] == 1 or $value[0] == 2 or $value[0] == 5) {
			echo $value . "<br>";
		}
	}
	echo "<hr>";

	$result = "";
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr as $value) {
		$result .= "-$value";
	}
	echo $result ."<br><hr>";

	$arr = [1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($arr as $key => $value) {
		if ($key < 6) {
			echo "$value<br>";
		} else{
			echo "<b>$value</b><br>";
		}
	}
	echo "<hr>";

	$day = 5;
	$arr = [1=>'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($arr as $key => $value) {
		if ($key != 5) {
			echo "$value<br>";
		} else{
			echo "<i>$value</i><br>";
		}
	}
	echo "<hr>";

	$bmw = [
		"model" => "Х5",
		"speed" => 120,
		"doors" => 5,
		"year" => 2006
	];

	$toyota = [
		"model" => "Camry",
		"speed" => 130,
		"doors" => 4,
		"year" => 2007
	];

	$opel  = [
		"model" => "Corsa",
		"speed" => 140,
		"doors" => 4,
		"year" => 2007
	];

	echo $bmw["model"] . '-' . $bmw["speed"] . '-' . $bmw["doors"] . '-' . $bmw["year"] . "<br>";
	echo $toyota["model"] . '-' . $toyota["speed"] . '-' . $toyota["doors"] . '-' . $toyota["year"] . "<br>";
	echo $opel["model"] . '-' . $opel["speed"] . '-' . $opel["doors"] . '-' . $opel["year"] . "<br>";

	echo "<hr>";

	$result = 0;
	$num = "123";
	for($i = 0; $i <= strlen($num); $i++) {
    	$result += (int) $num[$i];
	}
	echo $result . "<hr>";

	$a = array();
	for ($i = 0; $i < 10; $i++) {
		$a[] = rand(1,100);
		echo $a[$i] . ' ';
	}
	echo "<br>";
	$max = array_search(max($a),$a);
	$min = array_search(min($a),$a);
	list($a[$max],$a[$min]) = array($a[$min],$a[$max]);
	
	echo "\n";

	for ($i = 0; $i < 10; $i++) {echo $a[$i] . ' ';}

	echo "<br><hr>";

	$a = array();
	$result = 1;
	for ($i = 0; $i < 10; $i++) {
		$a[] = rand(1,15);
		$result *= $a[$i];
		//echo "$a[$i] ";
	}
	echo $result . "<br><hr>";

	$n = 10;
	$s = 0;
	$n_ = 1;
	$eq_s = '';
	 
	while( $n_ <= $n ) {
	    $s += pow($n_, $n_);
	    $eq_s .= "$n_^$n_".( $n_ < $n ? ' + ' : '');
	    $n_ ++ ;
	}
	echo "$eq_s = $s" . "<br><hr>";







