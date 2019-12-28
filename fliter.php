<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fliter</title>
    <style>
    table, td {
        border: 1px solid red;
        border-collapse: collapse;
        padding: 10px;
    }
    
    </style>
</head>
<body>
<h1>The PHP Filter Extension </h1> 
PHP filters are used to validate and sanitize external input.

<br>

<table>
    <tr>
        <td>File Name</td>
        <td>ID</td>
    </tr>

<?php
foreach (filter_list() as $id => $filter) {
    echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></td>";
}
?>
</table>

<br>
<br>

PHP filter_var() Function <br>
The filter_var() function both validate and sanitize data. <br>

The filter_var() function filters a single variable with a specified filter. It takes two pieces of data: <br>

The variable you want to check <br>
The type of check to use <br>
<br>



Sanitize a String <br>
The following example uses the filter_var() function to remove all HTML tags from a string:
<br>

<?php
$str = "<h1>Hello Vanilla Javascript</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr;
?>

<br>
<br>

Tip: filter_var() and Problem With 0
In the example above, if $int was set to 0, <br> 
the function above will return "Integer is not valid". To solve this problem, use the code below:
<br>
<br> 

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is Invalid");
}
else {
    echo("Integer is not Valid");
}

?>




</body>
</html>