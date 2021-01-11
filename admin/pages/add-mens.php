<?php
include("header.php");
include("../classes/mens.php");
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <br/>
        <h3>New Product</h3>
        <hr/>
        <form method="post" action="" enctype="multipart/form-data">
            <br />
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Product name</span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="product name" aria-label="productname" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Product Description</span>
                </div>
                <textarea class="form-control" name="description" aria-label="With textarea" required="true"></textarea>
            </div>

            <br/>

            <input type="file" class="custom-file" required=""
                   id="fileToUpload" name="fileToUpload" />
            </div>
            <br/>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  required>Re</span>

                </div>
                <input type="number" class="form-control" aria-label="Amount" name="price" required="true">
                <div class="input-group-append">
                    <span class="input-group-text" >.00</span>
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Add</button>
            <?php

            if(isset($_POST['submit']))
            {

                $target_dir = "uploads/";
                $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
                $target_file = $target_dir .$_POST['name'].'.'.$imageFileType;
                $uploadOk = 1;
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                $product = new Product();
                $product->name = $_POST['name'];
                $product->description=$_POST['description'];
                $product->price = $_POST['price'];
                $product->image = $_POST['name'].'.'.$imageFileType;
                if($product->create()){
                    echo 'New Product is added';
                    header("Location: view-mens.php");
                }else{
                    echo 'oops! something went wrong.';
                }
            }


            ?>
        </form>

    </main>

<?php include("footer.php");?>