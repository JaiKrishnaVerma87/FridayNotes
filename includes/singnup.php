<?php include 'connection.php';
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];

$check = "SELECT * FROM users WHERE username= '$username'";
$ans=mysqli_query($conn,$check) or die ("Query Unsuccessful"); 
if(mysqli_num_rows($ans)>0)
{
 echo"<html><body><script>alert('username already exist:');
 window.location='index.php' </script></body></html>";
 header('location:../index.php');
}else{

    $sql="INSERT INTO users(username,email,password)
    values('$username','$email','$pass')"; 
   if($conn->query($sql)){
    echo "new record is inserted sucessfully";
    session_start();
    $_SESSION['user']=$_POST['username'];
    header('location:../sideBar.php');
} else{
    echo "Error:".$sql. $conn->error;
}
}

$conn->close();
     
    
 



?>