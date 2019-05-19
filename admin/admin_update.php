<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Items</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function () {
        $(".delete_book").click(function() {
            var book_id = $(this).attr("id");
            //alert(book_id);
            $.ajax({
                url : "/onlinebookstore/admin/ajax-delete.php?book_id=" + book_id,
                success : function() {
                    $("#book-" + book_id).hide();
                }
            });
        });
    });
    
    </script>
</head>
<body>
<div class="container"> 
<form action="admin_update.php" method="POST" class="form-inline">
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
   include_once '..\includes\dbconnect.php';

   if(isset($_POST['book_id'])){

        $B_NAME = $_POST['book_name'];
        $B_ID = $_POST['book_id'];
        echo $B_NAME;
        $sql = "SELECT * FROM books_details WHERE book_id='$B_ID' OR book_name='$B_NAME';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
    
        $result_form = '   
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            </tr>
        </thead>
        <tbody>';
            
        
        if($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                 $ID = $row['book_id'];
                $NAME = $row['book_name'];
                 $PRICE = $row['price'];
                
                $result_form .= '
                <tr>
                <th scope="row">'.$ID.'</th>
                <td>'.$NAME.'</td>
                <td>'.$PRICE.'</td>
                </tr>';
            }
        }
        $result_form .='</tbody>
        </table>';
            print $result_form;
    }
    else{
        $sql = "SELECT * FROM books_details;";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result); 

        $result_form = '   
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">BOOK ID</th>
            <th scope="col">BOOK NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">Function</th>
            </tr>
        </thead>
        <tbody>';
            
        
        if($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                 $ID = $row['book_id'];
                $NAME = $row['book_name'];
                 $PRICE = $row['price'];
                
                $result_form .= '
                <tr id="book-'.$ID.'">
                <th scope="row">'.$ID.'</th>
                <td>'.$ID.'</td>
                <td>'.$NAME.'</td>
                <td>'.$PRICE.'</td>
                <td> <a type="button" href="admin_edit.php?book_id='.$ID.'">View</a> | <a id="'.$ID.'" class="delete_book" type="button">Delete</a> </td> 
                </tr>';
            }
        }
        $result_form .='</tbody>
        </table>';
            print $result_form;
        
    }
?>
    
</div>
   

</body>
</html>


