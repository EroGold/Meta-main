<div class="prod-list">
    <div class="tag">
        <div class="item">
            <a href="">Model 2023</a>
        </div>
    </div>

    <div class="brand-name">
        <div class="item">
            <ul>
                <li>
                    <a href="">
                        <img src="./asset/img/logo-bosch-nho.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="prod-count">
        <?php include 'Admin/Model/prod_count.php' ?>
    </div>

    <div class="sort">
        <div class="item">
            <ul>
                <li>
                    <a href="">
                        Bán chạy nhất
                    </a>
                </li>
                <li>
                    <a href="?sort=price_asc">
                        Giá tăng dần
                    </a>
                </li>
                <li>
                    <a href="?sort=price_desc">
                        Giá giảm dần
                    </a>
                </li>
                <li>
                    <a href="?sort=price_discount">
                        Giảm giá
                    </a>
                </li>
                <li>
                    <a href="?sort=new">
                        Mới nhất 
                    </a>
                </li>
                <li>
                    <a href="?sort=tragop">
                        Trả góp
                    </a>
                </li>
                <li>
                    <a href="?sort=suggest">
                        META gợi ý  
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="choose">
        <div class="item">
            <ul>
                <li>
                    <p id="chooseContainer">
                        
                    </p>
                </li>
            </ul>
        </div>
    </div>

    <div class="prod-review">
        <div class="prod">
            <div class="item" id="search-results">
            <?php
                    $connection = mysqli_connect('localhost','root','','meta');

                    if (!$connection) {
                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                    }
                    $query = "SELECT * FROM product WHERE catalog_id = $catalogId";
                    $result = mysqli_query($connection, $query);

                    if ($result->num_rows > 0) {
                        echo '<ul class="row row-cols-4">';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li data-prod_id="'.$row['prod_id'].'" class="col">';
                            echo '<a href="product.php?prod_id='.$row['prod_id'].'">';
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
                            echo    '<strong>'.number_format($row['price'], 0, ',', '.').'đ </strong>';
                            echo    '<strike>'.number_format(round(($row['price']* 100) / (100 - $row['discount']) , -5), 0, ',', '.').'d</strike>';
                            echo'</div>';
                    
                            echo'<div class="buy-now">';
                            echo    '<a href="">';
                            echo        'mua ngay';
                            echo    '</a>';
                            echo'</div>';

                         
                            echo'</div>';
                            echo '</a>';
                            echo'</li>';
                        }
                        echo '</ul>';
                       } else {
                           echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                       }
                       
                       // Đóng kết nối đến cơ sở dữ liệu
                       $connection->close();
                ?>
            </div>
        </div>
    </div>
</div>    


