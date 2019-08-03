  
<?php
 include("config.php");
 include("database.php");
session_start();
  if(isset($_POST['pgsave'])){
    $data = array(
      "name" => mysqli_real_escape_string($cn,$_POST['name']),
      "phone" => mysqli_real_escape_string($cn,$_POST['phone']),
      "gender" => mysqli_real_escape_string($cn,$_POST['gender']),
      "email" => mysqli_real_escape_string($cn,$_POST['email']),
      "message" => mysqli_real_escape_string($cn,$_POST['message'])
    );

    // $sql = "INSERT INTO info(fname, lname, contact) VALUES('$f', '$l', '$c')";
    // mysqli_query($cn, $sql);
    create("contact", $data);
    
  }
?>

<?php include("header.php"); ?>








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
    <style type="text/css" media="screen">
      @media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }
}
    </style>
 
</head>

<body>

  <div id="contact" class="container-fluid">
             
                   <center><h1 style="margin-bottom: 30px; color: #273c75;">Contact Us</h1> </center> 
        
                  <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;border-bottom: 5px solid #273c75; border-top: 5px solid #273c75;">
                     
        <section>
                  <div class="col-md-12 maps" align="center" style=""> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3653.2651703335387!2d90.42442786432707!3d23.702222846533406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1535726070858" frameborder="0" style="border:2px solid gray; width:auto;height:250px; margin-bottom: 30px;margin-top: 40px; " allowfullscreen></iframe>          
                    </div>
                </section>
                

<h3 style="color: #b33939; text-align: center;  "><br><br></h3><br>
 <form action="" method="post" style="text-align: justify; margin-left: 10%; margin-bottom: 10%;margin-right: 10%;">
           
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  id="name" name="name" required placeholder="Enter Your Name..."style="background-color: #f1f2f6; border: 0px;">
    </div>
  </div>
    <div class="form-group row">
    <label for="phn" class="col-sm-2 col-form-label">Phone Number:</label>
    <div class="col-sm-6">
        <input type="number" class="form-control"  id="phone" name="phone" required placeholder="Enter Your phone number ..."style="background-color: #f1f2f6; border: 0px;">
  </div>
    </div>
     <div class="form-group row">
    <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
    <div class="col-sm-6">
    <select class="form-control" id="gender" name="gender" style="background-color: #f1f2f6; border: 0px;">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
    </div>             
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  id="email" name="email" required placeholder="Enter Your Email ..."
      style="background-color: #f1f2f6; border: 0px;">
    </div>
  </div>
  <div class="form-group row">
    <label for="comment" class="col-sm-2 col-form-label">Message:</label>
  <div class="col-sm-6">
      <textarea class="form-control"  id="message" name="message" required rows="4" placeholder="Enter your Message..."
      style="background-color: #f1f2f6; border: 0px;"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-2"></div>
    <div class="col-sm-6">
      <button class="btn btn-primary btn-lg" type="submit" name="pgsave">Submit</button>
    </div>
  </div>
</form>

<center>
                <p style="text-align: justify; color: #273c75; margin-left: 10%; margin-right: 20%; margin-top: 30px; font-size: 15px;">
                     <b>Address:</b> SUKRABAD, RASSEL SQUARE, DHANMONDI,DHAKA- 1207<br><b>College EIIN:</b> 108250<br><b>Mobile:</b> 01732939720 <br><b>Telephone:</b> +880 1400 855 956  <br><b>Fax:</b> 029119532 <br><b> Email:</b> example@gmail.com </p><br><br>
                  <a href="#" style="font-size: 25px; letter-spacing: 10px;"><i class="fa fa-facebook"></i></a>
                  <a href="#" style="font-size: 25px;  letter-spacing: 10px;"><i class="fa fa-google "></i></a>
                  <a href="#" style="font-size: 25px;  letter-spacing: 10px;"><i class="fa fa-twitter "></i></a>
                  <a href="#" style="font-size: 25px; letter-spacing: 10px;"><i class="fa fa-chrome"></i></a>
                  <a href="#" style="font-size: 25px; letter-spacing: 10px;"><i class="fa fa-youtube"></i></a>
                  <a href="#" style="font-size: 25px; letter-spacing: 10px;"><i class="fa fa-instagram"></i></a>
</center><br><br>

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