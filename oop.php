<?php

class Student
{
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Method
    public function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age;
    }
}

// Creating an object
$student1 = new Student("Ram", 20);

// Calling method
$student1->display();

?>
