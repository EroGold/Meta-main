<?php
     $connection = mysqli_connect('localhost','root','','meta');

     if (!$connection) {
         die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
     }
 
     $query = "SELECT * FROM product WHERE info like Inverter";
     $result = mysqli_query($connection, $query);
 
     if (!$result) {
         die('Lỗi truy vấn: ' . mysqli_error($connection));
     }

     if (mysqli_num_rows($result) > 0) {
        echo '<ul class="row row-cols-4">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li class="col">';
            echo'<div class="flash-sale-product">';

            echo'<div class="tragop">';
            echo    'Trả góp';
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
        echo '<p>Không có sản phẩm nào.</p>';
    }

?>