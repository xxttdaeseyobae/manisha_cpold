<?php 

include("header.php"); 
$productUserObj = new ProductUser();
$userId =$_SESSION['id'];
$pu = $productUserObj->getByUser($userId);

if(isset($_GET['product_user_id_buy'])){
	if($productUserObj->upateToBuy($_GET['product_user_id_buy'])){
		header("Location: my-cart.php?success=true");
	}else{
		echo 'oops! something went wrong';
	}
}
if(isset($_GET['product_user_id_cancel'])){
	if($productUserObj->delete($_GET['product_user_id_cancel'])){
		header("Location: my-cart.php");
	}else{
		echo 'oops! something went wrong';
	}
}

if(isset($_GET['deleteBP'])){
	if($productUserObj->deleteBoughtProduct($userId)){
		header("Location: my-cart.php");
	}else{
		echo 'oops! something went wrong';
	}
}


?>

	<div class="container">
<div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">My Cart <a style="float: right;" href="my-cart.php?deleteBP=true">clear bought item.</a></h6>

        	 <?php if(isset($_GET['success'])){ ?>
        	 <br/>
			 	<div class="alert alert-primary" role="alert">
				 	Congratulation, your product will soon arrive in your door step.
				</div>

			<?php } ?>
        <?php 
        if($pu){
        while($p = $pu->fetch_assoc()){ ?>
        <div class="media text-muted pt-3">
          <img alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="../admin/pages/uploads/<?= $p['image'] ?>" data-holder-rendered="true">
	          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
	            <strong class="d-block text-gray-dark"><?= $p['product_name'] ?></strong>
	             <strong class="d-block ">Rs. <?= $p['price'] ?></strong>
	               <?php if($p['status'] == 'CART' ){ ?>
	            <a  class="buycart" href="my-cart.php?product_user_id_buy=<?= $p['id'] ?>">BUY</a> 
	            <a  class ="cancelcart" href="my-cart.php?product_user_id_cancel=<?= $p['id'] ?>">CANCEL</a>
	              <?php }else{ ?>
	              <a style="float: right;color:black">BOUGHT !</a>

	              <?php } ?>
	          </p>
        </div>
        <?php }
    		}else{
        ?>
        	<br />
        	<h5>You have no product in carts</h5>
        	<br />
        <?php } ?>
      </div>
  </div>


  <?php include ("footer.php") ?>