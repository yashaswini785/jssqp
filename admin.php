
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }


body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:     #FF8C00;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: blue;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<ul>
  <li><a class="active" href="#home">JSS | JSS Science And Technology</a></li>

</ul>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
  <!--   <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br> -->
    <h4><b>JSS</b></h4>
    <p class="w3-text-grey"></p>
  </div>
  <div class="w3-bar-block">
    
 <?php

//index.php

session_start();

?>
 <?php
   if(isset($_SESSION["name"]))
   {
   ?> 
<h4><i class="fa fa-user-circle" style="font-size:65px;color: #FF8C00;margin-left: 12px"></i><p style="margin-left: 12px;">
<?php $str=$_SESSION["name"];echo ucfirst("$str"); ?></p></h4>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:300px;">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-dashboard" style="font-size:15px;color:grey;margin-left: 1px;"></i><head style="padding-left:3px;"> <b>     Dashboard</b></head></a>

  <div class="w3-bar-item w3-button" onclick="myAccFunc()">
 <i class="fa fa-user-circle"style="color:grey;"></i>   <b>  Departments </b>   <i class="fa fa-caret-right"></i></div>
  <div id="demoAcc" class="w3-hide w3-white w3-card-4">
    <a href="http://localhost/jssqp/add/mca.html" class="w3-bar-item w3-button">MCA</a>
        <a href="http://localhost/dlms/hod/managefaculty.php" class="w3-bar-item w3-button">BCA</a>
        <a href="http://localhost/jssqp/add/adddep.php" class="w3-bar-item w3-button">Add Department</a>
  </div>

 

  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-lock" style="color:grey;"></i> <b>  Change Password</b></a>
  <a href="http://localhost/dlms/logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out" style="color:grey;"></i>  <b> Sign out</b></a>
</div>

<!-- <div class="w3-container" style="margin-left:160px">
<h2>Sidebar Accordion</h2>
<p>In this example, we have added an accordion and a dropdown menu inside the side navigation.</p>
<p>Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>
</div> -->

<script>
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myAccFunc1() {
  var x = document.getElementById("demoAcc1");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}

function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
}
</script>



</div>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px"></div>
 
  <!-- Header -->
  <header id="portfolio">

    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
  </div>
  </header> 
  

</nav>
<div>
<center>welcome</center>
 </div>
   
  
   <?php
   }?>
   

  
 




<script>

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
