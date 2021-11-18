<?php
include 'header.php';
include '../includes/connection.php';
session_start();
if(!isset($_SESSION['jai']))
{
  header('location:index.php');
}


    
?>
<div id="main-content">
    <h2>Uploads Records</h2>
    <table cellpadding="7px">
   <thead>
        <th>Id</th>
        <th>Uploader</th>
        <th>Notes title</th>
        <th>file name</th>
        <th>status</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
      $gird = "SELECT * FROM uploads ORDER BY file_id desc;";
      $result=mysqli_query($conn,$gird) or die ("Query Unsuccessful"); 
      if(mysqli_num_rows($result)>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
        
            <tr>
                <td><?php echo $row['file_id'];?></td>
                <td><?php echo $row['file_uploader'];?></td>
                <td><?php echo $row['file_name'];?></td>
                <td><?php echo $row['file'];?></td>
                <td><?php echo $row['status'];?></td>
                <td>
                    <a href='approved.php?id=<?php echo $row['file_id'];?>'>edit</a>
                    <a href='del.php?id=<?php echo $row['file_id'];?>'>Delete</a>
                </td>
            </tr>      
        
    <?php } }
    else{ echo"<p> NO_RECORD_FOUND..!</p>"; } mysqli_close($conn);?>
    </tbody>
    </table>
</div>
</div>
</body>
</html>
