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
.column {
  float: left;
  width: 30%;
  height: 300px;
  margin-top: 10%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
	height: 40%;
	background-image: url();
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.image{
width: 28%;
margin-top: 10px;
position: absolute;
}
.image1{
width: 33%;
position: absolute;
margin-top: 25px;
}
.image2{
width: 35%;
position: absolute;
margin-top: 25px;
}

.container {
  padding: 0 16px;
}
.container h2{
  margin-top: 15%;
  text-align: center;
  font-size: 30px;
  margin-left: 10%;
  color: #2C3A47;
  position: relative;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
</head>

<?php  
include("config.php");
include("database.php");
session::login("login");

    if(isset($_GET['u'])){
      session::sess_destroy();
      header("location: login.php");
    }
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
			              <a href="hnotice.php">
			                <span><i class="fa fa-book"></i></span>
			                <span>Notice Heading</span>
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
			               <span>Logout</span></a>
			               <br>
			                
			                </li> 
			            </ul>
			           
				</div><br>
				
			</div><!--/sidebar-->
			<div class="content" >
				<div class="component">
			<a href="up-baner.php">		
	<div class="column">
    <div class="card">
      <img class="image" src="images/images.jpg" >
      <div class="container">
        <h2 style="margin-left: 20%;">Photo Gallery</h2>
      </div>
    </div>
  </div></a>
<a href="notice.php">
  <div class="column">
    <div class="card">
      <img class="image1" src="images/NBOARD.jpg">
      <div class="container">
        <h2 style="margin-left: 30%;">Notice Board</h2>
      </div>
    </div>
  </div></a>
<a href="fileup.php">
  <div class="column">
    <div class="card">
      <img class="image2" src="images/upload.jpg">
      <div class="container">
        <h2 style="margin-left: 20%;">Upload File </h2>
      </div>
    </div>
  </div></a>
					
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