<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form handling</title>
</head>
<body>

<form action="form-handling.php" method="post">
FirstName: <input type="text" name="fname"> <br>
Email: <input type="email" name="email"> <br>
<input type="submit">
</form>

Welcome <?php
 echo $_POST["fname"]; 
 ?><br>
Your email address is: <?php
 echo $_POST["email"]; 
 ?>
<br>


<h1>The same result could also be achieved using the HTTP GET method:</h1>

<form action="form-handling.php" method="get">
    <label for="text">Your Name* </label>
    <input type="text" name="name"> <br>
    <label for="psw">Password* </label>
    <input type="password" name="psw"> <br>
    <input type="submit">
</form>
<br>

Welcome here, your name is <?php
    echo $_GET["name"];
    ?> <br>

    And Your password is secure <?php
    $_GET["psw"];
    ?>
</body>
</html>