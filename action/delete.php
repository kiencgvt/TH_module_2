<?php
include_once '../vendor/autoload.php';

use Src\Controller\ProductController;

try {
    $productController = new ProductController();
    $productController->deleteProduct();
} catch (PDOException $PDOException) {
    echo 'Co loi xay ra';
    echo '<a href="../index.php">Back</a>';
    die();
}