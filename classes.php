<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>
<body>
  
<h1>Classes and Objects in PHP</h1>
Define a Class <br>
A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). <br>
 All its properties and methods goes inside the braces: <br>
 <br>

 <?php
class Fruit {
    // properties
    public $name;
    public $color;

    // methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
       return $this->name;
    }
}
$apple =  new Fruit();
$banana = new Fruit();
$apple->set_name("Apple");
$banana->set_name("Banana");



echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
 ?>

<br>
<br>

<?php
class Car {
    public $brand;
    public $weight;
   
    // methods
    function set_brand($brand) {
        $this->brand = $brand;
}

function get_brand() {
  return $this->brand;
}

function set_weight($weight) {
    $this->weight = $weight;
}

function get_weight() {
  return $this->weight;
}

}

$model = new Car();
$model->set_brand("BWM");
$model->set_weight("Black");

echo "Name of the cars is " . $model->get_brand();
echo "The color for the cars is " . $model->get_weight();

?>

</body>
</html>