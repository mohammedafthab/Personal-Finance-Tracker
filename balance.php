<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;
}
include 'partials/dbconnect.php';
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT SUM(credit_amount)AS amount FROM credits WHERE userid='$username'"); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['amount'];
$result = mysqli_query($conn, "SELECT SUM(debit_amount)AS amount FROM debits WHERE userid='$username'"); 
$row = mysqli_fetch_assoc($result); 
$sum=$sum-$row['amount'];
echo '<span style="font-size: 26px;color:red">Available Balance :' . $sum.  '</span>';
?>
