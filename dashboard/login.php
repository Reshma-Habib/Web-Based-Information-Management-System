<?php
    include("config.php");
include("database.php");

    session::check("login");
    if(isset($_POST['login'])){
        $u = mysqli_real_escape_string($cn, $_POST['user']);
		$p = mysqli_real_escape_string($cn,$_POST['pass']);
        $sql = "SELECT * FROM login WHERE user = '$u' AND pass = '$p'";
		$run = mysqli_query($cn, $sql);
		$row = mysqli_fetch_array($run);
        if($run->num_rows > 0){
            session::sess_set("login", true);
            session::sess_set("usr", $row['user']);
            header("location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
   
   <style>

   	html, body {
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center; }

.main {
  width: 450px;
  height: 400px;
  padding: 25px;
  background: rgba(0, 0, 0, 0.5);
  margin-top: 0%;
  margin-left: 30%;

  position: relative;
  top: 50%;
  border-left: 1px solid white;
  border-right: 1px solid white;
  border-radius: 5px;
  transform: translateY(-50%); }

.head {
  text-align: center;
  background: white;
  margin-top: -15px;
  margin-left: -15px;
  margin-right: -15px;
  border-radius: 3px 3px 0 0; }

.fields .custom-input {
  position: relative; }
  .fields .custom-input svg {
    color: black;
    position: absolute;
    bottom: 15px;
    left: 0; }
  .fields .custom-input input {
  	 width: 70%;
    padding-left: 40px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 0;
    color: black !important;
    background: none;
    border: none;
    border-bottom: 2px solid white; }
  .fields .custom-input input:focus {
    background: none;
    box-shadow: none;
    border-bottom: 2px solid skyblue; }
.fields .custom-input:focus {
  color: skyblue; }
.fields .btn {
  width: 100%;
  height: 30px;
  border-radius: 3px;
  background: white;
  color: #333;
  border: 1px solid white; }
.fields .btn:hover {
  background: #0984e3;
  color: #fff;
  border: 1px solid #0954e3; }
.fields .btn:focus {
  box-shadow: none !important; }


   </style>
</head>
<?php include("header.php"); ?>
<body>
    <div class="main">
      
        
        <div class="fields">
            <form action="" method="post">
                <div class="form-group custom-input">
                    <i class="fa fa-user fa-2x"></i>
                    User Name<br><input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp" placeholder="Enter username">
                </div><br>
                <div class="form-group custom-input">
                    <i class="fa fa-unlock-alt fa-2x"></i>
                    Password<br><input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-primary" name="login">Log In</button>
            </form>
        </div>
        <br>
    </div>

    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome-all.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="xassets/js/modernizr-custom.js"></script> -->
</body>

</html>
