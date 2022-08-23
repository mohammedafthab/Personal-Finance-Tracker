<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE userid = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $sql = "INSERT INTO `users` ( `userid`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                header('location:login.php');
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
      body{
        background-image: url("./images/signup.jpeg");
      }
     form
     { 
      
      margin-top:7rem;
      display: flex;
      flex-direction: column;
      background-color: black;
      align-items: center;
      margin-left:40rem;
      height: 400px;
      width: 400px;
      background-color: rgba(255,255,255,0.13);
      position: absolute;
      transform: translate(-50%,-50%);
      top: 40%;
     
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255,255,255,0.1);
      box-shadow: 0 0 40px rgba(8,7,16,0.6);
      padding: 50px 35px;
}
    
    </style>
  </head>
  <body>
    
    <?php require 'partials/_navbar.php'?>
    <?php
    if($showAlert==true){
    echo"<div class='alert alert-Sucess alert-dismissible fade show' role='alert'>
    <strong>Sucess!</strong> Your account is now created and you can login.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
  ";
    }  
  if($showError==true){
    echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Error!</strong> '.$showError.'
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
  ";  
   }?>

    <form action="/PFMS/signup.php" method="post">
      <div class="mb-3 col-md-7">
        <label for="username" class="form-label" style="color:antiquewhite;font-size:large;">username</label>
        <input type="text" class="form-control" id="username" name="username">
        
      </div>
      <div class="mb-3 col-7">
        <label for="password" class="form-label"  style="color:antiquewhite;">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>

      <div class="mb-3 col-7">
        <label for="cpassword" class="form-label"  style="color:antiquewhite;">Confirm-Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <small id="emailHelp" class="form-text-muted"  style="color:antiquewhite;">Make sure to type same password</small>
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </body>
</html>