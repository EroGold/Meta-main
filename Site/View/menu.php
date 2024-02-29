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
                            <li class="pure-menu-item">
                                <a href="?a=dienmay">
                                    <img src="./Public/img/1013.png" alt="">
                                    <span>Điện máy</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>

                                <div class="sub">
                                    <ul class="menu-list">
                                        <ul>
                                                <?php 

                                                    $commonProductIdShown = [];

                                                     $connection = mysqli_connect('localhost','root','','meta');

                                                     if (!$connection) {
                                                         die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                                     }
                                                 
                                                     
                                                     // Truy vấn SQL để lấy danh sách sản phẩm
                                                     $query = "SELECT * 
                                                                FROM menu WHERE `menu-id` = 1 
                                                                ORDER BY `menu-item`";
                                                     $result = mysqli_query($connection, $query);
                                                     
                                                     if (!$result) {
                                                         die('Lỗi truy vấn: ' . mysqli_error($connection));
                                                     }
                                                 
                                                     if (mysqli_num_rows($result) > 0) {

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if(!in_array($row['menu-item'], $commonProductIdShown)){
                                                                echo '<li><strong>
                                                                        <a href="" style="border: none;"><img src="./Public/img/hot-category.png" alt="">'.$row['menu-item'].'</a>
                                                                    </strong></li>';

                                                                $commonProductIdShown[] = $row['menu-item'];

                                                            }

                                                            echo '<li style="list-style: disc; margin-left: 30px;">'.$row['item-name'].'</li>';
                                                        }
                                                    }
                                                ?>
                                        </ul>
                                    </ul>
                                </div>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/382.png" alt="">
                                    <span>Đồ gia dụng</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>

                                <div class="sub">
                                    <ul class="menu-list">
                                        <ul>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Điều hòa
                                            </li>
                                            <li>
                                                Điều hòa 1 chiều
                                            </li>
                                            <li>
                                                Điều hòa 2 chiều
                                            </li>
                                            <li>
                                                Điều hòa cây
                                            </li>
                                            <li>
                                                Điều hòa âm trần
                                            </li>
                                            <li>
                                                Điều hòa áp trần
                                            </li>
                                            <li>
                                                Điều hòa Multi
                                            </li>
                                            <li>
                                                Phụ kiện điều hòa
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tủ lạnh
                                            </li>
                                            <li>
                                                Tủ lạnh 2 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh side by side
                                            </li>
                                            <li>
                                                Tủ lạnh mini
                                            </li>
                                            <li>
                                                Tủ lạnh 1 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh 3 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 4 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 6 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh ô tô, Mobicool
                                            </li>
                                            <li>
                                                Minibar
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tivi
                                            </li>
                                            <li>
                                                Tivi Samsung
                                            </li>
                                        </ul>
                                       
                                        <ul>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Điều hòa
                                            </li>
                                            <li>
                                                Điều hòa 1 chiều
                                            </li>
                                            <li>
                                                Điều hòa 2 chiều
                                            </li>
                                            <li>
                                                Điều hòa cây
                                            </li>
                                            <li>
                                                Điều hòa âm trần
                                            </li>
                                            <li>
                                                Điều hòa áp trần
                                            </li>
                                            <li>
                                                Điều hòa Multi
                                            </li>
                                            <li>
                                                Phụ kiện điều hòa
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tủ lạnh
                                            </li>
                                            <li>
                                                Tủ lạnh 2 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh side by side
                                            </li>
                                            <li>
                                                Tủ lạnh mini
                                            </li>
                                            <li>
                                                Tủ lạnh 1 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh 3 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 4 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 6 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh ô tô, Mobicool
                                            </li>
                                            <li>
                                                Minibar
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tivi
                                            </li>
                                            <li>
                                                Tivi Samsung
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Điều hòa
                                            </li>
                                            <li>
                                                Điều hòa 1 chiều
                                            </li>
                                            <li>
                                                Điều hòa 2 chiều
                                            </li>
                                            <li>
                                                Điều hòa cây
                                            </li>
                                            <li>
                                                Điều hòa âm trần
                                            </li>
                                            <li>
                                                Điều hòa áp trần
                                            </li>
                                            <li>
                                                Điều hòa Multi
                                            </li>
                                            <li>
                                                Phụ kiện điều hòa
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tủ lạnh
                                            </li>
                                            <li>
                                                Tủ lạnh 2 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh side by side
                                            </li>
                                            <li>
                                                Tủ lạnh mini
                                            </li>
                                            <li>
                                                Tủ lạnh 1 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh 3 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 4 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 6 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh ô tô, Mobicool
                                            </li>
                                            <li>
                                                Minibar
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tivi
                                            </li>
                                            <li>
                                                Tivi Samsung
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Điều hòa
                                            </li>
                                            <li>
                                                Điều hòa 1 chiều
                                            </li>
                                            <li>
                                                Điều hòa 2 chiều
                                            </li>
                                            <li>
                                                Điều hòa cây
                                            </li>
                                            <li>
                                                Điều hòa âm trần
                                            </li>
                                            <li>
                                                Điều hòa áp trần
                                            </li>
                                            <li>
                                                Điều hòa Multi
                                            </li>
                                            <li>
                                                Phụ kiện điều hòa
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tủ lạnh
                                            </li>
                                            <li>
                                                Tủ lạnh 2 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh side by side
                                            </li>
                                            <li>
                                                Tủ lạnh mini
                                            </li>
                                            <li>
                                                Tủ lạnh 1 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh 3 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 4 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 6 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh ô tô, Mobicool
                                            </li>
                                            <li>
                                                Minibar
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tivi
                                            </li>
                                            <li>
                                                Tivi Samsung
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Điều hòa
                                            </li>
                                            <li>
                                                Điều hòa 1 chiều
                                            </li>
                                            <li>
                                                Điều hòa 2 chiều
                                            </li>
                                            <li>
                                                Điều hòa cây
                                            </li>
                                            <li>
                                                Điều hòa âm trần
                                            </li>
                                            <li>
                                                Điều hòa áp trần
                                            </li>
                                            <li>
                                                Điều hòa Multi
                                            </li>
                                            <li>
                                                Phụ kiện điều hòa
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tủ lạnh
                                            </li>
                                            <li>
                                                Tủ lạnh 2 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh side by side
                                            </li>
                                            <li>
                                                Tủ lạnh mini
                                            </li>
                                            <li>
                                                Tủ lạnh 1 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh 3 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 4 cánh 
                                            </li>
                                            <li>
                                                Tủ lạnh 6 cánh
                                            </li>
                                            <li>
                                                Tủ lạnh ô tô, Mobicool
                                            </li>
                                            <li>
                                                Minibar
                                            </li>
                                            <li class="tag">
                                                <img src="./Public/img/hot-category.png" alt="">
                                                Tivi
                                            </li>
                                            <li>
                                                Tivi Samsung
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/680.png" alt="">
                                    <span>Công cụ & Dụng cụ</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/290.png" alt="">
                                    <span>Y tế & Dụng cụ</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/263.png" alt="">
                                    <span>Thể thao & Ngoài trời</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/514.png" alt="">
                                    <span>Thiết bị văn phòng</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/880.png" alt="">
                                    <span>Thiết bị số, Phụ kiện</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3584.png" alt="">
                                    <span>Thiết bị công nghiệp</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/728.png" alt="">
                                    <span>Nhà cửa & Đời sống</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/906.png" alt="">
                                    <span>Mỹ phẩm & Làm đẹp</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/229.png" alt="">
                                    <span>Mẹ và bé</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3434.png" alt="">
                                    <span>Phụ kiện ô tô, xe hơi</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/3320.png" alt="">
                                    <span>Thời trang & Du lịch</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </li>

                            <li class="pure-menu-item">
                                <a href="">
                                    <img src="./Public/img/1238.png" alt="">
                                    <span>Bách hóa tổng hợp</span>
                                    <i class="fa-solid fa-chevron-right"></i>
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
                                <img src="./asset/img/gift.png" alt="">
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