<?php

include_once "header.php"; 
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/admin/classes/Product.php");
$productObj = new Product();
$products = $productObj->getAll();
if(isset($_GET['product_id'])){
	$productUserObj = new ProductUser();
	$productUserObj->user_id = $_SESSION['id'];
	$productUserObj->product_id = $_GET['product_id'];
	if($productUserObj->create()){
		header("Location: product.php?cart_success=true");
	}else{
		echo 'oops! something went wrong.';
	}
}
?>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  	
  	<div class="container">
  		 <h1 class="display-4">Products</h1>
  		 <?php if(isset($_GET['cart_success'])){ ?>
 	<div class="alert alert-primary" role="alert">
	 One product is successfully Added To Cart.
	</div>

	<?php } ?>
  	 <hr/>
<div class="row">
	
<?php while($product = $products->fetch_assoc()){ ?>
 <div class="col-sm-3" style="margin-bottom: 20px">
  <div class="card" >
    <img class="card-img-top" height="144" src="../admin/pages/uploads/<?= $product['image'] ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $product['product_name'] ?></h5>
      <p class="card-text"><?= $product['description'] ?></p>
    </div>

    <div class="card-footer">
    	
      <small  class="text-muted">Rs. <?= $product['price']?></small>
      <?php if($_SESSION && $_SESSION['id']){ 

      	?>
       <a  class="btn btn-outline-primary btn-sm addtocart" href="product.php?product_id=<?= $product['id'] ?>">Add To Cart</a>
       <?php }else{ ?>

       <a  class="btn btn-outline-primary btn-sm addtocart" href="login.php">Login To Buy</a>
       <?php } ?>
    </div>

  </div>
</div>

<?php   } ?>
</div>
</div>
</div>

<?php include_once "footer.php";  ?>
