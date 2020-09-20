<?php

class User
{
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$worker = new Worker();
$worker->setSalary(1000);
$worker->setName('Коля');
$worker->setAge(25);

echo $worker->getSalary() . "<br>";
echo $worker->getName() . "<br>";
echo $worker->getAge() . "<br>";

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Student();
$student->setName('Коля');
$student->setAge(25);
$student->setCourse(3);

echo $student->getName() . "<br>";
echo $student->getAge() . "<br>";
echo $student->getCourse() . "<br>";


class Programmer extends Worker
{
    private $langs = [];

    public function setLangs($arr)
    {
        foreach ($arr as $lang) {
            $this->langs[] = $lang;
        }
    }

    public function getLangs()
    {
        return $this->langs;
    }
}

$empl = new Programmer;
$empl->setLangs(['Ru', 'Eng', 'PHP']);
foreach ($empl->getLangs() as $lang) {
    echo $lang . '<br>';
}

class Driver extends Worker
{
    private $experience;
    private $category;

    function __construct()
    {
        
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

$driver = new Driver();
$driver->setName("Артур");
$driver->setCategory("B");
$driver->setExperience("5");

echo $driver->getName() . "<br>";
echo $driver->getExperience() . "<br>";
echo $driver->getCategory() . "<br>";