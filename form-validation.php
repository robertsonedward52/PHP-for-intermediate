<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-validation</title>
</head>
<body>

<h1>PHP form validation</h1> <br>

<!-- When the form is submitted, the form data is sent with method="post".-->
<!--$_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.-->
<form  method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<!-- the htmlspecialchars convert special chars to html entities -->
 Name* <input type="text" name="name"> <br>
 Email* <input type="email" name="email"> <br>
 Website* <input type="text" name="website"> <br>
 Comment* <textarea name="comment" id="myCom" cols="20" rows="5"></textarea> <br>
 Gender* <input type="radio" value="Female" name="gender"> Female 
        <input type="radio" value="Male" name="gender"> Male
        <input type="radio" value="Other" name="gender"> Other<br>
    
        <input type="submit" value="submit">
</form>

<br>


<?php
// define the variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender =  test_input($_POST["gender"]);

}

function test_input($data) {

// Strip unnecessary characters (extra space, tab, newline) from the user input data trim() function
    $data = trim($data);

 // Remove backslashes (\) from the user input data with the PHP stripslashes() function
    $data = stripslashes($data);

    $data = htmlspecialchars($data);
    return $data;
}
?>

<br>

<h2>Your input is:</h2>
<br>
<?php
echo $name; 
echo '<br>';

echo $email; 
echo '<br>';

echo $comment;
echo '<br>';

echo $gender;
echo '<br>';

echo $website;
echo '<br>';

?>


<br>

Notice that at the start of the script, we check whether the form 
has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, <br>
then the form has been submitted - and it should be validated. If it has not been submitted,
 skip the validation and display a blank form.
</body>
</html>