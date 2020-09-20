<?php

require_once("classes.php");

$employee1 = new Employee_task_1();
$employee1->name = 'Иван';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee_task_1();
$employee2->name = 'Вася';
$employee2->age = 26;
$employee2->salary = 2000;

echo $employee1->salary + $employee2->salary . "<br><br>";
echo $employee1->age + $employee2->age . "<br><br>";


$obj1 = new Employee_task_2();
$obj2 = new Employee_task_2();

$obj1->salary = 2000;
$obj2->salary = 1500;

echo $obj1->getSalary() + $obj2->getSalary()  . "<br><br>";

$user = new User_task_2;
$user->age = 25;
$user->setAge(30);
echo $user->age  . "<br><br>";

$rectangle = new Rectangle();
$rectangle->height = 10;
$rectangle->width = 4;


echo $rectangle->getSquare()  . "<br><br>";
echo $rectangle->getPerimeter()  . "<br><br>";

$user = new User_task_3();
$user->setAge(21);
$user->addAge(3);
$user->subAge(2);

echo $user->age  . "<br><br>";

$empl1 = new Employee_task_4('Вася', 25, 1000);
$empl2 = new Employee_task_4('Петя', 30, 2000);
echo $empl1->salary + $empl2->salary  . "<br><br>";
?>