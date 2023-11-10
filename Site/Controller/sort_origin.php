<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    if (isset($_POST['origin'])) {
        $selectedOrigin = $_POST['origin'];
    }

        $sql = "SELECT * FROM product
                INNER JOIN `product-info` ON product.prod_id = `product-info`.prod_id
                WHERE `product-info`.xuatxuthuonghieu = '$selectedOrigin'";
        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die('Lỗi truy vấn: ' . mysqli_error($connection));
        }

        if (mysqli_num_rows($result) > 0) {
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
        }else{
            echo "Không tìm thấy sản phẩm đáp ứng điều kiện";
        }

    $connection->close();
?>