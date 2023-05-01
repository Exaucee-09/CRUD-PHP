<?php
 include'connect.php';

 if(isset($_POST['submit'])){
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $password=$_POST['password'];

 $sql="INSERT INTO `students`(f_name,l_name,email,gender,password)
 values('$firstname','$lastname','$email','$gender','$password')";
 
 $result=mysqli_query($con,$sql);

 if($result){
  // echo "The record has been successfully inserted";
  header('location:display.php');
 }else{
  die(mysqli_error($con));
 }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD in PHP</title>
</head>
<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Firstname</label>
        <input type="text" class="form-control" placeholder="Enter your Firstname" name="firstname">
      </div>
      <div class="form-group">
        <label>Lastname</label>
        <input type="text" class="form-control" placeholder="Enter your Lastname" name="lastname">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your Email" name="email">
      </div>
      <div class="form-group">
        <label>Gender</label>
        <input type="radio" value="Male" name="gender">Male
        <input type="radio" value="Female" name="gender">Female
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter your Password" name="password">
      </div>
      <br>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

    
</body>
</html>