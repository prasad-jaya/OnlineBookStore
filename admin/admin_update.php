<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Items</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<form class="form-inline">
  <label class="sr-only" for="inlineFormInput">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="book_id" placeholder="Book ID">

  <label class="sr-only" for="inlineFormInputGroup">Username</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
    <div class="input-group-addon">Or</div>
    <input type="text" class="form-control" id="inlineFormInputGroup" name="book_name" placeholder="Book Name">
  </div>


  <button type="submit" class="btn btn-primary">Search</button>
</form>

<?php 
   include_once 'dbconnect.php';

   if(isset($_POST['submit'])){

        $B_NAME = $_POST['book_name'];
        $B_ID = $_POST['book_id'];

        $sql = "Select * from books_details where book_id='$B_ID' and book_name='$B_ID';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                 $ID = $row['book_id'];
                 $NAME = $row['book_name'];
                 $PRICE = $row['price'];
                //echo $row['username'];
                
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>>echo $row['book_id']</td>
                    <td>>echo $row['book_id']</td>
                    <td>>echo $row['book_id']</td>
                    </tr>
                    
                </tbody>
            </table>
            
                echo $NAME;
            }
        }

    }
?>
    

   

</body>
</html>

