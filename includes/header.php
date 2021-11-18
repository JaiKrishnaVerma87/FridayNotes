<header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

         
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>




.stopnav {
  overflow: hidden;
  background-color: #F7F6FB;
}

.stopnav a {
  float: left;
  display: flex;
  color: black;
  text-align: center;

  text-decoration: none;
  font-size: 17px;
}

.stopnav a:hover {
  background-color: #ddd;
  color: black;
}

.stopnav a.active {
  background-color: #2196F3;
  color: white;
}

.stopnav .search-container {
  float: right;

}

.stopnav input[type=text] {
  
  margin-top: 3px;
  font-size: 17px;
  border: none;
  height:35px;
}

.stopnav .search-container button {
  float: right;
  padding: 6px 15px;
  margin-top: 3px;
 height:35px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.stopnav .search-container button:hover {
  background: #ccc;
}


  .stopnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
@media screen and (max-width: 600px) {
  .topnav .search-container {

  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {

    display: flex;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }}
</style>


<div class="stopnav">

 
  <div class="search-container">
 
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  </div>

            <div class="header__img">
             <a href="about/about.html">   <img src="img/fslogo.png" alt=""></a>
            </div>
        </header>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="user1.php" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">People</span>
                    </a>

                    <div class="nav__list">
                        <a href="sideBar.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Class Notes</span>
                        </a>

                        <a href="profile.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Profile</span>
                        </a>

                        <a href="updateProfile.php" class="nav__link">
                        <i class='bx bxs-edit nav__icon' ></i>
                            <span class="nav__name">Update Profile</span>
                        </a>

                        <a href="upload.php" class="nav__link">
                        <i class='bx bx-folder-plus nav__icon'></i>
                            <span class="nav__name">Upload Notes</span>
                        </a>

                        <a href="msg.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Messages</span>
                        </a>

                        <a href="jobsection.php" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Events & Updates</span>
                        </a>
                    </div>
                </div>
                <a href="includes/logout.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>

        </div>
     