<?php 
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $catalogId = isset($_GET['catalog_id']) ? $_GET['catalog_id'] : 0 ;

    // Truy vấn SQL để lấy danh sách sản phẩm
    $query = "SELECT COUNT(*) AS product_count FROM product WHERE catalog_id = '$catalogId'";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        die('Lỗi truy vấn: ' . mysqli_error($connection));
    }

    if ($result->num_rows > 0) {
        // Lấy kết quả
        $row = $result->fetch_assoc();
        $productCount = $row["product_count"];
        
        echo $productCount . " Sản phẩm";
    } else {
        echo "Không có sản phẩm nào trong cơ sở dữ liệu.";
    }
?>