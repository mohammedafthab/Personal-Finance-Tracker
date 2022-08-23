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
    <!--<link rel="stylesheet" href="./dashbord.css">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Finanace Management System</title>
    <style>
        *{
    padding:0;
    margin:0;
    box-sizing: border-box;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
body{
    background-image: url("./images/dash.jpeg");
    background-repeat:no-repeat;
    background-size:cover;
}
.hero{
    background-position: centre;
    height:4rem
}
nav{
    display: flex;
    align-items:center;
    justify-content: space-between;
    padding-top: 15px;
    padding-right: 5%;
}
.logo{
    color:white;
    padding-left: 1rem;
    padding-right: 14rem;
    font-size: 25px;
    text-transform:uppercase;
}
nav ul li{
    list-style-type: none;
    display: inline-block;
    padding:10px 20px
}
nav ul li a{
    color:white;
    text-decoration: none;
    font-weight: bold;
    
}
nav ul li a:hover{
    color:#ea1538;
    transition: .3s ;
}
button{
    border:none;
    background: #ea1538;
    padding:10px 20px;
    border-radius:30px;
    color:white;
     font-weight: bold;
     font-size:15px;
     transition:  .4s;
}
button:hover{
    transform:scale(1.3);
    cursor:pointer;
}
.container{
    padding-top: 2rem;
    margin-top: 5rem;
    height:12rem;
    width:auto;
    justify-content: space-between;
    padding-left: 8rem;
}
.container button{
    margin-top: 11rem;
    border-radius: 30px;;
    border:none;
    background:wheat;
    color:black;
     font-weight: bold;
     font-size:40px;
     justify-content: space-between;
     backdrop-filter: blur(10px);
     border: 2px solid rgba(255,255,255,0.1);
    
}
.frame{
    margin-top: 1rem;
    padding-left: 33rem;
}
.timer{
    padding-left: 33rem;
    padding-top: 12rem;
    padding-bottom: 1rem;
    
}
iframe{
    background-color: aliceblue;
    height:4rem;
}
    
</style>
</head>
<body>
    <div class="hero">
    <nav>
        <label class="logo"><b>Personal Finance Tracker</b></label>
        <ul>
            <!--<li><a href="/PFMS/dashbord.php">Home</a></li>-->
            <li style="padding-right:5rem;"><a href="/PFMS/alldebits.php">Debits</a></li>
            <li><a href="/PFMS/allcredits.php">Credits</a></li>
            <!--<li><a href="/PFMS/alltrans.php">All-Transaction</a></li>-->
        </ul>
        <a href="/PFMS/logout.php"><button type="button">Logout</button></a>
    </nav>
    </div>
    <div class="frame"><iframe id="amt" src="/PFMS/balance.php"></iframe>
    </div>
     
    </div>
    <div class="container">
        <a href="/PFMS/credits.php"><button style="margin-right:43rem;">CREDIT</button></a>
        <a href="/PFMS/debits.php"> <button style="margin-right:5rem;">DEBIT</button></a>        
    </div>
    <div class="timer">
        <iframe id="myFrame" src="/PFMS/partials/time.php"></iframe>
        
    </div>
    <script>
            var frame = document.getElementById('myFrame');
            frame.onload = function () {
            var body = frame.contentWindow.document.querySelector('body');
            body.style.color = 'red';
            body.style.fontSize = '45px';
            body.style.lineHeight = '30px';
           
    };
</script>
    
</body>
</html>