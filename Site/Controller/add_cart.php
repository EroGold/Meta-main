<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$soluong = $_POST['soluong'];
$prodId = $_POST['id'];
$prodName = $_POST['name'];
$prodPrice = $_POST['price'];
$prodDiscount = $_POST['discount'];
$prodImg = $_POST['img'];

// Thêm sản phẩm vào giỏ hàng
$product = array(
    'soluong' => $soluong,
    'prodId' => $prodId,
    'prodName' => $prodName,
    'prodPrice' => $prodPrice,
    'prodDiscount' => $prodDiscount,
    'prodImg' => $prodImg
);

    array_push($_SESSION['cart'], $product);    

echo "Sản phẩm đã được thêm vào giỏ hàng.";
?>
