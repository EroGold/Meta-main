
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
        $productName = $row['info'];
        $productPrice = $row['price'];
        $productDiscount = $row['discount'];

    }

    $connection->close();

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
    <link rel="stylesheet" href="Public/Css/bill.css">
    <link rel="stylesheet" href="Public/Template/glider.css">
    <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="Public/Template/bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    <title>Meta</title>
    <link rel="icon" type="image/x-icon" href="">
</head>
<body>
    <?php include './Site/View/header.php'; ?>

    <section>
        <div class="warp">
            <div class="bill display-flex bw">
                <div class="bill-left">
                    <div class="bill-title">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Địa chỉ nhận hàng</span>
                    </div>

                    <div class="input">
                        <div class="display-flex">
                            <div class="name display-flex" style="flex-direction: column;">
                                <span>
                                    Họ và Tên
                                </span>

                                <input type="text" placeholder="Họ và tên">
                            </div>
                            
                            <div class="phone-number display-flex" style="flex-direction: column;">
                                <span>
                                    Số điện thoại
                                </span>

                                <input type="number" placeholder="Số điện thoại">
                            </div>
                        </div>

                        <div class="address">
                            <span>
                                Địa chỉ
                            </span>

                            <div class="display-flex">
                                <select name="" id="">
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="TP Huế">TP Huế</option>
                                    <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                                </select>

                                <select name="" id="">
                                    <option value="">Quận Long Biên</option>
                                </select>
                                
                                <select name="" id="">
                                    <option value="">Phường Ngọc Thụy</option>
                                </select>
                            </div>

                            <input type="text" >

                            <div class="pay-method">
                                <div class="pay-title">
                                    <i class="fa-solid fa-money-bill"></i>
                                    Hình thức thanh toán
                                    <i>(Nhấn để chọn)</i>
                                </div>

                                <div class="pay-opt">
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            Giao hành và thu tiền tại nhà(COD)
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            Chuyển khoản qua Ngân hàng
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            Thanh toán Online    
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            Mua trước trả sau - BNPL
                                        </li>
                                    </ul>
                                </div>

                                <ul>
                                    <li>
                                        <input type="checkbox">
                                        Yêu cầu Meta xuất hóa đơn
                                    </li>
                                    <li>
                                        <input type="checkbox">
                                        Nhập email để theo dõi đơn hàng
                                    </li>
                                </ul>

                                <input type="text" placeholder="Để lại lời nhắn cho Meta(nếu có)">
                            
                                <button><i class="fa-solid fa-cart-shopping"></i> Gửi đơn hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="bill-right">
                    <div class="bill-title">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Danh sách sản phẩm</span>
                    </div>

                    <div class="choose-all-cart">
                        <input type="checkbox" name="" id="choose-all">
                        <span>Chọn tất cả</span>
                    </div>

                    <ul>
                        <li>
                            <div class="bill-item display-flex pay-information">
                                <input type="checkbox">
                                <div class="item-img">
                                    <?php echo'<img src="'. $row['image'] .'" alt="">'; ?>
                                </div>
                                <div class="item-name">
                                    <a href=""><?php echo $productName ?></a>
                                </div>
                                <div class="item-price">
                                    <span><?php echo $productPrice ?>đ</span>
                                    <strike><?php
                                        $productGiaCu = round(($productPrice* 100) / (100 - $productDiscount) , -5);
                                        echo $productGiaCu;
                                    ?>đ</strike>
                                </div>
        
                                <div class="quantity display-flex">
                                        <div class="set">
                                            <ul class="display-flex">
                                                <li class="apart">
                                                    <p>-</p>
                                                </li>
                                                <li class="count">
                                                    <p>1</p>
                                                </li>
                                                <li class="plus">
                                                    <p>+</p>
                                                </li>
                                            </ul>
                                        </div>
                            </div>
                            </div>
                        </li>
                    </ul>

                    <div class="total" style="float: right; margin: 5px;">
                        <table>
                            <tr>
                                <td>
                                    Tiền hàng:
                                </td>
                                <td>
                                    3.490.000đ
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vận chuyển:
                                </td>
                                <td>
                                    Miễn phí
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tổng tiền:
                                </td>
                                <td>
                                    3.490.000đ
                                </td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
    </section>
</body>