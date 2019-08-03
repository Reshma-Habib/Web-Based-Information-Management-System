<?php
 include("config.php");
include("database.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
      <link rel="shortcut icon" href="assets/images/images.jpg" type="image/x-icon" sizes="16x16"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" href="css/template.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <?php include("header.php"); ?>
    <body>
    <div class="content" >
				<div class="component">
<div class="colum" align="center" style="margin-left: 0%; ">
  <br><br>
  
<form class="form-inline" method="POST" action="result.php">
    <input class="form-control mr-sm-6" type="text" name="name" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-4 my-sm-0" type="submit" name="submit">Search</button>
  </form>
<br><br>

                     

				<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $select = "SELECT * FROM sresult where name='$name'";
   $query = mysqli_query($cn, $select);
   while($row = mysqli_fetch_array($query)){
  ?>
<div style="text-align: justify; font-size: 15px; margin-left: 40%; "> 
<img src="images/student.jpg" height="200px" width="200px"><br>
<tr>
  <td><b style="color: #3498db;">Name:&nbsp&nbsp</b><?php echo $row['name'];?></td><br>
  <td><b style="color: #3498db;">Roll:&nbsp&nbsp</b><?php echo $row['roll'];?></td><br>
  <td><b style="color: #3498db;">Semester:&nbsp&nbsp</b><?php echo $row['semester'];?></td><br>
  <td><b style="color: #3498db;">Session:&nbsp&nbsp</b><?php echo $row['session'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject1'];?>&nbsp&nbsp</td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><td><?php echo $row['gpa1'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject2'];?>&nbsp&nbsp</td><td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa2'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject3'];?>&nbsp&nbsp</td> <td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa3'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject4'];?>&nbsp&nbsp</td> <td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa4'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject5'];?>&nbsp&nbsp</td><td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa5'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject6'];?>&nbsp&nbsp</td> <td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa6'];?></td><br>
  <td><b style="color: #3498db;">Subject:&nbsp&nbsp</b><?php echo $row['subject7'];?>&nbsp&nbsp</td><td><b style="color: #3498db;">GPA:&nbsp&nbsp</b><?php echo $row['gpa7'];?></td><br>
  <td><b style="color: #3498db;">CGPA:&nbsp&nbsp</b><?php echo $row['cgpa'];?></td><br><br>
</tr></div>
  <?php
}
  }
?>
</div>

				</div>
			</div><!--/content-->

			</div><!--/main-body-->
		
	</div><!--/wrapper-->
  <?php include("footer.php"); ?>
<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
    </body>
    </html>

