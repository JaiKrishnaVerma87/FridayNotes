<?php
session_start();
include 'header.php';
include '../includes/connection.php';
if(!isset($_SESSION['jai']))
{
  header('location:index.php');
}
    
?>
<div id="main-content">
    <h2>Users Records</h2>
    <table cellpadding="7px">
   <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>status</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
      $gird = "SELECT * FROM users ORDER BY id desc;";
      $result=mysqli_query($conn,$gird) or die ("Query Unsuccessful"); 
      if(mysqli_num_rows($result)>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
      ?>
        
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['course'];?></td>
                <td><?php echo $row['status'];?></td>
                <td>
                    <a href='userdel.php?id=<?php echo $row['id'];?>'>Delete</a>
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
