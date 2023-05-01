<?php
include'connect.php'
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
    <table class="table">
     <thead>
     <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `students`";
    $result=mysqli_query($con,$sql);
    if($result){
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $firstname=$row['f_name'];
            $lastname=$row['l_name'];
            $email=$row['email'];
            $gender=$row['gender'];
            $password=$row['password'];
    
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$email.'</td>
        <td>'.$gender.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light text-decoration-none">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
    </td>
      </tr>';
        }
    }
    ?>
  
  </tbody>
</table>
<button class="btn btn-primary">
            <a href="user.php" class="text-light text-decoration-none">Add user</a>
        </button>
</div>
</body>
</html>