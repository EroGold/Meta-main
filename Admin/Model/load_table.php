<?php
if (isset($_POST['table'])) {
    $tableName = $_POST['table'];

    $connection = mysqli_connect("localhost", "root","", "meta");

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    // Thực hiện truy vấn cơ sở dữ liệu để lấy dữ liệu từ bảng được chọn ($tableName)
    $result = mysqli_query($connection, "SELECT * FROM product where type = '$tableName'");
    
    // Xây dựng HTML cho bảng dữ liệu
    $html = "<table>";
    $html = '<thead>
    <tr role="row">
        <th>ID</th>
        <th>Giảm giá</th>
        <th>Hình ảnh</th>
        <th>Thông tin</th>
        <th>Giá</th>
        <th>Trạng thái</th>
        <th>Hãng</th>
        <th style="width: 7%;">Edit</th>
        <th style="width: 10%;">>Delete</th>
    </tr>
</thead>';


    // Lặp qua kết quả truy vấn và tạo các dòng cho bảng
    while ($row = mysqli_fetch_assoc($result)) {
            $html .= '<tr>
            <td>' . $row['prod_id'] . '</td>
            <td>' . $row['discount'] . '% </td>
            <td>' . $row['image'] . '</td>
            <td>' . $row['info'] . '</td>
            <td>' . $row['price'] . '</td>
            <td>' . $row['prod_status'] . 'đ </td>
            <td>' . $row['brand'] . '</td>
            <td><a href="edit.php?id='.$row['prod_id'].'">Edit</a></td>
            <td><a href="delete.php?id='.$row['prod_id'].'"> Delete</a></td>
            </tr>';
    }

    $html .='<tr>
                <td colspan="10">
                    <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                </td>
            </tr>';

    $html .= "</table>";

    mysqli_close($connection);

    // Trả về HTML của bảng
    echo $html;
} else {
    echo "Không có bảng được chọn.";
}
?>