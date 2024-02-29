<?php
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $productId = isset($_GET['prod_id']) ? $_GET['prod_id'] : 0 ;

    $sql = "SELECT * FROM product
    INNER JOIN `product-info` ON product.prod_id = `product-info`.prod_id
    WHERE product.prod_id = $productId";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $productDiscount = $row['discount'];
            $productImage = $row['image'];
            $productName = $row['info'];
            $productBrand = $row['brand'];
            $productType = $row['type'];
            $productPrice = $row['price'];
            $productCount = $row['count'];
            $productTotalCapacity = $row['dungtichtong'];
            $productUseCapacity = $row['dungtichsudong'];
            $productTech = $row['khangkhuan'];
            $productDoor = $row['socua'];
            $productPerson = $row['songsudung'];
            $productUtiliti = $row['tienich'];
            $productWattage = $row['congsuat'];
            $productIncome = $row['gas'];
            $productFreeze = $row['dongtuyet'];
            $productMaterial = $row['khay'];
            $productSupply = $row['nguondien'];
            $productSize = $row['kichthuoc'];
            $productWeight = $row['trongluong'];
            $productThuonghieu = $row['xuatxuthuonghieu'];
            $productXuatxu = $row['xuatxu'];
            $productBaohanh = $row['baohanh'];
            $productTraGop = $row['prod_status'];
        } else {
            echo 'ERROR';
        }
    // Đóng kết nối CSDL
    $connection->close();
    
    // Lấy lịch sử xem từ cookie (nếu có)
    $viewedProducts = isset($_COOKIE['viewedProducts']) ? json_decode($_COOKIE['viewedProducts'], true) : [];
    
    // Thêm thông tin mới về sản phẩm vào lịch sử xem
    if (empty($viewedProducts) || $viewedProducts[0]['productId'] != $productId) {
    $newProduct = array(
        'productId' => $productId,
        'productName' => $productName,
        'productImage' => $productImage,
        'productPrice' => $productPrice,
        'productTraGop' => $productTraGop,
        'productDiscount' => $productDiscount,
        'productBrand' => $productBrand,
        'timestamp' => time()
    );
    
    // Thêm sản phẩm mới vào đầu mảng lịch sử xem
    array_unshift($viewedProducts, $newProduct);
    
    // Giữ số lượng sản phẩm trong lịch sử xem không quá một giới hạn
    $maxViewedProducts = 4; // Số lượng tối đa
    if (count($viewedProducts) > $maxViewedProducts) {
        array_pop($viewedProducts); // Xóa sản phẩm cuối cùng nếu đã đạt giới hạn
    }
    
    // Cập nhật cookie với lịch sử xem mới
    setcookie('viewedProducts', json_encode($viewedProducts), time() + 30 * 24 * 60 * 60); // 30 ngày là thời gian sống của cookie
    }
    
    // if(isset($_POST['add_to_cart']) && ($_POST['add_to_cart'])){
      
    //     $_SESSION['cart'] = [];
    //     $prodId = $_POST['prodId'];
    //     $prodName = $_POST['prodName'];
    //     $prodDiscount = $_POST['prodDiscount'];
    //     $prodPrice = $_POST['prodPrice'];
    //     $soluong = $_POST['soluong'];
    //     $prodImg = $_POST['prodImg'];

    //     $cart = [
    //         'prodId' => $prodId,
    //         'prodName' => $prodName,
    //         'prodDiscount' => $prodDiscount,
    //         'prodPrice' => $prodPrice,
    //         'soluong' => $soluong,
    //         'prodImg' => $prodImg,
    //     ];
    //         $_SESSION['cart'][$prodId] = $cart;
    // }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/base.css">
    <link rel="stylesheet" href="Public/Css/main.css">
    <link rel="stylesheet" href="Public/Css/product.css">
    <link rel="stylesheet" href="Public/Css/prod-detail.css">
    <link rel="stylesheet" href="Public/Template/glider.css">
    <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="Public/Template/bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    <title>Meta</title>
    <link rel="icon" type="image/x-icon" href="">
