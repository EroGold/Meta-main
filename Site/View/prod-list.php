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
                <li id="contentContainer">
                    <p>

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
                    $query = 'SELECT * FROM product';
                    $result = mysqli_query($connection, $query);

                    if ($result->num_rows > 0) {
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
<script>
    // Gắn sự kiện click vào nút lọc sản phẩm mới
   

    $(".prod-list .sort .item ul li").click(function () {
        $.ajax({
            type: "GET",
            url: "Admin/Model/get_catalist.php",
            success: function (data) {
                $("#search-results").html(data);
            }
        });
    });

    
</script>
