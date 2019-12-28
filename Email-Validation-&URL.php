<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Validation & URL</title>
</head>
<body>
The preg_match() function searches a string for pattern,
 returning true if the pattern exists, and false otherwise. 
 <br> <br>

 PHP - Validate E-mail <br>
The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.
<br><br>
In the code below, if the e-mail address is not well-formed, then store an error message:
<br><br>
$email = test_input($_POST["email"]);<br>
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {<br>
  $emailErr = "Invalid email format";<br>
}
<br>
<br>
PHP - Validate URL<br>
The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:
<br>
$website = test_input($_POST["website"]);<br><br>
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {<br>
  $websiteErr = "Invalid URL";
}
<br>
<br>

PHP - Validate Name, E-mail, and URL <br>
Now, the script looks like this: <br>
<br><br>



<?php
// defines a variable with empty space 
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $comment = $gender = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    }
    else {
        $nameErr = test_input($_POST["name"]);
        // check if name contains letters and whitespace 
        if(!preg_match("/^[a-zA-z ] *$/", $name)) {
            $nameErr = "Only letters and whitespace are allow";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $emailErr = test_input($_POST["email"]);

        // check if email is well-form 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid format";
        }
    }

    if (empty($_POST["website"])) {
        $websiteErr = "";
    }
    else {
        $websiteErr = test_input($_POST["website"]);
        // check if the website is valid 
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $websiteErr)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    }
    else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender required";
    }
    else {
        $genderErr = test_input($_POST["gender"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"> 
<span class="error"> * <?php echo $nameErr?></span>
<br>
Email: <input type="email" name="email"> 
<span class="error"> * <?php  echo $emailErr?></span>
<br>
website: <input type="text" name="website">
<span class="error"> * <?php echo $websiteErr?></span>
<br>
Comment: <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
<br><br>
Gender:
<br><br>
<input type="radio" name="female" value="gender"> Female
<input type="radio" name="male" value="gender"> Male
<input type="radio" name="other" value="gender"> Other
<br>
<span class="error"> * <?php echo $genderErr;?></span>
  <br><br>
<input type="submit" value="submit" name="submit">
</form>
  <br><br>
<?php
echo "<h1>YOur input is</h1>";
echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;

?>



</body>
</html>