</head>
<body>
    <?php include './Site/View/header.php'; ?>

    <?php include './Site/View/prod-link.php'; ?>

    
    <section>
        <div class="warp">
            <div class="prod-pay display-flex">
                <div class="prod-outlook">
                    <div class="item-img">
                        <div class="img-warp display-flex">
                            <div class="prev arrow">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
        
                            <div class="prod-img">
                                <?php echo'<img src="'. $row['image'] .'" alt="">'; ?>
                            </div>
        
                            <div class="next arrow">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="prod-information">
                    <div class="item-name">
                        <p><?php echo $productName; ?></p>
                    </div>
        
                    <div class="rate display-flex">
                        <div class="star">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <?php
                                $connection = mysqli_connect('localhost','root','','meta');

                                if (!$connection) {
                                    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                }

                                $sql ="SELECT ROUND(AVG(rate), 1) AS rate_avg FROM comment WHERE prod_id = $productId AND rate != 0";
                                $result = $connection->query($sql);

                                if (!$result) {
                                    die('Error: ' . mysqli_error($connection));
                                }

                                if ($result->num_rows > 0) {
                                    // Lấy kết quả
                                    $row = $result->fetch_assoc();
                                    $rateAVG = $row["rate_avg"];
                                    
                                    echo '<i class="rate_avg">'. $rateAVG .'</i>';
                                } else {
                                    echo "Chưa có bình chọn nào.";
                                }
                                

                            ?>

                                <?php 
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }

                                    $sql = "SELECT COUNT(rate) AS rate_count FROM comment WHERE prod_id = $productId AND rate != 0";
                                    $result = $connection->query($sql);

                                    if (!$result) {
                                        die('Error: ' . mysqli_error($connection));
                                    }

                                    if ($result->num_rows > 0) {
                                        // Lấy kết quả
                                        $row = $result->fetch_assoc();
                                        $rateCount = $row["rate_count"];
                                        
                                        echo '<i class="rate_avg" style="color: #0071c4;">( '. $rateCount .' Bình chọn )</i>';
                                    } else {
                                        echo "Chưa có bình luận nào.";
                                    }
                                ?>
                        </div>
        
                        
                    </div>
    
                    <div class="brand display-flex">
                        <p>Thương hiệu: </p>
                        <div class="brand-type">
                            <p> <?php echo $productBrand?>|<?php echo $productType?></p>
                        </div>
                    </div>
        
                    <div class="pay-information display-flex">
                        <div class="left">
                            <div class="price display-flex">
                                <strong><?php echo number_format($productPrice, 0, ',', '.') ?>đ</strong>
                                <strike><?php
                                        $productGiaCu = number_format(round(($productPrice* 100) / (100 - $productDiscount) , -5), 0, ',', '.');
                                        echo $productGiaCu;
                                    ?>đ</strike>
                                <div class="discord">
                                    <?php echo $productDiscount ?>%
                                </div>
                            </div>
            
                            <div class="prod-status display-flex">
                                <p>Trạng thái:</p>
                                <p><?php
                                    if($productCount > 0){
                                        echo 'Còn hàng';
                                    }
                                    else{
                                        echo 'Hết hàng';
                                    };
                                    ?></p>
                            </div>

                            <div class="quantity display-flex">
                                <p>Chọn số lượng:</p>
                                <div class="set">
                                    <ul class="display-flex">
                                        <button class="decrement">-</button>
                                        
                                        <input type="text" name="quantity" id="quantity-count" value="1">
                                        
                                        <button class="increment">+</button>
                                    </ul>
                                </div>
                            
                                <div class="add-cart display-flex" >

                                    <p>Cho vào giỏ</p>
                                    
                                    <span  class="fa-solid fa-cart-plus addToCart" 
                                     data-soluong="1" data-id="<?php echo $productId ?>" 
                                     data-name="<?php echo $productName ?>"
                                      data-discount="<?php echo $productDiscount ?>"
                                      data-price="<?php echo $productPrice ?>" 
                                      data-img="<?php echo $productImage ?>">
                                    </span>
                                </div>
                            </div>
                            <div class=" buy buy-1 display-flex">
                                <div class="buy-btn display-flex">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div class="content">
                                        <strong>Đặt mua</strong>
                                        <p>Giao hàng tận nơi trên toàn quốc</p>
                                    </div>
                                </div>
                                <div class="buy-btn display-flex">
                                    <i class="fa-solid fa-headset"></i>
                                    <div class="content">
                                        <strong>Tư vấn</strong>
                                        <p>Chúng tôi sẽ gọi lại cho bạn</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buy buy-2 display-flex">
                                <div class="buy-btn">
                                    <div class="content">
                                        <strong>Trả góp</strong>
                                        <p>Duyệt nhanh, Không cần thẻ</p>
                                    </div>
                                </div>
                                <div class="buy-btn">
                                    <div class="content">
                                        <strong>Trả góp qua thẻ</strong>
                                        <p>Visa, Master, JCB, AmEX</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="free-ship">
                                <div class="content display-flex">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <p style="display: block;">Miễn phí giao hàng trong nội thành Hà Nội và nội thành TP. Hồ Chí Minh.</p>
                                </div>
                                <div class="free-ship-info" style="text-align: right;">
                                    <a href="">Xem thêm >></a>
                                </div>
                            </div>
        
                            <div class="contact">
                                <div class="commit">
                                    <p>META - Trên 16 năm Uy tín cung cấp Dịch vụ Bán hàng & Thu tiền tại nhà toàn quốc</p>
                                </div>
        
                                <div class="hotline">
                                    <i class="fa-solid fa-square-phone"></i>
                                    Hotline:
                                    <a href="" style="color: red;">028.3833.6666</a>
                                </div>
        
                                <div class="details">
                                    <div class="show-more">
                                        Xem thêm chi tiết<i class="fa-solid fa-circle-chevron-down"></i>
                                    </div>
                                    <div class="show-less">
                                        Thu gọn chi tiết<i class="fa-solid fa-circle-chevron-up"></i>
                                    </div>
                                </div>
        
                                <div class="address display-flex">
                                    <ul>
                                        <li>
                                            <p>
                                                <i class="fa-solid fa-house"></i>
                                                Hà Nội:
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa-solid fa-house"></i>
                                                TP HCM:
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <i class="fa-regular fa-clock"></i>
                                                Thời gian:
                                            </p>
                                        </li>
                                    </ul>
        
                                    <ul>
                                        <li>
                                            <p>56 Duy Tân, Dịch Vọng Hậu, Cầu Giấy</p>
                                        </li>
                                        <li>
                                            <p>716-718 Điện Biên Phủ, P.10, Q.10</p>
                                        </li>
                                        <li>
                                            <p>Từ 8h - 19h00 Thứ 2 đến thứ 6</p>
                                            <p>Từ 8h - 17h30 Thứ 7 & Chủ nhật</p>
                                        </li>
                                    </ul>
                                </div>
        
                                <div class="chat">
                                    <div class="chat-1">
                                        <i class="fa-solid fa-comment"></i>
                                        Chat với META:
                                    </div>
        
                                    <div class="chat-2">
                                        <i class="fa-solid fa-square-phone"></i>
                                        Khiếu nại, Bảo hành:(028) 38 333 222
                                    </div>
        
                                    <div class="chat-3">
                                        <i class="fa-solid fa-envelope"></i>
                                        Email: care@meta.vn
                                    </div>
                                </div>
                            </div>
    
                            <div class="attention" style="background-color: #fafafa;">
                                    <div class="at-title">
                                        <p>DỊCH VỤ & CHÚ Ý</p>
                                    </div>
                                    <div class="content" style="display: block;">
                                        <p style="display: block;">
                                            <i class="fa-solid fa-check"></i>
                                            <h style="font-weight: 600;">Quý khách lưu ý:</h> Sau khi nhận tủ lạnh ít nhất từ 2-4 giờ mới được cắm điện để tủ ổn định khí gas và tránh tình trạng sốc điện do cắm điện.
                                        </p>
    
                                        <p style="display: block;">
                                            <i class="fa-solid fa-check"></i>
                                            Hoàn tiền đến <strong>300.000đ </strong>khi trả góp qua BIDV (*). <a href="">Xem chi tiết</a>
                                        </p>
                                    </div>
                                </div>
                        </div>
    
                        <div class="right">
                            <div class="useful-information">
                                <div class="info-title">
                                    <p>Thông tin hữu ích</p>
                                </div>
    
                                <div class="info-option">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <p>
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                                    Trung tâm bảo hành
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <p>
                                                    <i class="fa-solid fa-truck"></i>
                                                    Thông tin vận chuyển
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <p>
                                                    <i class="fa-solid fa-shield"></i>
                                                    Hướng dẫn thanh toán
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                                <div class="chat">
                                    <p>
                                        <i class="fa-solid fa-comment"></i>
                                        Chat với META:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Sản phẩm tương tự -->
