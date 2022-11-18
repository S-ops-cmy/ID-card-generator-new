<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header('Location: login.php');
}

require './database/connection.php';

// fetching user details from the database
$sql = "SELECT * FROM studentsDetails";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="desc" content="Student ID Generator">
    <!-- External links -->
    <?php
    require 'components/headContent.php';
    ?>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>
    <script>
        
    </script>

</head>

<body>
    <header>
        <nav class="navbar justify-content-between px-5">
            <div class="navbar-brand">
                <p class="mb-0">Dashboard</p>
            </div>
            <div>
                <form action="database/logout.php" method="POST" class="logout-form">
                    <button type="submit">Log Out</button>
                </form>
            </div>
        </nav>
    </header>

    <?php
    if (isset($_SESSION["message"])) {
        echo '
                <div class="alert alert-success text-center alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    Login successful!  ' . $_SESSION["user"] . ' logged in.
                </div>
                ';

        unset($_SESSION["message"]);
    }
    ?>

    <?php
    if (isset($_SESSION["show"])) {
        echo '
                <div class="alert alert-info alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                   ' . $_SESSION["result"] . '
                </div>
                ';

        unset($_SESSION["show"]);
    }

    ?>


    <main id="container" class="mx-auto">
        <div class=" d-flex align-items-center justify-content-between">
            <h2 class="">Student Details</h2>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addStudent">
                <span class="p-3" data-toggle="tooltip" data-placement="top" title="Add Student">
                    <i class="bi bi-plus-circle" style="font-size: 1.5rem;"></i>
                </span>
            </button>
            <?php
            require 'components/addStudentModal.php';
            ?>
        </div>

        <table class="table table-hover details-table">
            <colgroup>
                <col style="width: 10%;">
                <col style="width: 35%;">
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Registration</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>

                <?php

                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno += 1;
                    echo '
                    <tr>
                    <td class="text-center">' . $sno . '</td>
                    <td>' . $row["firstName"] . ' ' . $row["lastName"] . '</td>
                    <td>' . $row["regNo"] . '</td>
                    <td>
                        <ul class="list-group justify-content-center list-group-horizontal">
                            <li class="list-group-item icon-list border border-0" data-toggle="tooltip" data-placement="top" title="Edit">
                                
                            <form action="index.php" method="POST">
                                <input type="hidden" name="editId" value=' . $row["regNo"] . '>
                                <button type="submit" class="btn px-1 py-0" name="edit">
                                <i class="bi bi-pencil" data-bs-toggle="modal" data-bs-target="#edit"></i>
                                </button>
                            </form>
                            </li>
                            <li class="list-group-item border border-0" data-toggle="tooltip" data-placement="top" title="Download">
                                <form action="index.php" method="POST">
                                <input type="hidden" name="downloadId" value=' . $row["regNo"] . '>
                                <button type="submit" class="btn px-1 py-0" name="download">
                                <i class="bi bi-download" data-bs-toggle="modal" data-bs-target="#downloadCard"></i>
                                </button>
                            </form>   
                             
                            
                            </li>
                            <li class="list-group-item border border-0" data-toggle="tooltip" data-placement="top" title="Delete">
                                <form action="database/deleteDetails.php" method="POST">
                                <input type="hidden" name="deleteId" value=' . $row["regNo"] . '>
                                <button type="submit" class="btn px-1 py-0" name="delete"><i class="bi bi-trash"></i></button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
                    ';
                } ?>

            </tbody>
        </table>


    </main>


    <?php


    if (isset($_POST['edit'])) {

        $reg = $_POST['editId'];

        $sql = "SELECT * FROM studentsDetails WHERE `regNo` = '$reg'";
        $r = $conn->query($sql);
        $data = mysqli_fetch_assoc($r);



        require 'components/editDetails.php';


        echo '
        <script>
        $(document).ready(function() {
            $("#edit").modal("show");
        });
        </script>
        ';
    }




    if (isset($_POST['download'])) {

        $re = $_POST['downloadId'];

        $sql = "SELECT * FROM studentsDetails WHERE `regNo` = '$re'";
        $res = $conn->query($sql);
        $dataa = mysqli_fetch_assoc($res);

        require 'components/downloadCard.php';

        echo '
        <script>
        
        $(document).ready(function() {
            $("#downloadCard").modal("show");
        });
        </script>
        ';
    }

    ?>
</body>


<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $("#showLink").hide();
    });

    // $(document).ready(function() {
    //     // Show the Modal on load
    //     $("#downloadCard").modal("show");

    // });

    function capture() {
        console.log("function called.")
        html2canvas(document.getElementById("img")).then((canvas) => {
            let box = document.querySelector("#download");
            box.download = "id-card.png";
            box.href = canvas.toDataURL("image/png");
            $('#showLink').show();
        });


    }

    // stops the resbumission of the form
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>