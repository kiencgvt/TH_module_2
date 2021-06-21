<?php
include_once '../vendor/autoload.php';

use Src\Controller\ProductController;
use Src\Controller\ProductLineController;

try {
    $productLineController = new ProductLineController();
    $productLines = $productLineController->getAllProductLine();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productController = new ProductController();
        $productController->updateProduct($id);
    }
    echo '<a href="../index.php">Back</a>';
} catch (PDOException $PDOException) {
    echo 'Co loi xay ra. Sua lai';
    echo 'location.reload()';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table>
        <tr>
            <td>Tên hàng</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td><select name="productLine">
                    <?php foreach ($productLines as $productLine): ?>
                        <option value="<?php echo $productLine['id'] ?>"><?php echo $productLine['productLine'] ?></option>
                    <?php endforeach; ?>
                </select></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="buyPrice"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="quantityInStock"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input type="text" name="productDescription"></td>
        </tr>
    </table>
    <input type="submit" value="Gửi">
</form>
</body>
</html>
