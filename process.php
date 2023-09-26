<?php
$data = $_POST;
$errors = [];
    //Validate discount
    if (!is_numeric($data['discount']) || $data['discount'] > 0 ) {
    $errors['discount'] = "Tuổi không hợp lệ!";
    }
    //Validate image
    if (!is_string($data['image']) ) {
    $errors['image'] = "Hình ảnh không hợp lệ!";
    }
    //Validate info
    if (!is_string($data['info'])) {
    $errors['info'] = "Thông tin không hợp lệ!";
    }
    //Validate price
    if (!is_numeric($data['price'])) {
        $errors['price'] = "Giá không hợp lệ!";
        }
    //Validate trạng thái
    if (!is_string($data['prod_status']) || $data['prod_status'] < 0 || $data['prod_status'] > 1) {
    $errors['prod_status'] = "trạng thái không hợp lệ!";
    }
    // Validate brand
    if (count($errors) > 0) {
    $err_str = '<ul>';
    foreach ($errors as $err) {
        $err_str .= '<li>'.$err.'</li>';
    } 
    $err_str .= '</ul>';
        echo $err_str;
    }else{
    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', '', 'meta');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "INSERT INTO `product` (`discount`, `image`, `info`, `price`, `prod_status`, `brand`) 
    VALUES ('".$data['discount']."', '".$data['image']."', '".$data['info']."', '".$data['price']."', '".$data['prod_status']."', '".$data['brand']."');";
    //Chạy câu SQL
    if ($result = mysqli_query($con, $sql)) {
        echo "<h1>Thêm mới cầu thủ thành công Click vào 
        <a href='manager.php'>đây</a> để về trang danh sách</h1>";
    }else{
        echo "<h1>Có lỗi xảy ra Click vào 
        <a href='manager.php'>đây</a> để về trang danh sách</h1>";
    }

    }
?>