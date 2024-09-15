<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/base.css">
    <link rel="stylesheet" href="Public/Css/main.css">
    <link rel="stylesheet" href="Public/Css/loginpg.css">
    <link rel="stylesheet" href="Public/Template/glider.css">
    <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="Public/Template/bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <script src="Public/Template/glider.js"></script>
    <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    <title>Meta</title>
    <link rel="icon" type="image/x-icon" href="">
</head>
<body>
    <?php include 'Site/View/header.php' ?>

    <section>
        <div class="warp-bg">
            <div class="warp-out" style="background-color: rgb(255, 211, 196);">
                <div class="member-row">
                    <div class="member-col member-left">
                        <div>
                            <a href="">
                                <img src="./asset/img/Banner-may-hut-bui-560x460.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="member-col member-right">
                        <form action="Admin/Model/mRegister.php" method="POST">
                            <div class="form-subtitle" style="font-size: 20px; margin: 30px 0 10px 20px">
                                Đăng ký
                            </div>

                            <div class="form-input">
                                <input type="Username" name="txtUsername">
                                <label for="">
                                    Nhập tên đăng nhập:
                                </label>
                            </div>

                            <div class="form-input">
                                <input type="tel" name="txtTel">
                                <label for="">
                                    Nhập số điện thoại
                                </label>
                            </div>

                            <div class="form-input">
                                <input type="password" name="txtPassword">
                                <label for="">
                                    Mật khẩu
                                </label>
                            </div>
                            
                            <div class="form-input">
                                <input type="password" name="txtPasswordConfirm">
                                <label for="">
                                    Xác nhận mật khẩu
                                </label>
                            </div>

                            <div class="forgot">
                                <a href="">
                                    Quên mật khẩu
                                </a>
                            </div>
                            <button class="submit" style="text-transform: uppercase">
                                đăng ký
                            </button>
                            <div class="login-link">
                                Bạn đã có tài khoản? <a href="Login.php">Đăng nhập</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'Site/View/camket.php';?>

    <?php include 'Site/View/footer.php' ?>

    <script src="Public/Js/loginjs.js"></script>

</body>
</html>