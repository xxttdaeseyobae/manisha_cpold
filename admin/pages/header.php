<?php
Session_start();
include_once('../../classes/User.php');
if(!$_SESSION && !$_SESSION['id']){

   header("Location: login.php");
  // print_r($_SESSION);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/admincss.css" rel="stylesheet"> 


  </head>
     <body>
    <div class="container-fluid">
      <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="dashboard.php">
                <span data-feather="file"></span>
                Dashboard 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-product.php">
                <span data-feather="file"></span>
                Add Product
              </a>
            </li>
            <li class="nav-item">
           
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-product.php">
                <span data-feather="users"></span>
                View & Edit Product
              </a>
            </li>
          </ul>

            
        </div>
      </nav>
      <nav  class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"></a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" />
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="dashboard.php?logout=true">Sign out</a>
          </li>
        </ul>
      </nav>
    </div>
    </div>  


   
