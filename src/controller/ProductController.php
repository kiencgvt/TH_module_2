<?php

namespace Src\Controller;

use Src\Model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function getAllProduct()
    {
        return $this->productModel->getAll();
    }
    public function deleteProduct()
    {
        $id = $_REQUEST['id'];
        $this->productModel->delete($id);
        header('location: ../index.php');
    }
    public function updateProduct($id)
    {
        $name = $_REQUEST['name'];
        $productLines = $_REQUEST['productLine'];
        $buyPrice = $_REQUEST['buyPrice'];
        $quantityInStock = $_REQUEST['quantityInStock'];
        $productDescription = $_REQUEST['productDescription'];
        $this->productModel->update($id, $name, $productLines, $buyPrice, $quantityInStock, $productDescription);
        header('location:../index.php');
    }
    public function addProduct() {
        $name = $_REQUEST['name'];
        $productLines = $_REQUEST['productLine'];
        $buyPrice = $_REQUEST['buyPrice'];
        $quantityInStock = $_REQUEST['quantityInStock'];
        $productDescription = $_REQUEST['productDescription'];

    }
}