<?php
session_start();
require './connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM userTable WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION["logged"] = true;
        $_SESSION["user"] = $username;
        $_SESSION['message'] = true;
        header('Location: ../index.php');
    }
    else{  
        $_SESSION['error'] = "Information Invalid! Enter valid values";
        header('Location: ../login.php');
    } 
}
