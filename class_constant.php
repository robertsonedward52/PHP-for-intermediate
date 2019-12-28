<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>class_constant</title>
</head>
<body>
  
Constants cannot be changed once it is declared. <br>

Class constants can be useful if you need to define some constant data within a class. <br>

A class constant is declared inside a class with the const keyword. <br>
<br>
Class constants are case-sensitive. However, it is recommended to name the constants 
in all uppercase letters. <br>
<br>
We can access a constant from outside the class by using the class name followed <br>
 by the scope resolution operator (::) followed by the constant name, like here:

<br>
<br>

<?php
class Goodday {
    const LEAVE_COMMENT = "I am learnin PHP Class Constant";
}
echo Goodday::LEAVE_COMMENT;
?>

<br>
<br>
Or, we can access a constant from inside the class by using the self keyword followed
 by the scope resolution operator (::) followed by the constant name, like here:
 <br>
 <br>

 <?php
class Greeting {
    const Salutation = "Hey, my name is Edward and I am learning back-end";
    public function hello() {
        echo self::Salutation;
    }
}

$hello = new Greeting();
$hello->hello();
 ?>

</body>
</html>