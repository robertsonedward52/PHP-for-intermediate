<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance filter</title>
</head>
<body>
    <?php
 // variable to check 
 $int = 200;

 // min value 
 $min = 1;

 // max value
 $max = 200;

 if (filter_var($int, FILTER_VALIDATE_INT, array("option" =>  
 array("min_range" => $min, "min_range" => $max))) == false) {
     echo "variable is not within the legal range";
 }
 else {
     echo "variable is in the legal range";
 }
    ?>

    <br>
    <br>

    Validate IPv6 Address <br>
The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address: <br>
 <br>

 <?php
 // variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// validate ip as IPv6 
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) == false) {
    echo ("$ip is a valid IPv6 address");
}
else {
    echo ("$ip is not a valid IPv6 address");
}
 ?>

<br>
<br>

Validate URL - Must Contain QueryString <br>
The following example uses the filter_var() function to check if the variable $url is a URL with a querystring: <br>
<br>

<?php
// var to check
$url = "https://google.com";

// validate url 
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "$url is a valid url with a query string";
}
else {
    echo "$url is not a valid url with a query string";
}
?>

    
</body>
</html>