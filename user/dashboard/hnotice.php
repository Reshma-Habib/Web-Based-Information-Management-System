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
    $data = array(
      "name" => mysqli_real_escape_string($cn,$_POST['name'])
    );
    create("hnotice", $data);
    
  }
?>

    <div id="contact" class="container-fluid">
        <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">

            <h3 style="color: #b33939; text-align: center;  "><br><br> Notice Board</h3><br>

            <form method="post" enctype="multipart/form-data" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
              
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Heading:</label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" id="name" name="name" required rows="2" placeholder="Enter Heading Name..." style="background-color: #f1f2f6; border: 0px;"></textarea>
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
  
                     
                     <?php
      $i=1;
      $sql = "SELECT * FROM hnotice";
      $run = mysqli_query($cn, $sql);
      while($st_info=mysqli_fetch_array($run)){
    ?>

                      <?php
  if(isset($_GET['del'])){
    $i = $_GET['del'];
    delete("hnotice", "id = '$i'");
    
  }
  ?>
  <table>
      <tr>
      <th style="text-align: center">ID</th>
      <th style="text-align: center">Name</th>
    </tr>

      <tr>
      <td><?php echo $i++; ?></td>
       <td><?=$st_info['name'];?></td>
     
      <td width="10%"><a href="hnotice.php?del=<?php echo $st_info['id']; ?>"><i class="fa fa-trash"></i></a></td>
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