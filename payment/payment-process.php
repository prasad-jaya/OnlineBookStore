<?php 
include_once '..\includes\dbconnect.php';
if(isset($_GET['items'])){
    $items = $_GET['items'];
    $total = $_GET['total'];
    
   /*  $status = 'PENDING';
    $sqll = "SELECT item_id FROM cart WHERE status ='$status';";//update query goes here
    $result = mysqli_query($conn,$sqll);
    $resultCheck = mysqli_num_rows($result); */  //set pending items to PAIED
       
        $date = date("Y/m/d");
        echo $date;
        $userid = '001';

        $sql = "INSERT into payment (user_id,amount,no_of_items,date) values('$userid',$total,$items,'$date');";
        $result = mysqli_query($conn,$sql);
        echo $sql;  


}
?>