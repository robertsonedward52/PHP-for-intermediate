<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File-Handling</title>
</head>
<body>
    
<h1>PHP Manipulating Files </h1><br>
PHP has several functions for creating, reading, uploading, and editing files.
<br>

PHP readfile() Function  <br>
The readfile() function reads a file and writes it to the output buffer. <br>

Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this: <br>

AJAX = Asynchronous JavaScript and XML <br>
CSS = Cascading Style Sheets <br>
HTML = Hyper Text Markup Language <br>
PHP = PHP Hypertext Preprocessor <br>
SQL = Structured Query Language <br>
SVG = Scalable Vector Graphics <br>
XML = EXtensible Markup Language <br>
<br>


<?php
// The first parameter of fopen() contains the name of the file to be opened and
// the second parameter specifies in which mode the file should be opened. 

$myfile = fopen("webdictionary.text", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.text"));

fclose($myfile);
// The fclose() requires the name of the file (or a variable that holds the filename) we want to close:

/// The fread() function reads from an open file.
// The first parameter of fread() contains the name of the file to read 
// from and the second parameter specifies the maximum number of bytes to read.
// The following PHP code reads the "webdictionary.txt" file to the end:


?>
<br>

<br>
<br>
<br>


<?php
$myfile = fopen("webdictionary.text", "r") or die("Unable to open file");

echo fgets($myfile);
// The fgets() function is used to read a single line from a file.
fclose($myfile);
?>

<br>
<br>

<h1>PHP Check End-Of-File - feof()</h1>
<?php 

$myfile = fopen("webdictionary.text", "r") or die("unable to open file");

//output one line untile the end of the line
while (!feof($myfile)) {
    echo fgets($myfile) ."<br>";
}
fclose($myfile);
?>

<br>
<br>

<?php
$myfile = fopen("webdictionary.text", "r") or die ("unable to open file");

while (!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);
?>



</body>
</html>