<?php 
include_once '..\includes\dbconnect.php';
if(isset($_GET['id'])){
    $book_id = $_GET['id'];
    //echo $book_id;

    $sqll = 'SELECT * FROM books_details WHERE book_id = "'.$book_id.'";';
    $result = mysqli_query($conn,$sqll);
    $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){          
            $id = $row['book_id'];
            //$sql = "Insert into cart (item_id,status) values('$id','PENDING');";
            //$result = mysqli_query($conn,$sql);
            //header("Refresh:0; url=search.php");
        }
    }
    echo $id;
    $sql = "Insert into cart (item_id,status) values('$id','PENDING');"; //user id needs to add
    $result = mysqli_query($conn,$sql); 
    header("Refresh:0; url=search.php");
    echo "<script type='text/javascript'>alert('Success');</script>";
    
}
?>