<section>
        <div class="warp">
            <div class="similar">
                <div class="si-header display-flex">
                    <div class="si-title">
                        <h2>
                            Sản phẩm tương tự
                        </h2>
                    </div>
        
                    <div class="similar-search display-flex">
                        <div class="similar-input">
                            <input type="text" placeholder="Nhập tên sản phẩm để so sánh">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <button>Xem tất cả</button>
                    </div>
                </div>
    
                <div class="similar-item">
                    <ul class="row row-cols-5">
                        <?php
                            $connection = mysqli_connect('localhost','root','','meta');

                            if (!$connection) {
                                die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM product
                                    INNER JOIN `product-info` ON product.prod_id = `product-info`.prod_id
                                    WHERE `product-info`.`type` = '$productType'";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die('Lỗi truy vấn: ' . mysqli_error($connection));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<li data-prod_id="'.$row['prod_id'].'" class="col to-product">';
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
                            }else{
                                echo "Không tìm thấy sản phẩm đáp ứng điều kiện";
                            }
                        // Đóng kết nối CSDL
                        $connection->close();
                            
                        ?>
                    </ul>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="float-right-care-list">
        <div class="care-title">
            <p>Có thể bạn quan tâm</p>
        </div>
        <div class="item-list">
            <ul>
                <li class="item display-flex">
                    <div class="item-img">
                        <img src="Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                    </div>

                    <div class="item-title">
                    Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)

                    <div class="item-price">
                        <strong>3.490.000đ</strong>
                        <strike>3.990.000đ</strike>
                    </div>
                    </div>
                </li>
                <li class="item display-flex">
                    <div class="item-img">
                        <img src="Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                    </div>

                    <div class="item-title">
                    Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)

                    <div class="item-price">
                        <strong>3.490.000đ</strong>
                        <strike>3.990.000đ</strike>
                    </div>
                    </div>
                </li>
                <li class="item display-flex">
                    <div class="item-img">
                        <img src="Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                    </div>

                    <div class="item-title">
                    Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)

                    <div class="item-price">
                        <strong>3.490.000đ</strong>
                        <strike>3.990.000đ</strike>
                    </div>
                    </div>
                </li>
                <li class="item display-flex">
                    <div class="item-img">
                        <img src="Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                    </div>

                    <div class="item-title">
                    Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)

                    <div class="item-price">
                        <strong>3.490.000đ</strong>
                        <strike>3.990.000đ</strike>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

    <!-- Thông số kỹ thuật -->
