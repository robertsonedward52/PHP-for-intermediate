<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
</head>
<body>

Properties and methods can have access modifiers which control where they can be accessed. <br>

There are three access modifiers: <br>

public - the property or method can be accessed from everywhere. This is default <br>
protected - the property or method can be accessed within the class and by classes derived from that class <br>
private - the property or method can ONLY be accessed within the class <br>
<br>

<?php
class Car {
    public $name;
    private $color;
    protected $model;

    // method 
    protected function set_name($n) {    # function is protected
        $this->name = $n;
    }
    private function socket_color($n) {     // function is private 
        $this->color = $n;  
    }
}

$myObj = new Car();
$myObj->set_name("Satoshi");
$myObj->set_color("Red");
$myObj->set_model("2019");
?>

</body>
</html>