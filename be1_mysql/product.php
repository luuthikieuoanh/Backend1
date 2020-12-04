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

// if (isset($_GET['delete'])) {
//     $delete=(int)$_GET['delete'];
//     var_dump($delete);
//     $productModel->deleteProduct($delete);
//     header('location:../index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/<?php echo BASE_URL; ?>/public/images/<?php echo $item['product_photo'] ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <h1><?php echo $item['product_name'] ?></h1>
                <p><?php echo $item['product_price'] ?></p>
                <p>
                    <?php echo $item['product_description'] ?>
                </p>
                <!-- <a href="./?delete=<?php// echo $id ?>">Delete</a> -->
            </div>
        </div>
    </div>
</body>
</html>