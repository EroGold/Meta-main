<?php 
    $connection = mysqli_connect('localhost','root','','meta');

    if (!$connection) {
        die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

    $catalogId = isset($_GET['catalog_id']) ? $_GET['catalog_id'] : 0 ;
    $sql_product = "SELECT * FROM product 
                    INNER JOIN `catalog` ON product.catalog_id = `catalog`.catalog_id
                    WHERE product.catalog_id = $catalogId";
    $result_product = $connection->query($sql_product);

    if ($result_product->num_rows > 0) {
        $product = $result_product->fetch_assoc();
        $catalogName = $product['catalog_name'];
        $productDiscount = $product['discount'];
        $productImage = $product['image'];
        $productName = $product['info'];
        $productBrand = $product['brand'];
        $productType = $product['type'];
        $productPrice = $product['price'];
        $productCount = $product['count'];
    } else {
        echo 'ERROR';
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

    <?php include './Site/View/prod-link.php' ?>
    <div class="content" style="display: flex;">
        <section style="display: flex; flex-direction: column;">

           <?php include './Site/View/prod-detail.php' ?>
        
           <?php include './Site/View/brand.php' ?>
    
        </section>
    
        <section style="display: flex; flex-direction: column; margin-left: 10px;">
            <?php include './Site/View/prod-detail-horizontal.php'?>

            <?php include './Site/View/prod-list.php'?>
        </section>
    </div>

    <?php include './Site/View/footer.php' ?>

</body>

<script>
         $(".item ul li").not('.show').not('.brand-search').click(function(e) {
            $('html, body').animate({scrollTop: 400}, 800);
            
            $(this).children().find('.checkbox').prop('checked', true);

            $(this).siblings().find('.checkbox').prop('checked', false);

        })
</script>

<script>
            $(document).ready(function () {
                $('.to-product').click(function(){
                    var productId = $(this).data('prod_id');

                    window.location.href = 'product.php?prod_id=' + productId;
                })

            })
</script>
    
</html>