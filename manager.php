<?php 
    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', '', 'meta');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql="SELECT * FROM `product` ORDER BY `prod_id`";
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
    $html = '';
    foreach ($data as $value) {
        $html .= '
        <tr role="row">
            <td>'.$value['prod_id'].'</td>
            <td>'.$value['discount'].'</td>
            <td>'.$value['image'].'</td>
            <td>'.$value['info'].'</td>
            <td>'.$value['price'].'$</td>
            <td>'.$value['prod_status'].'</td>
            <td>'.$value['brand'].' $</td>
            <td><a href="edit.php?id='.$value['prod_id'].'">Edit</a></td>
            <td><a href="delete.php?id='.$value['prod_id'].'"> Delete</a></td>
        </tr>';
    }

    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
    </head>
    <body>
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý sản phẩm </h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Giảm giá </th>
                    <th>Hình ảnh</th>
                    <th>Thông tin</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                    <th>Hãng</th>
                    <th style="width: 7%;">
                        Edit</th>
                    <th style="width: 10%;">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    echo $html;
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="10">
                        <a href="add.php"><button id="button">Thêm sản phẩm</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>