<section>
        <div class="warp">
            <div class="thongsokythuat">
                <div class="thongso-title">
                    <p>Thông số kỹ thuật</p>
                </div>

                <div class="thongso-item">  
                        <table>
                        <tr>
                            <td>Dung tích tổng</td>
                            <td><?php echo $productTotalCapacity ?> lít</td>
                        </tr>
                        
                        <tr>
                            <td>Dung tích sử dụng</td>
                            <td><?php echo $productUseCapacity ?> lít</td>
                        </tr>
                        
                        <tr>
                            <td>Kháng khuẩn, khử mùi</td>
                            <td><?php echo $productTech ?></td>
                        </tr>
                        
                        <tr>
                                <td>Số cửa</td>
                                <td><?php echo $productDoor ?> cửa</td>
                            </tr>
                                                
                            <tr>
                                <td>Số người sử dụng</td>
                                <td><?php echo $productPerson ?> người</td>
                            </tr>
                            
                            <tr>
                                <td>Tiện ích</td>
                                <td><?php echo $productUtiliti ?></td>
                            </tr>
                            
                            <tr>
                                <td>Công suất</td>
                                <td><?php echo $productWattage ?>W</td>
                            </tr>
                            
                            <tr>
                                <td>Gas sử dụng</td>
                                <td><?php echo $productIncome ?></td>
                            </tr>
                                                
                            <tr>
                                <td>Đóng tuyết</td>
                                <td><?php echo $productFreeze ?></td>
                            </tr>
                            
                            <tr>
                                <td>Chất liệu khay</td>
                                <td><?php echo $productMaterial ?></td>
                            </tr>
                            
                            <tr>
                                <td>Nguồn điện áp</td>
                                <td><?php echo $productSupply ?></td>
                            </tr>
                                                
                            <tr>
                                <td>Kích thước</td>
                                <td>Cao x rộng x sâu (<?php echo $productSize ?>)</td>
                            </tr>
                            
                            <tr>
                                <td>Trọng lượng sản phẩm</td>
                                <td><?php echo $productWeight ?> kg</td>
                            </tr>
                            
                            <tr>
                                <td>Xuất xứ thương hiệu</td>
                                <td><?php echo $productThuonghieu ?></td>
                            </tr>
                            
                            <tr>
                                <td>Sản xuất tại</td>
                                <td><?php echo $productXuatxu ?></td>
                            </tr>
                                                
                            <tr>
                                <td>Bảo hành</td>
                                <td><?php echo $productBaohanh ?> tháng</td>
                            </tr>
                        </table>                      
                        </div>
                    </div>
                </div>
