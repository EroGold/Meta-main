<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM catalog";
    $result = mysqli_query($connection, $sql);

    if ($result->num_rows > 0) {
        while($catalog = $result->fetch_assoc()) {
            echo '<div class="warp">
            <div class="tag-catalog">
                <div class="tag-catalog-head">
                    <div class="box-title">
                        <h2>
                            <a href="">'.$catalog['catalog_name'].'</a>
                        </h2>
                    </div>

                    <div class="box-all">
                        <a href="">Xem tất cả</a>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </div>

                <div class="tag-catalog-container">
                    <div class="tag-catalog-option">
                        <div class="tag-catalog-banner">
                            <img src="./'.$catalog['catalog_ads'].'" alt="" style="width: 290px; height: 350px">
                        </div>

                        <div class="tag-catalog-option-list">
                            <ul style="flex-wrap: wrap;">';
                                    $sameMenuItem = [];
                                    $catalog_id = $catalog['catalog_id'];
                                    $sql_same = "SELECT * FROM menu WHERE `catalog_id` = $catalog_id";
                                    $result_same = $connection->query($sql_same);
                
                                    if ($result_same->num_rows > 0) {
                                        while ($same = mysqli_fetch_assoc($result_same)) {
                                                echo '<li style=" flex: 1 1 calc(20% - 10px);">
                                                    <a href="">
                                                        <div class="tag-thumb">
                                                            <img src="./Public/img/'.$same['menu-img'].'" alt="">
                                                        </div>
                                                        <div class="tag-title">'.$same['item-name'].'</div>
                                                    </a>
                                                </li>';
                                        }
                                        
                                       } else {
                                           echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                                       }
                            echo '</ul>
                        </div>
                    </div>
                </div>

                <div class="trend-prod">
                    <div class="trend-prod-head" style="display: flex; justify-content: space-between; margin: 0 10px;">
                        <div class="box-title" style="font-weight: 700; font-size: 20px;">'.$catalog['catalog_name'].' nổi bật</div>
                        <div class="box-all">
                            <a href="">Xem tất cả</a>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>

                    <div class="trend-prod-container" style="display: flex; overflow: hidden">
                        <ul style="display: flex">';
                             $catalog_id = $catalog["catalog_id"];
                             $sql_products = "SELECT * FROM product WHERE catalog_id = $catalog_id";
                             $result_products = $connection->query($sql_products);

                             if ($result_products->num_rows > 0) {
                                while($product = $result_products->fetch_assoc()) {
                                    echo '<li>
                                        <a href="product.php?prod_id='.$product['prod_id'].'">
                                        <div class="trend-product-item">
                                            <div class="tragop" style="bottom: 140px;">
                                                Trả góp
                                            </div>
            
                                            <div class="discount">
                                                <span>-'.$product['discount'].'%</span>
                                            </div>
            
                                            <div class="thumb" style="width: 210px; height: 205px">
                                                <img src="./'.$product['image'].'" alt="" style="width: 200px;">
                                            </div>
            
                                            <div class="name">
                                                <a href="">
                                                    <h3>'.$product['info'].'</h3>
                                                </a>
                                            </div>
            
                                            <div class="brand">
                                                <a href="">'.$product['brand'].'</a>
                                            </div>
            
                                            <div class="price countdown">
                                                <div class="count-left">
                                                    <strong>'.number_format($product['price'], 0, ',', '.').'đ</strong>
                                                    <strike>'.number_format(round(($product['price']* 100) / (100 - $product['discount']) , -5), 0, ',', '.').'đ</strike>
                                                </div>
        
                                                <div class="count-right"></div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>   ';
                                }
                             }
                            echo '</ul>
                    </div>
                </div>
            </div>

        </div>';
        }
    } else {
        echo "Không có dữ liệu nào";
    }
    
    // Đóng kết nối
    $connection->close();
?>

<!-- <?php 
                                    
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                    
                                       
                                       // Đóng kết nối đến cơ sở dữ liệu
                                       $connection->close();
                                ?> -->