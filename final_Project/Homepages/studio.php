<?php
require "../Profile/connect.php";
if(!empty($_SESSION["id"]))
{
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM Registration WhERE id =$id");
    $row=mysqli_fetch_assoc($result);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men Shopping Online - Shop for Mens Clothing & Accessories in India | Myntra</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   
    <!-- MENU BAR -->
    <?php
   
   include_once('../Common Files/header.php');
   ?>
 


       <!-- TOP BRAND DISPLAY 3 HEADING -->
       <h1 class="brand_heading forWeb">myntra luxe</h1>
       <div class="display container">
           <div><img src="https://bit.ly/3NxSRUs" alt="luxe1"></div>
           <div><img src="https://bit.ly/36DkXwX" alt="luxe2"></div>
           <div><img src="https://bit.ly/3Diiowi" alt="luxe3"></div>
           <div><img src="https://bit.ly/3Nu4j3y" alt="luxe4"></div>
           <div><img src="https://bit.ly/3DkgEm6" alt="luxe5"></div>
           <div><img src="https://bit.ly/3NG3TY6" alt="luxe6"></div>
       </div>


       

          <!-- CATEGORIES DISPLAY 4 -->
          <h1 class="brand_heading">trending in footwear</h1>
          <div class="container builder">
             <div><img src="https://bit.ly/3iHXRI4" alt="category1"></div>
             <div><img src="https://bit.ly/3JRJPj8" alt="category2"></div>
             <div><img src="https://bit.ly/3DkZQvq" alt="category3"></div>
             <div class="forWeb"><img src="https://bit.ly/3DzgXdf" alt="category4"></div>
             <div class="forWeb"><img src="https://bit.ly/36G5TPb" alt="category5"></div>
          </div>


     


          <!-- FOOTER SECTION -->
          <?php
   
   include_once('../Common Files/footer.php');
   ?>
    <script src="../Common Files/men.js"></script>
    <script src="../Common Files/headerMenu.js"></script>
    <script src="../Common Files/corousel.js"></script>
    <script src="../Common Files/hyperlinks.js"></script>
</body>
</html>