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

    
  if(isset($_POST['pgsave'])){
    if(!$cn){
        echo "Database Connection Error!";
    }
    else{
        // echo "data base connection success";
    }

    if(!empty($_POST)){
        $name = $_POST['name'];
        $time = $_POST['time'];
        $title = $_POST['title'];
       $file = $_FILES['file'];
       $fileName = 'file-'.time().'-'.rand(100000,1000000000).'.'.pathinfo($file['name'],PATHINFO_EXTENSION);
       
    $insert = "INSERT INTO notice(name,time ,title,file) 
                        VALUES('$name','$time','$title','$fileName')";
    if(!empty($name)){
            if(mysqli_query($cn, $insert)){
                move_uploaded_file($file['tmp_name'],'noticeboard/'.$fileName);
                echo "<script>";
                echo "window.location.replace('notice.php')";
                echo "</script>";
                echo "<script> alert('registration success'); </script>";
            }
        }
    }
}
?>

    <div id="contact" class="container-fluid">
        <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">

            <h3 style="color: #b33939; text-align: center;  "><br><br> Notice Board</h3><br>

            <form action="notice.php" method="post" enctype="multipart/form-data" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
              <div class="form-group row">
                    <label for="time" class="col-sm-2 col-form-label">Time:</label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" id="time" name="time" required placeholder="Enter Time..." style="background-color: #f1f2f6; border: 0px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Heading:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" id="name" name="name" required rows="2" placeholder="Enter Heading Name..." style="background-color: #f1f2f6; border: 0px;"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" id="title" name="title" required rows="2" placeholder="Enter Title ..." style="background-color: #f1f2f6; border: 0px;"></textarea>
                    </div>
                </div>

  <div class="form-group">
                    <label for="exampleFormControlFile1">Upload File</label>
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

        <table style="background-color: #f7f1e3; border: 2px solid black; margin-left: 20%;
  margin-right: 20%;">
  
                     
                      <?php
                       $select = "SELECT * FROM notice";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>

                      <?php
  if(isset($_GET['del'])){
    $i = $_GET['del'];
    delete("notice", "id = '$i'");
    
  }
  ?>
                        <tr style=" border: 2px solid black;">
                         <td width="20%"><div class="time" style="background-color: #f6e58d; height: auto; padding: 12px;"><b><?=$st_info['time'];?></b></div></td>
                         <div class="body">
                          <td><h4  style=" color: #3498db;"><?=$st_info['name'];?></h4>
                           <p style="font-size: 20px;"><?=$st_info['title'];?></p></td></div>
                          
                          <td width="10%" class="dwnload"><a href="noticeboard/<?=$st_info['file'];?>"><i class="fa fa-download"></i></a></td>
                          <td width="10%"><a href="notice.php?del=<?php echo $st_info['id']; ?>"><i class="fa fa-trash"></i></a></td>
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