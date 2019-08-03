<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="shortcut icon" href="assets/images/images.jpg" type="image/x-icon" sizes="16x16"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/template.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #b33939;
  
  height: auto;
  margin-bottom: 20px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}




.topnav .login-container button {
  float: right;
  margin-top: 8px;
  margin-right: 26px;
  margin-bottom: 10px;
  background-color: #e74c3c;
  color: blue;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container :hover {
  background-color: #3B3B98;
}
</style>
</head>

<body>
    <div class="wrapper">

        <header>
            
            <div class="logo" >
               <img src="images/logo1.jpg" alt="logo" height="82" width="92" style=" border-radius: 100%;"> 
            </div>
            <div class="head">
            <h4><b>NEW MODEL UNIVERSITY COLLEGE</b> </h4>
            <h3><b>DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING </b></h3>
        </div>
        
        </header><!-- /header -->

<div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
 <a href="about.php">About Us</a>
 <div class="dropdown">
    <button class="dropbtn">Academic 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="unprog.php">Undergraduate Program</a>
       <a href="admission.php">Admission</a>
        <a href="curriculum.php">Curriculum</a>
    </div>
  </div> 
  <a href="photo.php">Photo Gallery</a>
  <div class="dropdown">
    <button class="dropbtn">Announcement 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="noticefile.php">Notice</a>
        <a href="slogin.php">Student result</a>
        <a href="veiw student.php">Student Information</a>
    </div>
  </div> 
 <a href="teacher.php" >Faculty</a>
 <a href="contact.php" >Contact Us</a>
 <div class="dropdown">
    <button class="dropbtn">Files 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="upfile.php">Upload Files </a>
      <a href="viewfile.php">View Files</a>
    </div>
  </div> 
 <div class="login-container">
    
      <button type="submit"><a href="dashboard/login.php" target="_blank">Login</a></button>
    
  </div>
  <a href="javascript:void(0);" style="font-size:15px; margin-right: 5px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  
 <!-- /meanubar -->

 

    