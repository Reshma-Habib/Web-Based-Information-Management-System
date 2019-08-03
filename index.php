 <!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.myS {display: none;}
.im {vertical-align: middle;
box-shadow: 0px 0px 17px 3px #2c3e50;
}

.sshow {
  max-width: 1000px;
  position: relative;
  margin-left: 50px;
  margin-right: 30px;

}

.numt {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dt {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}

.fa {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



.column {
  float: left;
  width: 30%;
  height: 300px;
  margin-left: 15px;
  margin-top: 10%;
  margin-bottom: 6px;
  padding: 0 8px;
  
}
@media screen and (max-width: 650px) {
  .sshow {
    width: 100%;
    display: block;
    margin-left: -82px;
  }
}
@media screen and (max-width: 650px) {
  .dtt {
    width: 100%;
    display: block;
    margin-bottom: 40px;
  }
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card1 {
  height: 60%;
  background-image: url();
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background:linear-gradient(to bottom, white,rgba(96, 163, 188,0.2));
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
.con {
  padding: 0 
}
 .con h2{
  text-align: center;
  margin-right: 20%;
  font-size: 30px;
  color: #2C3A47;
  margin-top: 25%;
}

.container1::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.component{
  margin-top: -20px;

}
.component a{
text-decoration: none;

}

.club {
width: 90%;
margin-left: 5%;
background-color: #f1f2f6;
margin-top: 0%;
}
.menu {
  float:left;
  width:15%;
  margin-left:10px;
  text-align:center;
  background-color: #f1f2f6;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:30px;
  display:block;
  color:black;
}
.main {
  float:left;
  width:50%;
  margin-left: 0px;
  margin-top:7px;
  background-color: #f1f2f6;
}
.right {
  background-color:#f1f2f6;
  float:left;
  width:35%;
  margin-left: 10%;
  margin-top:7px;
  text-align:center;
}
.right p {
  text-align: justify;
  font-size: 10px;
}
@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .right h2 {
    width:100%;
    margin-left: -35px;
  }
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .column {
    width:100%;
    margin-left: 5px;
    margin-bottom: -90px;
  }
}


@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}


.mySlider {display: none}
.simg {
  vertical-align: middle;
  margin-left: -20px;

}
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
  background-color: #f1f2f6;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 40px;
  border-radius: 3px 0 0 3px;
}
.prev {
  right: 90%;
 
}
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.snumbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dott {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dott:hover {
  background-color: #717171;
}
.fader {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.clock{
      position: relative;
      left: 0%;
      color: black;
      font-size: 25px;
      font-style: italic;
      padding: 0px 0px 0px 0px;
      padding: 0px 5px 0px 5px;
      text-shadow: 10px 5px 5px #34495e;
    }


@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.shadow{
    
    font-family: sans-serif;
    transform: translate(0%,40%);
    text-transform: uppercase;
    font-size: 2em;
    letter-spacing: 4px;
    overflow: hidden;
    background: linear-gradient(90deg, #3d3d3d, #4b4b4b, #1e272e, #2C3A47, #2C3A47);
    background-size: 80%;
    background-repeat: no-repeat;
    animation: animate 5s linear infinite;
    -webkit-background-clip: text;
    -webkit-text-fill-color: rgba(119, 140, 163,0.5);
}
@keyframes animate{
    0%{
        background-position: 0 0;
    }
    50%{
        background-position: 300% 0;
    }
    100%{
        background-position: 0 0;
    }
}

@keyframes animate{
    0%{
        background-position: -500%;
    }
    100%{
        background-position: 500%;
    }
}

</style>
</head>
<?php include("header.php"); ?>
<?php
 include("config.php");
    include("database.php");

    $x=1;
      $sql = "SELECT * FROM hnotice";
      $run = mysqli_query($cn, $sql);
      while($row=mysqli_fetch_array($run)){
    ?>
<body>

   <div class="jumbotron" style="background-color: #ecf0f1; margin-top: -20px; height: auto;">

         <div id="home" class="container-fluid">
               <a href="noticefile.php"><h4 align="center" style="color: #130f40; margin-top: -10px; font:20px/40px"><marquee><?php echo htmlentities($row['name']); ?></marquee></h4></a>

 <?php
                          $x++;
                        }
                      ?>
                      <br>
                 
               <div class="sshow">

<div class="myS fa">
  <div class="numt"></div>
  <img class="im" src="images/1.jpg" style="width:100%;height: 400px;">
 
</div>

<div class="myS fa">
  <div class="numt"></div>
  <img class="im" src="images/2.jpg" style="width:100%; height: 400px;">
  
</div>

<div class="myS fa">
  <div class="numt"></div>
  <img class="im" src="images/3.jpg" style="width:100%; height: 400px;">
</div>
<div class="myS fa">
  <div class="numt"></div>
  <img class="im" src="images/4.jpg" style="width:100%; height: 400px;">
</div>

</div>
<br>

<div class="dtt" style="text-align:center">
  <span class="dt"></span> 
  <span class="dt"></span> 
  <span class="dt"></span> 
  <span class="dt"></span> 
</div><br>



      <div class="component">
          <a href="photo.php" title="">
            <div class="column">   
    <div class="card1">
       <div class="container con">
       <h2 style="margin-left: 20%;">Photo Gallery</h2>
      </div>
    </div>
  </div></a>
 <a href="notice.php" title="">
  <div class="column">
     <a href="noticefile.php" title="">
    <div class="card1">
      <div class="container con">
        <h2 style="margin-left: 30%;">Notice Board</h2>
      </div>
    </div>
  </div> 
</a>
<a href="upfile.php" title="">
  <div class="column">
     
    <div class="card1">
      
      <div class="container con">
        <h2 style="margin-left: 20%;">Upload File </h2>
        
        
      </div>
    </div>
  </div></a>
  
  <div style="margin-left: 10%; margin-top: -10%; width:80%; height: auto; border: 2px #c7ecee;  float: left;  box-shadow: 0px 0px 12px 1px black;">
        <h3 style="text-align: center; margin-top: 30px; color: #2c3e50"><b>Welcome To NMUC CSE</b></h3><br>
        <p style="font-size: 15px; text-align: justify; color: #636e72; margin-left: 60px; margin-top: 30px; margin-bottom: 40px; margin-right: 50px;">The Department of Computer Science and Engineering is one of the pioneering educational institutions in and outside of the university.Achieving educational excellence has always been the department’s primary concern.Nevertheless,the department is also focused on multitudes of supplementary activities including programming,cultural extravaganzas and organization of seminars.By tradition,the department is consistently improving in pursuit of excellence in these areas through diligence and commitment.<br><br>
          <a href="about.php">Read More</a>
           </p>

                 </div>
 </div></div>

  <div class="club" style=" margin-top: -10%;">
<div style="background-color:#e5e5e5;text-align:center; height: 50px;">
 <h2 class="shadow" style="margin-top:15%;"><b>NMUC CSE CLUB</b></h2>
</div>

<div style="overflow:hidden;">
  

  <div class="main">
    <div class="slideshow-container">

<div class="mySlider fader">
  <div class="snumbertext">1 / 3</div>
  <img class="simg" src="images/nmc1.jpg" style="width:100%">
  <div class="text">Iftar Mahfil</div>
</div>

<div class="mySlider fader">
  <div class="snumbertext">2 / 3</div>
  <img class="simg" src="images/nmc2.jpg" style="width:100%">
  <div class="text">Workshop</div>
</div>

<div class="mySlider fader">
  <div class="snumbertext">3 / 3</div>
  <img class="simg" src="images/nmc3.jpg" style="width:100%">
  <div class="text">Workshop</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center; position: relative;">
  <span class="dott" onclick="currentSlide(1)"></span> 
  <span class="dott" onclick="currentSlide(2)"></span> 
  <span class="dott" onclick="currentSlide(3)"></span> 
</div>
</div>

 <div class="right">
    <h2>About</h2>
    <p style="font-size: 15px; text-align: justify; color: #636e72;">The Department of Computer Science and Engineering encourages the members of the NMUC CSE family to be outspoken, innovative and vigorous in both their academic and nonacademic activities. Various clubs with multitudes of activities attest to that mentality. There are various clubs with specific focus in the department. The largest and most active among them is the NMUC CSE Club. This club is focused on organizing cultural extravaganzas, technical sessions or talks and many more.<br><br>
          <a href="club.php">Read More</a></p>
  </div>
</div>

<div id="MyClockDisplay" class="clock" style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">@copyright</div>
</div>
        </div><!-- /container-->

 <?php include("footer.php"); ?>
        

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
var slideIndex = 0;
sSlides();

function sSlides() {
  var i;
  var slides = document.getElementsByClassName("myS");
  var dots = document.getElementsByClassName("dt");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" act", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " act";
  setTimeout(sSlides, 2000); // Change image every 2 seconds
}
</script>


      <script src="js/clock.js"></script>
     <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
   
       <script src="js/slide.js"></script>
       <script src="js/minislide.js"></script>

        </body>
        </html>