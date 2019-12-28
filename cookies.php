<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
Create Cookies With PHP <br>
A cookie is created with the setcookie() function. <br>

Syntax <br>
setcookie(name, value, expire, path, domain, secure, httponly); <br>
<br>

<html>
<body>

<?php
$cookie_name = "user";
$cookie_value = " Edward Robertson";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/") # 86400 = 1 day

?>
<br>

<?php
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie name" . $cookie_name . " is not set.";
}
else {
    echo "Cookie" . $cookie_name . " is set!<br>";
    echo "Value is " . $_COOKIE[$cookie_name];
}

// Note: The setcookie() function must appear BEFORE the <html> tag.

?>
<br>
<br>

Delete a Cookie <br>
To delete a cookie, use the setcookie() function with an expiration date in the past: <br>

<br>

<html>
<body>

<?php
# set the cookie expire hour to one hr ago
setcookie("user", "", time() - 3600);
?>


<?php
echo "Cookie user is deleted";
?>

<br>

Check if Cookies are Enabled <br>
The following example creates a small script that checks whether cookies are enabled. First, try to  <br>
create a test cookie with the setcookie() function, then count the $_COOKIE array variable: <br>
<br>

<?php
setcookie("test_cookie", "test", time() + 3600, "/");
?>

<?php
if (count($_COOKIE) > 0) {
    echo "Cookies are enabled";
}
else {
    echo "Cookies are disabled";
}
?>

</body>
</html>