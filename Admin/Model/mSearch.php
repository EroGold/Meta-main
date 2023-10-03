<?php
// Kết nối đến cơ sở dữ liệu (thay thế thông tin kết nối của bạn ở đây)
$connection = mysqli_connect("localhost", "root", "", "meta");

if (!$connection) {
    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
}

if (isset($_POST['keyword'])) {
    $keyword = $_POST['keyword'];

    // Truy vấn SQL tìm kiếm dữ liệu
    $query = "SELECT * FROM product WHERE info LIKE '%$keyword%'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Lỗi truy vấn: ' . mysqli_error($connection));
    }

    // Hiển thị kết quả tìm kiếm dưới dạng HTML
    
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<thead>
            <tr role="row">
                <th>ID</th>
                <th>Giảm giá</th>
                <th>Hình ảnh</th>
                <th>Thông tin</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Hãng</th>
                <th style="width: 7%;">Edit</th>
                <th style="width: 10%;">Delete</th>
            </tr>
        </thead>';


    // Lặp qua kết quả truy vấn và tạo các dòng cho bảng
    while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
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

    echo'<tr>
                <td colspan="10">
                    <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                </td>
            </tr>';

    echo "</table>";

    mysqli_close($connection);

    // Trả về HTML của bảng
    } else {
        echo '<p>Không tìm thấy kết quả nào.</p>';
    }

    // Đóng kết nối cơ sở dữ liệu
    
}else {
    echo "Không có bảng được chọn.";
}

?>