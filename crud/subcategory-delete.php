<?php
include 'connect.php';
session_start();
$login = $_SESSION["email"];

if ($login == true) {
} else {
    header('location:login.php');
}
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "Delete from student where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // 
        header('location:subcategory-display.php');
    } else {
        die(mysqli_error($con));
    }
}


