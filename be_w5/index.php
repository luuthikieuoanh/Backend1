<?php
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require "./app/models/" . $class_name . '.php';
});
$productModel = new ProductModel();
$productList = $productModel->getProduct();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table tr td{
        border: 1px solid black;
        width: 150px;
        
    }
    table{
        border-collapse: collapse;
        text-align: center;
    }
    .bold{
       font-weight: bolder;
    }
    
</style>

</head>

<body>
    <table>
        <tr>
            <td class="bold">ID</td>
            <td class="bold">Produce name</td>
            <td class="bold">Product description</td>
            <td class="bold">Product price</td>
            <td class="bold">Product photo</td>
        </tr>
        <?php
        foreach ($productList as $item) {
        ?>
            <tr>

                <td><?php echo $item['id'] ?> </td>
                <td><?php echo $item['product_name'] ?></td>
                <td><?php echo $item['product_description'] ?> </td>
                <td><?php echo $item['product_price'] ?></td>
                <td class="images"><img src="./images/<?php echo $item['product_photo'] ?>" style="max-width: 120px;" alt=""></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>