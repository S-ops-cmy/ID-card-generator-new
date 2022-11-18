<?php
session_start();

require 'connection.php';

if (isset($_POST['addDetails'])) {

    $currentDirectory = rtrim(getcwd(), "/database");
    $uploadDirectory = "/images/student_images/";
    $fileName = $_FILES['uploadFile']['name'];
    $fileTmpName  = $_FILES['uploadFile']['tmp_name'];

    if($fileName == NULL){
        $fileName = 'userDp.png';
    }

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);

    

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo " - An error occurred. Please contact the administrator.";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }



    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $reg = $_POST['reg'];
    $email  = $_POST['email'];
    $mobile  = $_POST['mobile'];
    $dob  = $_POST['dob'];
    $courseStart  = $_POST['courseStart'];
    $courseEnd  = $_POST['courseEnd'];
    $image  = $fileName;
    $address  = $_POST['address'];

    echo "";

    $sql = "INSERT INTO `studentsDetails` (`firstName`, `lastName`, `regNo`, `email`, `mobile`, `dob`, `courseStart`, `courseEnd`, `image`, `address`)  VALUES('$fname', '$lname', '$reg','$email', '$mobile', '$dob', '$courseStart', '$courseEnd', '$image', '$address') ;";
    
    $_SESSION['show'] = true;
    if (mysqli_query($conn, $sql)) {
        $_SESSION["result"] = "Record added successfully";
    } else {
        $_SESSION["result"] = "Error: " . $sql . " - " . mysqli_error($conn);
    }


    header("Location: ../index.php");

   

    mysqli_close($conn);
}
