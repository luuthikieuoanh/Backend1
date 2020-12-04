<?php
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require './app/models/' . $class_name . '.php';
});
$pathURI = explode('-', $_SERVER['REQUEST_URI']);
$id = $pathURI[count($pathURI) - 1];

$productModel = new ProductModel();
$productList = $productModel->getProducts();
if (isset($_GET['id'])) {
    $productModel->deleteProduct($id);
    $productModel->updateProduct($id, $_POST['productName'], $_POST['productDescription'], $_POST['productPrice'], $_POST['productPhoto']);
    header('location:manageproducts.php');
}
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
    <table class="table">
        <thread>
            <td>ID</td>
            <td style="width: 100px;">Product photo</td>
            <td>Product name</td>
            <td>Update</td>
            <td>Delete</td>
        </thread>
        <?php
        foreach ($productList as $item) {
        ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><img src="./public/images/<?php echo $item['product_photo'] ?>" class="img-fluid" alt="..."></td>
                <td><?php echo $item['product_name'] ?></td>
                <td>
                    <a href="updateproduct.php?id=<?php echo  $item['id'] ?>" class="btn btn-primary">UPDATE</a>
                </td>
                <td>
                    <a href="deleteproduct.php?id=<?php echo  $item['id'] ?>" class="btn btn-primary">DELETE</a>
                </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>