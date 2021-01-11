<?php 
Session_start();
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/Helperfunction.php");
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/User.php");
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/ProductUser.php");
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/Book.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link href="<?= Helperfunction::getBaseUrl() ?>/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= Helperfunction::getBaseUrl() ?>/css/style.css" rel="stylesheet" />
    <title>Hamro  Luga </title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/index.php">Home</a>
        <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/pages/product.php">Womens</a>
          <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/pages/mens.php">Mens</a>
          <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/pages/kids.php">Kids</a>
          <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/pages/about-us.php">About</a>

          <?php if(User::getSession()){ ?>
          
          <span class="dropdown">
            <a class="dropdown-toggle p-2 text-dark" href="#"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $_SESSION['username'] ?>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a  class="dropdown-item"  href="<?= Helperfunction::getBaseUrl()?>/index.php?logout=true">Logout </a>
              <a class="dropdown-item" href="<?= Helperfunction::getBaseUrl()?>/pages/my-cart.php">My Cart</a> 
                 <a class="dropdown-item" href="<?= Helperfunction::getBaseUrl()?>/pages/booking.php">Booking</a> 
            </div>
        </span>
        <?php }else{ ?>
          <a class="p-2 text-dark" href="<?=  Helperfunction::getBaseUrl()?>/pages/register.php">Sign up</a>
          <a class="p-2 text-dark" href="<?= Helperfunction::getBaseUrl()?>/pages/login.php">Login </a>
        <?php  } ?>
      </nav>
    
    </div>

    
