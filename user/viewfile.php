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
  width: 60%;
  margin-top: 30px;
  margin-left: 20%;
  margin-bottom: 30px;
  text-align: center;
  background-color: #dcdde1;
}
.bton{
border:none;
}
tr{
  height: 30px;
}
td, th {
  border: 1px solid #192a56;
  text-align: left;
  padding: 8px;
  text-align: center;
}
@media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }
}
@media screen and (max-width: 650px) {
  .table {
    width: 80%;
    display: block;
  }
}



</style>

</head>
<?php include("header.php");?>

<?php

include("config.php");
include("database.php");

// $res = mysqli_query($conn, $sql);
// $string = "";
// $fileName = "../uploads/";
// while ($row = mysqli_fetch_array($res)) {

//     $string .= '<tr><td>' . $row['name'] . '</td><td>' . $row['name'] .
//         '</td><td>' . $row['semester'] . '</td><td>' .
//         '</td><td>' . $row['file'] . '</td><td>' .
//         '</td></tr>';
// }
?>

<body>

  <div id="view" class="container-fluid">

                   <center><h1 style="margin-bottom: 30px; color: #273c75;">View Files</h1> </center>

                  <div class="cont" style="margin-left: 0%; width:100%; height: auto; background-color: #dfe4ea;border: 2px #c7ecee; margin-bottom: 20px;  float: left;  box-shadow: 0px 0px 12px 1px black;">
                  
                  



                    <table border="2px">
                      <tr>
                        <td><b>Name</b></td>
                        <td><b>Semester</b></td>
                        <td><b>Phone</b></td>
                        <td><b>Email</b></td>
                        <td><b>Subject</b></td>
                        <td><b>File Name</b></td>
                      <td><b>Download file</b></td>
                      </tr>
                      <?php
                       $select = "SELECT * FROM student";
                        $query = mysqli_query($cn, $select);
                        $i = 1;
                        while ($st_info = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                          <td><?=$st_info['name'];?></td>
                          <td><?=$st_info['semester'];?></td>
                          <td><?=$st_info['phone'];?></td>
                          <td><?=$st_info['email'];?></td>
                          <td><?=$st_info['sub'];?></td>
                          <td><?=$st_info['fname'];?></td>
                          <td><a href="dashboard/uploads/<?=$st_info['file'];?>"><i class="fa fa-arrow-down"></i></a></td>
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