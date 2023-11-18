
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
    <title>Online Shopping for Women - Shop For Women Clothes, Shoes, Bags & More</title>
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
    <!-- COROUSEL SECTION -->
    <div class="slider">
        <div id="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">

          <!--slide images start-->
         <!-- slider images created using js-->
        </div>

        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>


      <!-- TOP BRANDS DISPLAY 1 HEADING -->
      <h1 class="brand_heading">biggest deals on top brands</h1>
      <div id="topBrand_women" class="container">
          <div><img src="https://bit.ly/3Dk3plz" alt="brand1"></div>
          <div><img src="https://bit.ly/3NyBqDe" alt="brand2"></div>
          <div><img src="https://bit.ly/3qN2Ewp" alt="brand3"></div>
          <div><img src="https://bit.ly/3NyivIY" alt="brand4"></div>
          <div><img src="https://bit.ly/3NwbdVT" alt="brand5"></div>
          <div><img src="https://bit.ly/3NrgMVT" alt="brand6"></div>
          <div class="forWeb"><img src="https://bit.ly/3IJeKg4" alt="brand7"></div>
          <div class="forWeb"><img src="https://bit.ly/3DlD3zC" alt="brand8"></div>
          <div class="forWeb"><img src="https://bit.ly/36Ymhu7" alt="brand9"></div>
          <div class="forWeb"><img src="https://bit.ly/3IN5iZ5" alt="brand10"></div>
      </div>


       <!-- TOP CATEGORIES SECTION -->
       <h1 class="brand_heading">categories to bag</h1>
       <div id="categoryBag_women" class="container categoryBag_women"></div>


       <!-- TOP BRAND DISPLAY 2 HEADING -->
       <h1 class="brand_heading">explore top brands</h1>
       <div id="explore_more_women" class="display container explore_more_women"></div>

         <!-- CATEGORIES DISPLAY 2 -->
       <h1 class="brand_heading">trending in western wear</h1>
         <div class="container builder">
            <div><img src="https://bit.ly/3wMju21" alt="category1"></div>
            <div><img src="https://bit.ly/3NvX0ID" alt="category2"></div>
            <div><img src="https://bit.ly/3tMNJ75" alt="category3"></div>
            <div><img src="https://bit.ly/3qJVBV4" alt="category4"></div>
            <div><img src="https://bit.ly/3uBoKCX" alt="category5"></div>
         </div>

         <!-- CATEGORIES DISPLAY 3 -->
         <h1 class="brand_heading">trending in indian wear</h1>
         <div class="container builder">
            <div><img src="https://bit.ly/3K69wN7" alt="category1"></div>
            <div><img src="https://bit.ly/3iODr09" alt="category2"></div>
            <div><img src="https://bit.ly/3IOGpw4" alt="category3"></div>
            <div><img src="https://bit.ly/38furzf" alt="category4"></div>
            <div><img src="https://bit.ly/36I8HeC" alt="category5"></div>
         </div>


          <!-- CATEGORIES DISPLAY 4 -->
          <h1 class="brand_heading">trending in sports wear</h1>
          <div class="container builder">
             <div><img src="https://bit.ly/3K69y7H" alt="category1"></div>
             <div class="forMob"><img src="https://bit.ly/3iN4YPn" alt="category2"></div>
             <div><img src="https://bit.ly/36YoFkz" alt="category3"></div>
             <div class="forWeb"><img src="https://bit.ly/3wINHPL" alt="category4"></div>
             <div class="forWeb"><img src="https://bit.ly/3ISRhsO" alt="category5"></div>
          </div>


          <!-- CATEGORIES DISPLAY 5 -->
          <h1 class="brand_heading">trending in footwear</h1>
          <div class="container builder">
             <div><img src="https://bit.ly/3Lm8hJN" alt="category1"></div>
             <div><img src="https://bit.ly/3wOjfDM" alt="category2"></div>
             <div class="forMob"><img src="https://bit.ly/3uCXq7p" alt="category3"></div>
             <div class="forWeb"><img src="https://bit.ly/36VIvx8" alt="category4"></div>
             <div class="forWeb"><img src="https://bit.ly/3IR4WR4" alt="category5"></div>
          </div>


          <!-- CATEGORIES DISPLAY 6 -->
          <h1 class="brand_heading">trending in accessories</h1>
          <div class="container builder">
             <div><img src="https://bit.ly/3DnaNMZ" alt="category1"></div>
             <div><img src="https://bit.ly/3wN8xxt" alt="category2"></div>
             <div class="forMob"><img src="https://bit.ly/3LnQNwv" alt="category3"></div>
             <div class="forWeb"><img src="https://bit.ly/35jAgu6" alt="category4"></div>
             <div class="forWeb"><img src="https://bit.ly/3IN87cD" alt="category5"></div>
          </div>


          <!-- FOOTER SECTION -->
          <?php
      include_once('../Common Files/footer.php');
      ?>
            <hr>
             <section id="section_5">
                 <h4>online shopping for women: myntra all the way</h4>
                 <p>Myntra is one of the best sites when it comes to online shopping for men. The finest of material, superior design and unbeatable style go into the making of our men’s shopping collection. Our range of online shopping men’s wear, accessories, footwear and personal care products are second to none. Compared with other men’s shopping sites, Myntra brings you the best price products which won’t hurt your pocket. With seasonal discounts on trendy casual wear, suits, blazers, sneakers and more, online shopping for men at Myntra just gets even more irresistible!
                </p>
             </section>
             <section id="section_6">
                 <h4>women’s online shopping: clothes, accessories, footwear, and more</h4>
                 <p>At Myntra, our online shopping fashion for men collection features plenty of options to create multiple outfits. At our men’s online shop we have brought together an exhaustive range of products from the best men’s brands. Here is a list of must-haves from the wide variety of awesome products at Myntra:</p>
                 <div>
                 <ol>
                     <li>Opt for a charming yet laid-back look with cool T-shirts and casual shirts worn with stylish jeans, casual trousers or shorts. Stay sharp and sophisticated with our smart options in formal shirts and trousers. Look dapper when meeting your clients in our smooth suits. Put on trendy blazers for formal occasions. On your online men’s clothes’ shopping journey, make sure you include kurtas, jackets and sherwanis from our festive wear collection. Stay warm and comfortable in sweaters and sweatshirts. Get fit and ready for adventure, with our sports and active wear collection.</li>
                     <li>Once you are done with your online men’s clothes’ shopping, make sure you pick up the right accessories to complement your look. Whether you are travelling to work or outside the city our wide variety of bags, backpacks and luggage collection will ensure you are well-packed. Our beautiful watches and smart watches work well to enhance your overall style quotient. Reach out for our sunglasses during the summers – let your eyes stay protected while you opt for maximum swag.
                    </li>
                     <li>Bring impeccable style to your shoe closet with our incredible collection of footwear for men. Look classy during formal and semi-formal occasions with derbies, loafers and oxfords. Stay hip and happening in parties with boat shoes, monks and brogues from our casual men’s footwear range. Lead an active lifestyle with sneakers and running shoes from our sports footwear selection. Pick up sandals, floaters and flip-flops for a trip to the beach. We also host socks in our men’s online shopping collection. That’s basically everything under one roof!</li>
                 </ol>
                </div>
                 <p>Make sure you check out fun printed men’s T-shirts featuring your favourite characters from DC Comics and Marvel studios. Relive the magic of your favourite superhero from Justice League. Fly high with Superman, battle the bad guys with Batman, or get trendy in lightning-speed with a Flash T-shirt. Grab our cool Marvel Avengers T-shirts. Stay powered up with the Iron Man, or walk with the warriors in a Thor T-shirt.</p>
                 <p>Our online shopping fashion for mens collection includes even more amazing merchandise such as innerwear, sleepwear, track pants, personal care, wallets, belts and other fashion accessories.</p>
             </section>
             <section id="section_6">
                 <h4>online shopping for women made easy</h4>
                 <p>Myntra is the most convenient men’s online store, what with our simplified shopping and payment procedures. With just a few clicks of the mouse or taps on your smartphone, you can buy your favorites from the best men’s brands right away.</p>
             </section>
          


    <script src="../Common Files/women.js"></script>
    <script src="../Common Files/headerMenu.js"></script>
    <script src="../Common Files/corousel.js"></script>
    <script src="../Common Files/hyperlinks.js"></script>
    

</body>


</html>
