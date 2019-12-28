<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
<h1>Next, create an HTML form that allow users to choose the image file they want to upload</h1>
<br>


Some rules to follow for the HTML form above:
<br>
Make sure that the form uses method="post"
The form also needs the following attribute: enctype="multipart/form-data". <br>
It specifies which content-type to use when submitting the form.
<br><br>
The type="file" attribute of the <input> tag shows the input field as a file-select control, <br>
with a "Browse" button next to the input control.
<br><br>

<form action="fileUPload.php" method="POST" enctype="multiparty/form-data">
    select image to upload:
    <input type="file" name="fileToUpload" id="fileTopUpload">
    <input type="submit" value="uplaod Image" name="submit">    
</form>

<br>
The form above sends data to a file called "upload.php", which we will create next.
<br>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// check if the image is actually ok or fake
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is a image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else {
        echo "File is not an image";
        $uploadOk = 0;
    }

    
    // check if size
    #Now, we want to check the size of the file. If the file is larger than 500KB,
    # an error message is displayed, and $uploadOk is set to 0:
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }

// Check if file already exists
# First, we will check if the file already exists in the "uploads" folder.
# If it does, an error message is displayed, and $uploadOk is set to 0:
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

    // allow certain file size 

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        $uploadOk = 0;
    } 

    // check if uplaod is set to zero 0 by error

    if ($uploadOk == 0) {
        echo "Sorry, file was not uploaded";
    }
    // check if everything is ok by trying to upload
    if ($move_upload_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "This" . basename($_FILES["fileToUpload"]["name"]) . "file has been uploaded";
    }
    else {
        echo "Sorry, there was a problem uploading the file.";
    }
}
?>
<br>
 

PHP script explained: <br>

$target_dir = "uploads/" - specifies the directory where the file is going to be placed <br>
$target_file specifies the path of the file to be uploaded <br>
$uploadOk=1 is not used yet (will be used later) <br>
$imageFileType holds the file extension of the file (in lower case) <br>
Next, check if the image file is an actual image or a fake image <br>
Note: You will need to create a new directory called "uploads" in the directory where "upload.php" file resides. <br>
The uploaded files will be saved there.

<br>
<br>






</body>
</html>