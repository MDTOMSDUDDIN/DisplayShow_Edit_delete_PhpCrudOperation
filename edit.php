<?php 
$conn=mysqli_connect('localhost','root','','phptestdb');

if(isset($_GET['id'])){
   $getid= $_GET['id'];
   $sql="SELECT * FROM student WHERE id=$getid";
   $query=mysqli_query($conn,$sql);
   $data=mysqli_fetch_assoc($query);
   $id        = $data['id'];
   $firstname = $data['firstname'];
   $lastname  = $data['lastname'];
   $email     = $data['email'];
}

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $tom=$_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
$sql1="UPDATE student SET id='$tom', firstname='$firstname',lastname='$lastname',email='$email'  WHERE id='$id'";
 if(mysqli_query($conn,$sql1)==TRUE){
    echo "data updated";
    header('location:view.php');
 }else{
    echo $sql1."data not updated";
 }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update information with form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row">
      <div class="col-sm-3"></div>
        <div class="col-sm-6 pt-3 mt-3 border border-success">
            <h3 class="bg-success text-white text-center">Update Information Form </h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
                Firstname :<br>
                <input type="text" name="firstname" value="<?php echo $firstname ?>"><br><br>
                Lastname :<br>
                <input type="text" name="lastname" value="<?php echo $lastname ?>"><br><br>
                Email :<br>
                <input type="email" name="email" value="<?php echo $email ?>"><br><br>
                <input type="text " name="id" value="<?php echo $id ?>" >
                <input class="btn btn-success " type="submit" value="submit" name="submit">
            </form>
        </div>
       <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>
