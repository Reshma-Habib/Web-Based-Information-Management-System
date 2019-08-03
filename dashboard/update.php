<?php

include 'conn.php';

if(isset($_POST['done'])){

     $Id = $_POST['Id'];
     $Name = $_POST['Name'];
     $Department = $_POST['Department'];
     $Phone = $_POST['Phone'];
     $Semester = $_POST['Semester'];
	 $Email = $_POST['Email'];
	 $Gender = $_POST['Gender'];
	 $Address = $_POST['Address'];
 
 
 $q = "UPDATE stdinfo SET Id=$Id, Namee='$Name', Department='$Department' , Phone='$Phone', Semester='$Semester', Email='$Email' Gender='$Gender', Address='$Address' where Id=$Id  "; 
 $query = mysqli_query($conn,$q);
  $success = mysqli_query($conn, $q);
  header('location:display.php');
if (!$success) {
        die('Could not Update data: ' . mysqli_error($conn));
    }
    echo "Update data successfully\n";
}
?>  
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
     
  
@media screen and (max-width: 650px) {
  .colum {
    width: 100%;
    display: block;
  }



</style>

</head>
<!---?php include("header.php"); ?--->
<body >

  <div  class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Table </h1>
 </div><br>
 <label> Id: </label>
 <input type="text" name="Id" class="form-control"> <br>

  <label> Name: </label>
 <input type="text" name="Name" class="form-control"> <br>
 
  <label> Department: </label>
 <input type="text" name="Department" class="form-control"> <br
 
  <label> Phone: </label>
 <input type="text" name="Phone" class="form-control"> <br>
 
  <label> Semester: </label>
 <input type="text" name="Semester" class="form-control"> <br>
 
  <label> Email: </label>
 <input type="text" name="Email" class="form-control"> <br>
 
  <label> Gender: </label>
 <input type="radio" name="Gender" value="Male" onclick="stuGender = this.value;"> Male <input type="radio" name="Gender" value="Female" onclick="this.value" > Female <br>
 
  <label> Address: </label>
 <input type="text" name="Address" class="form-control"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>