    
 
    <div class="" style="margin-top: 20px;">
        <div class="brand detail">
            <div class="title">
                <span>Thương hiệu</span>
            </div>

            <div class="item">
                <ul id="selectOption">
                    <li class="brand-search">
                        <input type="brand-search">
                        <button class="search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </li>

                    <li>
                        <a href="#" class="search-brand" data-brand="Funiki">
                            <input class="checkbox" type="checkbox">
                            <span class="val">Funiki</span>
                            <i class="prod-count">
                                <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Funiki'";
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
                    <a href="#" class="search-brand" data-brand="AQUA">
                            <input class="checkbox" type="checkbox">
                            <span>AQUA</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'AQUA'";
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
                    <a href="#" class="search-brand" data-brand="Casper">
                            <input class="checkbox" type="checkbox">
                            <span>Casper</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Casper'";
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
                    <a href="#" class="search-brand" data-brand="Electrolux">
                            <input class="checkbox" type="checkbox">
                            <span>Electrolux</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Electrolux'";
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
                    <a href="#" class="search-brand" data-brand="Toshiba">
                            <input class="checkbox" type="checkbox">
                            <span>Toshiba</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Toshiba'";
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
                    <a href="#" class="search-brand" data-brand="Samsung">
                            <input class="checkbox" type="checkbox">
                            <span>Samsung</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Samsung'";
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
                    <a href="#" class="search-brand" data-brand="Sharp">
                            <input class="checkbox" type="checkbox">
                            <span>Sharp</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Sharp'";
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
                    <a href="#" class="search-brand" data-brand="Hitachi">
                            <input class="checkbox" type="checkbox">
                            <span>Hitachi</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Hitachi'";
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
                    <a href="#" class="search-brand" data-brand="Panasonic">
                        <input class="checkbox" type="checkbox">
                        <span>Panasonic</span>
                        <i class="prod-count"><?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Panasonic'";
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
                    </li>
                    <li>
                    <a href="#" class="search-brand" data-brand="LG">
                            <input class="checkbox" type="checkbox">
                            <span>LG</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'LG'";
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
                    <a href="#" class="search-brand" data-brand="Beko">
                            <input class="checkbox" type="checkbox">
                            <span>Beko</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Beko'";
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
                    <a href="#" class="search-brand" data-brand="Mitsubishi Electric">
                            <input class="checkbox" type="checkbox">
                            <span>Mitsubishi Electric</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Mitsubishi Electric'";
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
                    <a href="#" class="search-brand" data-brand="Bosch">
                            <input class="checkbox" type="checkbox">
                            <span>Bosch</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Bosch'";
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
                    <a href="#" class="search-brand" data-brand="Baumatic">
                            <input class="checkbox" type="checkbox">
                            <span>Baumatic</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Baumatic'";
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
                    <a href="#" class="search-brand" data-brand="Hisense">
                            <input class="checkbox" type="checkbox">
                            <span>Hisense</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Hisense'";
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
                    <a href="#" class="search-brand" data-brand="Coex">
                            <input class="checkbox" type="checkbox">
                            <span>Coex</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Coex'";
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
                    <a href="#" class="search-brand" data-brand="Darling">
                            <input class="checkbox" type="checkbox">
                            <span>Darling</span>
                            <i class="prod-count">
                            <?php
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }
                                
                                    
                                    // Truy vấn SQL để lấy danh sách sản phẩm
                                    $query = "SELECT COUNT(*) AS product_count FROM product where brand = 'Darling'";
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
                    <li class="show">
                        <a href="">
                            Xem thêm<i class="fa-solid fa-angles-down"></i>
                        </a>
                        <a href="">
                            Thu gọn<i class="fa-solid fa-angles-up"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>  
    </div>

    <script>
        $(document).ready(function(e){
            $(".detail .item ul li a").click(function(e){
                e.preventDefault();

                // function checked {
                //     if($('.checkbox:checked'))
                // }

                if($('.checkbox').prop('checked')){

                    var optionBrand = $('.search-brand input[type="checkbox"]:checked' ).data("brand");
                    var optionCapacity = $('.search-capacity  ').data("capacity");
                    var optionOrigin = $('.search-origin ').data("origin");
                    var optionUtiliti = $('.search-utiliti').data("utiliti");
    
                    var params = {
                        'brand' : optionBrand,
                        'capacity' : optionCapacity,
                        'origin' : optionOrigin,
                        'utiliti' : optionUtiliti,
                    }

                    $.ajax({
                    type: 'POST',
                    url: 'Admin/Model/get_catalist.php',
                    data: params,
                    success: function (response) {
                        $("#search-results").html(response);
                    },
                    error:  function(error){
                        console.log(error)
                        $("#search-results").html('Failed' + error);
                        }
                    })
                }
            })
        })
    </script>

