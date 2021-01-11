<?php
include("header.php");
include("../classes/mens.php");
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $productObj  = new Product();
            $product = $productObj->getById($id);

            if(isset($_POST['edit']))
            {

                $productObjE = new Product();
                $productObjE->name = $_POST['name'];
                $productObjE->description=$_POST['description'];
                $productObjE->price = $_POST['price'];

                if($_FILES["fileToUpload"]["size"] !== 0){
                    // print_r($_FILES["fileToUpload"]);
                    $target_dir = "uploads/";

                    $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));

                    $target_file = $target_dir .$_POST['name'].'.'.$imageFileType;
                    $uploadOk = 1;
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            $productObjE->image = $_POST['name'].'.'.$imageFileType;
                            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }else{
                    $productObjE->image = $product['image'];
                }


                if($productObjE->edit($id)){
                    echo 'New Product is edited';
                    header("Location: view-mens.php");
                    // header("Location: view-product.php");
                }else{
                    echo 'oops! something went wrong.';
                }
            }

        }
        ?>
        <br/>
        <h3>Edit Product</h3>
        <hr/>
        <form method="post" action="" enctype="multipart/form-data">
            <br />
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Product name</span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="product name" aria-label="productname" aria-describedby="basic-addon1" required value="<?= $product['product_name'] ?>">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Product Description</span>
                </div>
                <textarea class="form-control" name="description" aria-label="With textarea" required="true" ><?= $product['description']  ?></textarea>
            </div>

            <br/>

            <input type="file" class="custom-file"
                   id="fileToUpload" name="fileToUpload" />
            <img width="200" src="uploads/<?= $product['image'] ?> "/>
            <br/>
            </div>
            <br/>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" required>Re</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount" name="price" required="true" value="<?= $product['price'] ?>">
                <div class="input-group-append">
                    <span class="input-group-text" >.00</span>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="edit">Edit</button>
            <?php



            ?>
        </form>

    </main>

<?php include("footer.php");?>