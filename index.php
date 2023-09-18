<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/base.css">
    <link rel="stylesheet" href="Public/Css/main.css">
    <link rel="stylesheet" href="Public/Template/glider.css">
    <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="Public/Template/bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <script src="Public/Template/glider.js"></script>
    <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    <title>Meta</title>
    <link rel="icon" type="image/x-icon" href="">
</head>
<body>
    <?php include './Admin/View/header.php'; ?>
<!-- menu -->
   <?php include './Admin/View/menu.php'; ?>
<!-- market -->
    <?php include './Admin/View/market.php'; ?>
<!-- Danh muc hot -->
    <?php include './Admin/View/hot-catalog.php';?>
<!-- Flash sales -->
    <?php include './Admin/View/flash-sale.php';?>
<!-- goi y -->
    <?php include './Admin/View/suggest.php';?>
<!-- Dien may dien lanh -->
    <?php include './Admin/View/tag-catalog.php';?>
<!-- thuong hieu hot -->
    <?php include './Admin/View/thuonghieu.php';?>
<!-- ho tro va dich vu -->
    <?php include './Admin/View/service.php';?>
<!-- cam ket -->
    <?php include './Admin/View/camket.php';?>

   <?php include './Admin/View/footer.php' ?>

    <script src="Public/Js/index.js"></script>
</body>
</html>