<?php
session_start();
include_once 'dbconnect.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
    $userid=$_SESSION['username'];
    $sql = "Select * from users where user_id ='$userid';";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
             $NAME = $row['name'];
             $EMAIL = $row['username'];
             $PASS = $row['password'];
            //echo $row['username'];
            //echo $PASS;
        }
    }

//include_once 'dbconnect.php';

if(isset($_POST['user'])){
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    //$USER = stripcslashes($USER);
    //echo $name;
    $sql = "Update users SET username = '$user', password = '$pass', name = '$name' where user_id ='$userid';";
    mysqli_query($conn,$sql);
    header("Refresh:0");
}

    
$html = '<div class="container">  
    <form action="user_edit_profile.php" method="POST">
    
    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="name" name="name" value= '.$NAME.'  placeholder=<?php echo $NAME ?>>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" id="user" name="user" value= '.$EMAIL.'>
        
    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pass" name="pass" value= '.$PASS.'>
    </div>
    
    <button href="/"type="submit" class="btn btn-primary">Save</button>

    </form>
</div>';
    print $html;
   



} else {
    echo "Please log in first to see this page.";

} 


?>

</body>
</html>



