<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      header("location:index.php");
      exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL-CREDITS</title>
    <style>
        .table12{
    padding-top:10rem;
    width:70rem;
    padding-left:10rem;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>Personal Finance Tracker</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <a href="/PFMS/credits.php"><button class="btn btn-outline-success">Add-Credits</button></a>
              <a href="/PFMS/dashbord.php"><button class="btn btn-outline-success" >Home</button></a>
        </div>
      </nav>
    <div class="table12">
        <table class="table table-striped" style="border:1rem">
            <thead>
                <tr>
                  <th scope="col">CREDIT REASON</th>
                  <th scope="col">CREDIT Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">DEBIT REASON</th>
                  <th scope="col">DEBIT Amount</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    include 'partials/dbconnect.php';
                    $username = $_SESSION['username'];
                    $sql = "SELECT C.description AS credit_reason,C.credit_amount,C.date,D.reason AS debit_reason,D.debit_amount,D.date FROM credits C,debits D WHERE C.userid ='$username' and D.userid='$username'";
                    $result = mysqli_query($conn,$sql);
                    if(!$result)
                    {
                            die("Inavlid query:");
                    }
                    while($row = $result->fetch_assoc())
                    {
                        echo"<tr>
                            <td>" . $row["credit_reason"]."</td>
                            <td>" . $row["credit_amount"]."</td>
                            <td>" . $row["date"]."</td>
                            <td>" . $row["debit_reason"]."</td>
                            <td>" . $row["debit_amount"]."</td>
                            <td>" . $row["date"]."</td>
                          </tr>";
                    }
                    ?>
                
              </tbody>
          </table>
    </div>
</body>
</html>