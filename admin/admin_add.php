
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">  
<form action="admin_add.php" method="POST">
    <h3 >Add New Items</h3>
    <div class="form-group">
        <label for="exampleInputPassword1">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Book Name">
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
    </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div> 
 
</body>
</html>

<?php

   include_once '..\includes\dbconnect.php';
   
   if(isset($_POST['book_name'])){

    $BOOK_NAME = $_POST['book_name'];
    $PRICE =  $_POST['price'];
    echo $PRICE;

    $sql = "Insert into books_details (book_name,price) values('$BOOK_NAME','$PRICE');";
    mysqli_query($conn,$sql);
   }   
?>