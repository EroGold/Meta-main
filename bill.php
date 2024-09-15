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
            <form action="Site/Controller/new-order.php" method="POST">
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

                                <input type="text" placeholder="Họ và tên" id="name" name="name">
                            </div>
                            
                            <div class="phone-number display-flex" style="flex-direction: column;">
                                <span>
                                    Số điện thoại
                                </span>

                                <input type="number" placeholder="Số điện thoại" name="phone_number">
                            </div>
                        </div>

                        <div class="address">
                            <span>
                                Địa chỉ
                            </span>

                            <div class="display-flex">
                                <select name="city" id="city" placeholder="Thành phố">
                                    <?php 
                                        $conn = mysqli_connect("localhost","root","","meta");

                                        // Kiểm tra kết nối
                                        if (!$conn) {
                                            die("Kết nối thất bại: " . mysqli_connect_error());
                                        }
                                    
                                        $sql = "SELECT * FROM city";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                                echo '<option value="none" selected>Thành phố </option>';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="'. $row['city_id'] .'" value-city_id="city-'.$row['city_id'] .'" >'. $row['city-name'] .'</option>';
                                            }
                                        } else {
                                            echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                                        }
                                    ?>
                                </select>

                                <select name="district" id="district" disabled>
                                <?php 
                                        $conn = mysqli_connect("localhost","root","","meta");

                                        // Kiểm tra kết nối
                                        if (!$conn) {
                                            die("Kết nối thất bại: " . mysqli_connect_error());
                                        }
                                    
                                        $sql = "SELECT * FROM district";
                                        $result = $conn->query($sql);
                                            
                                        if ($result->num_rows > 0) {
                                                echo '<option value="none" selected>Quận/huyện</option>';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="'. $row['district_id'] .'" value-city="'.$row['city_id'] .'" >'. $row['district_name'] .'</option>';
                                            }
                                        } else {
                                            echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                                        }
                                    ?>
                                </select>
                                
                                <select name="province" id="province" disabled>
                                <?php 
                                        $conn = mysqli_connect("localhost","root","","meta");

                                        // Kiểm tra kết nối
                                        if (!$conn) {
                                            die("Kết nối thất bại: " . mysqli_connect_error());
                                        }
                                    
                                        $sql = "SELECT * FROM province";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                                echo '<option value="none" selected>Phường/xã</option>';
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value=" '. $row['province_id'] .'"  value-district="'.$row['district_id'].'" >'. $row['province_name'] .'</option>';
                                            }
                                        } else {
                                            echo "Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.";
                                        }
                                    ?>
                                </select>
                            </div>

                            <input type="text" name="address">

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
                                
                                <i id="caution">Vui lòng nhập đầy đủ thông tin</i>

                                <button class="submit"><i class="fa-solid fa-cart-shopping"></i> Gửi đơn hàng</button>

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

                    <!-- <ul> -->
                        <span>
                        <?php
                    $connection = mysqli_connect('localhost','root','','meta');

                    if (!$connection) {
                        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                    }
                    
                    $prod_id = isset($_GET['prod_id']) ? intval($_GET['prod_id']) : '';

                    if ($prod_id != '') {
                        $sql = "SELECT * FROM product WHERE prod_id = $prod_id";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            $product = $result->fetch_assoc();
                            $billTotalPrice = 0;
                            $ship = 0;
                            $price = $product['price'];

                            $totalPrice = $price;

                            $billTotalPrice += $totalPrice;

                            $bill = $billTotalPrice + $ship;
                            echo'<li>
                                    <input type="hidden" name="prod_id" value="'.$product['prod_id'].'">
                                    <div class="bill-item display-flex pay-information">
                                        <input type="checkbox">
                                        <div class="display-flex" style="justify-content: space-between; width: 100%;">
                                            <div class="display-flex">
                                                <div class="item-img">
                                                    <img src="'.$product['image'].'" alt="">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: flex-end;">
                                                    <div class="item-name">
                                                        <a href="">'.$product['info'].'</a>
                                                    </div>
                                                    <div class="item-price" value="1" style="display: flex; flex-direction: column; align-items: flex-end;">
                                                        <span>'.number_format($product['price'], 0, ',', '.').'đ</span>
                                                        <strike>'.number_format(round(($product['price']* 100) / (100 - $product['discount']) , -5), 0, ',', '.').'đ</strike>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity display-flex">
                                            <div class="set">
                                                <ul class="display-flex">
                                                    <button class="decrement">-</button>

                                                    <input type="text" id="quantity-count" value="1" min="1">

                                                    <button class="increment">+</button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                            }
                            echo '</ul>
                            <div class="total" style="float: right; margin: 5px;">
                            <table>
                                <tr>
                                    <td>
                                        Tiền hàng:
                                    </td>
                                    <td>'.number_format($billTotalPrice, 0, ',', '.').'</td>
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
                                    <td>'.number_format($billTotalPrice, 0, ',', '.').'</td>
                                </tr>
                            </table>
                        </div>';
                        }else{
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                $billTotalPrice = 0;
                                $ship = 0;
                                echo '<ul>';
                                   foreach ($_SESSION['cart'] as $prodId => $cart) {
                                    $price = $cart['prodPrice'];
            
                                    $totalPrice = $price * $cart['soluong'];
            
                                    $billTotalPrice += $totalPrice;
            
                                    $bill = $billTotalPrice + $ship;
                                        echo'<li>
                                        <input type="hidden" name="prod_id" value="'.$cart['prodId'].'">
                                        <div class="bill-item display-flex pay-information">
                                             <input type="checkbox">
                                                <div class="display-flex" style="justify-content: space-between; width: 100%;">
                                            <div class="display-flex">
                                                <div class="item-img">
                                                    <img src="'.$cart['prodImg'].'" alt="">
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: flex-end;">
                                                    <div class="item-name">
                                                        <a href="">'.$cart['prodName'].'</a>
                                                    </div>
                                                    <div class="item-price" value="1" style="display: flex; flex-direction: column; align-items: flex-end;">
                                                        <span>'.number_format($cart['prodPrice'], 0, ',', '.').'đ</span>
                                                        <strike>'.number_format(round(($cart['prodPrice']* 100) / (100 - $cart['prodDiscount']) , -5), 0, ',', '.').'đ</strike>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quantity display-flex">
                                            <div class="set">
                                                <ul class="display-flex">
                                                    <button class="decrement">-</button>

                                                    <input type="text" id="quantity-count" value="1" min="1">

                                                    <button class="increment">+</button>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
            
                                   }
                                   echo '</ul>
                                   <div class="total" style="float: right; margin: 5px;">
                                   <table>
                                       <tr>
                                           <td>
                                               Tiền hàng:
                                           </td>
                                           <td>'.number_format($billTotalPrice, 0, ',', '.').'</td>
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
                                           <td>'.number_format($billTotalPrice, 0, ',', '.').'</td>
                                       </tr>
                                   </table>
                               </div>';
                               }else{
                                   echo '<p>EMPTY</p>';
                               }
                        }
               ?>                
                        </span>
                                
                            
                    <!-- </ul> -->

                    
                </div>
            </div>

            </form>
        </div>
    </section>
</body>
<script>
    $(document).ready(function() {
        var quantityInp = $('#quantity-count')
        var quantityVal = parseInt(quantityInp.val());
        var itemPrice = $('.item-price').val();
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
        $('#city').change(function(){
            var selectedCity = $(this).val();

            $('#district option').hide();

            $('#district option[value-city^=' + selectedCity +']').show();

            $('#district').val($('#district option[value^=none]').val()).prop('disabled', false);

        });
        

    })

    $(document).ready(function(){
        $('#district').change(function(){
            var selectedDistrict = $(this).val();

            $('#province option').hide();

            $('#province option[value-district^=' + selectedDistrict +']').show();

            $('#province').val($('#province option[value^=none]').val()).prop('disabled', false);
        })
    })

    $(document).ready(function(){
        $('.pay-method .submit').click(function(){
            if(('#district').prop('disabled', true)){
                $('i#caution').show()
            }
        })
    })
</script>
</html>