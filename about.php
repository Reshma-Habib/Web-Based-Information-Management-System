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
<body>

   <div class="jumbotron" style=" background:linear-gradient(to bottom, white,rgb(247, 241, 227));">
  <div class="container">
    
    <h3 style="text-align: center; margin-top: 30px; color: #2c3e50"><b>Welcome To NMUC CSE</b></h3><br>
    <p class="lead" style="font-size: 15px; text-align: justify; color: #636e72;">New Model Degree College is a first class non-government higher educational institute established at Dhaka in 1968.The college has a traditional excellence in the field of higher education.The college was started with only Degree (pass) course. Now it has started H.S.C.,HONORS, MASTERS and B.B.A,CSE (professional )course.From the early beginning<br> its going with a desire to open a new horizon through HONORS and MASTERS level education.We have much more experience and qualified professors in this college.<br><br>
Our students are well equipped to take the challenge to stand out as the leaders of tomorrow. We welcome all in our community who are willing to take the challenge. Welcome to progress. Welcome to NMUC_CSE.</p>
<br><br><br><br>
<h3 align="center"><b>Our Team Member</b></h3>

<br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img class="img" src="images/img.png" alt="Jane">
      <div class="container">
        <h2>Md. Mehedi Alam Siddiqui</h2>
        <p class="title" style="font-size: 16px;">Supervisor</p>
        <p style="font-size: 17px;  color: grey;">Dept. of Computer Science & Engineering</p>
        <p style="font-size: 17px;">mmasiddiqui.bd@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="img" src="images/img.png" alt="Mike">
      <div class="container">
        <h2>Reshma Habib</h2>
        <p class="title" style="font-size: 16px;">Web Development(backend) & Mobile Application </p>
         <p style="font-size: 17px;  color: grey;">Dept. of Computer Science & Engineering</p>
        <p style="font-size: 17px;">example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img class="img" src="images/img.png" alt="John"><br>
      <div class="container">
        <h2>Jannatull Alam</h2>
        <p class="title" style="font-size: 15px;">Web Design & Web Development (frontend & backend)</p>
         <p style="font-size: 17px;  color: grey;">Dept. of Computer Science & Engineering</p>
        <p style="font-size: 17px; ">jannat.alam94@gmail.com</p>
         <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
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