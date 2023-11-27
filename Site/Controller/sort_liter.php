<?php 
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    if (isset($_POST['capacity'])) {
        $selectedCapacity = $_POST['capacity'];
    }  

    $query = "SELECT * FROM product 
                INNER JOIN `product-info` 
                ON product.prod_id = `product-info`.prod_id 
                WHERE `product-info`.dungtichtong BETWEEN '$selectedCapacity'";

    $capacity = mysqli_query($connection, $query);


    if (mysqli_num_rows($capacity) > 0) {
        echo '<ul class="row row-cols-4">';
        while ($row = mysqli_fetch_assoc($capacity)) {
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
        echo '<p> Không tìm thấy sản phẩm</p>';
    }
    
    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
?>