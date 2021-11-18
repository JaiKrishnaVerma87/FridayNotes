<?php
error_reporting(0);
include 'includes/connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$username=$_POST['username'];
$pass=$_POST['password'];

if(!empty($username)){
$query="SELECT * from users where username='$username' and password='$pass'";
    $result=mysqli_query($conn,$query);
       if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['user']=$_POST['username'];
              header('location:sideBar.php');
             } else{
            
                echo"<h4>wrong username or password..!!!</h4>";

          }
        }
      $conn->close();
        
      }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --header-height: 3rem;
  --nav-width: 68px;

  /*===== Colors =====*/
  --first-color: #4723D9;
  --first-color-light: #AFA5D9;
  --white-color: #F7F6FB;
  
  /*===== Font and typography =====*/
  --body-font: 'Nunito', sans-serif;
  --normal-font-size: 1rem;
  
  /*===== z index =====*/
  --z-fixed: 100;
}
body{
  background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
	height: 100vh;
	margin: -20px 0 50px;

}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;

}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}
h4{
  color:red;
}
.containerf{
  position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.kaho{
  background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	width: 400px;
	max-width: 80%;
	min-height: 590px;
}
</style>
</head>
<body style="background-image: url('img/devs/bg4.jpg');">
  <div class="kaho" >
<div class="containerf">
<div class="imgcontainer">

<img src="img/fslogo.png" alt="Avatar" class="avatar">
    </div>

    <form class="container" action="" method="POST">
    <h1 style=" margin:auto; width: 50%; padding: 10px;text-align: center;">Log in</h1>
    
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      
  
        
      <button type="submit" name="login" value="Login" >Login</button>
      <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <p class="psw">if you have not registerd <a href="signup.php">create account?</a></p>

    
  

      
  </form>
</div>

</div>
</div>
</body>
</html>
