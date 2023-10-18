<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $order = '';

    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
        $sortType =$_GET['sort'];
   
        switch($sortType){
            case ($sortType == 'price_asc'):
                $order .= " ORDER BY price ASC";
                break;
   
            case ($sortType == 'price_desc'):
                $order .= " ORDER BY price DESC";
                break;
   
            case ($sortType == 'price_discount'):
                $order .= " ORDER BY discount > 0";
                break;
   
            case ($sortType == 'new'):
                $order .= " ORDER BY ";
                break;
   
            case ($sortType == 'tragop'):
                $order .= " WHERE prod_status = 'Trả góp' ";
                break;
        };
    }

    if (isset($_GET['brand']) && !empty($_GET['brand'])) {
        $brandType =$_GET['brand'];

        switch($brandType){
            case ($brandType == 'funiki'):
                $order .= "WHERE brand = 'Funiki'";
                break;

            case ($brandType == 'aqua'):
                $order .= "WHERE brand = 'AQUA'";
                break;

            case ($brandType == 'casper'):
                $order .= "WHERE brand = 'Casper'";
                break;
        };
    }   
    $query = "SELECT * FROM product $order";
    
    $brand = mysqli_query($connection, $query);

    if (!$brand) {
        die('Lỗi truy vấn: ' . mysqli_error($connection));
    }

    if (mysqli_num_rows($brand) > 0) {
        echo '<ul class="row row-cols-4">';
        while ($row = mysqli_fetch_assoc($brand)) {
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
        echo '<p>' .$row['brand'].'không tìm thấy</p>';
    }
    
    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
?>