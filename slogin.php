<?php
    include("config.php");
include("database.php");

    if(isset($_POST['pgsave'])){
        $name = mysqli_real_escape_string($cn, $_POST['name']);
    $roll = mysqli_real_escape_string($cn,$_POST['roll']);
        $sql = "SELECT * FROM sresult WHERE name = '$name' AND roll = '$roll'";
    $run = mysqli_query($cn, $sql);
    $row = mysqli_fetch_array($run);
        if($run->num_rows > 0){
            
            header("location:result.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="shortcut icon" href="assets/images/images.jpg" type="image/x-icon" sizes="16x16"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" href="css/template.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
   <style>

   

.main {
  width: 450px;
  height: 310px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.5);
  margin: 0 auto;
  position: relative;
  top: 0%;
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
    left: 0px; 
  }
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
<?php
include("header.php");
?>
<body>
  <div class="jumbotron" style=" background:linear-gradient(to bottom, white,rgb(209, 204, 192));">
  <div class="container"><br><br><br><br><br><br><br><br><br><br>
    <div class="main">
        <br>
        <div class="fields">
            <form action="" method="post">
                <div class="form-group custom-input">
                    <i class="fa fa-user fa-2x"></i>
                    User Name<br><input type="text" class="form-control" name="name" id="name" required placeholder="Enter username">
                </div><br>
                <div class="form-group custom-input">
                    <i class="fa fa-unlock-alt fa-2x"></i>
                    Password<br><input type="password" class="form-control" name="roll" id="roll" required placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-primary" name="pgsave">Log In</button>
            </form>
        </div>
        <br>
    </div>
  </div>
</div>

    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome-all.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="xassets/js/modernizr-custom.js"></script> -->
</body>

</html>
