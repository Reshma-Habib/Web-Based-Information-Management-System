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

			              <a href="up-baner.php">
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
			<div class="content">
				<div class="component"><br><br><br><br>

					<?php

    
  
    if(!$cn){
        echo "Database Connection Error!";
    }
    else{
        // echo "data base connection success";
    }

    if(isset($_POST['pgsave'])){
    $data = array(
      "name" => mysqli_real_escape_string($cn,$_POST['name']),
      "roll" => mysqli_real_escape_string($cn,$_POST['roll']),
      "semester" => mysqli_real_escape_string($cn,$_POST['semester']),
      "session" => mysqli_real_escape_string($cn,$_POST['session']),
      "subject1" => mysqli_real_escape_string($cn,$_POST['subject1']),
      "subject2" => mysqli_real_escape_string($cn,$_POST['subject2']),
      "subject3" => mysqli_real_escape_string($cn,$_POST['subject3']),
      "subject4" => mysqli_real_escape_string($cn,$_POST['subject4']),
      "subject5" => mysqli_real_escape_string($cn,$_POST['subject5']),
      "subject6" => mysqli_real_escape_string($cn,$_POST['subject6']),
      "subject7" => mysqli_real_escape_string($cn,$_POST['subject7']),
      "gpa1" => mysqli_real_escape_string($cn,$_POST['gpa1']),
      "gpa2" => mysqli_real_escape_string($cn,$_POST['gpa2']),
      "gpa3" => mysqli_real_escape_string($cn,$_POST['gpa3']),
      "gpa4" => mysqli_real_escape_string($cn,$_POST['gpa4']),
      "gpa5" => mysqli_real_escape_string($cn,$_POST['gpa5']),
      "gpa6" => mysqli_real_escape_string($cn,$_POST['gpa6']),
      "gpa7" => mysqli_real_escape_string($cn,$_POST['gpa7']),
      "cgpa" => mysqli_real_escape_string($cn,$_POST['cgpa'])
    );
    create("sresult", $data);
    
  }
?>

    <div id="contact" class="container-fluid">
        <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">

            <h3 style="color: #b33939; text-align: center;  "><br><br> Result</h3><br>

            <form action="result.php" method="post" enctype="multipart/form-data" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
              <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" required rows="2" placeholder="Enter Session ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="roll" class="col-sm-2 col-form-label">Roll:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="roll" name="roll" required rows="2" placeholder="Enter Session ..." style="background-color: #f1f2f6; border: 0px;">
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
                    <label for="session" class="col-sm-2 col-form-label">Session:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="session" name="session" required rows="2" placeholder="Enter Session ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                    <div class="form-group row">
                    <label for="subject1" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject1" name="subject1" placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                    <label for="gpa1" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa1" name="gpa1" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject2" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject2" name="subject2"  placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                    <label for="gpa2" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa2" name="gpa2" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject3" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject3" name="subject3" placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                    <label for="gpa3" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa3" name="gpa3" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="subject4" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject4" name="subject4"  placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                    <label for="gpa4" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa4" name="gpa4" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject5" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject5" name="subject5"  placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                            
                    </div>
                    <label for="gpa5" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa5" name="gpa5" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject6" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject6" name="subject6"  placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                           
                    </div>
                    <label for="gpa6" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa6" name="gpa6" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject7" class="col-sm-2 col-form-label">Subject:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject7" name="subject7" placeholder="Enter Subject Name ..." style="background-color: #f1f2f6; border: 0px;">
                          
                    </div>
                
                    <label for="gpa7" class="col-sm-2 col-form-label">GPA:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="gpa7" name="gpa7" style="background-color: #f1f2f6; border: 0px;">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="B-">B-</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cgpa" class="col-sm-2 col-form-label">CGPA:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cgpa" name="cgpa" required rows="2" placeholder="Enter CGPA ..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2"></div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-lg" type="submit" name="pgsave">Submit</button>
                    </div>
                </div>

                
                
            </form>

        </div>

        <table border="2px" >
                      <tr>
                        <td><b>Name</b></td>
                        <td><b>Roll</b></td>
                        <td><b>Semester</b></td>
                        <td><b>Session</b></td>
                        <td><b>Subject</b></td>
                        <td><b>GPA</b></td>
                        <td><b>Subject</b></td> <td><b>GPA</b></td>
                        <td><b>Subject</b></td><td><b>GPA</b></td>
                        <td><b>Subject</b></td><td><b>GPA</b></td>
                        <td><b>Subject</b></td><td><b>GPA</b></td>
                        <td><b>Subject</b></td><td><b>GPA</b></td>
                        <td><b>Subject</b></td><td><b>GPA</b></td>
                        <td><b>CGPA</b></td>
                      <td><b>Delete</b></td>
                      </tr>
                      <?php
                       $select = "SELECT * FROM sresult";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>

                      <?php
  if(isset($_GET['del'])){
    $i = $_GET['del'];
    delete("sresult", "id = '$i'");
    
  }
  ?>
                        <tr>
                          <td><?=$st_info['name'];?></td>
                          <td><?=$st_info['roll'];?></td>
                          <td><?=$st_info['semester'];?></td>
                          <td><?=$st_info['session'];?></td>
                          <td><?=$st_info['subject1'];?></td> <td><?=$st_info['gpa1'];?></td>
                          <td><?=$st_info['subject2'];?></td> <td><?=$st_info['gpa2'];?></td>
                          <td><?=$st_info['subject3'];?></td> <td><?=$st_info['gpa3'];?></td>
                          <td><?=$st_info['subject4'];?></td> <td><?=$st_info['gpa4'];?></td>
                          <td><?=$st_info['subject5'];?></td><td><?=$st_info['gpa5'];?></td>
                          <td><?=$st_info['subject6'];?></td><td><?=$st_info['gpa6'];?></td>
                          <td><?=$st_info['subject7'];?></td> <td><?=$st_info['gpa7'];?></td>
                          <td><?=$st_info['cgpa'];?></td>
                          <td width="10%"><a href="result.php?del=<?php echo $st_info['id']; ?>"><i class="fa fa-trash"></i></a></td>
                        </tr>

                      <?php
                          $i++;
                        }
                      ?>


                    </table>
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