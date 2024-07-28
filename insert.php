<?php 
$conn=mysqli_connect('localhost','root','','phptestdb');

if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email    =  $_POST['email'];

    $sql="INSERT INTO student(firstname,lastname,email) VALUES('$firstname','$lastname','$email') ";
    if(mysqli_query($conn,$sql)){
        echo "inserted data";
        header('location:insert.php');
    }else{
        echo "Not inserted data  ?? ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form data inserted and display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row">
      <div class="col-sm-3"></div>
        <div class="col-sm-6 pt-3 mt-3 border border-success">
            <h3 class="bg-success text-white text-center">Register Form </h3>
            <form action="insert.php" method="POST" >
                Firstname :<br>
                <input type="text" name="firstname"><br><br>
                Lastname :<br>
                <input type="text" name="lastname"><br><br>
                Email :<br>
                <input type="email" name="email"><br><br>
                <input class="btn btn-success " type="submit" value="submit" name="submit">
            </form>
        </div>
       <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>

