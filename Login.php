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
                        <form action="Admin/Model/mLogin.php" method="POST">
                            <div class="form-subtitle">
                                Đăng nhập
                            </div>

                            <div class="form-input">
                                <input type="Username" name="txtUsername">
                                <label for="">
                                    Nhập tên đăng nhập:
                                </label>
                            </div>

                            <div class="form-input">
                                <input type="password" name="txtPassword">
                                <label for="">
                                    Mật khẩu
                                </label>
                            </div>

                            <div class="forgot">
                                <a href="">
                                    Quên mật khẩu
                                </a>
                            </div>
                            <button class="submit">
                                đăng nhập
                            </button>
                            <div class="register-link">
                                Bạn chưa có tài khoản? <a href="Register.php">Đăng ký</a>
                            </div>
                        </form>
                        <div class="devide">
                            <p>Hoặc</p>
                        </div>

                        <div class="social-login">
                            <div class="social">
                                <a href="">
                                    <div class="email social-btn">
                                        Đăng nhập bằng email
                                    </div>
                                </a>
                            </div>
                                
                            <div class="social">
                                <a href="">
                                    <div class="email social-btn">
                                        Tiếp tục với Zalo
                                    </div>
                                </a>
                            </div>
                            
                            <div class="social">
                                <a href="">
                                    <div class="email social-btn">
                                        Tiếp tục với Google
                                    </div>
                                </a>
                            </div>
                            
                            <div class="social">
                                <a href="">
                                    <div class="email social-btn">
                                        Tiếp tục với Facebook
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'Site/View/camket.php';?>

    <?php include 'Site/View/footer.php' ?>

    <script src="Public/Js/loginjs.js"></script>

    <script>
        
    </script>

</body>
</html>