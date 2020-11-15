<?php
require_once './Function.php';
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require "./app/models/" . $class_name . '.php';
});
$productModel = new ProductModel();
$productList = $productModel->getProducts();
$categoryModel = new CategoriesModel();
$categoryList = $categoryModel->getCategories();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card {
            border: 1px solid #000;
            text-align: center;
            margin-top: 10px;
            padding: 5px;
            margin: 5px;
        }

        .card-img-top {
            width: 120px;
            height: 120px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php foreach ($categoryList as $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $value['category_name'] ?></a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <?php foreach ($categoryList as $value) { ?>
                            <a class="dropdown-item" href="#"><?php echo $value['category_name'] ?></a>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <table>
        <?php
        foreach ($productList as $item) {
                $path=vn_to_str($item['product_name']) . "-" . $item['id'];
        ?>
            <div class="card" style="display: inline-block">
                <div class="images">
                    <img class="card-img-top" src="./images/<?php echo $item['product_photo'] ?>" alt="" style="max-width: 200px;">
                </div>
                <div class="card-body">

                    <a href="product.php/<?php echo $path?>">
                        <h4 class="card-title"><?php echo $item['product_name'] ?></h4>
                    </a>
                    <p class="card-text"><?php echo $item['product_price'] ?></p>
                    <p class="card-text"><?php echo $item['product_description'] ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </table>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>