<?php
include 'db.php';

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE library SET quantity='$quantity' WHERE id='$id'";

if ($conn->query($sql)) {
    echo "<h3>Book Quantity Updated Successfully.</h3><a href='index.php'>Back to Home</a>";
} else {
    echo "Update failed: " . $conn->error;
}

$conn->close();
?>
