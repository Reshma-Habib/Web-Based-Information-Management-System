<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Admin panel</title>
	<style>
		  body{
        font-family: "Times New Roman Georgia", Times, Serif;
      }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
  text-align: center;
  background-color: #dcdde1;
}
tr{
  height: 30px;
}
 th {
  border: 1px solid #192a56;
  text-align: left;
  padding: 8px;
  text-align: center;
}
@media screen and (max-width: 450px) {
  .colum {
    width: 100%;
    display: block;
  }
}
@media screen and (max-width: 450px) {
  table {
    width: 90%;
    margin-left: -40px;
    display: block;
  }
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

					<?php

    
    if(!$cn){
        echo "Database Connection Error!";
    }
    else{
        // echo "data base connection success";
    }

    if(!empty($_POST)){
        $name = $_POST['name'];
        $institute = $_POST['institute'];
        $semester = $_POST['semester'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $file = $_FILES['file'];
        $fileName = 'file-'.time().'-'.rand(100000,1000000000).'.'.pathinfo($file['name'],PATHINFO_EXTENSION);

    $insert = "INSERT INTO student(name,institute ,semester,phone,gender,email,file) 
                        VALUES('$name','$institute','$semester','$phone','$gender', '$email','$fileName')";
    
        if(!empty($name)){
            if(mysqli_query($cn, $insert)){
                move_uploaded_file($file['tmp_name'],'uploads/'.$fileName);
                echo "<script>";
                echo "window.location.replace('fileup.php')";
                echo "</script>";
                echo "<script> alert('registration success'); </script>";
            }
        }
    }

?>

    <div id="contact" class="container-fluid">
        <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">

            <h3 style="color: #b33939; text-align: center;  "><br><br>File Management</h3><br>

            <form action="fileup.php" enctype="multipart/form-data" method="post" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Your Name..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="insti" class="col-sm-2 col-form-label">Institute:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="insti" name="institute" required placeholder="Enter Your College Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester:</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="semester" name="semester" style="background-color: #f1f2f6; border: 0px;">
                            <option value="1st semester">1st semester</option>
                            <option value="2nd semester">2nd semester</option>
                            <option value="3rd semester">3rd semester</option>
                            <option value="4th semester">4th semester</option>
                            <option value="5th semester">5th semester</option>
                            <option value="6th semester">6th semester</option>
                            <option value="7th semester">7th semester</option>
                            <option value="8th semester">8th semester</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sub" name="sub" required placeholder="Enter Your Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-2 col-form-label">File Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="sub" name="fname" required placeholder="Enter Your File Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phn" class="col-sm-2 col-form-label">Phone Number:</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phn" name="phone" required placeholder="Enter Your phone number ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="gender" id="gender" style="background-color: #f1f2f6; border: 0px;">
                            <option value="Male">Male</option>
                            <option value="Male">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Your Email Address ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1"></label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group row">
                    <div class="col-2"></div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-lg" type="submit" name="pgsave">Submit</button>
                    </div>
                </div>
            </form>

        </div>
<div class="table">
<table border="2px" style="margin-left: 20%;">
                      <tr>
                        <td><b>Name</b></td>
                        <td><b>Semester</b></td>
                        <td><b>Phone</b></td>
                        <td><b>Email</b></td>
                        <td><b>Subject</b></td>
                        <td><b>File Name</b></td>
                      <td><b>Download file</b></td>
                      <td><b>Delete</b></td>
                      </tr>
                      <?php
                       $select = "SELECT * FROM student";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>
                      <?php
  if(isset($_GET['del'])){
    $i = $_GET['del'];
    delete("student", "id = '$i'");
    
  }
  ?>
                        <tr>
                          <td><?=$st_info['name'];?></td>
                          <td><?=$st_info['semester'];?></td>
                          <td><?=$st_info['phone'];?></td>
                          <td><?=$st_info['email'];?></td>
                          <td><?=$st_info['sub'];?></td>
                          <td><?=$st_info['fname'];?></td>
                          <td><a href="uploads/<?=$st_info['file'];?>"><i class="fa fa-arrow-down"></i></a></td>
                          <td width="10%"><a href="fileup.php?del=<?php echo $st_info['id']; ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>

                      <?php
                          $i++;
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
</body>
</html>