<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interitance</title>
</head>
<body>

<h1>PHP Inheritance</h1>
  Inheritance in OOP = When a class derives from another class. <br>
<br>
The child class will inherit all the public and protected properties and methods  <br>
from the parent class. In addition, it can have its own properties and methods. 
<br>
<br>

<?php 
class Students {
    public $name;
    public $age;
    public $address;
    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
    public function intro() {
        echo "The name of the student is: {$this->name} and age is {$this->age}.";
    }
}

// Teacher is inherited from Students 
class Teacher extends Students {
 public function detail() {
     echo "We are the teachers.";
 }
} 

$teacher = new  Teacher("Edward", 23, "Kantstrasse 6A");

echo $teacher->intro();
echo $teacher->detail();

// This means that the Strawberry class can use the
//  public $name and $color properties as well as the public __construct()
//  and intro() methods from the Fruit class because of inheritance.
// The Strawberry class also has its own method: message().
?>

<br>
<br>
PHP - The final Keyword <br>
The final keyword can be used to prevent class inheritance or to prevent method overriding.
<br>
The following example shows how to prevent class inheritance: <br>


<?php
/*
final class Fruit {
    // some code 
}
// will result in error
class Person extends Fruit {
    // some code here can be use
}
*/
?>


</body>
</html>