<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destructor</title>
</head>
<body>
    
A destructor is called when the object is destructed or the script is stopped or exited. <br>

If you create a __destruct() function, PHP will automatically call this function at the end of the script. <br>

Notice that the destruct function starts with two underscores (__)! <br>

The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:
<br>

Example
<br>
<br>
<?php
class Car {
    public $brand;
    public $color;
    public $model;

    // method 
    function __construct($brand, $color, $model) {
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
    }
    function __destruct() {
        echo "The and of the brand is <b>{$this->brand}</b>  and the color is <b>{$this->color}</b> 
         and the model is also <b>{$this->model}</b> .";
    }
}

$myCar = new Car("Audi", "Black", "2019");
?>
</body>
</html>