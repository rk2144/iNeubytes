 <?php

 if($_SESSION['loggedin']&& $_SESSION['loggedin']==true)
 {
    $loggedin=true;
 }
else
{
    $loggedin=false;
}
 echo'
 <header>
        <div id="logo">
            <img src="../Common Files/image/myntra-removebg-preview.png" alt="brandLogo" id="landingPage">
        </div>
        <ul id="nav_bar">
            <li><a href="../Homepages/menHomePage.php">men</a></li>
            <li><a href="../Homepages/womenHomePage.php">women</a></li>
         
            <li><a href="../Homepages/homeLiving.php">home & living</a></li>
            <li><a href="../Homepages/beauty.php">beauty</a></li>
            <li id="studio"><a href="../Homepages/studio.php">studio</a><span>new</span></li>
        </ul> 
        <div id="search">
            <input type="text" id="search_bar" placeholder="Search for products, brands and more">
            <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
        </div>

       <div id="right_icon">
            <div id="reggDropdown">
            ';
            
            
         


                if(!$loggedin)
                { echo'<div id="drop">
                  <a href="../Profile/login.php" class="dropList">login</a>
                  <a href="../Profile/signup.php" class="dropList">sign up</a>
              </div>
              <i class="fa-regular fa-user"></i>
              <span>profile</span>
          </div> ';}

              if($loggedin)
              { echo'<div id="drop">
                <a href="../Profile/logout.php" class="dropList">logout</a>
            
            </div>
             <i class="fa-regular fa-user"></i>
              <span>User</span>
          </div> 
      ';}
           echo'
            
        
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
                    <i class="bx bx-menu dropbtn" onclick="myFunction()"></i>
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
    ';


    ?>