<?php
error_reporting(0);
 include 'includes/connection.php';
session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}


//$img="img/perfil.jpg";
$temp=$_SESSION["user"];

if($_POST['uploadphoto']){
    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $img="img/".$filename;
    move_uploaded_file($tempname,$img); 
    if($filename!=""){
        $query="UPDATE users SET image='$filename' WHERE username='$temp'";
        $data=mysqli_query($conn,$query);
        if($data){
            echo"pic uploaded";
        }else{echo"img query unsuccessful";}
    }
}

if($_POST['update']){
    $usertype=$_POST['usertype'];
    $gender=$_POST['gender'];
    $status=$_POST['visibility'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $college=$_POST['college'];
    $about=$_POST['about'];
    $password=$_POST['newpassword'];
    $upd="UPDATE users SET usertype='$usertype',gender='$gender',status='$status',email='$email',course='$course',college='$college',about='$about',password='$password' WHERE username='$temp'";
    $d1=mysqli_query($conn,$upd);
    if($d1){
        echo"profile updated";
    }else{echo"profile query unsuccessful";}

}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="CSS/updateProfile.css">
        <link rel="stylesheet" href="CSS/SideBar.css">

        <title>Update_Profile</title>
    </head>
    <body id="body-pd">
      <!-------------------------------------------------------- -->
    <?php
        include 'includes/header.php';
        ?>
        <!-- ----------------------------------------------------CONTENT--------------------------------------------- -->
        <div class="full">
            <div id="wrapper">

        
                 <div id="page-wrapper">
         
                     <div class="container-fluid">
         
                         
         <form role="form" action="" method="POST" enctype="multipart/form-data">
         
         
         
         <div class="form-group">
                 
                 <img class="img-responsive" width="200" src="<?php echo $img;?>" alt="Photo">
                 <input class="chhose" type="file" name="image"> 
                 <br><br>
                 <button type="submit" name="uploadphoto" class="btn" value="upload photo">upload photo</button>
             </div>
             </form>
         
         
          
          
          
          
             <form role="form" action="" method="POST" enctype="multipart/form-data">
             <hr>
         
             <div class="form-group">
                <label for="UserType">UserType</label>
                <select id="usertype" name="usertype">
                  <option value="student">Student</option>
                  <option value="teacher">Teacher</option>
                  <option value="other">Other</option>
                </select>
              
             </div>
                 
             <div class="form-group">
                <label for="Gender">Gender</label>
                <select id="gender" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="other">Other</option>
                </select>
             </div>

             <div class="form-group">
                <label for="visibility">Profile Visibility to Others</label>
                <select id="gender" name="visibility">
                  <option value="unhide">Display</option>
                  <option value="hidden">Hidden</option>
            </select>
             </div>

             <div class="form-group">
                 <label for="user_tag">Email</label>
                 <input type="email" name="email" class="form-control" placeholder="E-mail Id" required>
             </div>

             <div class="form-group">
                <label for="Course">Course</label>
                <select id="course" name="course">
                  <option value="MCA">MCA</option>
                  <option value="MBA">MBA</option>
                  <option value="BTC">BTC</option>
                  <option value="M.tech">M.tech</option>
                  <option value="B.tech">B.tech</option>
                  <option value="B.Sc">B.Sc</option>
                  <option value="BA">BA</option>
                  <option value="B.Com">B.Com</option>
                  <option value="LAW">LAW</option>
                  <option value="P.hd">P.hd</option>
                   <option value="B.Ed">B.Ed</option>
                    <option value="M.Sc">M.Sc</option>
                    <option value="MA">MA</option>
                    <option value="M.Sc">M.Sc</option>
                  <option value="Diploma">Diploma</option>
                  <option value="Highschool">High School</option>
                  <option value="Intermediate">Intermediate</option>
                  <option value="other">Other</option>
                </select>
             </div>

             <div class="form-group">
                 <label for="post_content">College</label>
                 <input type="text" name="college" class="form-control" placeholder="College" required>
             </div>

             <div class="form-group">
                 <label for="post_content">About<font color='brown'> (*max 50 words)</font></label>
                 <textarea  class="form-control" name="about" id="about" cols="30" rows="10" > </textarea>
             </div>

             <div class="form-group">
                 <label for="usertag">New Password <font color='brown'> (*if you dont want change it then put your current password)</font></label>
                 <input type="password" name="newpassword" class="form-control" placeholder="Enter New Password">
             </div>
             
         <hr>
         
         
         <button type="submit" name="update" class="btn" value="Update User">Update User</button>
         </form>
         
                             </div>
                         </div>
                         
         
                     </div>
                     
         
             </div>
        </div>
        <script src="Javascript/sideBar.js"></script>
    </body>
</html>