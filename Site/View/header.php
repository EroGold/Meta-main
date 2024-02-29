

<div class="top-ads">
        <a href="">
            <img src="./asset/img/Banner-dien-may-1236x60-a.png" style="height: 60px; width: 1236px;" alt="">
        </a>
    </div>
    <header>
        <div class="box-header" style="z-index: 1000; background: #da251c; width: 110%; margin-top: 60px; margin-right: -70px; margin-left: -70px">
            <div class="warp">
                <div class="box-menu">
                    <div class="block-top-menu">
                        <div class=" menu">
                            <div class="side-bar-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
    
                            <a href="index.php">
                                <img src="./Public/img/logo-web-meta.svg" alt="">
                            </a>
                        </div>
    
                        <div class="cart-and-account">
                            <!-- Account -->
                            
                                    <?php 
                                    session_start();
                                        if(isset($_SESSION['username'])){
                                            $username = $_SESSION['username'];
                                            echo '<a href="profile.php" class="block account-btn">';
                                            echo '<div class="login">';
                                            echo '<i class="fa-solid fa-user"></i>';
                                            echo '<span class="top-title">';
                                            echo '<span class="txt-login">';
                                            echo    "Xin chào,<strong> $username </strong>";
                                            echo "</span>";
    
                                            echo '<span class="txt-login-more">';
                                            echo    "Có";
                                            echo    "<b> 1 </b>";
                                            echo    "sản phẩm trong giỏ";
                                            echo "</span>";
                                            echo '<div class="acc-hover-container hover">';
                                            echo '<div class="up-arrow">';
                                            echo    '<div class="outer">';
                                            echo        '<div class="inner">';
                                            echo            '<span class="acc-hover">';
                                            echo                "Tra cứu đơn hàng";
                                            echo            "</span>";
                                            echo            '<span class="acc-hover">';
                                            echo                "Lịch sử mua hàng";
                                            echo            "</span>";
                                            echo            '<span class="acc-hover">';
                                            echo                "Lấy mã khuyến mãi";
                                            echo        "</span>";
                                            echo        "</div>";
                                            echo    "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</span>";
                                            echo "</div>";
                                            echo "</a>";
                                        }else{
                                            echo '<a href="Login.php" class="block account-btn">';
                                            echo '<div class="login">';
                                            echo '<i class="fa-solid fa-user"></i>';
                                            echo '<span class="top-title">';
                                            echo '<span class="txt-login">';
                                            echo    "Vui lòng đăng nhập";
                                            echo "</span>";
                                            echo "</span>";
                                            echo "</div>";
                                            echo "</a>";
                                        };
                                        
                                    ?>
                                    
                            <!-- Cart -->
                                <div class="block cart">
                                    <div class="cart-container">
                                        <a href="" class="open-cart">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                            <span class="top-title">
                                                Giỏ hàng
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <!-- support -->
                            <div class="block support-box">
                                <div class="support-container">
                                    <i class="fa-solid fa-circle-question"></i>
                                    <span class="top-title">
                                        Hướng dẫn
                                    </span> 
                                </div>

                                <div class="support-hover-box hover">
                                    <div class="supp-item">
                                        <a>
                                            <i class="fa-solid fa-circle-question"></i>
                                            Tư vấn sản phẩm
                                        </a>
                                    </div>
                                    <div class="supp-item">
                                        <i class="fa-solid fa-utensils"></i>
                                        Ẩm thực
                                    </div>
                                    <div class="supp-item">
                                        <i class="fa-regular fa-lightbulb"></i>
                                        Kinh nghiệm hay
                                    </div>
                                </div>
                            </div>
                            <!-- hotline -->
                            <div class=" block hotline-box">
                                <div class="hotline-container">
                                    <i class="fa-solid fa-phone"></i>
                                    <span class="top-title">
                                        Hotline
                                    </span>
                                </div>

                                <div class="hotline-hover-box hover">
                                    <div class="hotline-list hotline">
                                        <div class="hotline-title">
                                            <i class="fa-solid fa-square-phone"></i>
                                            Phía Bắc & Trung:
                                        </div>

                                        <div class="hotline-num">
                                            (024) 3568 6969
                                        </div>
                                    </div>
                                    <div class="hotline-list hotline">
                                        <div class="hotline-title">
                                            <i class="fa-solid fa-square-phone"></i>
                                            Phía Nam:
                                        </div> 
                                        
                                        <div class="hotline-num">
                                            (024) 3568 6969
                                        </div>
                                    </div>
                                    <div class="hotline-list">
                                        <div class="hotline-title timer">
                                            <i class="fa-regular fa-clock"></i>
                                            Thời gian:
                                        </div>

                                        <div class="txt-timer">
                                            8h00 - 19h00
                                        </div>
                                    </div>
                                    <div class="hotline-list">
                                        <div class="hotline-title email">
                                            <i class="fa-solid fa-envelope"></i>    
                                            Email:
                                        </div>

                                        <div class="txt-timer">
                                            care@meta.vn
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="search-box">
                        <form action="" title="Tìm kiếm sản phẩm">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" class="search" placeholder="Bạn cần tìm kiếm sản phẩm gì?">
                            <i class="fa-solid fa-microphone"></i>
                            <div class="searchBtn">
                                <input type="submit" value="Tìm kiếm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        $(document).ready(function(e){
            $('.open-cart').click(function(){
                event.preventDefault();

                $('.cart-modal .modal').css({
                    "display": "flex"
                })

                $.ajax({
                    url: "Site/Controller/load_cart.php",
                    method: "GET",
                    success: function(response) {
                        $('#modalContent').html(response);
                    }
                })
            })
        })
    </script>

    <?php include 'modal-cart.php' ?>
