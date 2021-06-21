<?php

include_once 'vendor/autoload.php';

use Src\Controller\ProductController;

$productController = new ProductController();
$data = $productController->getAllProduct();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a href="view/add.php"></a>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Tên hàng</th>
            <th>Loại hàng</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($data as $key => $item): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['productLine']; ?></td>
                <td><a onclick="return confirm('Are you sure?')" href="action/delete.php?id=<?php echo $item['id']; ?>"
                       class="btn btn-danger">Delete</a></td>
                <td><a href="view/update.php?id=<?php echo $item['id']; ?>" class="btn btn-primary">Update</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
