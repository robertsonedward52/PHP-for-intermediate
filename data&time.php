<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date && Time</title>
</head>
<body>
<h1>The PHP date() function formats a timestamp to a more readable date and time.</h1> <br>

Syntax <br>
date(format,timestamp) <br>

<br> 
<?php 
echo "this is the date of ". date("Y/m/d") . "<br>";
echo "this is the date of ". date("Y.m.d") . "<br>";
echo "This is the data of ". date("Y-m-d") . "<br>";
?>

<br>

Use the date() function to automatically update the copyright year on your website:
<br>

© 2019 - <?php echo date("Y");?>
<br>

Get a Time <br>
Here are some characters that are commonly used for times: <br>

H - 24-hour format of an hour (00 to 23) <br>
h - 12-hour format of an hour with leading zeros (01 to 12) <br>
i - Minutes with leading zeros (00 to 59) <br>
s - Seconds with leading zeros (00 to 59) <br>
a - Lowercase Ante meridiem and Post meridiem (am or pm) <br>
<br>
<?php
echo "Today's date is " . date("h-i-sa");
?>
<br>

Get Your Time Zone <br>
If the time you got back from the code is not correct, <br>
it's probably because your server is in another country or set up for a different timezone.
<br>
<br>

<?php
date_default_timezone_set("America/New_York");
echo "The default date of America is " . date("h.i.sa");

?>
<br>

Create a date with a MKtime() <br>

The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains <br>
the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified. <br>
<br>
<br>
<?php
$d=mktime(11, 29, 54, 59, 06, 2020);
echo  "the futur time is " . date("Y-m-d h:i:sa", $d);
?>
<br>

The PHP strtotime() function is used to convert a human readable <br>
date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
<br>
<br>
<?php
$t=strtotime("10:20pm March 14, 2014");

echo "Created date is " . date("Y-m-d h:i:sa", $t);

?>

<br>

the previous example can also be written as the following:
<br><br>
<?php
$d=strtotime("Next Week");
echo "The time for the forth coming week is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<br>

However, strtotime() is not perfect, so remember to check the strings you put in there.
<br>
<br>
<?php
$startDate = strtotime("next month");
$endDate = strtotime("+4 weeks", $startDate);

while ($startDate < $endDate) {
    echo date("M d", $startDate) . "<br>";
    $startDate = strtotime("+2 days", $startDate);
}
?>

</body>
</html>