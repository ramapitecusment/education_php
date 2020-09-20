<?php

ini_set("display_errors", true);
error_reporting($E_ALL);

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

$query = "SELECT * FROM workers WHERE id > 0";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
var_dump($result);


$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){
    echo $data["id"] . " " . $data["name"] . " " . $data["age"] . " " . $data["salary"];
}

$query = "SELECT * FROM workers WHERE id=2";

$query = "SELECT * FROM workers WHERE id>2";

$query = "SELECT * FROM workers WHERE id>=2";

$query = "SELECT * FROM workers WHERE id != 2";

$query = "SELECT * FROM workers WHERE age=23";

$query = "SELECT * FROM workers WHERE salary=500";

$query = "SELECT * FROM workers WHERE name='Дима'";

$query = "SELECT * FROM workers WHERE salary=500 AND age=23";

$query = "SELECT * FROM workers WHERE salary=500 OR age=23";

$query = "SELECT * FROM workers WHERE salary>450 AND salary<900";

$query = "SELECT * FROM workers WHERE age>=23 AND age<=27";

$query = "SELECT name, age FROM workers WHERE id>0";

$query = "INSERT INTO workers SET name='Гена', age=30, salary=1000";

$query = "SELECT * FROM workers WHERE salary=500 AND age=23";

$query = "INSERT INTO workers (name, age, salary) VALUES ('Гена', 30, 1000)";

$query = "INSERT INTO workers (name, age, salary)
VALUES ('Гена', 30, 1000), ('Вася', 25, 500), ('Иван', 27, 1500)";

$query = "DELETE FROM workers WHERE id=6";

$query = "SELECT * FROM workers WHERE id>0 ORDER BY age";

$query = "SELECT * FROM workers WHERE id>0 ORDER BY age DESC";

$query = "SELECT * FROM workers WHERE id>0 LIMIT 2";

$query = "SELECT * FROM workers WHERE id>0 LIMIT 2,5";

$query = "SELECT * FROM workers WHERE id>0 ORDER BY id DESC LIMIT 2,5";

$query = "SELECT COUNT(*) as count FROM workers WHERE id>0"; 
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
$count = mysqli_fetch_assoc($result);

echo "<br><br>" . $count[1];

//В $count будет лежать массив 'count'=>кол-во:
var_dump($count);

$query = "SELECT * FROM workers WHERE name LIKE '%я'";

$query = "SELECT * FROM from";


