<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row" >
    <div style="display:flex">
    <?php
    include_once '..\includes\dbconnect.php';
    $status = 'PENDING';
    $sqll = "SELECT item_id FROM cart WHERE status ='$status';";
    $result = mysqli_query($conn,$sqll);
    $resultCheck = mysqli_num_rows($result);
    $no=0;
    $totprice=0;
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){          
            $item_id = $row['item_id'];
            
            $sql = "SELECT * FROM books_details WHERE book_id ='$item_id';";
            $result2 = mysqli_query($conn,$sql);
            $resultCheck2 = mysqli_num_rows($result);

            
            if($resultCheck2 > 0) {
                while ($row = mysqli_fetch_assoc($result2)){
                    $img = '../img/bo.png';
                    $id = $row['book_id'];
                    $name = $row['book_name'];
                    $price = $row['price'];

                    $result_card = '<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="'.$img.'" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">'.$name.'</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p>
                    <a type="button" href="cart-process.php?id='.$id.'" class="btn btn-danger">Remove</a>
                    <a type="button" href="payment-process.php?id='.$id.'" class="btn btn-success">Buy Now </a>
                    </div>
                </div>';
                
                print $result_card;
                
                }
                $no++;
                $totprice += $price;
                
            } 
        
        }
    }
    echo "NO of Items : " ;print $no;
    echo "NO of Items : " ;print $totprice;
    

    
    ?>
    </div>
    </div>
<?php
$buyall = '<a type="button" href="../payment/payment.php?items='.$no.'&total='.$totprice.'" class="btn btn-success">Buy Now</a>';      
print $buyall;
?>
    
    

</body>
</html>