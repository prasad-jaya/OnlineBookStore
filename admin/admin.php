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

<a href="admin_add.php"type="button" class="btn btn-primary">Add book</a>
<a href="admin_update.php" type="button" class="btn btn-primary">Update Items</a>
<a type="button" class="btn btn-primary">Primary</a>

<?php 

if(isset($_COOKIE["myCookie"])){  
    echo $_COOKIE["myCookie"];
}
else{
    echo "heloo";
}
    
 ?>
</body>
</html>


  