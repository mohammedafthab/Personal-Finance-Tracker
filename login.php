<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where userid='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        //while($row=mysqli_fetch_assoc($result)){
          //  if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: dashbord.php");
         //   } 
         //   else{
         //       $showError = "Invalid Credentials";
           // }
        //}
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login Page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    margin-top: 6rem;
    width: 400px;
    height: 500px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 150px;
    width: 150px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -70px;
    top: -120px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -70px;
    bottom: -10px;
}
form{
    margin-top: 7rem;
    height: 500px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 40%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:4rem;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-size: 25px;margin-right: 35rem"><b>PERSONAL FINANCE TRACKER</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <a href="/PFMS/signup.php"><button class="btn btn-outline-success" style="margin-bottom:3rem;" >SignUp</button></a>
              <a href="/PFMS/login.php" style="margin-left:4rem"><button class="btn btn-outline-success" style="margin-bottom:3rem;">Login</button></a>
              <a href="/PFMS/index.php" style="margin-left:4rem"><button class="btn btn-outline-success" style="margin-bottom:3rem;">HOME</button></a>
          </div>
        </div>
      </nav>
      <?php
    if($login==true){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> You are loggedin.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
  "; } 
  if($showError==true){
    echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Error!</strong>Invalid Credentials.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
  ";  
   }?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="/PFMS/login.php" method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text"  id="username" name="username" aria-describedby="emailHelp">

        <label for="password">Password</label>
        <input type="password"  id="password" name="password">

        <button type="submit">Log In</button>
        <p>If you Havn't signed up.Please <a href="/PFMS/signup.php">SignUp</a></p>
        
    </form>
</body>
</html>
