<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
</head>
<body>
The include (or require) statement takes all the text/code/markup 
that exists in the specified file and copies it into the file that uses the include statement. <br>
<br>
Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website  
<br>
<br>


The include and require statements are identical, except upon failure: <br>

require will produce a fatal error (E_COMPILE_ERROR) and stop the script <br>
include will only produce a warning (E_WARNING) and the script will continue <br>


Syntax <br>
include 'filename'; <br>
<br>
or <br>

require 'filename'; <br>


<?php
include "footer.php";
?>
<br>
<br>
<h1>Example 2</h1>
<p>let say we have a menu of links</p>
<br>

<br>

<?php
echo '<a href="form-complete.php">Home</a> -
<a href="test.php">About</> -
<a href="footer.php">Contact</a>';
?>

<br>
<br>
<p>All pages in the Web site should use this menu file. Here is how it can be done (we are using a 
<div> element so that the menu easily can be styled with CSS later):</p>

<br>
<br>

<h1>PHP include vs. require</h1>
The require statement is also used to include a file into the PHP code. <br>

However, there is one big difference between include and require; when a file is included <br>
with the include statement and PHP cannot find it, the script will continue to execute:
<br>
Example:
<br>
<br>

<h2>Welcome to the home page.</h2>

<?php
 include "noExist.php";
echo "Hey!,  .$x  $y.";
?>

<br>
<br>

<?php
require "footer.php";
echo "Please Do something Crazy!  $x $y.";

?>

</body>
</html>