<?php
include "database/connection.php";
if (!isset($_SESSION)) {
    session_start();
}
$useremail = "";
$userpass = "";
if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
}
if (isset($_POST['password'])) {
    $userpass = $_POST['password'];
}
$sql = "SELECT * FROM admin_login where email = '$useremail'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($useremail == $row["email"] && $userpass == $row["password"]) {
        $_SESSION['email'] = $useremail; // to identify user on another page
        header("Location:Homepage.php");
    } else {
        echo "<script> alert('Invalid Credentials, please try again')</script>";
    }
} else {
    echo "0 results";
}
