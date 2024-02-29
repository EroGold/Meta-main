<?php 
    session_start();

    if (empty($_SESSION['cart'])) {
        echo "<p>Giỏ hàng trống.</p>";
    } 
    else{
        $cartTotalPrice = 0;
        $cartItemCount = 0;
        $cartItemCount = count($_SESSION['cart']);
        echo '<strong>'.$cartItemCount.'</strong> Sản phẩm';
        echo '<ul>';
        foreach ($_SESSION['cart'] as $prodId => $cart) {
            $price = $cart['prodPrice'];

            $totalPrice = $price * $cart['soluong'];

            $cartTotalPrice += $totalPrice;

            echo '<li class="item">
                <div class="item-img">
                    <img src="'.$cart['prodImg'].'" alt="">
                </div>
                        
                <div class="item-info">
                    <div class="name">
                        <p>'.$cart['prodName'].'</p>
                    </div>
                        
                    <div class="price">
                        <p>'.number_format($cart['prodPrice'], 0, ',', '.').' đ</p>
                        <strike>'.number_format(round(($cart['prodPrice']* 100) / (100 - $cart['prodDiscount']) , -5), 0, ',', '.').' đ</strike>
                    </div>
                </div>
                        
                <div class="item-count">
                    <div class="set">
                        <ul class="display-flex">
                            <button class="decrement">-</button>

                            <input type="text" name="quantity" id="quantity-count" value="'.$cart['soluong'].'">

                            <button class="increment">+</button>
                        </ul>
                    </div>
                    <div class="item-del">
                        <i class="fa-regular fa-trash-can"></i>
                        <p>Xóa</p>
                    </div>
                </div>
                        
            </li>';
                        
        }
        echo '</ul>';
        echo '<div class="total-price">
                Tổng tiền: '.number_format($cartTotalPrice, 0, ',', '.').'đ
              </div>;';
    }
?>