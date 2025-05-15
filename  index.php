<?php
include 'db.php';
$result = $conn->query("SELECT * FROM library");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
</head>
<body>
<h2>Add New Book</h2>
<form action="create.php" method="post" enctype="multipart/form-data">
    Book Title: <input type="text" name="book_title" required><br>
    Author Name: <input type="text" name="author_name" required><br>
    Book Cover: <input type="file" name="book_cover"><br>
    Genre: <input type="text" name="genre" required><br>
    Publication Year: <input type="number" name="publication_year" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    <input type="submit" value="Add Book">
</form>

<h2>Current Books List</h2>
<?php while ($row = $result->fetch_assoc()): ?>
    <p>ID: <?= $row['id'] ?> | Title: <?= $row['book_title'] ?> | Author: <?= $row['author_name'] ?> |
       Genre: <?= $row['genre'] ?> | Year: <?= $row['publication_year'] ?> | Quantity: <?= $row['quantity'] ?></p>
<?php endwhile; ?>

<h2>Update Book Quantity</h2>
<form action="update.php" method="post">
    Book ID: <input type="number" name="id" required><br>
    New Quantity: <input type="number" name="quantity" required><br>
    <input type="submit" value="Update Quantity">
</form>

<h2>Delete Book</h2>
<form action="delete.php" method="post">
    Book ID: <input type="number" name="id" required><br>
    <input type="submit" value="Delete Book">
</form>

</body>
</html>

<?php $conn->close(); ?>