</section>
<!-- Goi y -->
<section>
                <div class="warp">
                <div class="suggest" style="width: 75%;">
                    <div class="sugg-header">

                    </div>

                    <div class="sugg-item similar-item"  >
                        <ul class="row row-cols-4">
                        <li class="col">
                        <div class="flash-sale-product">
                            <div class="tragop">
                                <span>Trả góp</span>
                            </div>

                            <div class="discount">
                                <span>-10%</span>
                            </div>

                            <div class="thumb">
                                <img src="./Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                            </div>

                            <div class="name">
                                <a href="">Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)</a>
                            </div>

                            <div class="rate">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <div class="price">
                                <strong>3490000đ</strong>
                                <strike>3990000đ</strike>
                            </div>

                            <div class="buy-now">
                                <a href="">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="col">
                        <div class="flash-sale-product">
                            <div class="tragop">
                                <span>Trả góp</span>
                            </div>

                            <div class="discount">
                                <span>-10%</span>
                            </div>

                            <div class="thumb">
                                <img src="./Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                            </div>

                            <div class="name">
                                <a href="">Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)</a>
                            </div>

                            <div class="rate">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <div class="price">
                                <strong>3490000đ</strong>
                                <strike>3990000đ</strike>
                            </div>

                            <div class="buy-now">
                                <a href="">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="col">
                        <div class="flash-sale-product">
                            <div class="tragop">
                                <span>Trả góp</span>
                            </div>

                            <div class="discount">
                                <span>-10%</span>
                            </div>

                            <div class="thumb">
                                <img src="./Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                            </div>

                            <div class="name">
                                <a href="">Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)</a>
                            </div>

                            <div class="rate">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <div class="price">
                                <strong>3490000đ</strong>
                                <strike>3990000đ</strike>
                            </div>

                            <div class="buy-now">
                                <a href="">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="col">
                        <div class="flash-sale-product">
                            <div class="tragop">
                                <span>Trả góp</span>
                            </div>

                            <div class="discount">
                                <span>-10%</span>
                            </div>

                            <div class="thumb">
                                <img src="./Public/img/tu-lanh-funiki-fr-135cd-135-lit.jpg" alt="">
                            </div>

                            <div class="name">
                                <a href="">Tủ lạnh Funiki FR-135CD (135 lít, có đóng tuyết)</a>
                            </div>

                            <div class="rate">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <div class="price">
                                <strong>3490000đ</strong>
                                <strike>3990000đ</strike>
                            </div>

                            <div class="buy-now">
                                <a href="">
                                    Mua ngay
                                </a>
                            </div>
                        </div>
                    </li>

                        </ul>
                    </div>
                </div>
                </div>
</section>

