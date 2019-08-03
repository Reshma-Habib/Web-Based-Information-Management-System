<?php

include 'conn.php';
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

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Department </th>
 <th> Phone </th>
 <th> Semester </th>
 <th> Email </th>
 <th> Gender </th>
 <th> Address </th>
 <th> Delete </th>
 <th> Update </th>

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from stdinfo ";

  $query = mysqli_query($conn,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Id'];  ?> </td>
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Department'];  ?> </td>
 <td> <?php echo $res['Phone'];  ?> </td>
 <td> <?php echo $res['Semester'];  ?> </td>
 <td> <?php echo $res['Email'];  ?> </td>
 <td> <?php echo $res['Gender'];  ?> </td>
 <td> <?php echo $res['Address'];  ?> </td>
 
 
 
 <td> <button class="btn-danger btn"> <a href="delete.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-danger btn"> <a href="update.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

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

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>






























