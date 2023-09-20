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
            $prod_id = $_GET['prod_id'];
            //Kết nối databse
            $con = mysqli_connect('localhost', 'root', '', 'meta');
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql="SELECT * FROM `product` WHERE `prod_id`= ".$prod_id;
            //Chạy câu SQL
            $result=mysqli_query($con,$sql);
            //Gắn dữ liệu lấy được vào mảng $data
            if ($result->num_rows > 0) {
                // Lặp qua kết quả và thêm dữ liệu vào mảng
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            } else {
                echo "Không có dữ liệu nào.";
            }
        ?>
        <form action="process.php" method="POST">
            <h1>Chỉnh sửa thông tin sản phẩm</h1>
            <div class="form-group">
                <input type="text" name="prod_id" value="<?php echo $prod_id ?>"><span>ID sản phẩm </span>
            </div>
            <div class="form-group">
                <input type="text" name="discount" value="<?php echo $info['discount'] ?>"><span>Tuổi: </span>
            </div>
            <div class="form-group">
                <input type="text" name="image" value="<?php echo $info['image'] ?>"><span>Quốc tịch: </span>
            </div>
            <div class="form-group">
                <input type="text" name="info" value="<?php echo $info['info'] ?>"><span>Vị trí: </span>
            </div>
            <div class="form-group">
                <input type="text" name="prod_status" value="<?php echo $info['prod_status'] ?>"><span>Lương: </span>
            </div>
            <div class="form-group">
                <input type="text" name="brand" value="<?php echo $info['brand'] ?>"><span>Vị trí: </span>
            </div>
            <div class="form-group">
                <button type="submit">Cập nhật</button>
                <button type="reset">Reset</button>
                <a href="index.php"><button type="button">Cancle</button></a>
            </div>
        </form>
    </body>
</html>