<!-- rate -->
<section>
    <div class="warp">
        <div class="rate-result">
            <div class="rate-header">

            </div>

            <div class="rate-outlook display-flex">
                <div class="rate-point">
                    <div class="rate-star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>


                    <div class="rate-avg">
                        <p>Đánh giá trung bình</p>
                        <?php 
                                    $connection = mysqli_connect('localhost','root','','meta');

                                    if (!$connection) {
                                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                    }

                                    $sql = "SELECT COUNT(rate) AS rate_count FROM comment WHERE prod_id = $productId AND rate != 0";
                                    $result = $connection->query($sql);

                                    if (!$result) {
                                        die('Error: ' . mysqli_error($connection));
                                    }

                                    if ($result->num_rows > 0) {
                                        // Lấy kết quả
                                        $row = $result->fetch_assoc();
                                        $rateCount = $row["rate_count"];
                                        
                                        echo '<p>( '. $rateCount .' Bình chọn )</p>';
                                    } else {
                                        echo "Chưa có bình luận nào.";
                                    }
                                ?>
                        <?php
                                $connection = mysqli_connect('localhost','root','','meta');

                                if (!$connection) {
                                    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                                }

                                $sql ="SELECT ROUND(AVG(rate), 1) AS rate_avg FROM comment WHERE prod_id = $productId AND rate != 0";
                                $result = $connection->query($sql);

                                if (!$result) {
                                    die('Error: ' . mysqli_error($connection));
                                }

                                if ($result->num_rows > 0) {
                                    // Lấy kết quả
                                    $row = $result->fetch_assoc();
                                    $rateAVG = $row["rate_avg"];
                                    
                                    echo '<h3>'. $rateAVG .'</h3>';
                                } else {
                                    echo "Chưa có bình chọn nào.";
                                }
                                

                            ?>
                    </div>
                </div>

                <div class="rate-count">
                    <ul>
                        <li>
                            5<i class="fa-solid fa-star"></i>
                            <div class="count">
                                <div class="count-percent"></div>
                            </div>
                            <?php 
                                
                            ?>
                        </li>
                        <li>
                            4<i class="fa-solid fa-star"></i>
                            <div class="count">
                                <div class="count-percent"></div>
                            </div>
                           
                        </li>
                        <li>
                            3<i class="fa-solid fa-star"></i>
                            <div class="count">
                                <div class="count-percent"></div>
                            </div>
                           
                        </li>
                        <li>
                            2<i class="fa-solid fa-star"></i>
                            <div class="count">
                                <div class="count-percent"></div>
                            </div>
                           
                        </li>
                        <li>
                            1<i class="fa-solid fa-star"></i>
                            <div class="count">
                                <div class="count-percent"></div>
                            </div>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="comment">
            <div class="comment-title">
                <p>Chia sẻ nhận xét của bạn</p>
            </div>

           

            <div class="question">
                <p>Bạn đang băn khoăn cần tư vấn? Vui lòng để lại số điện thoại hoặc lời nhắn, META sẽ liên hệ trả lời bạn sớm nhất.</p>
                    <form id="commentForm" action="Site/Controller/add_comment.php" method="POST">
                        <div class="your-rate display-flex">
                            <p>Đánh giá của bạn về sản phẩm</p>
                            <div class="your-rate-star">
                                <input type="hidden" id="rate-point" name="rate-point" value="0">
                                <ul class="display-flex" >
                                    <li class="rate-star" value="1">
                                        <i class="fa-solid fa-star"   ></i>
                                        <p>Không thích</p>
                                    </li>
                                    <li class="rate-star" value="2">
                                        <i class="fa-solid fa-star"></i>
                                        <p>Tạm được</p>
                                    </li>
                                    <li class="rate-star" value="3">
                                        <i class="fa-solid fa-star"></i>
                                        <p>Bình thường</p>
                                    </li>
                                    <li class="rate-star" value="4">
                                        <i class="fa-solid fa-star"></i>
                                        <p>Hài lòng</p>
                                    </li>
                                    <li class="rate-star" value="5">
                                        <i class="fa-solid fa-star"></i>
                                        <p>Tuyệt vời</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="question-input">

                            <textarea class="txt-input" id="comment" name="comment" placeholder="Nhập câu hỏi / bình luận / nhận xét tại đây..."></textarea>
                            <input type="hidden" id="prod_id" name="prod_id" value="<?php echo $productId ?>">
                            <div class="name-input">
                                <div class="option">
                                    <ul class="display-flex">
                                        <li>
                                            Chất lượng sản phẩm tuyệt vời
                                        </li>
                                        <li>
                                            META phục vụ rất tốt 
                                        </li>
                                        <li>
                                            Đóng gói sản phẩm đẹp và chắc chắn
                                        </li>
                                    </ul>
                                </div>
        
                                <input type="text" id="name" value="<?php 
                                    if(isset($_SESSION['username'])){
                                        $username = $_SESSION['username'];
                                        echo $username;
                                    }
                                ?>" placeholder="Nhập tên của bạn">
                                <input type="hidden" id="user_id" name="user_id" value="<?php 

                                    if(isset($_SESSION['user_id'])){
                                        $userId = $_SESSION['user_id'];
                                        echo $userId;
                                    }
                                ?>">
                                                            
                                <button type="submit" class="comm-submit">
                                    Gửi bình luận 
                                </button> 
                        </div>
                        </div>
                    </form>                
            </div>
        </div>
        <div class="all-comment">
            <div class="comment-filter">
                <ul class="display-flex">
                    <li>
                        Bình luận Hay nhất 
                    </li>
                    <li>
                        Mới nhất
                    </li>
                </ul>
            </div>

            <div class="user-question" id="comments">
                <ul>
                    <?php 
                        $connection = mysqli_connect('localhost','root','','meta');

                        if (!$connection) {
                            die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                        }

                        $product_id = isset($_GET['prod_id']) ? $_GET['prod_id'] : (isset($_POST['product_id']) ? $_POST['product_id'] : 0);


                        $sql ="SELECT * FROM product
                            INNER JOIN comment ON product.`prod_id` = comment.`prod_id`
                            INNER JOIN user ON user.`user_id` = comment.`user_id`
                            WHERE product.`prod_id` = '$productId'";
                        $result = mysqli_query($connection, $sql);
                        if (!$result) {
                            die('Error: ' . mysqli_error($connection));
                        }

                        if (mysqli_num_rows($result) > 0) {                            
                            echo '<li>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="user-name display-flex">';
                                echo '<div class="small-avatar">';
                                echo '<img src="'. $row['avatar'] .'" alt="">';                            ;
                                echo '</div>';

                                echo '<div class="name">';
                                echo ''. $row['username'] .'';
                                echo '</div>';

                                echo '<div class="rating">';
                                echo '<i class="fa-solid fa-star"></i>';
                                echo '<i class="fa-solid fa-star"></i>';
                                echo '<i class="fa-solid fa-star"></i>';
                                echo '<i class="fa-solid fa-star"></i>';
                                echo '<i class="fa-solid fa-star"></i>';
                                echo '</div>';
                                
                                echo '</div>';

                                echo '<div class="ques-content">';
                                echo '<p>'. $row['comment-text'] .'</p>';
                                echo '</div>';

                                
                            }
                            echo '</li>';
                        }else{
                            echo "Chưa có bình luận nào ";
                        }

                        $connection->close();
                    ?>
                </ul>
            </div>
    </div>
