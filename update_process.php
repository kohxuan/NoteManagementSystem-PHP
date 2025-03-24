<?php
include 'db_1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $color = $_POST['color'];

    $sql = "UPDATE notes SET title = '$title', content = '$content', color='$color' WHERE id=$id";

    if ($conn->query($sql) === TRUE){
        header("Location: index.php"); //Redirect to the main page after successful insertion.
    }
    else{
        echo "Error updating note: " . $conn->error;
    }
}

$conn->close();
?>