<h2>Работа с GET запросами в PHP</h2>

<h3>GET-запросы</h3>

<form action="" method="get">
    <input type="text" name="number">
    <br>
    <br>
    <input type="text" name="number2">
    <br>
    <br>
    <input type="submit" value="Отправить">
</form>

<?php
if (isset($_GET['number'])) {
    $number = (int) $_GET['number'];
    echo $number;
    echo "<br><hr>";
    echo $number ** 2;
    echo "<br><hr>";

    if (isset($_GET['number2'])) {
        $number2 = (int) $_GET['number2'];
        echo $number + $number2;
        echo "<br><hr>";
    }

    if ($_GET['number'] == 1) {
        echo 'Привет';
    } else if ($_GET['number'] == 2) {
        echo 'Пока';
    }
    echo "<br><hr>";
}
?>

<form action="" method="get">
    <input name="task1" type="checkbox">
    <br>
    <input type="submit" value="Отправить">
</form>

<?php
if (isset($_GET["task1"])) {
    echo 'Отмечен';
} else {
    echo 'Не отмечен';
}
?>

<h3>GET-запросы и массивы</h3>

<form action="" method="get">
    <input type="text" name="array_element">
    <br>
    <br>
    <input type="submit" value="Отправить">
</form>

<h3>GET-запросы и ссылки</h3>

<?php
$arr = [1, 2, 3, 4, 5];

if (isset($_GET['array_element'])) {
    $array_element = (int) $_GET['array_element'];
    if ($array_element <= sizeof($arr)) {
        echo $arr[$array_element - 1];
    }
}
?>

<form action="" method="get">
    <a href="?gets=1">11111</a>
    <a href="?gets=2">22222</a>
    <a href="?gets=3">33333</a>
</form>

<?php
if (isset($arr[$_GET['gets']])) {
    echo $_GET['gets'];
}
?>

<h3>Ссылки и циклы</h3>

<?php
echo $_GET['get1'];
echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    echo "<a href=\"?get1=$i\">link $i</a> ";
}

echo "<hr><br>";

echo $_GET['get2'];
echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    echo "<p><a href=\"?get2=$i\">link $i</a></p> ";
}

echo "<hr><br>";

echo $_GET['get3'];
echo '<br>';
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li><a href=\"?get3=$i\">link $i</a></li> ";
}
echo "</ul>";
?>

<h3>Ссылки и массивы</h3>

<?php
//echo $_GET['get4'];
$arr = ['a', 'b', 'c'];
if (isset($arr[$_GET['get4']])) {
    echo $arr[$_GET['get4']] . "<br>";
}
$num = 0;
foreach ($arr as $a) {
    echo "<a href='?get4=$num'>link $num</a><br>";
    $num++;
}
?>

<h2>Задачи на работу с формами в PHP</h2>
<h3>Работа с checkbox</h3>


<form action="" method="get">
    <input type="text" name="name1">
    <input name="task1" type="checkbox">
    <input type="submit" value="Отправить">
</form>

<?php
if (isset($_GET["name1"])) {
    $name = $_GET["name1"];
    if (isset($_GET["task1"])) {
        echo 'Привет, ' . $name;
    } else {
        echo 'Пока, ' . $name;
    }
}
?>

<form action="" method="get">
    <p>Какие языки вы знаете?</p>
    <input type="checkbox" name="lang[]" value="HTML"> HTML
    <input name="lang[]" type="checkbox" value="CSS"> CSS
    <input name="lang[]" type="checkbox" value="JS"> JS
    <input name="lang[]" type="checkbox" value="PHP"> PHP
    <input type="submit" value="Отправить">
</form>

<?php
//echo print_r($_GET['lang']);
if (isset($_GET['lang'])) {
    echo 'Вы знаете ' . implode(', ', $_GET['lang']);
} else {
    echo 'Вы ничего не знаете';
}
?>

<h3>Работа с radio переключателями</h3>

<form action="" method="GET">
    Знаете ли вы PHP?<br><br>
    <input type="radio" name="answer" value="0" checked>НЕТ
    <input type="radio" name="answer" value="1">ДА
    <input type="submit">
</form>

<?php
if (isset($_GET['answer']))
    if ($_GET['answer'] == 1)
        echo 'Вы знаете php';
    else
        echo 'Вы не знаете php';
echo "<br><hr>";

?>

<form action="" method="GET">
    Сколько Вам лет?<br>
    <input type="radio" name="years" value="1" checked>20<br>
    <input type="radio" name="years" value="2">20-25<br>
    <input type="radio" name="years" value="3">26-30<br>
    <input type="radio" name="years" value="4">более 30<br>
    <input type="submit">
</form>
<?php
if (isset($_GET['years']))
    switch ($_GET['years']) {
        case 1:
            echo 'тебе 20 лет';
            break;
        case 2:
            echo 'тебе от 20 до 25 лет';
            break;
        case 3:
            echo 'тебе от 26 до 30 лет';
            break;
        case 4:
            echo 'тебе более 30 лет';
            break;
    }
?>

    <h3>Select и multi-select</h3>

    <form action="" method="GET">
        <select name="Years">
            <option>20</option>
            <option>21-25</option>
            <option>26-30</option>
            <option>более 30</option>
        </select>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['Years'])) {
        echo 'Тебе ' . $_GET['Years'] . ' лет';
    }
    echo "<br><hr>";
    ?>


    <form action="" method="GET">
        <select multiple name="lang1[]">
            <option>html</option>
            <option>css</option>
            <option>php</option>
            <option>javascript</option>
        </select>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['lang1'])) {
        echo 'Ты знаешь ' . implode(', ', $_REQUEST['lang1']);
    }
    ?>