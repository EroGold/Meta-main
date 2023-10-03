<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "meta");

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $discount = $_POST["discount"];
    $image = $_POST["image"];
    $info = $_POST["info"];
    $price = $_POST["price"];
    $prod_status = $_POST["prod_status"];
    $brand = $_POST["brand"];

    $sql = "INSERT INTO `product` (`discount`, `image`, `info`, `price`, `prod_status`, `type`) VALUES ('$discount', '$image', '$info', '$price', '$prod_status', '$type')";
    if ($conn->query($sql) === TRUE) {
        echo 'Thêm thành công';
    } else{
        echo 'Lỗi ';
    }
    $conn->close();

    header("Location: manager.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            button{
                margin-right: 20px;
                padding: 5px;
            }
            form{
                width: 600px;
                margin: auto;
                text-align: center;
            }
            div.form-group{
                display: flex;
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group span{
                height: 20px;
                width: 400px;
            }
            span{
                font: 18px bold;
                font-weight: bold;
                float: right;
                margin-right: 10px; 
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form action="add.php" method="POST">
        <h1>Thêm Sản phẩm</h1>
        <div class="form-group">
            <span>Giảm giá: </span><input type="text" name="discount">
        </div>
        <div class="form-group">
            <span>Hình ảnh:</span><input type="text" name="image">
        </div>
        <div class="form-group">
            <span>Thông tin:</span><input type="text" name="info">
        </div>
            <div class="form-group">
            <span>Giá:</span><input type="text" name="price">
        </div>
        <div class="form-group">
            <span>Trạng thái:</span><input type="text" name="prod_status">
        </div>
        <div class="form-group">
            <span>Phân loại:</span><select name="type" id="">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>           
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Thêm</button>
            <button type="reset">Reset</button>
            <a href="index.php"><button type="button">Cancle</button></a>
        </div>
        </form>
    </body>
</html>