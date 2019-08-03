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
@media screen and (max-width: 640px) {
  .colum {
    width: 80%;
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
			<div class="content" >
				<div class="component">
<div class="colum" align="center" style="margin-left: 0%; ">


				<table border="3" >
		<tr>
			<th style="text-align: center">ID</th>
			<th style="text-align: center">Name</th>
			<th style="text-align: center">Phone</th>
			<th style="text-align: center">Gender</th>
			<th style="text-align: center">Email</th>
			<th style="text-align: center">Message</th>
		</tr>
		<?php
			$x=1;
			$sql = "SELECT * FROM contact";
			$run = mysqli_query($cn, $sql);
			while($row=mysqli_fetch_array($run)){
		?>
		<tr>
			<td><?php echo $x++; ?></td>
			<td><?php echo htmlentities($row['name']); ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['message']; ?></td>
		</tr>
		<?php
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