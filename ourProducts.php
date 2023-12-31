<?php
    include "navbar.php";
    include "dbconnect.php";
    $products = mysqli_query($conn, "SELECT * FROM products");

 ?>
<!doctype html>
<html lang="en">

<head>
    <title>FABBRIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<div class="products">
    <h1 class="text-center">Our products</h1>
</div>
    <div class="container">
    <?php
          while ($prod = mysqli_fetch_array($products)){?>
          <div class='card' style='width: 18rem;'>
            <img src= 'img/<?php echo $prod['product_image'];?>' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'><?php echo $prod['product_name']?></h5>
                    <p class='card-text'>Rs. <?php echo $prod['product_price']?></p>
                    <?php if(isset($_SESSION['email'])){?>    
                    <a href='buyPage.php?pid=<?php echo$prod["pid"];?>' class='btn btn-primary'>Buy</a>
                    <?php }else{ ?>
                    <a href='login.php' class='btn btn-primary'>Buy</a>
                    <?php } ?>
            </div>
        </div>
          <?php }?>
        </div>";
        
    
</div>
<?php include "footer.php"?>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>