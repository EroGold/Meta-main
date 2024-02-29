<section>
        <div class="warp">
            <div class="tag-catalog">
                <div class="tag-catalog-head">
                    <div class="box-title">
                        <h2>
                            <a href="">Điện máy - Điện lạnh</a>
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
                            <img src="./Public/img/tivi-290x350.png" alt="">
                        </div>

                        <div class="tag-catalog-option-list">
                            <ul class="row-cols-5">
                            <?php 
                                    $sameMenuItem = [];
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                    $query = 'SELECT `menu-item` FROM menu WHERE `menu-id` = 1';
                                    $result = mysqli_query($connection, $query);
                
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            if(!in_array($row['menu-item'], $sameMenuItem)){
                                                echo '<li class="col">
                                                    <a href="">
                                                        <div class="tag-thumb">
                                                            <span>  
                                                                <img src="./Public/img/c1021-0x0.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="tag-title">'.$row['menu-item'].'</div>
                                                    </a>
                                                </li>';

                                            }
                                            $sameMenuItem[] = $row['menu-item'];
                                        }
                                        
                                       } else {
                                           echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                                       }
                                       
                                       // Đóng kết nối đến cơ sở dữ liệu
                                       $connection->close();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="trend-prod">
                    <div class="trend-prod-head">
                        <div class="box-title">Điện máy nổi bật</div>
                        <div class="box-all">
                            <a href="">Xem tất cả</a>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>

                    <div class="trend-prod-container" style="display: flex; overflow: hidden">
                        <ul style="display: flex">
                            <?php
                                $connection = mysqli_connect('localhost','root','','meta');

                                if (!$connection) {
                                    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                }
                                $query = 'SELECT * FROM product';
                                $result = mysqli_query($connection, $query);
            
                                if ($result->num_rows > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<li>
                                        <div class="trend-product-item">
            
                                            <div class="tragop">
                                                Trả góp
                                            </div>
            
                                            <div class="discount">
                                                <span>-21%</span>
                                            </div>
            
                                            <div class="thumb">
                                                <img src="./'.$row['image'].'" alt="">
                                            </div>
            
                                            <div class="name">
                                                <a href="">
                                                    <h3>Tủ lạnh Casper 2 cửa ngăn đông trên 240L RT-258VG</h3>
                                                </a>
                                            </div>
            
                                            <div class="brand">
                                                <a href="">Casper</a>
                                            </div>
            
                                            <div class="price countdown">
                                                <div class="count-left">
                                                    <strong>3.340.000đ</strong>
                                                    <strike>3.990.000đ</strike>
                                                </div>
        
                                                <div class="count-right"></div>
                                            </div>
                                        </div>
                                    </li>   ';
                                    }
                                }
                            ?>
                            

                            <li>
                                <div class="trend-product-item">
    
                                    <div class="tragop">
                                        Trả góp
                                    </div>
    
                                    <div class="discount">
                                        <span>-21%</span>
                                    </div>
    
                                    <div class="thumb">
                                        <img src="./Public/img/tu-lanh-casper-2-cua-ngan-dong-tren-240l-rt-258vg-3.jpg" alt="">
                                    </div>
    
                                    <div class="name">
                                        <a href="">
                                            <h3>Tủ lạnh Casper 2 cửa ngăn đông trên 240L RT-258VG</h3>
                                        </a>
                                    </div>
    
                                    <div class="brand">
                                        <a href="">Casper</a>
                                    </div>
    
                                    <div class="price countdown">
                                        <div class="count-left">
                                            <strong>3.340.000đ</strong>
                                            <strike>3.990.000đ</strike>
                                        </div>

                                        <div class="count-right"></div>
                                    </div>
                                </div>
                            </li>   

                            <li>
                                <div class="trend-product-item">
    
                                    <div class="tragop">
                                        Trả góp
                                    </div>
    
                                    <div class="discount">
                                        <span>-21%</span>
                                    </div>
    
                                    <div class="thumb">
                                        <img src="./Public/img/tu-lanh-casper-2-cua-ngan-dong-tren-240l-rt-258vg-3.jpg" alt="">
                                    </div>
    
                                    <div class="name">
                                        <a href="">
                                            <h3>Tủ lạnh Casper 2 cửa ngăn đông trên 240L RT-258VG</h3>
                                        </a>
                                    </div>
    
                                    <div class="brand">
                                        <a href="">Casper</a>
                                    </div>
    
                                    <div class="price countdown">
                                        <div class="count-left">
                                            <strong>3.340.000đ</strong>
                                            <strike>3.990.000đ</strike>
                                        </div>

                                        <div class="count-right"></div>
                                    </div>
                                </div>
                            </li>   

                            <li>
                                <div class="trend-product-item">
    
                                    <div class="tragop">
                                        Trả góp
                                    </div>
    
                                    <div class="discount">
                                        <span>-21%</span>
                                    </div>
    
                                    <div class="thumb">
                                        <img src="./Public/img/tu-lanh-casper-2-cua-ngan-dong-tren-240l-rt-258vg-3.jpg" alt="">
                                    </div>
    
                                    <div class="name">
                                        <a href="">
                                            <h3>Tủ lạnh Casper 2 cửa ngăn đông trên 240L RT-258VG</h3>
                                        </a>
                                    </div>
    
                                    <div class="brand">
                                        <a href="">Casper</a>
                                    </div>
    
                                    <div class="price countdown">
                                        <div class="count-left">
                                            <strong>3.340.000đ</strong>
                                            <strike>3.990.000đ</strike>
                                        </div>

                                        <div class="count-right"></div>
                                    </div>
                                </div>
                            </li>   

                            <li>
                                <div class="trend-product-item">
    
                                    <div class="tragop">
                                        Trả góp
                                    </div>
    
                                    <div class="discount">
                                        <span>-21%</span>
                                    </div>
    
                                    <div class="thumb">
                                        <img src="./Public/img/tu-lanh-casper-2-cua-ngan-dong-tren-240l-rt-258vg-3.jpg" alt="">
                                    </div>
    
                                    <div class="name">
                                        <a href="">
                                            <h3>Tủ lạnh Casper 2 cửa ngăn đông trên 240L RT-258VG</h3>
                                        </a>
                                    </div>
    
                                    <div class="brand">
                                        <a href="">Casper</a>
                                    </div>
    
                                    <div class="price countdown">
                                        <div class="count-left">
                                            <strong>3.340.000đ</strong>
                                            <strike>3.990.000đ</strike>
                                        </div>

                                        <div class="count-right"></div>
                                    </div>
                                </div>
                            </li>             
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>