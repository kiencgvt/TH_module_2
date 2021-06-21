<?php


namespace Src\Model;


class ProductLineModel extends Model
{
    function getAll() {
        $sql = 'SELECT *
                FROM productlines;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}