<?php
// Start the session
session_start();
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

    <form action="user_login.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="user" name="user" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
   
    <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<?php 
    include_once 'dbconnect.php';
    
    if(isset($_POST['user'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //$user = stripcslashes($user);

        $sql = "Select name,user_id from users where username='$user' and password='$pass';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                $id = $row['user_id'];
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $id;
                setcookie("myCookie", $id, time() + 3600, "/php/"); 
                header("Refresh:0; url=../index.html");
               
            }
            //echo "Susseee";
        }
        else{
           $message = '<h3>Invalid Username or Password!</h3>'; 
           print $message;
        }
    }
    //echo $_COOKIE["myCookie"]; 
?>

</body>
</html>





