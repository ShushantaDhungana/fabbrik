<?php
include "navbar.php";
include "dbconnect.php";
$pid = $_GET['pid'];
$pdetails = mysqli_query($conn, "SELECT * FROM products where pid = '$pid'");
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buynow</title>
</head>
<body>

<div class="buyPage">
<?php
    // $pdetails = mysqli_query($conn, "SELECT * FROM products where pid = '$pid'");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $product_name = $_POST["product_name"];
            $product_description = $_POST["product_description"];
            $product_price = $_POST["product_price"];
            $product_image = $_POST["product_image"];
        header("Location:ourProducts.php?pid=" . $pid);
}
?>

    <?php while ($product = mysqli_fetch_assoc($pdetails)) { ?>

           <div class='card' style='width: 18rem;'>
            <img  class='cardImg' alt='...' src='img/<?php echo $product['product_image'];?>'>
             <div class='card-body'>
                <h5 class='card-title'><?php echo $product['product_name'];?></h5>
                    <p class='card-text'>Rs. <?php echo $product['product_price'];?></p>
            </div>
        </div>
        <div class='description'>
            <div> 
                <h5 class='card-title'><?php echo $product['product_name'] ?>;</h5>
                    <p class='card-text'><?php echo $product['product_description'] ?>;
                    </p>
                    <a href='#'' class='btn btn-primary'>Add To Cart</a>
                </div>
               
    </div>
</div>
<?php }?>    



    
</body>
</html>