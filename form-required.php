<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-Required</title>
</head>
<body>
In the following code we have added some new variables: $nameErr, $emailErr,
$genderErr, and $websiteErr. These error variables will hold error messages
for the required fields. We have also added an if else statement for each $_POST variable.  <br>
This checks if the $_POST variable is empty (with the PHP empty() function). If it is empty,
an error message is stored in the different error variables, and if it is not empty, 
it sends the user input data through the test_input() function:    






<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
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

<p><span class="error">Required field*</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Your Name: <input type="text" name="name">
<span class="error"> * <?php echo $nameErr;?></span> <br>

Your Email: <input type="email" name="email">
<span class="error"> * <?php echo $emailErr;?></span> <br>

Website: <input type="text" name="website">
<span class="error"> * <?php echo $websiteErr;?></span> <br>

Give your comment / feeback: <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
<br>
<br>
Gender: <input type="radio" value="Female" name="gender"> 
        <input type="radio" value="Male" name="gender">
        <input type="radio" value="other" name="gender"> <br>
<span class="error"> * <?php echo $genderErr;?></span>
<br>
<input type="submit" value="submit" name="submit">

</form>

<b>Your input field is:</b>
<?php
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