</section>
<!-- lich su -->
<section>
                <div class="warp">
                <div class="suggest" style="width: 75%;">
                    <div class="sugg-header">
                        <h2 style="margin: 14px; padding-top: 14px;">Lịch sử xem hàng</h2>
                    </div>

                    <div class="sugg-item similar-item"  >
                        <ul class="row row-cols-4">
                        <?php
                            // Lấy lịch sử xem từ cookie
                            $viewedProducts = isset($_COOKIE['viewedProducts']) ? json_decode($_COOKIE['viewedProducts'], true) : [];

                            // Hiển thị sản phẩm trong lịch sử xem
                            foreach ($viewedProducts as $product) {
                            // Hiển thị thông tin về sản phẩm (có thể là tên, hình ảnh, giá, v.v.)

                                echo '<li data-prod_id="'.$product['productId'].'" class="col to-product">';
                                echo'<div class="flash-sale-product">';

                                echo'<div class="tragop">';
                                echo    '<span>'. $product['productTraGop'] .'</span>';
                                echo'</div>';

                                echo'<div class="discount">';
                                echo    '<span> -'. $product['productDiscount'] .'%</span>';
                                echo'</div>';

                                echo'<div class="thumb">';
                                echo'<img src="'. $product['productImage'] .'" alt="">';
                                echo'</div>';

                                echo'<div class="name">';
                                echo    '<a href="">'. $product['productName'] .'</a>';
                                echo'</div>';

                                echo'<div class="rate">';
                                echo    '<i class="fa-regular fa-star"></i>';
                                echo    '<i class="fa-regular fa-star"></i>';
                                echo    '<i class="fa-regular fa-star"></i>';
                                echo    '<i class="fa-regular fa-star"></i>';
                                echo    '<i class="fa-regular fa-star"></i>';
                                echo'</div>';

                                echo'<div class="price">';
                                echo    '<strong>'. $product['productPrice'].'đ </strong>';
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
                        ?>
                        </ul>

                    </div>
                </div>
                </div>
</section>
<!-- cung thuong hieu -->
<section>
                <div class="warp">
                <div class="suggest" style="width: 75%;">
                    <div class="sugg-header">
                        <h2 style="margin: 14px; padding-top: 14px;">Cùng thương hiệu</h2>
                    </div>

                    <div class="sugg-item similar-item"  >
                        <ul class="row row-cols-4">
                        <?php
                            $connection = mysqli_connect('localhost','root','','meta');

                            if (!$connection) {
                                die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM product
                                    INNER JOIN `product-info` ON product.prod_id = `product-info`.prod_id
                                    WHERE product.brand = '$productBrand'";
                            $result = $connection->query($sql);

                            if (!$result) {
                                die('Lỗi truy vấn: ' . mysqli_error($connection));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<li data-prod_id="'.$row['prod_id'].'" class="col to-product">';
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
                            }else{
                                echo "Không tìm thấy sản phẩm đáp ứng điều kiện";
                            }
                        // Đóng kết nối CSDL
                        $connection->close();
                            
                        ?>
                        </ul>
                    </div>
                </div>
                </div>
</section>
<!-- quan tam -->

<?php include './Site/View/camket.php';?>

<?php include './Site/View/footer.php' ?>

<section>
    <div class="add-notice">
        <div class="modal">
            <div class="modal-warp">
                <div class="add-success display-flex">
                    <div class="success-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <p>sản phẩm đã được thêm vào giỏ hàng</p>
                </div>
    
                <div class="item display-flex">
                    <div class="item-img">
                        <img src="<?php echo $productImage ?>" alt="">
                    </div>
    
                    <div class="item-name">
                        <p><?php echo $productName ?></p>
                    </div>
                </div>
                
                <div class="btn">
                    <a href="" class="close-modal">Tiếp tục mua sắm</a>
    
                    <a  href="" class="open-cart">Xem giỏ hàng</a>
                </div>
    
            </div>
        </div>
    </div>
</section>
<?php include './Site/View/modal-cart.php' ?>
</body>
                                        
<script>
    $(document).ready(function(){
            $('.addToCart').click(function(e){
            e.preventDefault();
            $('.add-notice .modal').show();

            var soluong = $(this).data('soluong');
            var prodId = $(this).data('id');
            var prodName = $(this).data('name');
            var prodDiscount = $(this).data('discount');
            var prodPrice = $(this).data('price');
            var prodImg = $(this).data('img');

            $.ajax({
                url: 'Site/Controller/add_cart.php',
                type: 'POST',
                data: {soluong: soluong, id: prodId, name: prodName, discount: prodDiscount, price: prodPrice, img: prodImg},

                success:function(response){
                    $('#modalContent').html(response);

                }
            })
            
        })

       
    })

    
</script>
<script>
            $(document).ready(function () {
                $('.to-product').click(function(){
                    var productId = $(this).data('prod_id');

                    window.location.href = 'product.php?prod_id=' + productId;
                });

            });

            $(document).ready(function () {
                $('#checkout').click(function(){
                    var productId = $('.to-product').data('prod_id');

                    window.location.href = 'bill.php?prod_id=' + productId;
                });

            });

        
</script>



<script>
    $(document).ready(function(){
            $('.comm-submit').click(function(){
                event.preventDefault();

                var prod_id = $('#prod_id').val();
                var user_id = $('#user_id').val();
                var comment = $('#comment').val();

                $.ajax({
                    url: 'Site/Controller/add_comment.php',
                    type: 'POST',
                    data: {prod_id: prod_id, user_id: user_id, comment: comment},
                    success:function(response){
                        $('#comments').html(response);
                    },
                    error:function(){
                        alert("ERROR");
                    }
                });
            });
        });
</script>

<script>
    $(document).ready(function() {
        var quantityInp = $('#quantity-count')
        var quantityVal = parseInt(quantityInp.val());

        $('.increment').click(function() {
        quantityVal++;
        quantityInp.val(quantityVal);
        });

        $('.decrement').click(function() {
        if (quantityVal > 1) {
            quantityVal--;
            quantityInp.val(quantityVal);
        }
        });

       
    })
</script>

<script>
    $(document).ready(function(){
        var rateInp = $('#rate-point')

        $('.rate-star').click(function(){
            var rateVal = $(this).val();

            rateInp.val(rateVal);

            $('.rate-star i').style.color = "yellow"
        })
    })
</script>


</html>


