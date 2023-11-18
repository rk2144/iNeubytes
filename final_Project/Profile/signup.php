<?php
require'connect.php';
if(isset($_POST["continue"]))
{
$firstname=$_POST['firstname'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
// Create connection

// Check connection
$duplicate=mysqli_query($conn,"SELECT * FROM  Registration WHERE mob='$mob'");
if (mysqli_num_rows($duplicate)>0) {
    echo"<script> alert('This Number has Already Taken');</script>";
 
}

else
{
    if($pass==$pass1)
    {
    $stmt=$conn->prepare("INSERT INTO Registration(firstname,mob, email,pass)values(?,?,?,?)");
    $stmt->bind_param("siss",$firstname,$mob,$email,$pass);
    $stmt->execute();
    echo"<script> alert('registration Succesfully');</script>";
    $stmt->close();
    $conn->close();
    }
    else{
        echo"<script> alert('Passward Does Not Match');</script>";
    }
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
      #search #search_icon{
            top: unset;
        }
      #boxbody{
          margin-top: 15rem;
        }
      h3{
          margin-top: 1.5rem;
          font-size: 1.5rem;
      }
    </style>

</head>
<body>
    <!-- HEADER SECTION WITH NAV BAR -->
    <header>
        <div id="logo">
            <img src="../Common Files/image/myntra-removebg-preview.png" alt="brandLoog" id="landingPage">
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
                  <!-- DROPDOWN MENU TO BE CREATED FOR LOGIN AND SIGNUP -->
                <div id="drop">
                    <a href="../Profile/profile.php" class="dropList">login</a>
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

    <div id="boxbody" >        
        <div class="imgbo">
                <img src="https://bit.ly/3iYuMIl" alt="">
        </div>

       <div class="signin" >
        <form action="" method="post">
                
           <h2> SignUp</h2>
           <h3>Name</h3>
           <input type="text" id ="firstname" placeholder="Enter Name" name="firstname">
           
           <h3>Mobile</h3>
           <input type="tel" placeholder="Mobile Number*" id="mob" name="mob">
           
           <h3>Email</h3>
           <input type="mail" id ="email" placeholder="Enter Email" name="email">
           
           <h3>Password</h3>
           <input type="password" id ="pass" placeholder="Create password" name="pass">
           <h3>Password</h3>
           <input type="password" id ="pass1" placeholder="Re-type password" name="pass1">
          
           <p>By continuing, I agree to the <span> Terms of     Use </span> and <span>privacy policy</span>  </p>
       
           <button id="signup_button" name="continue">continue</button>
             <p>Have trouble logging in?<span> Get help</span> </p>
             <p>Already have an account ? <span id="logIn"> Login </span></p>
    </form>
    
        </div>

    </div>

</body>
</html>

<script src="../Common Files/headerMenu.js"></script>
<script src="../Profile/signup.js"></script>
<script src="../Common Files/hyperlinks.js"></script>
