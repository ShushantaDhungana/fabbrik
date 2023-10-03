<?php
session_start();
include('./dbconnect.php');

if (mysqli_connect_error()) {
    echo "<script>
    alert('Cannot connect to the database');
    window.location.href='./mycart.php';
    </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $sr = $key + 1;
            if (isset($_POST['purchase'])) //checking make purchse button
            {
                $pname = $value['Item_name'];
                $productDetail = mysqli_query($conn, "SELECT * FROM products WHERE product_name = '$pname'");

                $oid = rand(1, 100);
                $query1 = "INSERT INTO orders(item_name, price, quantity, order_id, orderedby, address, phone_no, payment_mode) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                if (mysqli_prepare($conn, $query1)) {
                    while ($product = mysqli_fetch_array($productDetail)) {
                        $query3 = "UPDATE products SET product_stock = ('$product[product_stock]'-'$value[Quantity]') WHERE product_name = '$pname'";
                        $stmt = mysqli_prepare($conn, $query3);
                    }
                    if ($stmt) {
                        foreach ($_SESSION['cart'] as $key => $values) {
                            $Item_Name = $values['Item_name']; //values = form names
                            $Price = $values['price'];
                            $Quantity = $values['Quantity'];
                            mysqli_stmt_execute($stmt);
                        }
                    }

                    unset($_SESSION['cart']);

                    echo "<script>alert('Order Placed'); window.location.href='./index.php';</script>";
                } else {
                    echo "<script>
    alert('Cart is empty.');
    window.location.href='./mycart.php';
    </script>";
                }
            }
        }
    }
} ?>