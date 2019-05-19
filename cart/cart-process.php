<?php 
include_once '..\includes\dbconnect.php';
if(isset($_GET['id'])){
    $item_id = $_GET['id'];
    //echo $book_id;

    $sql = 'DELETE FROM cart WHERE item_id = "'.$item_id.'";';
    $result = mysqli_query($conn,$sql);
   
    header("Refresh:0; url=my-cart.php");
    echo "<script type='text/javascript'>alert('Success');</script>";
    
}
?>