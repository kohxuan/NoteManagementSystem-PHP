<?php
session_start();

if (!isset($_SESSION['username'])) { //If no data in username
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Note Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        th,
        td {
            max-width: 150px;
            overflow: hidden;
            white-space: nowrap;
            /*text-overflow: ellipsis;*/
        }

        .container {
            overflow-x: auto;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(64, 92, 123);
            z-index: 999; /* Ensure it's above the page content */
            border-bottom: 2px solid lightgray;
            padding-bottom: 10px;
        }

        .content-container {
            padding-top: 75px; /* Adjust the padding as needed */
        }
    </style>
</head>

<body>
    <div class="fixed-header">
        <div class="container">
            <h2 style="color: white">Note Management System</h2>
            <a href="create_form.php" class="btn btn-outline-light">Create Note</a>
            <a href="logout.php" class="btn btn-outline-light float-right">Logout</a>
        </div>
    </div>
    <div class="container content-container">
        <table class="table" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>Note ID</th>
                    <th style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Title</th>
                    <th class="col-4" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Content</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'read.php';
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>