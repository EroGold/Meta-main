<section>
        <div class="warp">
            <div class="suggest">
                <div class="suggest-header-box">
                    <div class="box-title">
                        <img src="./Public/img/prod-hot-a.png" alt="">
                        <h2>Gợi ý cho bạn</h2>
                    </div>
                </div>

                <div class="suggest-container">
                    <ul class="row-cols-5">
                        <?php
                            $connection = mysqli_connect('localhost','root','','meta');

                            if (!$connection) {
                                die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                            }
                        
                            
                            // Truy vấn SQL để lấy danh sách sản phẩm
                            $query = "SELECT * FROM product
                                        WHERE sold < count
                                         ORDER BY sold DESC";
                            $result = mysqli_query($connection, $query);
                            
                            if (!$result) {
                                die('Lỗi truy vấn: ' . mysqli_error($connection));
                            }
                            
                            // Hiển thị danh sách sản phẩm dưới dạng HTML
                            if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<li data-prod_id="'.$row['prod_id'].'" class="col to-product">
                                        <div class="sugg-product">
                                            <div class="sugg-tragop">
                                                Trả góp
                                            </div>
            
                                            <div class="sugg-discount">
                                                <span>'.$row['discount'].'%</span>
                                            </div>
            
                                            <div class="sugg-thumb">
                                                <img src="./'.$row['image'].'" alt="">
                                            </div>
            
                                            <div class="sugg-name">
                                                <a href="">
                                                    <h3>'.$row['info'].'</h3>
                                                </a>
                                            </div>
            
                                            <div class="sold">
                                                <div class="sold-count">
                                                    Đã bán '.$row['sold'].'
                                                </div>
            
                                                <div class="sold-percent">
                                                    <div class="sold-per20" style="width:'.($row['sold'] / $row['count']) * 100 .'%">
                                                        <div class="sold-percent-ele"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
                                    }
                                }
                        ?>
                    </ul>

                    <div class="more-catalog">
                        <a href="">
                            Xem thêm chuyên mục
                            <i class="fa-solid fa-chevron-down"></i>
    
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>