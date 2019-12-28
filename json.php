<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Json</title>
</head>
<body>
    
PHP and JSON <br>
PHP has some built-in functions to handle JSON. <br>

First, we will look at the following two functions: <br>

json_encode() <br>
json_decode() <br>
<br>
<br>
<?php
$student = array("Edward" => 23, "Adolphus" => 18, "Maxwell" => 10);

echo json_encode($student);
?>

<br>
<br>

PHP - json_decode() <br>
The json_decode() function is used to decode a JSON object into a PHP object or an associative array. <br>
<br>

<?php
$jsonObj = '{"brown": 20, "peter": 23, "john": 30}';

var_dump(json_decode($jsonObj));
?>

<br>
<br>

Accessing the decoded values 
<br>

<?php
$myObj = '{"Paul": 30, "Johnson": 40, "Sieh": 50}';

$obj = json_decode($myObj);

echo $obj->Paul;
echo $obj->Johnson;
echo $obj->Sieh;
?>

<br>

<br>

PHP - Looping Through the Values <br>
You can also loop through the values with a foreach() loop: <br>
<br>

<?php
$obj2 = '{"Lectricia": 43, "Mary": 30, "Esther": 20}';

$output = json_decode($obj2);

foreach($output as $key => $value) {
    echo $key. "=>" . $value . "<br>";
}

?>





</body>
</html>