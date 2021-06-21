<?php


namespace Src\Controller;


use Src\Model\ProductLineModel;

class ProductLineController
{
    public $productLineModel;

    public function __construct()
    {
        $this->productLineModel = new ProductLineModel();
    }

    public function getAllProductLine()
    {
        return $this->productLineModel->getAll();
    }
}