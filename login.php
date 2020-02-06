<?php 
  session_start();
  include('database.php');
  

  if (isset($_POST['submit'])) {
   $username = $_POST['name'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM admin where name = '$username' and password = '$password'";
   $result = mysqli_query($connection, $sql);

   if (mysqli_num_rows($result)>0) {
     $_SESSION['name'] = $username;
     header('Location: index.php');
   }else{
    echo "Account invalid";
   }


  }

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2>Login form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" name="submit" class="btn btn-default">Login</button>
  </form>
</div>
</body>
</html>
