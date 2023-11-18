<?php
require "../Profile/connect.php";
if(!empty($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM Registration WhERE id =$id");
    $row=mysqli_fetch_assoc($result);

}
else
{
    header("Location:../Profile/login.php");

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- HEADER SECTION -->
    <header>
        <div id="logo">
            <img src="../Common Files/image/myntra-removebg-preview.png" alt="brandLogo" id="landingPage">
        </div>
        <ul id="nav_bar">
            <li><a href="../Homepages/menHomePage.php">men</a></li>
            <li><a href="../Homepages/womenHomePage.php">women</a></li>
            <li><a href="../Homepages/kids.php">kids</a></li>
            <li><a href="../Homepages/homeLiving.php">home & living</a></li>
            <li><a href="../Homepages/beauty.php">beauty</a></li>
            <li id="studio"><a href="../Homepages/beauty.php">studio</a><span>new</span></li>
        </ul> 
        <div id="search">
            <input type="text" id="search_bar" placeholder="Search for products, brands and more">
            <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
        </div>
        <div id="right_icon">
            <div id="reggDropdown">
                <!-- DROPDOWN MENU TO FOR LOGIN AND SIGNUP -->
              <div id="drop">
                  <a href="../Profile/login.php" class="dropList">login</a>
                  <a href="../Profile/signup.php" class="dropList">sign up</a>
              </div>
              <i class="fa-regular fa-user"></i>
              <span>profile</span>
          </div>
            <div>
                <i class="fa-regular fa-heart"></i>
                <span>wishlist</span>
            </div>
            <div>
                <i class="fa-solid fa-bag-shopping"></i>
                <span>bag</span>
            </div>
        </div>

                <!-- TOGGLE MENU -->
                <div id="toggle">
                    <i class='bx bx-menu dropbtn' onclick="myFunction()"></i>
                    <div id="myDropdown" class="dropdown-content">
                    <div class="top">
                            <a href="../Homepages/menHomePage.php">men</a>
                            <a href="../Homepages/womenHomePage.php">women</a>
                            <a href="../Homepages/kids.php">kids</a>
                            <a href="../Homepages/homeLiving.php">home & living</a>
                            <a href="../Homepages/beauty.php">beauty</a>
                            <a href="../Homepages/studio.php">studio</a>
                        </div>
                        <div class="bottom">
                            <i class="fa-regular fa-user fa_user" id="profile"></i>
                            <i class="fa-regular fa-heart fa_wishlist"></i>
                            <i class="fa-solid fa-bag-shopping fa_cart"></i>
                        </div>                
                    </div>
                </div>
    </header>





    
    </div>
</body>
</html>

<script src="profile.js"></script>
<script src="/Common Files/headerMenu.js"></script>
<script src="../Common Files/hyperlinks.js"></script>
