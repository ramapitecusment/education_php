<?php

    include("fuc.php");

    echo "<h2>Задачи на функции работы с массивами в PHP</h2>";

    echo "<h3>Работа с count</h3>";

    $arr = [1, 2, 3, 4, 5];
    echo count($arr);
    echo "<br><hr>";

    echo $arr[count($arr)-1];
    echo "<br><hr>";

    echo "<h3>Работа с in_array</h3>";

    echo in_array(3, $arr);
    echo "<br><hr>";

    echo "<h3>Работа с array_sum и array_product</h3>";

    echo 'Сумма массива = ' . array_sum($arr);
    echo "<br><hr>";

    echo 'Произведение массива = ' . array_product($arr);
    echo "<br><hr>";

    echo "<h3>Работа с range</h3>";

    $arr = range(1, 100);
    $arr = range('a', 'z');

    //echo $arr[2];

    echo 'Сумма массива от 1 до 100 = ' . array_sum(range(1,100));
    echo "<br><hr>";

    echo "<h3>Работа с array_merge</h3>";

    $arr = [1, 2, 3];
    $arr2 = ['a', 'b', 'c'];
    //array_merge($arr, $arr2);
    print_r(array_merge($arr, $arr2));
    echo "<br><hr>";

    echo "<h3>Работа с array_slice</h3>";

    $arr = [1, 2, 3, 4, 5];
    print_r(array_slice($arr, 1,3));
    echo "<br><hr>";

    echo "<h3>Работа с array_splice</h3>";
    array_splice($arr,1,2);
    print_r($arr);
    echo "<br><hr>";

    $arr = [1, 2, 3, 4, 5];
    print_r(array_splice($arr,1,3));

    echo "<h3>Работа с регистром символов</h3>";
    
    echo strtoupper('php');
    echo "<br><hr>";
    echo strtolower('PHP');
    echo "<br><hr>";
    echo ucfirst('london');
    echo "<br><hr>";
    echo lcfirst('London');
    echo "<br><hr>";
    echo ucwords('london is the capital of great britain');
    echo "<br><hr>";
    echo ucfirst(strtolower('LONDON'));
    echo "<br><hr>";

    echo "<h3>Работа с strlen</h3>";
    
    echo strlen('html css php');
    echo "<br><hr>";

    echo "<h3>Работа с substr</h3>";

    $password = "abcde";
    echo "Password {$password}";
    echo "<br><hr>";
    pswd($password);
    $password = "abcdef";
    echo "<br><hr>";
    echo "Password {$password}";
    echo "<br><hr>";
    pswd($password);
    echo "<hr><br>";
    echo substr('html css php', 0, 4);
    echo "<br><hr>";
    echo substr('html css php', 5, 3);
    echo "<br><hr>";
    echo substr('html css php', 9, 3);
    echo "<br><hr>";
    $str = "abcdef";
    echo "String {$str}";
    echo "<br><hr>";
    echo substr($str, -3);
    
    $str = 'http://www.yandex.ru';
    echo $str;
    echo "<hr><br>";
    httpc($str);
    echo "<hr><br>";
    $str = 'www.yandex.ru';
    echo "$str";
    echo "<hr><br>";
    httpc($str);
    echo "<hr><br>";
    
    $str = 'http://www.yandex.ru';
    echo "{$str}";
    echo "<hr><br>";
    httpc2($str);
    $str = 'https://www.yandex.ru';
    echo "{$str}";
    echo "<br><hr>";
    httpc2($str);
    $str = 'www.yandex.ru';
    echo "{$str}";
    echo "<br><hr>";
    httpc2($str);
    echo "<hr><br>";
    
    $str = 'narxoz.png';
    echo "{$str}";
    echo "<br><hr>";
    png($str);
    $str = 'narxoz.jpg';
    echo "{$str}";
    echo "<br><hr>";
    png($str);
    echo "<hr><br>";
    
    $str = 'narxoz.png';
    echo "{$str}";
    echo "<br><hr>";
    pngjpg($str);
    $str = 'narxoz.jpg';
    echo "{$str}";
    echo "<br><hr>";
    pngjpg($str);
    echo "<br><hr>";
    $str = 'narxoz.tiff';
    echo "{$str}";
    echo "<br><hr>";
    pngjpg($str);
    echo "<hr><br>";
    
    $str = 'abcdefg';
    echo "{$str}";
    echo "<br><hr>";
    str($str);
    echo "<br><hr>";
    $str = 'abcde';
    echo "{$str}";
    echo "<br><hr>";
    str($str);
    $str = 'abc';
    echo "{$str}";
    echo "<br><hr>";
    str($str);
    echo "<hr><br>";
    
    $str = '31.12.2013';
    echo $str;
    echo "<br><hr>";
    echo str_replace(".","-",$str);
    echo "<br><hr>";
    
    $str = 'abcbcacba';
    echo $str;
    echo "<br><hr>";
    echo str_replace(array("a","b","c"),array("1","2","3"),$str); 
    echo "<br><hr>";
    
    $str =  '1a2b3c4b5d6e7f8g9h0';
    echo $str;
    echo "<br><hr>";
    echo str_replace(array("1","2","3","4","5","6","7","8","9","0"),'',$str); 
    echo "<br><hr>";
    
    $str = 'abcbcacba';
    echo $str;
    echo "<br><hr>";
    $trans = array("a" => "1", "b" => "2", "c" => "3");
    echo "<br><hr>";
    echo strtr($str, $trans);
    echo "<br><hr>";
    
    $str = 'abcbcacba';
    echo $str;
    echo "<br><hr>";
    echo strtr($str,"abc","123");
    echo "<br><hr>";
    
    $str = 'abcbcacba';
    echo $str;
    echo substr_replace($str,"!!!",2,3);
    
    $str = 'abc abc abc';
    echo $str;
    echo "<br><hr>";
    echo strpos($str,'b');
    echo "<br><hr>";
    
    $str = 'abc abc abc';
    echo $str;
    echo "<br><hr>";
    echo strrpos($str,'b');
    echo "<br><hr>";
    
    $str = 'abc abc abc';
    echo $str;
    echo "<br><hr>";
    echo strpos($str,'b', 3);
    echo "<br><hr>";
    
    $str = 'aaa aaa aaa aaa aaa';
    echo $str;
    echo "<br><hr>";
    echo strpos($str,' ', strpos($str,' ')+1);
    echo "<br><hr>";
    
    $str = 'aaa..aaa';
    echo $str;
    echo "<br><hr>";
    doubledot($str);
    echo "<br><hr>";
    $str = 'aaa.aaa';
    echo $str;
    echo "<br><hr>";
    doubledot($str);
    echo "<hr><br>";
    
    $str = 'html css php';
    echo $str;
    echo "<br><hr>";
    $array = explode(' ',$str);
    foreach($array as $a){
        echo $a;
    }
    echo "<hr><br>";
    
    $array = ['html', 'css', 'php'];
    foreach($array as $a){
        echo $a;
    }
    echo implode(' ', $array);
    
    $str = '1234567890';
    echo $str;
    echo "<br><hr>";
    $array = str_split($str, 2);
    foreach($array as $a){
        echo $a." ";
    }
    echo "<hr><br>";
    
    $str = '1234567890';
    echo $str;
    $array = str_split($str, 1);
    foreach($array as $a){
        echo $a." ";
    }
    echo "<hr><br>";
    
    $str = '1234567890';
    echo $str;
    $array = str_split($str, 2);
    echo implode('-', $array);
    echo "<hr><br>";
    
    
    $str = 'Hello World!    ';
    echo $str;
    echo "<hr><br>";
    echo trim($str);
    echo "<hr><br>";
    
    $str = '/php/';
    echo $str;
    echo "<hr><br>";
    echo trim($str,'/');
    echo "<hr><br>";
    
    $str = 'слова слова слова. ПРИВЕТ';
    echo $str;
    echo "<hr><br>";
    echo rtrim($str, "абвгдеёжзийклмнопрстуфхцчшщэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЭЮЯ");
    echo "<hr><br>";
    
    $str = '12345';
    echo $str;
    echo "<hr><br>";
    echo strrev($str);
    echo "<hr><br>";
    
    $str = 'madam';
    echo $str;
    echo "<hr><br>";
    palindrom($str);
    $str = 'otto';
    echo $str;
    echo "<hr><br>";
    palindrom($str);
    $str = 'kayak';
    echo $str;
    echo "<hr><br>";
    palindrom($str);
    $str = 'nun';
    echo $str;
    echo "<hr><br>";
    palindrom($str);
    $str = 'level';
    echo $str;
    echo "<hr><br>";
    palindrom($str);
    echo "<hr><br>";
    
    $str = 'Hello World!';
    echo $str;
    echo "<hr><br>";
    echo str_shuffle($str);
    echo "<hr><br>";
    
    $str = 12345678;
    echo $str;
    echo "<hr><br>";
    echo number_format($str,0,'',' ');
    echo "<hr><br>";
    
    $str = 'html, <b>php</b>, js';
    echo $str;
    echo "<hr><br>";
    echo strip_tags($str);
    echo "<hr><br>";
    
    $str = '<strong>html</strong>, <b>php</b>, <i>js</i>';
    echo $str;
    echo "<hr><br>";
    echo strip_tags($str, "<b><i>");
    echo "<hr><br>";
    
    $str = 'html, <b>php</b>, js';
    echo $str;
    echo "<hr><br>";
    echo htmlspecialchars($str);
    echo "<hr><br>";
    
    echo "a = ".ord(a);
    echo "<hr><br>";
    echo "b = ".ord(b);
    echo "<hr><br>";
    echo "c = ".ord(c);
    echo "<hr><br>";
    echo "Space = ".ord(' ');
    echo "<hr><br>";
    echo "Latin ASCII ".ord(A)."-".ord(z);
    echo "<hr><br>";
    echo chr(33);
    echo "<hr><br>";
    
    echo "Latin CAPITAL ASCII ".ord(A)."-".ord(Z);
    echo "<hr><br>";
    
    uplow("a");
    echo "<hr><br>";
    uplow("A");
    echo "<hr><br>";
    uplow("я");
    echo "<hr><br>";
    
    $str = 'ab-cd-ef';
    echo $str;
    echo "<hr><br>";
    echo strchr($str, '-cd-ef');
    echo "<hr><br>";
    
    $str = 'ab-cd-ef';
    echo $str;
    echo "<hr><br>";
    echo strrchr($str, '-ef');
    echo "<hr><br>";
    
    $str = 'ab--cd--ef';
    echo $str;
    echo "<hr><br>";
    echo strstr($str, '--cd--ef');
    echo "<hr><br>";
    
    $str = 'var_test_text';
    echo $str;
    echo "<hr><br>";
    echo ucwords(str_replace('_',' ', $str));
    echo "<hr><br>";
    
    $array = ['213','21','6356','6','5','135'];
    foreach ($array as $a) {
        if(stristr($a,'3')){
            echo $a;
        }
    };
    echo "<hr><br>";
    
    cube(5);
    echo "<hr><br>";
    square(5);
    echo "<hr><br>";
    sum(5,3);
    echo "<hr><br>";
    week(1);
    echo "<hr><br>";
    eq(2,3);
    eq(2,2);
    echo "<hr><br>";
    sum10(2,3);
    sum10(6,6);
    echo "<hr><br>";
    neg(3);
    neg(-6);
    echo "<hr><br>";
    $array = range(1, 10);
    echo implode(' ', $array);
    echo "<hr><br>";
    echo "Average is:".array_sum($array)/count($array);
    echo "<hr><br>";
    
    
    $a = range(1, 100);
    echo array_sum($a);
    echo "<hr><br>";
    echo implode('<br>', $a);
    echo "<hr><br>";
    
    $a = array_fill(1, 10, 'x');
    echo implode(' ', $a);
    echo "<hr><br>";
    
    echo "Factorial of 3 is ".f(3);
    
    $a=range(1, 10);
    shuffle($a);
    print_r ($a);
    echo "<hr><br>";
    
    $num = 1234;
    echo $num;
    echo "<hr><br>";
    echo array_sum(str_split($num));
    echo "<hr><br>";
    
    $str='Hello World';
    echo $str;
    echo strrev(ucfirst(strrev($str)));
    
    $a=array(5, 6, 7, 8);
    $b=array_map('sqrt', $a);
    print_r($b);
    echo "<hr><br>";
    
    $a=range(1, 24);
    $b=range(a, x);
    print_r(array_combine($b, $a));
    echo "<hr><br>";
    
    echo strtotime(date('Y-m-d'));
    echo "<hr><br>";
    echo mktime(0, 0 , 0, 3, 1, 2025); 
    echo "<hr><br>";
    echo mktime(0, 0 , 0, 12, 31); 
    echo "<hr><br>";
    echo time() - mktime(13, 12, 59, 3, 15, 2000)." секунд прошло"; 
    
    $hour = time() - mktime(7, 23, 48);
    echo floor($hour / 3600)." часов прошло"; 
    echo "<hr><br>";
    echo date('Y-m-d H:i:s'); 
    echo "<hr><br>";
    
    echo date('Y-m-d').'<br>';
    echo "<hr><br>";
    echo date('d.m.Y').'<br>';
    echo "<hr><br>";
    echo date('d.m.y').'<br>';
    echo "<hr><br>";
    echo date('H:i:s');
    echo "<hr><br>";
    echo date('d.m.Y', mktime(0,0,0,2,12,2025));
    echo "<hr><br>";
    
    $week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда','Четверг', 'Пятница', 'Суббота'];
    $day = mktime(0,0,0,5,4,1998);
    $dn = date('w', $day);
    echo $week[$dn]; 
    echo "<hr><br>";
    
    $month = [1=>'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь','Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    $m = time();
    echo $month[date('n', $m)]; 
    echo "<hr><br>";
    
    $m = time();
    echo date('t', $m);
    echo "<hr><br>";
    
    $date = date_create('2025-12-31');
    date_modify($date, '2 days 1 month');
    date_modify($date, '3 days 1 year');
    date_modify($date, '-3 days');
    echo date_format($date, 'Y-m-d'); 
    echo "<hr><br>"; 
    
    $now = time();
    $new_year = mktime(12, 59, 59, 12, 31);
    echo floor(($new_year - $now)/60/60/24).'  дней осталось до Нового Года'; 
    echo "<hr><br>";
    
    $date = date_create(date('d-m-Y', time()));
    date_modify($date, '-100 days');
    echo $week[date_format($date, 'w')]; 
    echo "<hr><br>";
    
?>