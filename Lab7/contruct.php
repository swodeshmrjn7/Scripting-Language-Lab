<?php

class Person
{
    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Student extends Person
{
    public $roll;
    public $faculty;

    function __construct($name,$age,$roll,$faculty)
    {
        parent::__construct($name,$age);

        $this->roll = $roll;
        $this->faculty = $faculty;
    }

    function display()
    {
        echo "Name : ".$this->name."<br>";
        echo "Age : ".$this->age."<br>";
        echo "Roll : ".$this->roll."<br>";
        echo "Faculty : ".$this->faculty."<br>";
        echo "----------------------------<br>";
    }
}

// Display data for 20 students

for($i=1; $i<=20; $i++)
{
    $student = new Student(
        "Student".$i,
        18 + ($i % 5),
        100 + $i,
        "BCA"
    );

    $student->display();
}

?>