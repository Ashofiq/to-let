<?php 

    if (isset($_POST['submit'])) {
      include('database.php'); 

      
      $name     = $_POST['name'];
      $password = $_POST['password'];
      $phone    = $_POST['phone'];

      $sql = "INSERT INTO  admin (name, password, phone) VALUES ('$name','$password', '$phone')";

      $obj = mysqli_query($connection, $sql);
      if ($obj) {
         $_SESSION['name'] = $username;
     header('Location: login.php');
      }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
      }
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Rgistration form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Name :</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="email">Phone :</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your phone number" name="phone">
    </div>
    
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
