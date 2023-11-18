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

    <title>Home Decor - Buy Home Furnishing &amp; Accessories Online - Myntra</title>

    <title>Home and Living - Buy Interior Decoration Products and Accessories Online in India</title>

    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="home_furnishing.css" />
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  
<?php
   
   include_once('../Common Files/header.php');
   ?>

    <div id="sorting">
        
        <select class="filter" id="brandFilter">
            <option id="normal" value="all">FILTER BY BRAND</option>
            <option value="DREAM WEAVERZ">DREAM WEAVERZ</option>
            <option value="KLOTTHE">KLOTTHE</option>
            <option value="SEJ By Nisha Gupta">SEJ By Nisha Gupta</option>
            <option value="JAIPUR FABRIC">JAIPUR FABRIC</option>
            <option value="PUMA">PUMA</option>
            <option value="Arrabi">Arrabi</option>
            <option value="Home Ecstasy">Home Ecstasy</option>
            <option value="ELEVANTO">ELEVANTO</option>
            <option value="LA VERNE">LA VERN</option>
            <option value="FLORIDA">FLORIDA</option>
            <option value="Dreamscape">Dreamscape</option>
            <option value="Trident">Trident</option>
          </select>

          <select class="filter" id="priceSort">
            <option value="---">SORT BY PRICE</option>
            <option value="lth">Low → High</option>
            <option value="htl">High → Low</option>
          </select>

          <select class="filter" id="nameSort">
            <option value="---">SORT BY NAME</option>
            <option value="asc">Ascending</option>
            <option value="dsc">Descending</option>
          </select>
       
    </div>

    <div id="wrapper">
         <div id="filter">
             <div class="a">
                    <h3>FILTERS </h3>
                    <div>
                        <input type="radio" id="rb" name="group">
                        <label for="sagar">Men</label><br>
                        <input type="radio" id="rb" name="group">
                        <label for="rb">Women</label><br>
                        <input type="radio" id="rb" name="group">
                        <label for="rb">Boys</label><br>
                        <input type="radio" id="rb" name="group">
                        <label for="rb">Girls</label>
                    </div>
                    
                </div>
                <div class="b">
                    <h3>CATEGORIES</h3>
                    <div>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Bedsheets</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Cushion Covers</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Curtain and Sheers</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Wall Art</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Blankets Quits and Dohars</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Clocks</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">Orgaisers</label><br>
                        <input type="checkbox" id="cb" name="group">
                        <label for="cb">bath Towels</label>
                    </div>
                  
                </div>
                <div class="b">
                        <h3>BRAND</h3>
                        <div>         
                            <input type="checkbox" id="sagar" name="group">
                            <label for="cb">KLOTTHE</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Story@home</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Arrabi</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Cortina</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">BIANCA</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Home Center</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">ROMME</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Kuber Industries</label>
                        </div>
                       
                    </div>
                    <div class="b">
                        <h3>PRICE</h3>
                        <div>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Rs. 50 to Rs. 22838</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Rs. 22838 to Rs. 45626</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Rs. 45626 to Rs. 68414</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Rs. 68414 to Rs. 91202</label><br>
                        </div>
                       
                    </div>
                    <div class="b">
                        <h3>COLOR</h3>
                        <div>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Blue</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">White</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Brown</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Multi</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Black</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Gray</label><br>
                            <input type="checkbox" id="cb" name="group">
                            <label for="cb">Green</label><br>
                        </div>
                        
                    </div>
                    <div class="c">
                        <h3>DISCOUNT RANGE</h3>
                        <div>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">10% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">20% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">30% and aboves</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">40% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">50% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">60% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">70% and above</label><br>
                            <input type="radio" id="rb" name="group">
                            <label for="rb">80% and above</label><br>
                        </div>
                        
                    </div>
                </div>  
                
            <div id="container"></div>
        </div>       
        
        <?php
   
   include_once('../Common Files/footer.php');
   ?>
</body>

<script src="home_furnishing.js"></script>
<script src="../Common Files/headerMenu.js"></script>
<script src="../Common Files/hyperlinks.js"></script>



</html>

