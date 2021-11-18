<?php
session_start();
include '../includes/connection.php';
if(!isset($_SESSION['jai']))
{
  header('location:index.php');
}
$fid=$_GET['id'];
$gird = "UPDATE uploads SET status = 'approved' WHERE file_id={$fid};";
$result=mysqli_query($conn,$gird) or die ("Query Unsuccessful"); 
header('location:record.php');

?>

