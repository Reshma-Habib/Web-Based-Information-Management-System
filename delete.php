<?php

include 'conn.php';

$Id = $_GET['Id'];

$q = " DELETE FROM stdinfo WHERE Id = $Id ";

mysqli_query($conn, $q);

header('location:display.php');

?>