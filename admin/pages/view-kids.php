<?php
include("header.php");
include("../classes/kids.php");

$productObj = new Product();
$products = $productObj->getAll();
if(isset($_GET['delete-id'])){
    $product_id =$_GET['delete-id'];
    $productDel = new Product();
    if($productDel->delete( $product_id)){
        echo 'deleted';
        header("Location: view-kids.php");
    }else{
        echo 'oops something went wrong';
    }
}

?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <br/>
        <h3>Products</h3>
        <hr/>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">#</th>


            </tr>
            </thead>
            <tbody>
            <?php while($product = $products->fetch_assoc()){ ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['product_name'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><img width="100" src="uploads/<?= $product['image'] ?>" /></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a type="button" class="btn btn-primary" href='edit-kids.php?id=<?= $product['id'] ?>'>Edit</a>
                        <a type="button" class="btn btn-secondary" href='view-kids.php?delete-id=<?= $product['id'] ?>'>Delete</a>
                    </td>
                </tr>

            <?php   } ?>
            </tbody>
        </table>
    </main>
<?php include("footer.php");?>