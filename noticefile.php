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
      body{
        font-family: "Times New Roman Georgia", Times, Serif;
      }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 0%;
  margin-top: 30px;
  margin-left: 20%;
  margin-right: 20%;
  margin-bottom: 30px;
  text-align: center;
}

.bton{
border:none;
}
tr{
  height: 0px;
}
td, th {
  border: 4px solid white;
  text-align: left;
  padding: px;
  text-align: center;
 
}
.time td{
  width: 20px;
 
  
}
.dwnload{
  font-size: 25px;
}

.dwnload a i:hover{
  background-color:#f7f1e0;
  height: 30px;
  padding: 20px;
  padding-bottom: -7px;
}


@media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }
}



</style>

</head>
<?php include("header.php");?>

<?php

include("config.php");
include("database.php");
?>

<body>

  <div id="view" class="container-fluid">

                   <center><h1 style="margin-bottom: 30px; color: #273c75;">Notice</h1> </center>

                  <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">



                    <table style="background-color: #f7f1e3; border: 2px solid white;">
                     
                      <?php
                       $select = "SELECT * FROM notice";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                         <td width="20%"><div class="time" style="background-color: #f6e58d; height: auto; padding: 12px;"><b><?=$st_info['time'];?></b></div></td>
                         <div class="body">
                          <td><h4  style=" color: #3498db;"><?=$st_info['name'];?></h4>
                           <p style="font-size: 20px;"><?=$st_info['title'];?></p></td></div>
                          
                          <td width="10%" class="dwnload"><a href="dashboard/noticeboard/<?=$st_info['file'];?>"><i class="fa fa-download"></i></a></td>
                        </tr>

                      <?php
                          $i++;
                        }
                      ?>


                    </table>




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