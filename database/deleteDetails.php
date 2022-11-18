<?php

session_start();

require 'connection.php';

$id = $_POST['deleteId'];
$sql = "DELETE FROM `studentsDetails` WHERE `regNo`=$id";

$_SESSION['show'] = true;
if (mysqli_query($conn, $sql)) {
    $_SESSION["result"] = "Records deleted successfully";
} else {
    $_SESSION["result"] = "Could not deleted record: " . mysqli_error($conn);
}

header("Location: ../index.php");

mysqli_close($conn);
