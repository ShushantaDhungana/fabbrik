<?php
include '../dbconnect.php';
session_start();

extract($_POST);
if (isset($update)) {
	mysqli_query($conn, "UPDATE products SET product_name='$product_name',product_price='$product_price',product_stock='$product_stock', product_description='$product_description' where pid='" . $_GET['pid'] . "'");
	$err = "<font color='blue'>Product updated </font>";
	echo '<script>
	alert("Product Updated");
	window.location.href="manageProd.php";
	</script>';
}

//select old product

$q = mysqli_query($conn, "SELECT * FROM products WHERE pid='" . $_GET['pid'] . "'");
$res = mysqli_fetch_array($q);
?>
<?php
include '../includes/aside.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Strumo | Update Product</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="icon" type="image/x-icon" href="../assets/images/logos/webw.png" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
	<link rel="stylesheet" href="css/adminlte.min.css" />

</head>

<body>
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container d-flex justify-content-center mt-3">
				<b class="font">
					<h1>Update Existing Product</h1>
				</b>
			</div>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- SELECT2 EXAMPLE -->
				<div class="card card-default">

				</div>
			</div>
			<!-- /.card-header -->
			<div class="border border-secondary card-body font m-auto rounded-3 w-50">
				<form method="POST" class="">
					<div class="form-group mb-3">
						<div class="col-sm-4"><?php echo @$err; ?></div>
					</div>

					<div class="form-group mb-3">
						<b>Enter Product Name</b>
						<input type="text" name="product_name" value="<?php echo $res['product_name']; ?>" class="mt-2 border-secondary form-control" />
					</div>

					<div class="form-group mb-3">
						<b>Enter Price</b>
						<input type="text" name="product_price" value="<?php echo $res['product_price']; ?>" class="mt-2 border-secondary form-control" />
					</div>

					<div class="form-group mb-3">
						<b>Enter Available Stock</b>
						<input type="text" name="product_stock" class="mt-2 border-secondary form-control" value="<?php echo $res['product_stock']; ?>">
					</div>

					<div class="form-group mb-3">
						<b>Enter Description</b>
						<textarea name="product_description" cols="10" rows="5" class="mt-2 border-secondary form-control"><?php echo $res['product_description']; ?></textarea>
					</div>

					<div class="text-white form-group mt-4">
						<input type="submit" value="Update" name="update" class="btn btn-primary" />
						<input type="reset" class="btn btn-dark" />
					</div>
				</form>
			</div>
		</section>

	</div>
	<?php
	require '../includes/footer.php'; ?>
</body>


</html>