<?php

include "db.php";
 include('overeni.php') 

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM zamestnanci WHERE id_zamestnance = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:zamestnanci.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>