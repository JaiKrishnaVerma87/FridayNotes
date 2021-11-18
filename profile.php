<?php include 'includes/connection.php';
session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}
$temp=$_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="CSS/profile.css">

        <title>Profile</title>
    </head>
    <body id="body-pd">
    <!-------------------------------------------------------- -->

    <?php
        include 'includes/header.php';
        ?>

<!--------------------------------------------------------
 Portfolio Gallery Grid -->
  <div class="profRow">
      <div class="profColumn">
      <?php   $g = "SELECT * FROM users WHERE username='$temp'";
      $ro=mysqli_query($conn,$g) or die ("Query 1 Unsuccessful"); 
      $r=mysqli_fetch_assoc($ro)?>
        <div class="ProfilePic">
          <img class="ProfilePic" src="img/<?php echo $r['image']; ?>" alt="">
         </div>
      </div>
      <div class="profColumn">
        
          <h1 style="color:orange;">Name: <?php echo $_SESSION['user'];?></h1>
          <?php   $g = "SELECT * FROM users WHERE username='$temp'";
      $ro=mysqli_query($conn,$g) or die ("Query 1 Unsuccessful"); 
      $r=mysqli_fetch_assoc($ro)?>
          <h2 >Course: <?php echo $r['course']; ?></h2>
          <h3 >College: <?php echo $r['college']; ?></h3> </div>
      
      <div class="profColumn">
          <h3 >User type: <?php echo $r['usertype']; ?></h3>
          <p>Description: <?php echo $r['about']; ?></p>
          <p>Join Date: <?php echo $r['joindate']; ?></p>
       
      </div>
      </div>

      <!--------------------------------------------------------
 Portfolio Gallery Grid -->
 <?php
   
      $gird = "SELECT * FROM uploads WHERE file_uploader='$temp' ORDER BY file_id desc;";
      $result=mysqli_query($conn,$gird) or die ("Query 2 Unsuccessful"); 
      if(mysqli_num_rows($result)>0)
      {
      ?>
<div class="gird">
    <div class="row">
    
    <?php
    while($row=mysqli_fetch_assoc($result))
      {?>
        <div class="column">
          <div class="content"style="border-radius:12px; background-color:#f2f2f2;">
          <img src="img/<?php echo $row['thumbnail']; ?>" alt="please upload" style="width:100%;">
             
             <h3 id="title"><?php echo $row['file_name']; ?></h3>
             <h5 id="detail"><?php echo $row['file_uploaded_to']; ?></h5>
             <h6 id="detail" style="line-height: 15px;"><?php echo $row['file_description'];?> </h6>
             <a href="javascript:void();" class="readmore-btn"> Read More</a>
              <a style="background-color:#4CAF50;" href="upload/<?php echo $row['file'];?> " class="download-btn"> Download</a>
             <h4 id="detail" style="color:blue;"><?php echo $row['file_uploader']; ?></h4>
             <h5 id="detail"><?php echo $row['file_uploaded_on']; ?></h5>
      
     
          </div>
        </div>
        <?php } ?>
        
    </div>
    
</div>
<?php } else{ echo"<p> NO_RECORD_FOUND..!</p>"; }?>
      <!-- END GRID 
    ----------------------------------------------------------------------------------------->
    
        <!--===== MAIN JS =====-->
        <script src="Javascript/sideBar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          $(".readmore-btn").on('click',function(){
            $(this).parent().toggleClass("showContent");
            var replaceText=$(this).parent().hasClass("showContent")?"Read Less":"Read More";
            $(this).text(replaceText);
          });</script>
    </body>
</html>