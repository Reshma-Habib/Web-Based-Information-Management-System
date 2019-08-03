<?php

include 'dashboard/conn.php';
?>  
  

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
     
  body {margin:0;font-family:Arial}
@media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }



</style>

</head>
<?php include("header.php"); ?>
<body>

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Student Info </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Department </th>
 <th> Phone </th>
 <th> Semester </th>
 <th> Email </th>
 <th> Gender </th>
 <th> Address </th>
 

  </tr >

  <?php

  include 'dashboard/conn.php'; 
 $q = "select * from stdinfo ";

  $query = mysqli_query($conn,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Id'];  ?> </td>
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Department'];  ?> </td>
 <td> <?php echo $res['Phone'];  ?> </td>
 <td> <?php echo $res['Semester'];  ?> </td>
 <td> <?php echo $res['Email'];  ?> </td>
 <td> <?php echo $res['Gender'];  ?> </td>
 <td> <?php echo $res['Address'];  ?> </td>
 

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>
<?php include("footer.php"); ?>
  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>






























