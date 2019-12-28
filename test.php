<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
<?php
echo "<h1>Arrays and variables.</h1>";
echo "<br>";

$name[0] = "Maxwell";
$name[1] = "Elsi";
$name[2] = "James";
$name[3] = "Peter";
$name[4] = "Collins";

echo "Hello my name is " .$name[2];

echo "<br>";

$cars = array("BMW", "Audi", "Mercedi Benz", "Toyota", "Opel", "Nissan");

echo "The name of the cars is " . $cars[2] . ".";

echo "<br>";

echo "The first car name is " .$cars[0] . " and the second name is " . $cars[1] . " and the third is " . $cars[2] . "."; 

echo "<br>";
echo "<br>";

$arrLen = count($cars);

for ($x = 0; $x < $arrLen; $x++) {
    echo $cars[$x];
    echo "<br>";
}

?>


</body>
</html>