<?php
   $conn = new mysqli('localhost','root','','meta');

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $order = '';
    if (isset($_POST['type']) && !empty($_POST['type'])) {
        $type = $_POST['type'];

        switch ($type) {
            case ($type == '2door'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh 2 cánh'";
                break;
            
            case ($type == 'sbs'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh side by side'";
                break;

            case ($type == 'mini'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh mini'";
                break;

            case ($type == '1door'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh 1 cánh'";
                break;

            case ($type == '3door'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh 3 cánh'";
                break;

            case ($type == '4door'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh 4 cánh'";
                break;

            case ($type == '6door'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh 6 cánh'";
                break;

            case ($type == 'mobicol'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh Mobicol'";
                break;

            case ($type == 'minibar'):
                $order .= "WHERE `product-info`.type = 'Tủ lạnh Minibar'";
                break;
        }
    }

    $query = "SELECT * FROM product 
                INNER JOIN `product-info` ON `product-info`.prod_id = product.prod_id
                $order ";
    $result = $conn->query($query);

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