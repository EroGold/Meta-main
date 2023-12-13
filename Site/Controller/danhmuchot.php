<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM danhmuc";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo '<a href="?">';
            echo '<div class="discount">';
            echo '<span>-42%</span>';
            echo '</div>';
            echo '<div class="catalog-thumb">';
            echo '<span>';
            echo '<img src="./Public/img/'. $row['danhmuc_image'] .'" alt="">';
            echo '</span>';
            echo '</div>';
            echo '<div class="catalog-name">';
            echo    '<h3>'. $row['danhmuc_name'].'</h3>';
            echo '</div>';
            echo '</a>'; 
            echo '</li>';
        }
        echo '</ul>';
    }else{
        echo "Không tìm thấy sản phẩm đáp ứng điều kiện";
    }

    $connection->close();

?>