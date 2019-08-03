

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css" media="screen">
      table{
        margin-bottom: 30px;
      }
    </style>
   

</head>
<?php include("header.php"); ?>
<style>
.a{
    padding:1px;
    
    
}

</style>
<body>
    
        
           
          <table>


<?php
 include("config.php");
    include("database.php");

$i =0;
$select = "SELECT * FROM banner";
$query = mysqli_query($cn, $select);

 while ($result = mysqli_fetch_array($query)){
  if($i% 2 == 0){
 
?> 
<tr>
<?php   
  } 
  
  ?>
  
  <img src="dashboard/img/<?php echo  $result["file"]; ?>" class="a" height="300px" width="300px">
 <?php
if($i%2 == 2){
   echo "</tr>";
 
} 
 $i++;
}

?>
</table>
 <?php include("footer.php"); ?>