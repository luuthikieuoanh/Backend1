<?php
require_once './config/database.php';
require_once './config/config.php';
spl_autoload_register(function ($class_name) {
    require './app/models/' . $class_name . '.php';
});

$pathURI = explode('-', $_SERVER['REQUEST_URI']);
$id = $pathURI[count($pathURI) - 1];

$productModel = new ProductModel();
$item = $productModel->getProductById($id);

if (isset($_POST['productName'])) {
    $update = $productModel->updateProduct($id, $_POST['productName'], $_POST['productDescription'], $_POST['productPrice'], $_POST['productPhoto']);
    $message = '';
    if ($create) {
        $message = '<div class="alert alert-success">
        <strong>Success!</strong> Saved successfully
      </div>';
    } else {
        $message = '<div class="alert alert-danger">
        <strong>Danger!</strong> Saved failed
      </div>';
    }
    header('location:../manageproducts.php');
    //echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .title {
            text-align: center;
        }

        label {
            font-weight: bolder;
        }

        .form-control {
            width: 25%;
        }

        .form-group input {
            width: 360px;
        }

        .contain {
            margin: 0 35%;
        }

        button {
            float: right;
            margin-right: 30px;
        }

        textarea {
            width: 360px;
        }

        .form-control {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <h2 class="title">Update Product</h2>
    <?php $message ?>
    <div class="contain">
        <form action="updateproduct.php" method="post">
            <div class="form-group">
                <label>Name:
                    <input type="text" name="productName" id="productName" class="form-control" placeholder="Enter product name.....">
                </label>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="productDescription" id="productDescription" cols="30" rows="10" placeholder="Enter product description....."></textarea>

            </div>
            <div class="form-group">
                <label>Price:
                    <input type="text" name="productPrice" id="productPrice" class="form-control" placeholder="Enter product price......">
                </label>
            </div>
            <div class="form-group">
                <label>Photo:
                    <input type="file" name="productPhoto" id="productPhoto" placeholder="Enter product photo.....">
                </label>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
</body>


</html>