<?php


namespace Src\Model;


class ProductModel extends Model
{
    public function getAll() {
        $sql = 'SELECT products.id, name, productLine
                FROM products
                JOIN productlines ON products.productLine_id = productlines.id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function delete($id) {
        $sql = 'DELETE FROM products WHERE id = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
    function update($id, $name, $productLines, $buyPrice, $quantityInStock, $productDescription) {
        $sql = 'UPDATE products
                SET name = ?, productLine_id = ?, buyPrice = ?, quantityInStock = ?, productDescription = ?
                WHERE id = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $productLines);
        $stmt->bindParam(3, $buyPrice);
        $stmt->bindParam(4, $quantityInStock);
        $stmt->bindParam(5, $productDescription);
        $stmt->bindParam(6, $id);
        $stmt->execute();
    }
    function add($id, $name, $productLines, $buyPrice, $quantityInStock, $productDescription) {
        $sql = 'INSERT INTO products ()
                VALUES ($name, $productLines, $buyPrice, $quantityInStock, $productDescription)';
    }
}