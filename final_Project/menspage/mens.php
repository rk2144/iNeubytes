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
    <title>Men</title>
    <link rel="stylesheet" href="mens.css" />
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
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
            <option value="U.S. Polo Assn.">U.S. Polo Assn.</option>
            <option value="Roadster">Roadster</option>
            <option value="KLOTTHE">KLOTTHE</option>
            <option value="Mast & Harbour">Mast & Harbour</option>
            <option value="PUMA">PUMA</option>
            <option value="WROGN">WROGN</option>
            <option value="HRX by Hrithik Roshan">HRX by Hrithik Roshan</option>
            <option value="Flying Machine">Flying Machine</option>         
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
                    <input type="radio" id="sagar" name="group">
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
                    <label for="cb">Tshirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Shirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Casual Shoes</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Sweatshirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Jackets</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Trousers</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Slippers</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Flip Flops</label>
                </div>

            </div>
            <div class="b">
                <h3>BRAND</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">U.S. Polo Assn.</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Roadster</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">KLOTTHE</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Mast & Harbour</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Puma</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">WROGN</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">HRX by Hrithik Roshan</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Flying Machine</label>
                </div>

            </div>
            <div class="b">
                <h3>PRICE</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs 499 to Rs 1349</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 1349 to Rs. 2199</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 2199 to Rs. 3049</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 3049 to Rs. 3899</label><br>
                </div>

            </div>
            <div class="b">
                <h3>COLOR</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Blue</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Navy Blue</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Black</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">White</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Grey</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Red</label><br>
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


                </div>

            </div>
        </div>

        <div id="container"></div>
    </div>

    <?php
   
   include_once('../Common Files/footer.php');
   ?>

</body>

</html>


<script src="mens.js"></script>
<script src="../Common Files/headerMenu.js"></script>
<script src="../Common Files/hyperlinks.js"></script>