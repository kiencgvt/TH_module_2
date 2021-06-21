<?php

namespace Src\Model;

use Src\Database\Database;

class Model
{
    protected $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connect();
    }
}