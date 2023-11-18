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
    <title>Wish-list</title>
    <link rel="stylesheet" href="wishlist.css">
    <!-- <link rel="stylesheet" href="/Common Files/style.css"> -->
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
     
<?php
   
   include_once('../Common Files/header.php');
   ?>
 

    <h3 class="wishhead">My Wishlist <span class="wishcount"> </span> </h3>
    
    <div class="container">
        
    </div>

      <!-- FOOTER SECTION -->
      <?php
   
   include_once('../Common Files/footer.php');
   ?>
</body>
</html>
<script src="../wishlist/wishlist.js"></script>
<script src="../Common Files/hyperlinks.js"></script>
<script src="../Common Files/headerMenu.js"></script>