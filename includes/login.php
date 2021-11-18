<?php
include 'connection.php';
$username=$_POST['username'];
$pass=$_POST['password'];

    $query="SELECT * from users where username='$username' and password='$pass'";
    $result=mysqli_query($conn,$query);
       if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['user']=$_POST['username'];
              header('location:../sideBar.php');
        } else{
    echo ' wrong USERNAME or PASSWORD ';
    }
$conn->close();
     
    
 



?>