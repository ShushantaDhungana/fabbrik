<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FABBRIK</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid" style="background-color: blanchedalmond" >

<div class="logo">  <img src="img/FABBRIK.png"> </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

       
        <li class="nav-item">
          <a class="nav-link" href="ourProducts.php">Our Products</Button></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          
        <ul class="dropdown-menu">
            <?php
              session_start();
              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = TRUE) {
                $loggedin = TRUE;
              }
              else {
                $loggedin = FALSE;
              }

            if(!$loggedin){
              echo '<li><a class="dropdown-item" href="register.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>';
          }

            if($loggedin){
            echo'<li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
        ';}
          ?>
        </ul>
        </li>

        <li>
          <div class="search" style="position: absolute;left: 679px; top: 17px;">
            <form class="d-flex" role="search" action="search.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </li>
      </ul>

<a class="nav-item">
      <?php if (isset($_SESSION['email'])) {
      echo
      '<a class="nav-link px-4">
      <b class="hov"><i class="bi bi-person"></i>' . " " . $_SESSION['email'];
      '</b></a>';} 
      ?>
</a>


<?php if (isset($_SESSION['email'])) {
echo '<a class="nav-link" href="mycart.php">Cart</a>';}?>
    </div>
  </div>
</nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>