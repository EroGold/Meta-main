<?php
   $conn = new mysqli('localhost','root','','meta');

   // Kiểm tra kết nối
   if ($conn->connect_error) {
       die("Kết nối thất bại: " . $conn->connect_error);
   }
   
   // Lấy giá trị của điều kiện tìm kiếm từ yêu cầu POST

   if (isset($_POST['utiliti'])) {
    $selectedUtiliti = $_POST['utiliti'];
}

   // Xây dựng câu truy vấn SQL dựa trên điều kiện
   $sql = "SELECT * FROM product 
   INNER JOIN `product-info` 
   ON product.prod_id = `product-info`.prod_id 
   WHERE `product-info`.tienich = '$selectedUtiliti'";
   
   // Thực hiện truy vấn SQL
   $result = $conn->query($sql);
   
   // Xử lý kết quả truy vấn
   if ($result->num_rows > 0) {
    echo '<ul class="row row-cols-4">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="col">';
        echo'<div class="flash-sale-product">';

        echo'<div class="tragop">';
        echo    '<span>'. $row['prod_status'] .'</span>';
        echo'</div>';

        echo'<div class="discount">';
        echo    '<span> -'. $row['discount'] .'%</span>';
        echo'</div>';

        echo'<div class="thumb">';
        echo'<img src="'. $row['image'] .'" alt="">';
        echo'</div>';

        echo'<div class="name">';
        echo    '<a href="">'. $row['info'] .'</a>';
        echo'</div>';

        echo'<div class="rate">';
        echo    '<i class="fa-regular fa-star"></i>';
        echo    '<i class="fa-regular fa-star"></i>';
        echo    '<i class="fa-regular fa-star"></i>';
        echo    '<i class="fa-regular fa-star"></i>';
        echo    '<i class="fa-regular fa-star"></i>';
        echo'</div>';

        echo'<div class="price">';
        echo    '<strong>'. $row['price'].'đ </strong>';
        echo    '<strike>3.990.000 d</strike>';
        echo'</div>';

        echo'<div class="buy-now">';
        echo    '<a href="">';
        echo        'mua ngay';
        echo    '</a>';
        echo'</div>';

        echo'</div>';
        echo'</li>';
    }
    echo '</ul>';
   } else {
       echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
   }
   
   // Đóng kết nối đến cơ sở dữ liệu
   $conn->close();
?>