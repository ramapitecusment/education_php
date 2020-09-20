<?php

class Employee_task_1
{
    public $name;
    public $age;
    public $salary;
}

class Employee_task_2
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
    public function checkAge()
    {
        if ($this->age > 18) {
            return true;
        }
    }
}

class Employee_task_3
{
    public $name;
    public $salary;

    public function doubleSalary()
    {
        return $this->salary * 2;
    }
}

class Employee_task_4
{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

class User_task_1
{
    public $name;
    public $age;

    function setAge($newage)
    {
        $this->age = $newage;
    }
}

class User_task_2
{
    public $name;
    public $age;

    function setAge($newage)
    {
        if ($newage >= 18) {
            $this->age = $newage;
        }
    }
}

class User_task_3
{
    public $age;

    function setAge($age)
    {
        $this->age = $age;
    }

    function addAge($age)
    {
        $this->age += $age;
    }

    function subAge($age)
    {
        $this->age -= $age;
    }
}

class Rectangle
{
    public $width;
    public $height;

    function getSquare()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}
