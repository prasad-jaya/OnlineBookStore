<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <!-- Search form -->
    <div class="container">    
        <form action="search.php" method="POST" class="form-inline active-cyan-4">
        <input class="form-control form-control-sm mr-3 w-75" id="book_name" name="book_name" type="text" placeholder="Search" aria-label="Search">
        <i class="fas fa-search" aria-hidden="true"></i>

        <select class="mdb-select" searchable="Search here..">
        <option value="1" disabled selected>Choose your option</option>
        <option value="2" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">example
            1</option>
        <option value="3" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">example
            2</option>
        <option value="4" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">example
            1</option>
        </select>

        <button type="submit" class="btn btn-primary">Search</button>

        </form>
    </div>
<div style="display:flex">
    <?php
        include_once '..\includes\dbconnect.php';

        if(isset($_POST['book_name'])){
        $book_name = $_POST['book_name'].'%';
        $img = '../img/bo.png';
        $Hello = $book_name.'%';

            $sql = "SELECT * FROM books_details WHERE book_name LIKE '$book_name';";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    $id = $row['book_id'];
                    $name = $row['book_name'];
                    $price = $row['price'];

                    $result_card = '<div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="'.$img.'" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">'.$name.'</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card s content.</p>
                      <a type="button" href="search-process.php?id='.$id.'" class="btn btn-primary">Add to Cart</a>
                      <a type="button" href="payment-process.php?id='.$id.'" class="btn btn-success">Buy Now </a>
                    </div>
                  </div>';
                  
                  print $result_card;
                } 
            }
            
        
        }

?>
</div>

</body>
</html>