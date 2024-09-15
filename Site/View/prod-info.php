<div class="" style="display: flex; flex-direction: column;">
    <div class="capacity detail">
        <div class="title">
            <span>Dung tích</span>
        </div>

        <!-- <div class="item">
                <ul>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="0 and 100">
                            <input class="checkbox" type="checkbox">
                            <span>Dưới 100 lít</span>
                            <i class="prod-count"> <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM `product-info` where dungtichtong < 100";
                                    $result = mysqli_query($connection, $query);
                                    
                                    if (!$result) {
                                        die('Lỗi truy vấn: ' . mysqli_error($connection));
                                    }
                                
                                    if ($result->num_rows > 0) {
                                        // Lấy kết quả
                                        $row = $result->fetch_assoc();
                                        $productCount = $row["product_count"];
                                        
                                        echo "(".$productCount.")" ;
                                    } else {
                                        echo "(0)";
                                    }
                                ?></i>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="search-capacity" data-capacity="100 and 200">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 100 - 200 lít</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM `product-info` where dungtichtong > 100 AND dungtichtong <= 200";
                                    $result = mysqli_query($connection, $query);
                                    
                                    if (!$result) {
                                        die('Lỗi truy vấn: ' . mysqli_error($connection));
                                    }
                                
                                    if ($result->num_rows > 0) {
                                        // Lấy kết quả
                                        $row = $result->fetch_assoc();
                                        $productCount = $row["product_count"];
                                        
                                        echo "(".$productCount.")" ;
                                    } else {
                                        echo "(0)";
                                    }
                                ?>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="200 and 300">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 200 - 300 lít</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="300 and 400">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 300 - 400 lít</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="400 and 500">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 400 - 500 lít</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="500 and 600">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 500 - 600 lít</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-capacity" data-capacity="600 and 700">
                            <input class="checkbox" type="checkbox">
                            <span>Từ 600 - 700 lít</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                </ul>
        </div> -->
    </div>

    <div class="origin detail">
        <div class="title">
            <span>xuất xứ</span>
        </div>

        <div class="item">
                <ul>
                    <li>
                        <a href="#balan" class="search-origin" data-origin="Ba Lan">
                            <input class="checkbox" type="checkbox">
                            <span>Ba Lan</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-origin" data-origin="Thai Lan">
                            <input class="checkbox" type="checkbox">
                            <span>Thái Lan</span>
                            <i class="prod-count">
                                <?php   
                                     $connection = mysqli_connect('localhost','root','','meta');

                                     if (!$connection) {
                                         die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                     }
                                 
                                     
                                     // Truy vấn SQL để lấy danh sách sản phẩm
                                     $query = "SELECT COUNT(*) AS product_count FROM `product-info` where xuatxuthuonghieu = 'Thai Lan'";
                                     $result = mysqli_query($connection, $query);
                                     
                                     if (!$result) {
                                         die('Lỗi truy vấn: ' . mysqli_error($connection));
                                     }
                                 
                                     if ($result->num_rows > 0) {
                                         // Lấy kết quả
                                         $row = $result->fetch_assoc();
                                         $productCount = $row["product_count"];
                                         
                                         echo "(".$productCount.")" ;
                                     } else {
                                         echo "(0)";
                                     }
                                ?>
                                </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-origin" data-origin="Việt Nam">
                            <input class="checkbox" type="checkbox">
                            <span>Việt Nam</span>
                            <i class="prod-count">
                                <?php   
                                     $connection = mysqli_connect('localhost','root','','meta');

                                     if (!$connection) {
                                         die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                     }
                                 
                                     
                                     // Truy vấn SQL để lấy danh sách sản phẩm
                                     $query = "SELECT COUNT(*) AS product_count FROM `product-info` where xuatxuthuonghieu = 'Việt Nam'";
                                     $result = mysqli_query($connection, $query);
                                     
                                     if (!$result) {
                                         die('Lỗi truy vấn: ' . mysqli_error($connection));
                                     }
                                 
                                     if ($result->num_rows > 0) {
                                         // Lấy kết quả
                                         $row = $result->fetch_assoc();
                                         $productCount = $row["product_count"];
                                         
                                         echo "(".$productCount.")" ;
                                     } else {
                                         echo "(0)";
                                     }
                                ?>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#trungquoc" class="search-origin" data-origin="trungquoc">
                            <input class="checkbox" type="checkbox">
                            <span>Trung Quốc</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#indo" class="search-origin" data-origin="indo">
                            <input class="checkbox" type="checkbox">
                            <span>Indonesia</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#nhatban" class="search-origin" data-origin="nhatban">
                            <input class="checkbox" type="checkbox">
                            <span>Nhật Bản</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#hanquoc" class="search-origin" data-origin="hanquoc">
                            <input class="checkbox" type="checkbox">
                            <span>Hàn Quốc</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#thonhiky" class="search-origin" data-origin="thonhiky">
                            <input class="checkbox" type="checkbox">
                            <span>Thổ Nhĩ Kỳ</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#duc" class="search-origin" data-origin="duc">
                            <input class="checkbox" type="checkbox">
                            <span>Đức</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#chauau" class="search-origin" data-origin="chauau">
                            <input class="checkbox" type="checkbox">
                            <span>Châu Âu</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                </ul>
        </div>
    </div>

    <div class="technology detail">
        <div class="title">
            <span>CÔNG NGHỆ INVERTER</span>
        </div>

        <div class="item">
                <ul>
                    <li>
                        <a href="#" class="search-tech" data-tech="YES">
                            <input class="checkbox" type="checkbox">
                            <span>Có</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-tech" data-tech="NO">
                            <input class="checkbox" type="checkbox">
                            <span>Không</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                </ul>
        </div>
    </div>

    <div class="utilities detail">
        <div class="title">
            <span>Tiện ích</span>
        </div>

        <div class="item">
                <ul>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Ngăn đông mềm">
                            <input class="checkbox" type="checkbox">
                            <span>Ngăn đông mềm</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Làm đá tự động">
                            <input class="checkbox" type="checkbox">
                            <span>Làm đá tự động</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Lấy nước bên ngoài">
                            <input class="checkbox" type="checkbox">
                            <span>Lấy nước bên ngoài</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Lấy đá bên ngoài">
                            <input class="checkbox" type="checkbox">
                            <span>Lấy đá bên ngoài</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Ngăn đá trên">
                            <input class="checkbox" type="checkbox">
                            <span>Ngăn đá trên</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Ngăn đá dưới">
                            <input class="checkbox" type="checkbox">
                            <span>Ngăn đá dưới</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Bẳng điều khiển bên ngoài">
                            <input class="checkbox" type="checkbox">
                            <span>Bẳng điều khiển bên ngoài</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Điều khiển bằng điện thoại qua App">
                            <input class="checkbox" type="checkbox">
                            <span>Điều khiển bằng điện thoại qua App</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-utiliti" data-utiliti="Chuông báo khi quên đóng cửa">
                            <input class="checkbox" type="checkbox">
                            <span>Chuông báo khi quên đóng cửa</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                </ul>
        </div>
    </div>

    <div class="model detail">
        <div class="title">
            <span>Model/Mẫu</span>
        </div>

        <div class="item">
                <ul>
                    <li>
                        <a href="#" class="search-model" data-model="2023">
                            <input class="checkbox" type="checkbox">
                            <span>2023</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-model" data-model="2022">
                            <input class="checkbox" type="checkbox">
                            <span>2022</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="search-model" data-model="2021">
                            <input class="checkbox" type="checkbox">
                            <span>2021</span>
                            <i class="prod-count">(15)</i>
                        </a>
                    </li>   
                </ul>
        </div>
    </div>
</div>