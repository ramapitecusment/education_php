<?php
	echo '<li>Hello World</li><br>';
	echo "<li>Let's get it started</li><br>";

	/*


	*/

	echo '<H2>Переменные в РНР</H2>';

	//1

	$a = 3;
	echo "a = $a";
	echo '<br>';

	//2

	$a = 10;
	$b = 2;
	echo 'a+b = ' . ($a+$b) . '; a-b = ' . ($a-$b).'; a*b = ' . ($a*$b).'; a/b = ' . ($a/$b) . '<br>';

	//3

	$c = 15;
	$d = 2;
	$result = $c + $d;
	echo "result = $result <br>";

	//4

	$a = 10;
	$b = 2;
	$c = 5;
	echo "a + b + c = "  . ($a + $b + $c) . '<br>';

	//5

	$a = 17;
	$b = 10;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo "result = $result <br><br>";


	echo '<hr><H2>Строковые переменные</H2>';

	//1

	$text = 'Привет, Мир! <br>';
	echo $text;

	//2

	$text1 = 'Привет, ';
	$text2 = 'Мир!';
	echo $text1 . $text2 . '<br>';

	//3

	$name = 'Рамиль';
	echo "Привет, $name! <br>";

	//3

	$age = 20;
	echo "Мне $age лет! <br><br>";

	/*


	*/

	echo '<hr><H2>Обращение к символам строки</H2>';

	//1

	$text = 'abcde';
	echo $text[0], $text[2], $text[4] . '<br>';

	//2

	$text[0] = '!';
	echo $text . '<br>';

	//3

	$num = '12345';
	echo "1 + 2 + 3 + 4 + 5 = " . ($num[0] + $num[1] + $num[2] + $num[3] + $num[4]);

	/*
	

	*/

	echo '<hr><H2>Арифметические операторы</H2>';

	//1

	echo 'Количество секунд в часе: ' . (60 * 60) . '<br>';

	//2

	echo 'Дата: ' . date('d.m.y h:i') . '<br>';
	$hour = 7;
	$minute = 19;
	$second = 19;
	echo "Время: $hour.$minute.$second" . '<br>';
	//echo date('d');
	//echo date('m');
	//echo date('s');

	//3

	$square = 15;
	$square2 = $square * $square;
	echo "$square в квадрате = $square2 <br><br>";

	/*


	*/

	echo '<hr><H2>Работа с присваиванием и декрементами</H2>';

	//1

	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo "В итоге: $var<br>";

	//2

	$text = 'Я';
	$text .= ' хочу';
	$text .= ' знать';
	$text .= ' PHP!<br>';
	echo $text;

	//3

	$var = 10;
	$var++;
	++$var;
	$var--;
	echo $var . '<br>';

	//4

	$var = 10;
	$var += 7;
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -= 15;
	echo $var . '<br><br>';

	/*


	*/

	echo '<hr><H2>Задачи на математические функции PHP</H2>';


	/*


	*/

	echo '<hr><H3>Работа с %</H3>';

	//1

	$a = 10;
	$b = 3;
	echo 'Остаток от деления а на b = ' . $a%$b  . '<br>';

	//2

	if ($a%$b!=1) {
		echo 'Делится';
	} else{
		echo 'Делится c остатком';
	}

	echo '<br><br>';

	/*


	*/

	echo '<hr><H3>Работа со степенью и корнем</H3>';

	//1

	$st = pow(2, 10);
	echo "2 в 10 степени = $st <br>";

	//2

	echo 'Квадратный корень из 245 = ' . sqrt(245) . '<br>';

	//3

	$numbers = array(4, 2, 5, 19, 13, 0, 10);
	$sum = 0;

	foreach ($numbers as $num) {
		$num *= $num;
		$sum += $num;
	}
	echo "Результат: " . sqrt($sum) . '<br><br>';

	/*


	*/

	echo '<hr><H3>Работа с функциями округления</H3>';

	//1

	$one = sqrt(379);
	echo round($one) . '<br>';
	echo round($one, 1) . '<br>';
	echo round($one, 2) . '<br>';

	//2

	$two = sqrt(587);
	$_1 = floor($two);
	$_2 = ceil($two);
	$_array = array(
		'floor' => $_1,
		'ceil' => $_2);
	echo $_array['floor'] . " " . $_array['ceil'] . '<br><br>';

	/*


	*/

	echo '<hr><H3>Работа с min и max</H3>';

	//1

	$mim_max = array(4, -2, 5, 19, -130, 0, 10);
	$_max = max($mim_max);
	$_min = min($mim_max);
	echo "Минимум = $_min; Максимум = $_max" . '<br><br>';


	/*

	
	*/

	echo '<hr><H3>Дополнительно</H3>';

	echo '<form action="" method="GET">
		<input type="text" name="city">
		<input type="submit">
		</form>';

	if (!empty($_REQUEST['city'])) {
		$city = $_REQUEST['city'];
		echo 'Ваш город: '.$city;
	}

?>