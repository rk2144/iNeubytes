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
    <title>www.myntra.com</title>
     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <!-- ALL CSS LINK -->
    <link rel="stylesheet" href="../Common Files/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="header.css">
    <!-- FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/72215895a8.js" crossorigin="anonymous"></script>
    <style>
        #section_1 img{
            width: unset;
        }
        ol > li > span{
            color: #505050;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div id="flatdiscount">
        <i id="sidePanel" class="fa-solid fa-caret-left"></i>
        <h1>FLAT ₹300 OFF</h1>
    </div>

    <!-- HEADER MENU SECTION -->
   <?php
   
   include_once('../Common Files/header.php');
   ?>

    
    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <!--slide images start-->
            <div class="slide first">
                <img src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/3/28/4ac3be4b-f02c-4106-8dc9-be1898a81def1648463267842-Desktop-Banner-----1920x504.jpg"  
                alt="">
            </div>
            <div class="slide">
                <img src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/3/17/8f1a79c7-3f11-4608-9f31-30a03a606cb41647537798522-SS22-DesktopBanners-Unisex.jpg"
                alt="">
            </div>
            <div class="slide">
                <img src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/3/17/1439d458-3f9b-4a49-830c-a47a126bb9311647456798699-Roadster_Desk_Banner.jpg"
                alt="">
            </div>
            <div class="slide">
                <img src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/3/17/52df3f93-8d0f-412d-b416-fc665706199d1647456798690-Casual-Shoes_Dk.jpg"
                alt="">
            </div>
        </div>

        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>


    <h1>DEALS OF THE DAY</h1>
    <div id="deals">

    </div>
    <h1>BEST OF MYNTRA EXCLUSIVE BRANDS</h1>
    <div id="best">
    </div>
    <h1>TOP PICKS</h1>
    <div id="top">
    </div>
    <h1>CATEGORIES TO BAG</h1>
    <div id="categories">
    </div>
    <h1>DEALS ON TOP BRANDS</h1>
    <div id="dealsTop">
    </div>
    <h1>UNMISSABLE THIS SEASON</h1>
    <div id="unmissable">
    </div>
    <h1>COLOURS OF THE SEASON</h1>
    <div id="colours">

    </div>
    <h1>TOP INFLUENCERS EXCLUSIVE STYLE</h1>
    <div id="topInfluencers"></div>
    <h1>BUDGET PICKS INFLUENCERS LOVE</h1>
    <div id="budget"></div>
    <h1>TRENDING OUTFIT BY INFLUENCERS</h1>
    <div id="trending">
    </div>

   
          <!-- FOOTER SECTION -->
          <?php
      include_once('../Common Files/footer.php');
      ?>
            <hr>
           <section id="section_5">
               <h4>men's shopping at myntra: a superior experience</h4>
               <p>Myntra is one of the best sites when it comes to online shopping for men. The finest of material, superior design and unbeatable style go into the making of our men’s shopping collection. Our range of online shopping men’s wear, accessories, footwear and personal care products are second to none. Compared with other men’s shopping sites, Myntra brings you the best price products which won’t hurt your pocket. With seasonal discounts on trendy casual wear, suits, blazers, sneakers and more, online shopping for men at Myntra just gets even more irresistible!
              </p>
           </section>
           <section id="section_6">
               <h4>online shopping for men: options unlimited</h4>
               <p>At Myntra, our online shopping fashion for men collection features plenty of options to create multiple outfits. At our men’s online shop we have brought together an exhaustive range of products from the best men’s brands. Here is a list of must-haves from the wide variety of awesome products at Myntra:</p>
               <div>
               <ol>
                   <li> <span> Smart men’s clothing </span> - At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit.</li>
                   <li> <span> Trendy women’s clothing </span>- Online shopping for women at Myntra is a mood-elevating experience. Look hip and stay comfortable with chinos and printed shorts this summer. Look hot on your date dressed in a little black dress, or opt for red dresses for a sassy vibe. Striped dresses and T-shirts represent the classic spirit of nautical fashion. Choose your favourites from among Bardot, off-shoulder, shirt-style, blouson, embroidered and peplum tops, to name a few. Team them up with skinny-fit jeans, skirts or palazzos. Kurtis and jeans make the perfect fusion-wear combination for the cool urbanite. Our grand sarees and lehenga-choli selections are perfect to make an impression at big social events such as weddings. Our salwar-kameez sets, kurtas and Patiala suits make comfortable options for regular wear.

                  </li>
                   <li> <span> Fashionable footwear </span> - While clothes maketh the man, the type of footwear you wear reflects your personality. We bring you an exhaustive lineup of options in casual shoes for men, such as sneakers and loafers. Make a power statement at work dressed in brogues and oxfords. Practice for your marathon with running shoes for men and women. Choose shoes for individual games such as tennis, football, basketball, and the like. Or step into the casual style and comfort offered by sandals, sliders, and flip-flops. Explore our lineup of fashionable footwear for ladies, including pumps, heeled boots, wedge-heels, and pencil-heels. Or enjoy the best of comfort and style with embellished and metallic flats.
                </li>
               </ol>
              </div>
               <p>Make sure you check out fun printed men’s T-shirts featuring your favourite characters from DC Comics and Marvel studios. Relive the magic of your favourite superhero from Justice League. Fly high with Superman, battle the bad guys with Batman, or get trendy in lightning-speed with a Flash T-shirt. Grab our cool Marvel Avengers T-shirts. Stay powered up with the Iron Man, or walk with the warriors in a Thor T-shirt.</p>
               <p>Our online shopping fashion for mens collection includes even more amazing merchandise such as innerwear, sleepwear, track pants, personal care, wallets, belts and other fashion accessories.</p>
           </section>
           <section id="section_6">
               <h4>men's shopping made easy at myntra</h4>
               <p>Myntra is the most convenient men’s online store, what with our simplified shopping and payment procedures. With just a few clicks of the mouse or taps on your smartphone, you can buy your favorites from the best men’s brands right away.</p>
           </section>
        
</body>

</html>
<script src="deals.js"></script>
<script src="/Common Files/headerMenu.js"></script>
<script src="/Common Files/corousel.js"></script>
<script src="../Common Files/hyperlinks.js"></script>