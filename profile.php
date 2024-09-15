<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/base.css">
    <link rel="stylesheet" href="Public/Css/main.css">
    <link rel="stylesheet" href="Public/Css/bill.css">
    <link rel="stylesheet" href="Public/Css/product.css">
    <link rel="stylesheet" href="Public/Css/prod-detail.css">
    <link rel="stylesheet" href="Public/Template/glider.css">
    <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="Public/Template/bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    <title>Meta</title>
    <link rel="icon" type="image/x-icon" href="">
    <style>
        .f-left{
            float: left !important;
        }
        .f-right{
            float: right !important;
        }
        /* user option */
        .user-opt{
            margin-top: 20px;
        }
        .user-opt ul{
            width: 250px;
            background-color: #fff;
        }
        .user-opt ul li{
            border-bottom: 1px solid #eee;
        }
        .user-opt ul li div{
            margin: 16px 10px;
        }
        .user-opt ul li span{
            font-size: 14px;
        }
        .user-opt ul li .avatar img{
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }
        /* user-info-content */
        .user-info-content ul{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .user-info-content ul li .avatar{
            margin: 10px 0;
        }
        .user-info-content ul li table tr td{
            font-size: 15px;
            padding: 10px 10px 10px 36px;
        }
        .user-info-content ul li .avatar img{
            height: 80px;
            width: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php include './Site/View/header.php'; ?>
    <!-- left nav  -->
    <section>
        <div class="warp">
            <div class="f-left user-opt">
                <?php
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $avatar = $_SESSION['avatar'];
                        echo '<ul>
                                <li style="display: flex; align-items: center;">
                                    <div class="avatar">';
                                    if($avatar){
                                        echo '<img src="'.$avatar.'" alt="">';
                                    } else{
                                        echo '<img src="./Public/img/6596121.png" alt="">';
                                    }
                                    echo '</div>
                                    <div class="user_name">
                                        <span>'.$username.'</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-info">
                                        <a href="">
                                            <i class="fa-regular fa-user"></i>
                                            <span>Thông tin tài khoản</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="address-info">
                                        <a href="">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>Địa chỉ</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-history">
                                        <a href="">
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <span>Lịch sử xem hàng</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-search">
                                        <a href="">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span>Tra cứu đơn hàng</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="logout">
                                        <form method="post" action="Admin/Model/mLogout.php">
                                            <button type="submit" style="border: none; background: none; padding: 0;">
                                                <span>
                                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                    Đăng xuất
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>';
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- user info -->
    <section>
        <div class="warp">
            <div class="user-info-content" style="background-color: #fff; width: 970px; height: 450px; margin-left: 280px;">
                <?php
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        $avatar = $_SESSION['avatar'];
                        $phone_number = $_SESSION['phone_number'];
                        $email = $_SESSION['email'];
                        $password = $_SESSION['password'];
                        $sex = $_SESSION['sex'];
                        $birthday = $_SESSION['birthday'];
                        echo '<ul>
                                <li>
                                    <div class="avatar">';
                                        if($avatar){
                                        echo '<img src="'.$avatar.'" alt="">';
                                        } else{
                                        echo '<img src="./Public/img/6596121.png" alt="">';
                                        };
                                    echo '</div>
                                </li>
                                <li>
                                    <table>
                                        <tr>
                                            <td>Họ tên</td>
                                            <td>'.$username.'</td>
                                        </tr>

                                        <tr>
                                            <td>Điện thoại</td>
                                            <td>'.$phone_number.'</td>
                                        </tr>

                                        <tr>
                                            <td>Email</td>
                                            <td>'.$email.'</td>
                                        </tr>';

                                        if($birthday){
                                            echo '<tr>
                                                    <td>Ngày sinh</td>
                                                    <td>'.$birthday.'</td>
                                                </tr>';
                                        } else {
                                            echo '<tr>
                                                    <td>Ngày sinh</td>
                                                    <td>Không tiết lộ</td>
                                                </tr>';
                                        }
                                        
                                        if($sex){
                                            echo '<tr>
                                                    <td>Giới tính</td>
                                                    <td>'.$sex.'</td>
                                                </tr>';
                                        } else {
                                            echo '<tr>
                                                    <td>Giới tính</td>
                                                    <td>Không tiết lộ</td>
                                                </tr>';
                                        }
                                        

                                        echo '<tr>
                                            <td>Mật khẩu</td>
                                            <td>'.$password.'</td>
                                        </tr>
                                    </table>
                                </li>
                                <li>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Thay đổi thông tin người dùng
                                </button>
                                </li>
                            </ul>';

                    }
                ?>
            </div>
        </div>
    </section>
    <!-- user-address -->
    <section>
        <div class="warp">
            <div class="address-info-content" style="background-color: #fff; width: 970px; height: 450px; margin-left: 280px;">
                <div class="content-header" style="border-bottom: 1px solid #ddd">
                    <span style="font-size: 26px; margin: 10px; line-height: 60px;}">Sổ địa chỉ</span>
                </div>

                <ul>
                    <li style="border: 1px solid #ddd; margin: 5px; display: flex; justify-content: space-between; padding: 10px 10px 10px 0">
                        <div class="info" style="display: flex; flex-direction: column">
                            <div class="user-info" style="display: flex; padding-top: 10px">
                                <div class="user-name" style="padding-right: 5px; font-size: 14px">
                                    EroGoose
                                </div>
                                -
                                <div class="user-number" style="padding-left: 5px; font-size: 14px">
                                    0393102859
                                </div>
                            </div>
    
                            <div class="address-info" style="display: flex; padding-top: 10px; font-size: 14px">
                                <div class="address">
                                    Số 21, ngách 604/35/4, tổ 22,
                                </div>
                                <div class="village">
                                    phường Ngọc Thụy,
                                </div>
                                <div class="district">
                                    quận Long Biên,
                                </div>
                                <div class="city">
                                    Hà Nội
                                </div>
                            </div>
                        </div>

                        <div class="info-fix" style="display: flex; flex-direction: column; justify-content: space-around; padding-left: 5px">
                            <div class="defaut">
                                <div class="c-green">
                                    Mặc định
                                </div>
                            </div>

                            <div class="fix">
                                <button style="border: none; background: none">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    Sửa
                                </button>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="add-address" style="border: 1px solid #ddd; margin: 5px; display: flex; justify-content: space-between; padding: 10px 10px 10px 0">
                            <button style="border: none; background: none; margin: auto;">
                                <i class="fa-solid fa-plus"></i>
                                Thêm địa chỉ
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- history -->
    <section>
        <div class="warp">
            <div class="history" style="background-color: #fff; width: 970px; height: 450px; margin-left: 280px;">
                <div class="content-header" style="border-bottom: 1px solid #ddd">
                    <span style="font-size: 26px; margin: 10px; line-height: 60px;}">Lịch sử xem hàng</span>
                </div>
                <div class="history-content" style="padding: 10px">
                    <div class="row">
                        <div class="col-3" style="border: 1px solid #ddd; margin: 10px;">
                            <div class="history-img">
                                <img src="./Public\img\electrolux-45-lit-eum0500ad-vn-1.jpg" alt="" style="width: 200px; height: 200px">
                            </div>
                            <div class="history-name">
                                <span>Tủ lạnh Funiki FR125CI (FR125CI.1) (125 lít, không đóng tuyết)</span>
                            </div>
                            <div class="history-price" style="display: flex; flex-direction: column; align-items: flex-end;">
                                <strong>3690000đ</strong>
                                <strike>3690000đ</strike>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart -->
    <section>
        <div class="warp">
            <div class="cart" style="background-color: #fff; width: 970px; height: 450px; margin-left: 280px;">
                <div class="content-header" style="border-bottom: 1px solid #ddd">
                    <span style="font-size: 26px; margin: 10px; line-height: 60px;}">Tra cứu hóa đơn</span>
                </div>
                <div class="search-form" style="display: flex; flex-direction: column; align-items: center;">
                    <div class="cart-phone-number" style="padding: 10px 0 5px">
                        <input type="text" name="" id="" placeholder="Số điện thoại đặt hàng" style="width: 300px; height: 30px; font-size: 16px;">
                    </div>
                    
                    <div class="cart-id" style="padding: 5px 0">
                        <input type="text" name="" id="" placeholder="Mã đơn hàng" style="width: 300px; height: 30px; font-size: 16px;">
                    </div>
    
                    <div class="cart-btn">
                        <button style="padding: 10px 60px; border: 1px solid; background: red; color: #fff; font-size: 16px; border-radius: 5px;">
                            Tra cứu đơn hàng
                        </button>
                    </div>
                </div>

                <div class="bill" style="display: flex; flex-direction: column; align-items: center; over-flow: scroll">
                    <div class="bill-right" style="width: 70%">
                        <ul style="overflow-y: scroll; height: 200px;">
                            <li>
                                <div class="bill-item display-flex pay-information">
                                    <input type="checkbox">
                                        <div class="item-img">
                                            <img src="./Public\img\electrolux-45-lit-eum0500ad-vn-1.jpg" alt="">
                                        </div>
                                        <div class="item-name">
                                            <a href="">'.$cart['prodName'].'</a>
                                        </div>
                                        <div class="item-price" value="1">
                                        <span>'.number_format($cart['prodPrice'], 0, ',', '.').'đ</span>
                                        <strike>2đ</strike>
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
                            </li>

                            <li>
                                <div class="bill-item display-flex pay-information">
                                    <input type="checkbox">
                                        <div class="item-img">
                                            <img src="./Public\img\electrolux-45-lit-eum0500ad-vn-1.jpg" alt="">
                                        </div>
                                        <div class="item-name">
                                            <a href="">'.$cart['prodName'].'</a>
                                        </div>
                                        <div class="item-price" value="1">
                                        <span>'.number_format($cart['prodPrice'], 0, ',', '.').'đ</span>
                                        <strike>2đ</strike>
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
                            </li>

                            <li>
                                <div class="bill-item display-flex pay-information">
                                    <input type="checkbox">
                                        <div class="item-img">
                                            <img src="./Public\img\electrolux-45-lit-eum0500ad-vn-1.jpg" alt="">
                                        </div>
                                        <div class="item-name">
                                            <a href="">'.$cart['prodName'].'</a>
                                        </div>
                                        <div class="item-price" value="1">
                                        <span>'.number_format($cart['prodPrice'], 0, ',', '.').'đ</span>
                                        <strike>2đ</strike>
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
                            </li>
                        </ul>
                    </div>
            </div>
            </div>
        </div>
    </section>
    <?php include './Site/View/camket.php';?>

    <?php include './Site/View/footer.php' ?>
</body>
    <!-- user change modal -->

<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
</html>