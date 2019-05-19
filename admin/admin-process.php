<?php 
include_once '..\includes\dbconnect.php';
if(isset($_POST['name'])){
    $book_id = $_POST['id'];
    $book_name_ = $_POST['name'];
    $price_ = $_POST['price'];
    //$NAME_ = $_POST['name'];
    //$USER = stripcslashes($USER);
    //echo $book_id;
    $sql = "UPDATE books_details SET book_name = '$book_name_', price = '$price_' WHERE book_id = '$book_id';";
    mysqli_query($conn,$sql);
    header("Refresh:0; url=admin_update.php");
} 
?>
