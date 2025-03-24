<?php
include 'db_1.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM notes WHERE id = $id";

    if ($conn->query($sql) === TRUE){
        header("Location: delete_success.php");
    }
    else{
        echo "Error deleting note:" . $conn->error;
    }
}
else{
    echo "Invalid request.";
}

$conn->close();
?>