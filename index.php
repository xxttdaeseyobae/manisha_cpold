 <?php 
 include("pages/header.php"); 
if(isset($_GET['logout'])){
    if($_GET['logout']){
        User::logout();
        header("Location: ./index.php");  
    }
 }
?>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"> Hamro Luga </h1>
      <p class="lead">Shop Better Feel Better </p>



    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item-active">
        <img class="d-block w-100" src="images/index.jpg " alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/index.jpg? auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="Controls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    

      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/index1.jpg" alt="Card image cap">
    <div class="card-body">
    </div>
      <p class="card-text">Shop for all clothes now </p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/index2.jpg" alt="Card image cap">
    <div class="card-body">
        <a class="dropdown-item" href="<?= Helperfunction::getBaseUrl()?>/pages/product.php">Buy various trending clothes now </a>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/index5.jpg" alt="Card image cap">
    <div class="card-body">
        <a class="dropdown-item" href="<?= Helperfunction::getBaseUrl()?>/pages/kids.php">Buy kids  clothing now </a>

    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>
<?php include("pages/footer.php") ?> 
     

