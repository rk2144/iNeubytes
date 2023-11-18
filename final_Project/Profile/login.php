<?php
require'connect.php';
if(isset($_POST["submit"]))
{

$mob=$_POST['mob'];
$pass=$_POST['pass'];

$result=mysqli_query($conn,"SELECT * FROM  Registration WHERE mob='$mob'");
$row=mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)>0) {
    if($pass==$row['pass']) 
    {
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["mob"]=$row["mob"];
        
        header("location:../Landingpage/index.php");

    }
    else{
        echo"<script> alert('Wronge Passward');</script>";
    }
 
}

else{
    echo"<script> alert('User Not Registred');</script>";
}
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
      <?php
   
   include_once('../Common Files/header.php');
   ?>

    <div id="boxbody" >        
        <div class="imgbo">
                <img src="https://bit.ly/3iYuMIl" alt="">
        </div>

       <div class="signin" >
        <form action="" method="post">
                
           <h2> Login</h2>
          
           
           <h3>Mobile</h3>
           <input type="tel" placeholder="Mobile Number*" id="mob" name="mob">
           
        
           
           <h3>Password</h3>
           <input type="password" id ="pass" placeholder="Create password" name="pass">
       
          
       
           <button type="submit" name="submit">continue</button>
       
    </form>
    
        </div>

    </div>

</body>
</html>

<script src="../Common Files/headerMenu.js"></script>
<script src="../Profile/signup.js"></script>
<script src="../Common Files/hyperlinks.js"></script>
