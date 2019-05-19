<?php
include_once '..\includes\dbconnect.php';
 $book_id = $_GET['book_id'];
 
 $sql = "DELETE FROM books_details WHERE book_id=$book_id";

if ($conn->query($sql) === TRUE) {
    return true;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>