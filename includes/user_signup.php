<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<!-- <form action="user_signup.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" >User Name</span>
            <input type="text" id="user" name="user">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Password</span>
            <input type="text" id="pass" name="pass">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" >Name</span>
            <input type="text" id="pass" name="pass">
        </div>

        <input type="submit" id="btn" value="login" class="btn btn-secondary btn-lg">Login</button>
    </form>  -->

<div class="container">  
    <form action="user_signup.php" method="POST">
    
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="user" name="user" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>

<?php 
    
    include_once 'dbconnect.php';

    if(isset($_POST['user'])){
        
        $USER = $_POST['user'];
        $PASS = $_POST['pass'];
        $NAME = $_POST['name'];
        //$USER = stripcslashes($USER);

        $sql = "Insert into users (username,password,name) values('$USER','$PASS','$NAME');";
        mysqli_query($conn,$sql);
       
    }

?>