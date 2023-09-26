<?php
// Kết nối đến cơ sở dữ liệu MySQL
$mysqli = new mysqli("localhost", "root", "", "meta");
if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Lấy từ khóa tìm kiếm từ biểu mẫu

// Thực hiện truy vấn tìm kiếm trong cơ sở dữ liệu (ví dụ)
$searchQuery = $_POST['txtSearch'];

// Soạn câu lệnh SQL SELECT để truy vấn dữ liệu
$sql = "SELECT * FROM product WHERE info LIKE ?";
$searchQuery = '%' . $searchQuery . '%'; // Thêm dấu % để tìm kiếm các kết quả chứa từ khóa.

// Chuẩn bị câu lệnh
$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    die("Lỗi chuẩn bị câu lệnh SQL: " . $mysqli->error);
}

// Bind các tham số
$stmt->bind_param("s", $searchQuery);

// Thực thi câu lệnh SQL SELECT
if ($stmt->execute()) {
    $result = $stmt->get_result();

    // Kiểm tra xem có kết quả tìm kiếm hay không
    if ($result->num_rows > 0) {
        // Hiển thị kết quả tìm kiếm
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;

            $html = '';
            foreach ($data as $value) {
                $html .= '
                <tr role="row">
                    <td>'.$value['prod_id'].'</td>
                    <td>'.$value['discount'].'%</td>
                    <td>'.$value['image'].'</td>
                    <td>'.$value['info'].'</td>
                    <td>'.$value['price'].'$</td>
                    <td>'.$value['prod_status'].'</td>
                    <td>'.$value['brand'].'</td>
                    <td><a href="edit.php?id='.$value['prod_id'].'">Edit</a></td>
                    <td><a href="delete.php?id='.$value['prod_id'].'"> Delete</a></td>
                </tr>';
        };}
    } else {
        echo "Không tìm thấy kết quả phù hợp.";
    }
} else {
    echo "Lỗi truy vấn: " . $stmt->error;
}

// Đóng kết nối
$stmt->close();
$mysqli->close();
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
        <link rel="stylesheet" href="Public/Css/manager.css">
        <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    </head>
    <body>


    <section id="datatable">
        <h1>Quản lý sản phẩm </h1>

        <table style="border: 1px solid">
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
    </section>
    </body>
</html>