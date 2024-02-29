<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    
    // Truy vấn SQL để lấy danh sách sản phẩm
    $query = "SELECT * FROM product";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Lỗi truy vấn: ' . mysqli_error($connection));
    }
    
    // Hiển thị danh sách sản phẩm dưới dạng HTML
    if (mysqli_num_rows($result) > 0) {
        echo '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo  '<li>';
            echo '<div class="flash-sale-product">';
            echo '<div class="promo">';
            echo   '<img src="' . $row['image'] . '" alt="">';
            echo'</div>';

            echo'<div class="tragop">';
            echo    'Trả góp';
            echo'</div>';

            echo    '<div class="discount">';
            echo    '<span> -' . $row['discount'] . '%</span>';
            echo'</div>';

            echo'<div class="thumb" style="margin-top: 200px;">';
            echo    '<img src="./asset/img/tu-lanh-casper-2-cua-ngan-dong-tren-240l-rt-258vg-3.jpg" alt="">';
            echo'</div>';

            echo'<div class="name" style="width: 200px; height: 40px; overflow: hidden; text-overflow: ellipsis; margin-left: 10px;">';
            echo    '<a href="">'.
                        $row['info'];
            echo    '</a>';
            echo'</div>';

            echo'<div class="brand">';
            echo    '<a href="">' . $row['brand'] .'</a>';
            echo'</div>';

            echo'<div class="countdown">';
            echo    '<div class="count-left">';
            echo        '<strong>'. number_format($row['price'], 0, ',', '.') .'đ </strong>';
            echo        '<strike>'. number_format(round(($row['price'] * 100) / (100 - $row['discount']) , -5), 0, ',', '.') .'đ </strike>';
            echo    '</div>';
            echo    '<div class="count-right">';
            echo        '<div class="flash-sale-box">';
            echo            '<div class="time-left-box">';
            echo                '<span class="time-left">';
            echo                    'Kết thúc sau';
            echo                '</span>';
            echo            '</div>';

            echo        '</div>';
            echo    '</div>';
            echo'</div>';
            echo'</div>';
            echo'</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>Không có sản phẩm nào.</p>';
    }
    
    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
    ?>