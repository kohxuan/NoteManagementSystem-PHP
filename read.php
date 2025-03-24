<?php
include 'db_1.php';

$sql = "SELECT * FROM notes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "<tr style='background-color: " . $row["color"] . ";'>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";

        $content = $row["content"];
        if (strlen($content) > 50) {
            $content = substr($content, 0, 50) . "...";
        }
        echo "<td>" . $content . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "<td>" . $row["updated_at"] . "</td>";
        echo "<td>
            <a href='update_form.php?id=" . $row["id"] . "'class='btn btn-outline-dark' style='margin-right: 5px;'>Edit</a>
            <a href='delete.php?id=" . $row["id"] . "'class='btn btn-outline-danger' style='margin-right: 5px;'>Delete</a>
            </td>";
        echo "</tr>";
    }
}
else {
    echo "No notes found.";
}

$conn->close();

?>