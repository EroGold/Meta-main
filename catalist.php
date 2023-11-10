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
        <section style="display: flex; flex-direction: column; width: 25%;">

           <?php include './Site/View/prod-detail.php' ?>
        
           <?php include './Site/View/brand.php' ?>
    
           <?php include './Site/View/prod-info.php' ?>
        </section>
    
        <section style="display: flex; flex-direction: column; margin-left: 10px;">
            <?php include './Site/View/prod-detail-horizontal.php'?>

            <?php include './Site/View/prod-list.php'?>
        </section>
    </div>
</body>

<!-- <script>
         $( ".search-brand").click(function(e) {
              $("#contentContainer").show();
               
               var selectedOption = $(this).text();
               
               $("#contentContainer").text(selectedOption);
      
         var brand = $(this).data("brand");

            $.ajax({
                url: "/Admin/Model/get_catalist.php",
                method: "GET",
                success: function(result) {
                    $("#search-results").html(result);
                }
            });
        });
</script> -->
    
</html>