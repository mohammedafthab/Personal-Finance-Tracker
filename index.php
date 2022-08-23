<!DOCTYPE html>
<html>
<head>
<title>Personal Finance Tracker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("./images/alam.jpeg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" style="font-size:large"><b>PERSONAL FINANCE TRACKER</b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> AUTHOR</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Save While Others Are Wasting</span><br>
    <p><a href="/PFMS/login.php" class="w3-button w3-dark-grey w3-padding-large w3-xlarge w3-margin-top w3-opacity w3-hover-opacity-on">Login</a></p>
  </div> 
  
</header>
<!-- Team Section -->
<div class="w3-container" style="padding:128px 300px" id="team">
  <h3 class="w3-center">AUTHOR</h3>
  <div class="w3-row-padding " style="margin-top:64px;margin-left:15rem;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card" style="width:21rem">
        <img src="./images/aftabalam.jpeg" alt="aftab" style="width:100%;">
        <div class="w3-container">
          <h3>Mohammed Afthab</h3>
          <p>+91-9663403184</p>
          
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <!--<div class="w3-col l3 m6 w3-margin-bottom" style="margin-left:15rem;">
      <div class="w3-card" style="width:23rem">
        <img src="./images/farhan.jpeg" alt="farhan" style="width:100%">
        <div class="w3-container">
          <h3>Mohammed Farhan</h3>
          <p class="w3-opacity">+91-</p>
         
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>-->
    
    
  </div>
</div>
</div>
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Contact Us</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> CMRIT,BANGLORE</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone:+91-991673020 , 9663403184</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mdafthabnaveed@gmail.com </p>
    <br>
    
    
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>