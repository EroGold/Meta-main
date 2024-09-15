<section class="menu-slider">
        <div class="warp">
            <nav class="home-nav">
                <a href="">
                    <i class="fa-solid fa-bars"></i>
                    <h2 class="title-menu-nav">Danh mục sản phẩm</h2>
                </a>

                <div class="menu-box">
                    <div class="pure-menu">
                        <ul class="pure-menu-list">
                            <?php 
                                $connection = mysqli_connect('localhost','root','','meta');

                                if (!$connection) {
                                    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                }
                            
                                $sql = "SELECT * FROM catalog";
                                $result = mysqli_query($connection, $sql);

                                if ($result->num_rows > 0) {
                                    while($catalog = $result->fetch_assoc()) {
                                    echo '<li class="pure-menu-item">
                                            <a href="http://localhost:8060/Meta-main/catalist.php?catalog_id='.$catalog['catalog_id'].'">
                                                <img src="./Public/img/'.$catalog['catalog_icon'].'" alt="">
                                                <span>'.$catalog['catalog_name'].'</span>
                                                
                                            </a>
                                        </li>';
                                    }
                                }
                            ?>
                            
                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/514.png" alt="">
                                    <span>Thiết bị văn phòng</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/880.png" alt="">
                                    <span>Thiết bị số, Phụ kiện</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3584.png" alt="">
                                    <span>Thiết bị công nghiệp</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/728.png" alt="">
                                    <span>Nhà cửa & Đời sống</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/906.png" alt="">
                                    <span>Mỹ phẩm & Làm đẹp</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/229.png" alt="">
                                    <span>Mẹ và bé</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3434.png" alt="">
                                    <span>Phụ kiện ô tô, xe hơi</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3320.png" alt="">
                                    <span>Thời trang & Du lịch</span>
                                    
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/1238.png" alt="">
                                    <span>Bách hóa tổng hợp</span>
                                    
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    Xem tất cả danh mục
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="sale-box">
                <div class="head">
                    <div class="sale-title">
                        <a href="">
                            KHUYẾN MÃI
                        </a>
                    </div>
        
                    <ul class="sale-slide">
                        <li>
                            <a href="">
                                <img src="./Public/img/gift.png" alt="">
                                <span>Tặng mã MT2G20K cho sản phẩm 2Good dưới 1 triệu</span>
                            </a>
                        </li>
                    </ul>
        
                    <div class="sale-tag">
                        <a href="">
                            <img src="./Public/img/gia-re-moi-ngay.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="content">
                    <div class="top">
                        <div class="img-slide">
                            <a href="">
                                <img src="./Public/img/Banner-may-lanh-720x445.png" alt="">
                            </a>
                        </div>
    
                        <div class="right-img">
                            <a href="">
                                <img src="./Public/img/Banner-tivi-300x250.png" alt="">
                            </a>
    
                            <a href="">
                                <img src="./Public/img/tu-dong-300x250.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="bottom">
                        <ul class="row row-cols-xl-3" >
                            <li class="col">
                                <img src="./Public/img/caphe-a.jpg" alt="">
                            </li>
                            <li class="col">
                                <img src="./Public/img/may-xay-da-nang-330x90.jpg" alt="">
                            </li>
                            <li class="col">
                                <img src="./Public/img/Banner-quat-may-330x99.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>