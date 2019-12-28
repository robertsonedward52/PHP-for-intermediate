<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file-create-write</title>
</head>
<body>
    
<h1>PHP File Permissions </h1>
If you are having errors when trying to get this code to run, check that you
 have granted your PHP file access to write information to the hard drive.
 <br>
 <br>

 <h1>The fwrite() function is used to write to a file.</h1>
The first parameter of fwrite() contains the name of the file to write to and 
the second parameter is the string to be written.
<br>
<br>

<?php
$myfile = fopen("newfile.txt", "w") or die ("Unable to open file");
$txt = "Edward \n";
fwrite($myfile, $txt);
$txt = "HI! \n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<br>
<br>

Notice that we wrote to the file "newfile.txt" twice. Each time we wrote to the file
we sent the string $txt that first contained "Edward" and second contained "HI! ". <br>
After we finished writing, we closed the file using the fclose() function.

</body>
</html>