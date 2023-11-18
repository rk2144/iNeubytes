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
    <title>Home and Living - Buy Interior Decoration Products and Accessories Online in India</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="../Common Files/style.css">
    <link rel="stylesheet" href="../Common Files/homeLiving.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
     <!-- Header  -->
     <?php
   
   include_once('../Common Files/header.php');
   ?>

   <!--  close header -->

   <section id="banner">
       <div>
           <img src="https://bit.ly/3qOkAXl" alt="" class="forMob">
           <img src="https://bit.ly/36AvNUN" alt="" class="forWeb forDesk">
       </div>
   </section>
   
   <!-- MAIN CONTAINER -->
   <main>
       <div id="content">
           <h1 class="brand_heading" id="content_head">nice to see you, come on in!</h1>
           <div id="category">
               <div><img src="https://bit.ly/3JP9yIJ" alt="category1"></div>
               <div><img src="https://bit.ly/3NHZxQj" alt="category2"></div>
               <div><img src="https://bit.ly/3tNDj7i" alt="category3"></div>
               <div><img src="https://bit.ly/38c0sIk" alt="category4"></div>
               <div><img src="https://bit.ly/3DAhsUp" alt="category5"></div>
               <div><img src="https://bit.ly/3NwvMS5" alt="category6"></div>
           </div>
       </div>
       <aside>
           <!-- ANCHORS BUILT USING JS -->
       </aside>
   </main>

   <!-- BRANDS & OTHER CONTENT SECTIONS- -->
       <section class="wrapper">
           <div><img src="https://bit.ly/35oLzBq" alt="trends"></div>
           <div class="container">
               <div><img src="https://bit.ly/3JQGjWh" alt="trend1"></div>
               <div><img src="https://bit.ly/3iMuwfy" alt="trend2"></div>
               <div><img src="https://bit.ly/3LsCffk" alt="trend3"></div>
           </div>
       </section>
      
      
       <section class="wrapper">
            <div><img src="https://bit.ly/3IQtgCA" alt="trends" id="featured"></div>
            <div class="container">
                <div><img src="https://bit.ly/36EypRl" alt="brand1"></div>
                <div><img src="https://bit.ly/3uFSwGD" alt="brand2"></div>
                <div><img src="https://bit.ly/3tLl1DM" alt="brand3"></div>
                <div><img src="https://bit.ly/3LnF0y9" alt="brand4"></div>
                <div><img src="https://bit.ly/3iMLRoK" alt="brand5"></div>
            </div>
       </section>


       <!-- FOOTER SECTION -->
      <?php
      include_once('../Common Files/footer.php');
      ?>


       <!-- JS FILE ENABLED -->
       <script src="../Common Files/homeLiving.js"></script>
       <script src="../Common Files/headerMenu.js"></script>
       <script src="../Common Files/hyperlinks.js"></script>
       

</body>
</html>