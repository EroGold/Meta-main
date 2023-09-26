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
    
        $sql = "INSERT INTO `product` (`discount`, `image`, `info`, `price`, `prod_status`, `brand`) 
        VALUES ('$discount', '$image', '$info', '$price', '$prod_status', '$brand')";
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
                width: 90%;
                height: 24px;
                margin: 5px;
            }
            div.form-group input{
                float: right;
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
        <?php 
            $id = $_GET['id'];
            //Kết nối databse
            $con = mysqli_connect('localhost', 'root', '', 'meta');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql="SELECT * FROM `product` WHERE `prod_id`= ".$id;
            //Chạy câu SQL
            $result=mysqli_query($con,$sql);
            //Gắn dữ liệu lấy được vào mảng $data
            while ($row=mysqli_fetch_assoc($result)) {
                $info = $row;
            }
        ?>
        <form action="process.php" method="POST">
            <h1>Chỉnh sửa thông tin sản phẩm</h1>
            
            <div class="form-group">
                <input type="text" name="discount" value="<?php echo $info['discount']; ?>"><span>Giảm giá: </span>
            </div>
            <div class="form-group">
                <input type="text" name="image" value="<?php echo $info['image']; ?>"><span>Hình ảnh: </span>
            </div>
            <div class="form-group">
                <input type="text" name="info" value="<?php echo $info['info']; ?>"><span>Thông tin: </span>
            </div>
            <div class="form-group">
                <input type="text" name="price" value="<?php echo $info['price']; ?>"><span>Giá: </span>
            </div>
            <div class="form-group">
                <input type="text" name="prod_status" value="<?php echo $info['prod_status']; ?>"><span>Lương: </span>
            </div>
            <div class="form-group">
                <span>Hãng</span>
                <select name="brand">
                    <option value="Dell">Dell</option>
                    <option value="Asus">Asus</option>
                    <option value="MSI">MSI</option>
                    <option value="Lenovo">Lenovo</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancel</button></a>
            </div>
        </form>
    </body>
</html>