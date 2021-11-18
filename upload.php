<?php
 include 'includes/connection.php';
session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}
$img="img/perfil.jpg";

if(isset($_POST['upload'])){
  $file_uploader=$_SESSION['user'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $course=$_POST['course'];
  include 'includes/fileupload.php';
  
 
  $upd="INSERT INTO uploads(thumbnail,file_uploader,file_name,file_uploaded_to,file_description,file) 
  values('$imagename','$file_uploader','$title','$course','$description','$temp')";
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
        <link rel="stylesheet" href="CSS/upload.css">

        <title>UPLOAD_NOTES</title>
    </head>
    <body id="body-pd">
      <!-------------------------------------------------------- -->
    <?php
        include 'includes/header.php';
        ?>
          <link rel="stylesheet" href="CSS/SideBar.css">

        </div>
        <div class="uploadbg">
          <form role="form" action="" method="POST" enctype="multipart/form-data">


            <div class="form-group">
              <label for="post_title">Note Title</label>
              <input type="text" name="title" class="form-control" placeholder="Eg: Php Tutorial File"  value = "" required="">
            </div>
          
            <div class="form-group">
              <label for="post_title">Course</label>
              <input type="text" name="course" class="form-control" placeholder="Eg: Computer Science"  value = "" required="">
            </div>

            <div class="form-group">
              <label for="post_tags">Short Note Description</label>
              <input type="text" name="description" class="form-control" placeholder="Eg: Php Tutorial File includes basic php programming ...." value="" required="" ">
            </div>
            <div class="form-group"> 
            <img class="img-responsive" width="200" src="<?php echo $img;?>" alt="Photo">
             <label for="post_file">Select File</label><font color="brown"> (here upload Banner pic for your notes | best size: 200 kb ) </font>
                 <input class="chhose" type="file" name="image"> 
                 </div>
                 
              <div class="form-group">

                  <label for="post_file">Select File</label><font color="brown"> (Your Notes | allowed file type: 'pdf' | allowed maximum size: 12 mb ) </font>
              <input type="file" name="file"> 
               </div>
          
          <button type="submit" name="upload" class="btn btn-primary" value="Upload Note">Upload Note</button>
          <br>
          <br>
          </form>
        </div>

    
        <!--===== MAIN JS =====-->
        <script src="Javascript/sideBar.js"></script>
    </body>
</html>