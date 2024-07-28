<?php 
$conn=mysqli_connect('localhost','root','','phptestdb');

if(isset($_GET['deleteid'])){
    $deleteid=$_GET['deleteid'];
    $sql="DELETE FROM student WHERE id=$deleteid";
    if(mysqli_query($conn,$sql)==TRUE){
        header('location:view.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Data view  display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row">
      <div class="col-sm-2"></div>
        <div class="col-sm-8 pt-3 mt-3 border border-success">
            <h1 class="text-center pt-3 m-3">User Information show </h1>
            <?php
            $sql="SELECT * FROM student";
            $query=mysqli_query($conn,$sql);
            echo " <table class='table table-success'>
                <tr>
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
                </tr>";
                    
            while($data =mysqli_fetch_assoc($query)){
                $id        = $data['id'];
                $firstname = $data['firstname'];
                $lastname  = $data['lastname'];
                $email     = $data['email'];

            echo "<tr>
                    <td>$id</td>
                    <td>$firstname</td>
                    <td>$lastname</td>
                    <td>$email</td> 
                    <td>
                    <span class='btn btn-success'>
                    <a href='edit.php?id=$id' class='text-white text-decoration-none'>
                    Edit</a>
                    </span>
                    
                    <span class='btn btn-danger'>
                    <a href='view.php?deleteid=$id' class='text-white text-decoration-none'>
                    Delete  </a>
                    </span>

                    </td>
               </tr>";
            }
            ?>
      
        </div>
       <div class="col-sm-2"></div>
        </div>
    </div>
</body>
</html>

