<?php
include 'db_1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $color = $_POST['color'];

    $sql = "INSERT INTO notes (title, content, color) VALUES ('$title', '$content', '$color')";

    if ($conn->query($sql) === TRUE){
        header("Location: index.php"); //Redirect to the main page after successful insertion.
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>