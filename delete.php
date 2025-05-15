<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM library WHERE id='$id'";

if ($conn->query($sql)) {
    echo "<h3>Book Deleted Successfully.</h3><a href='index.php'>Back to Home</a>";
} else {
    echo "Delete failed: " . $conn->error;
}

$conn->close();
?>
