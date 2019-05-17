<?php 
   include_once 'dbconnect.php';

        $sql = "Select * from users where username='Prasa' and password='123456';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                 $NAME = $row['name'];
                 $EMAIL = $row['username'];
                 $PASS = $row['Password'];
                //echo $row['username'];
                echo $NAME;
            }
        }
  
    include_once 'dbconnect.php';

    if(isset($_POST['submit'])){
        
        $USER_ = $_POST['user'];
        $PASS_ = $_POST['pass'];
        $NAME_ = $_POST['name'];
        //$USER = stripcslashes($USER);
        //echo $NAME_;
        $sql = "Update users SET username = '$USER_', password = '$PASS_', name = '$NAME_' where username = 'Prasa';";
        mysqli_query($conn,$sql);
       
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
</head>
<body>
<div class="container">  
    <form action="user_edit_profile.php" method="POST">
    
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="name" name="name" value= <?php echo $NAME ?>  placeholder=<?php echo $NAME ?>>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="user" name="user" value= <?php echo $EMAIL; ?>>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" value= <?php echo $PASS; ?>>
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>
</body>
</html>



