<?php
echo $_COOKIE["myCookie"];
include_once '..\includes\dbconnect.php';
if(isset($_GET['book_id'])){
 $book_id = $_GET['book_id'];
 //echo $book_id;

    $sql = "SELECT * FROM books_details WHERE book_id = '$book_id';";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['book_id'];
            $name = $row['book_name'];
            $price = $row['price'];
           //echo $row['username'];
           //echo $NAME;
       }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>


<div class="container">  
    <form action="admin-process.php" method="POST">
    
    <div class="form-group">
        <label for="exampleInputPassword1">Book ID :</label>
        <input id="id" name="id" type="text" class="form-control" value=<?php echo $id; ?>>
        <label id="name" name="name" >
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Book Name</label>
        <input type="text" class="form-control" id="name" name="name" value= <?php echo $name; ?>>
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="price" name="price" value= <?php echo $price; ?>>
    </div>
    
    <button href="admin-process.php?book_id=<?php echo $id ?>" type="submit" class="btn btn-primary">Save</button>

    </form>
</div> 


</body>
</html>


