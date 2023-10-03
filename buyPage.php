<?php
include "navbar.php";
include "dbconnect.php";
$productid = $_GET['pid'];
$productDetail = mysqli_query($conn, "SELECT * FROM products WHERE pid = '$productid'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propertyID = $productid;
    $email = $_SESSION["email"];
    header("Location:ourProducts.php?pid=" . $productid);
}
?>
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_name = $_POST["product_name"];
            $product_description = $_POST["product_description"];
            $product_price = $_POST["product_price"];
            $product_image = $_POST["product_image"];
            header("Location:ourProducts.php?pid=" . $pid);
        }
        ?>

        <?php while ($product = mysqli_fetch_assoc($productDetail)) { ?>
            <form class="" method="POST" action="addtocart.php">
                <div class='card' style='width: 18rem;'>
                    <img class='cardImg' alt='...' src='img/<?php echo $product['product_image']; ?>'>
                    <div class='card-body'>
                        <h5 class='card-title'>
                            <?php echo $product['product_name']; ?>
                        </h5>
                        <p class='card-text'>
                            <?php echo $product['product_description']; ?>
                        </p>
                        <p class='card-text'>Rs.
                            <?php echo $product['product_price']; ?>
                        </p>
                    </div>
                    <div class="text-center Reveal-block-body">
                        <?php if ($product['product_stock'] == 0) {
                            echo '<h5 class="mb-2 text-danger">Out of Stock</h5>';
                        } else {
                            echo '<h5 class="mb-2 text-success text-bold">Available stock: ' . $product['product_stock'];
                            '</h5>';
                        }
                        ?>
                    </div>
                    <div class="text-center Reveal-block-body">
                        <?php
                        if (isset($_SESSION['email'])) {
                            if ($product['product_stock'] != 0) {
                                echo '<input type="number" name="Mod_Quantity" id="Mod_Quantity" class="form-control wrapper" required placeholder="Quantity">';
                            } else {
                                echo '<a href="./index.php" class="a d-flex justify-content-end">Go back</a>';
                            }
                        } ?>
                    </div>
                    <div class="mt-2 mb-2 m-auto d-flex justify-content-center">
                        <button type="submit" name="Add_To_cart" class="btn btn-outline-dark">
                            Add to cart </button>
                    </div>

                    <input type="hidden" name="Item_name" value="<?php echo $product['product_name']; ?>">
                    <input type="hidden" name="price" value="<?php echo $product['product_price']; ?>">
                </div>
            </form>
        </div>
    <?php } ?>




</body>

</html>