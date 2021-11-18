<?php
include 'includes/connection.php';
session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
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
        <link rel="stylesheet" href="CSS/SideBar.css">
         <!-------------------------------------------------------- -->

        <title>Sidebar menu responsive</title>
    </head>
    <body id="body-pd">
      <!-------------------------------------------------------- -->
    <?php
        include 'includes/header.php';
        ?>
<!-------------------------------------------------------- Portfolio Gallery Grid -->
      <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $search=$_POST['search'];
        
        if(!empty($search)){
      $gird = "SELECT * from uploads where file_uploader like '%".$search."%' OR file_uploaded_to like '%".$search."%' OR file_name like '%".$search."%' OR file_description like '%".$search."%'";
      $result=mysqli_query($conn,$gird) or die ("Query Unsuccessful"); 
      if(mysqli_num_rows($result)>0)
      {
      ?>
<div class="gird">
    <div class="row">
    
    <?php
    while($row=mysqli_fetch_assoc($result))
      {?>
        <div class="column">
          <div class="content" style="border-radius:12px; background-color:#f2f2f2;">
            <img class="timage" src="img/<?php echo $row['thumbnail']; ?>" alt="please upload" style="width:100%; border-radius:12px;">
             
            <h3 id="title"><?php echo $row['file_name']; ?></h3>
            <h5 id="detail" class="fir"><?php echo $row['file_uploaded_to']; ?></h5>
            <h6 id="detail" class="decr" ><?php echo $row['file_description'];?> </h6>
            <a href="javascript:void();" class="readmore-btn"> Read More</a>
             <a style="background-color:#4CAF50;" method="GET" href="upload<?php echo $row['file'];?>"  class="download-btn">Download</a>
            <h4 id="detail" style="color:blue;"><?php echo $row['file_uploader']; ?></h4>
            <h5 id="detail"><?php echo $row['file_uploaded_on']; ?></h5>
            <hr style="color:#e6e6e6;">
     
          </div>
        </div>
        <?php } ?>
        
    </div>
    
</div>
<?php } else{ echo"<p> NO_RECORD_FOUND..!</p>"; }}}?>
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