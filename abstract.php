<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract PHP</title>
</head>
<body>
  
PHP - What are Abstract Classes and Methods? <br>
Abstract classes and methods are when the parent class has a named method, 
but need its child class(es) to fill out the tasks. <br>
<br>

An abstract class is a class that contains at least one abstract method. <br>
 An abstract method is a method that is declared, but not implemented in the code. <br>

An abstract class or method is defined with the abstract keyword:
<br>
<br>

Syntax
<br>
<?php
abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}
?>
<br>
<br>

<?php
// Parent class
abstract class School {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function demo() : string;
}

// Child Classes
class Faculties extends School {
    public function demo() : string {
        return "We're proud to be a programmer at $this->name";
    }
}

class Teachers extends School {
    public function demo() : string {
        return "Accredited school of thought in $this->name";
    }
}

class Classes extends School {
    public function demo() : string {
        return "Our classes are the best class to archieved your career in $this->name";
    }
}

// Create an object for the child classes
$Faculties = new Faculties("<b>Code Camp</b>");
echo $Faculties->demo();
echo "<br>";

$Teachers = new Teachers("<b>Liberia</b>");
echo $Teachers->demo();
echo "<br>";

$Classes = new Classes("<b>Web Development</b>");
echo $Classes->demo();
?>

<br>
<br>

Example Explained
The Faculites, Classes and Teachers, classes are inherited from the School class. <br>
This means Faculites, Teachers, and Classes classes can use the public <br>
$name property as well as the public __construct() method from the School <br>
class because of inheritance.

But, demo() is an abstract method that should be defined in all the child <br>
classes and they should return a string.
<br>
<br>


<?php
abstract class ParentClass {
    // Abstract method with argument 
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass {
    public function prefixName($name)  {
        if ($name == "Edward Robertson") {
            $prefix = "Mr.";
        }
        elseif($name == "Maxwell Robertson") {
            $prefix = "Sir";
        }
        else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}
// create an object for the class
$class = new ChildClass;
echo $class->prefixName("Edward Robertson");
echo "<br>";

echo $class->prefixName("Maxwell Robertson");
?>

</body>
</html>