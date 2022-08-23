<?php
$server="localhost";
$username = "root";
$password="";
$database="pfms";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die();
}
?>