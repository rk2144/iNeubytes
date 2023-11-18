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



<h1 class="brand_heading forWeb">trending in accessories</h1>
          <div class="container builder forWeb">
             <div><img src="https://bit.ly/3Nt9VLn" alt="category1"></div>
             <div><img src="https://bit.ly/36Aqt3q" alt="category2"></div>
             <div><img src="https://bit.ly/3IMY4o4" alt="category3"></div>
             <div><img src="https://bit.ly/3wIag7b" alt="category4"></div>
             <div><img src="https://bit.ly/3uAK8Iv" alt="category5"></div>
          </div>


        
          <h1 class="brand_heading">trending in sports wear</h1>
          <div class="container builder">
             <div><img src="https://bit.ly/3qLHGOe" alt="category1"></div>
             <div><img src="https://bit.ly/3ux7UVU" alt="category2"></div>
             <div><img src="https://bit.ly/3Losbnr" alt="category3"></div>
             <div class="forWeb"><img src="https://bit.ly/35l3SaH" alt="category4"></div>
             <div class="forWeb"><img src="https://bit.ly/3qL0DAB" alt="category5"></div>
          </div>

    <!-- COROUSEL SECTION -->
    <div class="slider">
        <div id="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">

          <!--slide images start-->
          <!-- created using js -->

        </div>

        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>


     
      <h1 class="brand_heading">biggest deals on top brands</h1>
      <div id="topBrand_1" class="container">
          <div><img src="https://bit.ly/3JRzkMK" alt="brand1"></div>
          <div><img src="https://bit.ly/3IMN36c" alt="brand2"></div>
          <div><img src="https://bit.ly/370ZT3C" alt="brand3"></div>
          <div><img src="https://bit.ly/3NsYyDb" alt="brand4"></div>
          <div class="forMob"><img src="https://bit.ly/3wM9hTp" alt="brand5"></div>
          <div class="forMob"><img src="https://bit.ly/3JNVFe3" alt="brand6"></div>
          <div class="forWeb"><img src="https://bit.ly/3Dkomg5" alt="brand7"></div>
          <div class="forWeb"><img src="https://bit.ly/36HmamW" alt="brand8"></div>
      </div>


      
       <h1 class="brand_heading">categories to bag</h1>
       <div id="categoryBag" class="container"></div>


     
       <h1 class="brand_heading">explore top brands</h1>
       <div id="explore_more" class="display container"></div>


       
       <h1 class="brand_heading forWeb">myntra luxe</h1>
       <div class="display container">
           <div><img src="https://bit.ly/3NxSRUs" alt="luxe1"></div>
           <div><img src="https://bit.ly/36DkXwX" alt="luxe2"></div>
           <div><img src="https://bit.ly/3Diiowi" alt="luxe3"></div>
           <div><img src="https://bit.ly/3Nu4j3y" alt="luxe4"></div>
           <div><img src="https://bit.ly/3DkgEm6" alt="luxe5"></div>
           <div><img src="https://bit.ly/3NG3TY6" alt="luxe6"></div>
       </div>


         
         <h1 class="brand_heading forWeb">trending in indian wear</h1>
         <div class="container builder forWeb">
            <div><img src="https://bit.ly/3uB3jlE" alt="category1"></div>
            <div><img src="https://bit.ly/3Dmujct" alt="category2"></div>
            <div><img src="https://bit.ly/3uELKRA" alt="category3"></div>
            <div><img src="https://bit.ly/3JS3pvv" alt="category4"></div>
            <div><img src="https://bit.ly/3tMDnEk" alt="category5"></div>
         </div>




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