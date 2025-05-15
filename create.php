<?php
include 'db.php';

$book_title = $_POST['book_title'];
$author_name = $_POST['author_name'];
$genre = $_POST['genre'];
$publication_year = $_POST['publication_year'];
$quantity = $_POST['quantity'];

$book_cover = NULL;
if (isset($_FILES['book_cover']) && $_FILES['book_cover']['error'] == 0) {
    $book_cover = addslashes(file_get_contents($_FILES['book_cover']['tmp_name']));
}

$sql = "INSERT INTO library (book_title, author_name, book_cover, genre, publication_year, quantity) 
        VALUES ('$book_title', '$author_name', '$book_cover', '$genre', '$publication_year', '$quantity')";

if ($conn->query($sql)) {
    echo "<h3>Book Added Successfully.</h3><a href='index.php'>Back to Home</a>";
} else {
    echo "Add failed: " . $conn->error;
}

$conn->close();
?>
