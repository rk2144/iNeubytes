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
    <title>Women Products</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../womensdata/style&js/womestyle.css">
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
            <option value="Anouk">Anouk</option>
            <option value="Juniper">Juniper</option>
            <option value="Chevron">Chevron</option>
            <option value="MFB">MFB</option>
            <option value="Nayo">Nayo</option>
            <option value="Arrabi">Arrabi</option>
            <option value="Yash gallery">Yash gallery</option>
            <option value="Sngria">Sngria</option>
            <option value="Yoke">Yoke</option>
           
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
                    <input type="checkbox" id="rb" name="group">
                    <label for="rb">Men</label><br>
                    <input type="checkbox" id="rb" name="group">
                    <label for="rb">Women</label><br>
                    <input type="checkbox" id="rb" name="group">
                    <label for="checkbox">Boys</label><br>
                    <input type="checkbox" id="rb" name="group">
                    <label for="checkbox">Girls</label>
                </div>

            </div>
            <div class="b">
                <h3>CATEGORIES</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Plazzos</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Lehnga</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Sarees</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Bracelet</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Purse</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Kurtas</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Skirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">cluthces</label>
                </div>

            </div>
            <div class="b">
                <h3>BRAND</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Anouk</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Juniper</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Chevron</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">MFB</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Nayo</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Yash gallery</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Sngria</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Yoke</label>
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

</html>
<script src="../womensdata/style&js/womens.js"></script>
<script src="../Common Files/headerMenu.js"></script>
<script src="../Common Files/hyperlinks.js"></script>