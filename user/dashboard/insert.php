<?php

include 'conn.php';

if(isset($_POST['done'])){

     $Id = $_POST['Id'];
     $Name = $_POST['Name'];
     $Department = $_POST['Department'];
     $Phone = $_POST['Phone'];
     $Semester = $_POST['Semester'];
	 $Email = $_POST['Email'];
	 $Gender = $_POST['Gender'];
	 $Address = $_POST['Address'];
 
 
 $q = "INSERT INTO stdinfo(Id,Name,Department ,Phone,Email,Gender,Address)  VALUES('$Id','$Name','$Department','$Phone','$Email','$Gender','$Address')";
 $query = mysqli_query($conn,$q);
  header('location:display.php');
}
?>  
  
  
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
    <style>
     
  
@media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }


</style>

</head>
<?php
 include("config.php");
    include("database.php");
?>
<body>
  <div class="wrapper container-fluid">
    <header>
      <div class="top-link">
        <a href="#"><b>A</b>dmin<b>Z</b>one</a>
      </div>
      <div class="top-meanu">
        <nav class="navbar navbar-expand-lg navbar-light custom-nav">
  <a class="navbar-brand" href="#" id="off-canvas"><i class="fas fa-bars"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="?u=<?login.php echo session::sess_get("usr"); ?>
                      <span><i class="fas fa-power-off"></i></span>
                      <span>Logout</span>
                    </a>
      </li>
    </ul>
  </div>
  <?php
  session::login("login");

    if(isset($_GET['u'])){
      session::sess_destroy();
      header("location: login.php");
    }
?>
</nav>
      </div><!--/top-menu-->
    </header><!--/header-->
    <div class="mainbody">
      <div class="sidebar">
        <div class="sidemenu">
          
          <ul>
            <li>
              <a href="index.php">
                      <span><i class="fa fa-tachometer"></i></span>
                      <span>Dashboard</span>
                      
                  </a><br>

                    <a href="up-baner.php" >
                      <span><i class="fa fa-image"></i></span>
                      <span>Gallery</span>
                    </a>
                    
                  <br>
                      <a href="contact.php">
                      <span><i class="fa fa-user-circle"></i></span>
                      <span>Contact Us</span>                 
                      </a><br>
                      
                 <a href="fileup.php">
                      <span><i class="fa fa-file"></i></span>
                      <span>Upload File</span>
                      </a><br>  

                       <a href="notice.php">
                      <span><i class="fa fa-bell"></i></span>
                      <span>Notice board</span>
                       </a><br>
                      <a href="admission.php">
                      <span><i class="fa fa-book"></i></span>
                      <span>Admission Form</span>
                    </a><br>
                    <a href="result.php">
                      <span><i class="fa fa-book"></i></span>
                      <span>Students Result</span>
                    </a><br>
                    <a href="insert.php">
                      <span><i class="fa fa-book"></i></span>
                      <span>Students Information</span>
                    </a><br>
                    <a href="?u=<?login.php echo session::sess_get("usr"); ?>
                      <span><i class="fas fa-power-off"></i></span>
                      <span>Logout</span>
                    </a> <br>
                      
                      </li> 
                  </ul>
                   
        </div>
        
      </div><!--/sidebar-->
      <div class="content" >
        <div class="component"><br>

<div class="col-lg-8 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Students information </h1>
 </div><br>

  <label style="margin-left: 2%;"> Id: </label>
 <input type="text" name="Id" class="form-control"> <br>

  <label style="margin-left: 2%;"> Name: </label>
 <input type="text" name="Name" class="form-control"> <br>
 
  <label style="margin-left: 2%;"> Department: </label>
 <input type="text" name="Department" class="form-control"> <br
 

<label style="margin-left: 2%;"> &nbsp&nbsp&nbsp&nbspPhone: </label>
 <input type="text" name="Phone" class="form-control"> <br>
 
  <label style="margin-left: 2%;"> Semester: </label>
 <input type="text" name="Semester" class="form-control"> <br>
 
  <label style="margin-left: 2%;"> Email: </label>
 <input type="text" name="Email" class="form-control"> <br>
 
  <label style="margin-left: 2%;"> Gender: </label>
 <input type="radio" name="Gender" value="Male" onclick="stuGender = this.value;" style="margin-left: 2%;"> &nbsp&nbspMale <input type="radio" name="Gender" value="Female" onclick="this.value" style="margin-left: 2%;" > &nbsp&nbspFemale <br>
 
  <label style="margin-left: 2%;"> Address: </label>
 <input type="text" name="Address" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
  <a href="display.php" style="font: 20px;"><center>View recorde</center></a><br><br>

  </div>
 </form>
 </div>
 </div>
</div>
      </div><!--/content-->

      </div><!--/main-body-->
    
  </div><!--/wrapper-->
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>