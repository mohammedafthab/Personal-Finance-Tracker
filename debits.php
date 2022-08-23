<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      header("location:index.php");
      exit;
  }
$showAlert = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include "partials/dbconnect.php";
  $username = $_SESSION['username'];
  $reason = $_POST["reason"];
  $amount = $_POST["amount"];
  $date = $_POST["date1"];
  $time = $_POST["time1"];
$sql = "INSERT INTO `debits`(`userid`, `reason`, `debit_amount`, `date`, `time`) VALUES ('$username','$reason','$amount','$date','$time')";
$result = mysqli_query($conn,$sql);
if($result)
{
  $showAlert = true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debits-form</title>
    <style>
      form{
    margin-top:8rem;
    margin-left: 30rem;
    padding-left: 5%;
    padding-top: 2rem;
    height:25rem;
    width:30rem;
    background-color: aqua;
}
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>Personal Finance Tracker</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <a href="/PFMS/alldebits.php"><button class="btn btn-outline-success">All-debits</button></a>
              <a href="/PFMS/dashbord.php"><button class="btn btn-outline-success" >Home</button></a>
        </div>
      </nav>
      <?php
      if($showAlert==true){
        echo"<div class='alert alert-Sucess alert-dismissible fade show' role='alert'>
        <strong>Sucess!</strong> Your have successfully inserted record.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
      ";}
      ?>
    <form action="/PFMS/debits.php" method="post">
        <div class="col-md-10">
          <label for="reason" class="form-label">reason</label>
          <input type="text" class="form-control" id="reason" name="reason">
        </div>
        <div class="col-md-10">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" min="0" class="form-control" id="amount" name="amount">
          </div>
          <div class="col-md-5">
            <label for="date1" class="form-label">Date</label>
            <input type="date" class="form-control" id="date1" name="date1">
          </div>
          <div class="col-md-5">
            <label for="time1" class="form-label">Time</label>
            <input type="time" class="form-control" id="time1" name="time1">
          </div>
        <button style="margin-top:1rem" type="submit">Submit</button>
          
      </form>
</body>
</html>