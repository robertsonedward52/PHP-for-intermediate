<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constructor</title>
</head>
<body>

A constructor allows you to initialize an object's properties upon creation of the object. <br>

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
<br>
Notice that the construct function starts with two underscores (__)!
<br>
<br>

<?php
 class Car {
     public $name;
     public $color;

     // method 
     function __construct($name) {
         $this->name = $name;
     }
     function get_name() {
       return $this->name;
     }
 }

 $BWM = new Car("BWM");
 echo "The name of the car is: " .$BWM->get_name();

 // We see in the example below, that using a constructor saves us from calling the set_name()
 //  method which reduces the amount of code:
?>
<br> 
<br>

<?php
class Student {
    public $name;
    public $id;
    public $dep;

    // method 
    function __construct($name, $id, $dep) {
        $this->name = $name;
        $this->id = $id;
        $this->dep = $dep;
    }
    function get_name() {
       return $this->name;
    }
    function get_id() {
       return $this->id;
    }
    function get_dep() {
     return  $this->dep;
    }
}

$myObj = new Student("Edward", "001", "Computer Science");
echo "Hello!, my name is " . $myObj->get_name();
echo "<br>";
echo "And my ID is: " .$myObj->get_id();
echo "<br>";
echo "And my department is Information Technology " .$myObj->get_dep();

   

?>
</body>
</html>