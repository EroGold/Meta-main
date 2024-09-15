
<section>
    <div class="cart-modal">
        <div class="modal">
            <div class="modal-warp">
                <div class="cart-modal-header display-flex">
                    <div class="icon display-flex">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>Giỏ hàng</p>
                    </div>

                    <div class="close">
                        <a href="" id="close-modal" class="display-flex">
                            <i class="fa-solid fa-xmark"></i>
                            <p>Đóng </p>
                        </a>
                    </div>
                </div>

                <div class="cart-item">

                    <div class="modalContent">

                    </div>
                    
                    

                    <div class="btn" style="display: flex; flex-direction: column; align-items: center;">
                        <a href="bill.php" style="background-color: #0fa80f; text-align: center; color: #fff;">Mua ngay</a>
                        <a href="" style="display: flex; flex-direction: column; align-items: center; background-color: #f6cd00;">
                            Trả góp
                            <div class="des">
                                Duyệt nhanh, Không cần thẻ
                            </div>
                        </a>
                    </div>
                </div>

                <div class="viewed">
                    <div class="header">
                        <p>Sản phẩm đã xem</p>
                    </div>

                        <?php
                            // Lấy lịch sử xem từ cookie
                            $viewedProducts = isset($_COOKIE['viewedProducts']) ? json_decode($_COOKIE['viewedProducts'], true) : [];

                            // Hiển thị sản phẩm trong lịch sử xem
                            foreach ($viewedProducts as $product) {
                            // Hiển thị thông tin về sản phẩm (có thể là tên, hình ảnh, giá, v.v.)

                            echo '<a href="product.php?prod_id='.$product['productId'].'">
                                <div class="item" data-prod_id="'.$product['productId'].'">
                                    <div class="item-img">
                                        <img src="'. $product['productImage'] .'" alt="">
                                    </div>
            
                                    <div class="item-discount">
                                        <p>- '.$product['productDiscount'].'%</p>
                                    </div>
                                    <div class="display-flex" style="flex-direction: column; margin-left: 5px;">
                                        <div class="item-name">
                                            <p>'. $product['productName'].'</p>
                                        </div>
                
                                        <div class="item-brand">
                                            <p>'. $product['productBrand'].'</p>
                                        </div>
                
                                        <div class="item-price">
                                            <p>'.number_format($product['productPrice'], 0, ',', '.').' đ</p>
                                        </div>
                
                                        <div class="viewed-time">
                                            <p>'. date('H:i:s d-m-Y', $product['timestamp']).'</p>
                                        </div>
                                    </div>
                                </div>
                                </a>';
                            }   
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    
 $(document).ready(function(){
    $('.close-modal').click(function(){
        event.preventDefault();

        $('.modal').css({
            "display": "none"
        })
    })
})
</script>