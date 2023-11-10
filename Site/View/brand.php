    
 
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

                    <li data-option="option1">
                        <a href="#" class="search-brand" data-brand="Funiki">
                            <input type="checkbox">
                            <span>Funiki</span>
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
                    <li data-option="option2">
                    <a href="#" class="search-brand" data-brand="AQUA">
                            <input type="checkbox">
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
                    <li data-option="option3">
                    <a href="#" class="search-brand" data-brand="Casper">
                            <input type="checkbox">
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
                    <li data-option="option4">
                    <a href="#" class="search-brand" data-brand="Electrolux">
                            <input type="checkbox">
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
                    <li data-option="option5">
                    <a href="#" class="search-brand" data-brand="Toshiba">
                            <input type="checkbox">
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
                    <li data-option="option6">
                    <a href="#" class="search-brand" data-brand="Samsung">
                            <input type="checkbox">
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
                    <li data-option="option7">
                    <a href="#" class="search-brand" data-brand="Sharp">
                            <input type="checkbox">
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
                    <li data-option="option8">
                    <a href="#" class="search-brand" data-brand="Hitachi">
                            <input type="checkbox">
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
                    <li data-option="option9">
                    <a href="#" class="search-brand" data-brand="Panasonic">
                        <input type="checkbox">
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
                    <li data-option="option10">
                    <a href="#" class="search-brand" data-brand="LG">
                            <input type="checkbox">
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
                    <li data-option="option11">
                    <a href="#" class="search-brand" data-brand="Beko">
                            <input type="checkbox">
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
                    <li data-option="option12">
                    <a href="#" class="search-brand" data-brand="Mitsubishi Electric">
                            <input type="checkbox">
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
                    <li data-option="option13">
                    <a href="#" class="search-brand" data-brand="Bosch">
                            <input type="checkbox">
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
                    <li data-option="option14">
                    <a href="#" class="search-brand" data-brand="Baumatic">
                            <input type="checkbox">
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
                    <li data-option="option15">
                    <a href="#" class="search-brand" data-brand="Hisense">
                            <input type="checkbox">
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
                    <li data-option="option16">
                    <a href="#" class="search-brand" data-brand="Coex">
                            <input type="checkbox">
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
                    <li data-option="option17">
                    <a href="#" class="search-brand" data-brand="Darling">
                            <input type="checkbox">
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
            $(".search-brand").click(function(e){
                e.preventDefault();

                var optionBrand = $(this).data("brand");
                $.ajax({
                    type: 'POST',
                    url: 'Admin/Model/get_catalist.php',
                    data: { brand: optionBrand},
                    success: function (response) {
                        $("#search-results").html(response);
                    },
                    error:  function(error){
                        console.log(error)
                        $("#search-results").html('Failed' + error);
                    }
                })
            })
        })
    </script>

