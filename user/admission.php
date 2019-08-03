<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/images/images.jpg" type="image/x-icon" sizes="16x16"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/template.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
html {
  box-sizing: border-box;
  font-family: "Times New Roman Georgia", Times, Serif;
  color: #2c3e50;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}
.container h2{
  margin-top: 30%;
  font-size: 20px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.img{
  border-radius: 100%;
  width: 50%;
}
</style>
</head>
<?php include("header.php"); ?>
<?php

include("config.php");
include("database.php");

?>



                      <body>


   <div class="jumbotron" style=" background:linear-gradient(to bottom, white,rgb(247, 241, 227));">
  <div class="container">
    
    <h3 style="text-align: center; margin-top: 30px; color: #2c3e50"><b>Welcome To NMUC CSE</b></h3><br>
    <p class="lead" style="font-size: 15px; text-align: justify; color: #636e72;">
    According to the rules of National University, students who earned their H.S.C from science can be admitted in the B.sc program.The admission process for prospective undergraduate and graduate students are not directly managed by the department authority. Hence we strongly recommend that you consult the <a href="http://nu.ac.bd/admission-notice.php">Official National University Website</a> for information regarding admission procedures and related announcements.</p>
<br>
<?php
                       $select = "SELECT * FROM dform";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>
Admission Form <a href="dashboard/uploads/<?=$st_info['file'];?>">Download</a>

 <?php
                          $i++;
                        }
                      ?>

<br><h6>Hosteline Number: +880 1400 855 956</h4>
<h6>Email: example@gmail.com</h4>

  </div>
</div>


 <?php include("footer.php"); ?>
        



     <script src="js/jquery-3.1.1.min.js">
            
        </script>
        <script src="js/bootstrap.min.js">
            
        </script>
   
       <script src="js/slide.js"></script>
        </body>
        </html>