<?php
session_start();
include '../includes/connection.php';
if(!isset($_SESSION['jai']))
{
  header('location:index.php');
}
$sid=$_GET['id'];
$gird = "DELETE FROM users WHERE id={$sid};";
$result=mysqli_query($conn,$gird) or die ("Query Unsuccessful"); 
header('location:userrecord.php');

?>