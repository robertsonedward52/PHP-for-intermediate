<?php
# Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
// start a session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
  
Start a PHP Session <br>
A session is started with the session_start() function. <br>

Session variables are set with the PHP global variable: $_SESSION.
<br>
Now, let's create a new page called "demo_session1.php".  <br>
In this page, we start a new PHP session and set some session variables: <br>
<br>


<?php
// define a session variable 
$_SESSION["name"] = "Edward";
$_SESSION["color"] = "black";
echo "Session variables are set.";
echo "<br>";
?>


<br>
<br>

Another way to show all the session variable values for a user session is to run the following code:
<br>

<?php
/*
session_start();
*/
?>

<?php
print_r($_SESSION);
echo "<br>";
?>

<br>
<br>


<?php
/*
session_start();
*/
?>

<?php
// to change a session variables, just overwrite it
$_SESSION["favcolor"] = "blue";
print_r($_SESSION);
?>

<br>
<br>

Destroy a PHP Session <br>
To remove all global session variables and destroy the session, use session_unset() and session_destroy(): <br> <br>



<?php
# remove all session variables
session_unset();

# destroy the session 
session_destroy();

echo "All variable are now removed and session is destroyed";
?>
</body>
</html>