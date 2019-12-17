<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if ($imageFileType != "") {
    if (file_exists($target_file)) {
        echo "<script type='text/javascript'>alert('Sorry, file already exists.');</script>";
        $uploadOk = 0;
    }
}

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" || $imageFileType == "") {
    $uploadOk = $uploadOk;
} else {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {

    $imgurl = "";
    include "database/connection.php";
    $title = $_POST['titlename'];
    $description = $_POST['description'];

    if ($imageFileType != "") {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $imgurl = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO `events` (`id`, `date`, `title`, `imageurl`, `description`) VALUES (NULL,now(),'$title','$imgurl','$description')";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('New record created successfully');</script>";
        header("Location:Homepage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
