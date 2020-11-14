<?php
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require "./app/models/" . $class_name . '.php';
});
$id = $_GET['id'];
$productModel = new ProductModel();
$item = $productModel->getID($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <table>

        <div class="card" style="display: inline-block">
            <div class="images">
                <img class="card-img-top" src="./images/<?php echo $item['product_photo'] ?>" alt="" style="max-width: 200px;">
            </div>
            <div class="card-body">
                <a href="product.php?id=<?php echo $item['id'] ?>">
                    <h4 class="card-title"><?php echo $item['product_name'] ?></h4>
                </a>
                <p class="card-text"><?php echo $item['product_price'] ?></p>
                <p class="card-text"><?php echo $item['product_description'] ?></p>
            </div>
        </div>

    </table>

</body>

</html>