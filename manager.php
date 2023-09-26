<?php 
    //Kết nối databse
    $con = mysqli_connect('localhost', 'root', '', 'meta');
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql="SELECT * FROM `product` ORDER BY `prod_id`";
    //Chạy câu SQL
    $result=mysqli_query($con,$sql);
    //Gắn dữ liệu lấy được vào mảng $data
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $html = '';
foreach ($data as $value) {
    $html .= '
    <tr role="row">
        <td>'.$value['prod_id'].'</td>
        <td>'.$value['discount'].'</td>
        <td>'.$value['image'].'</td>
        <td>'.$value['info'].'</td>
        <td>'.$value['price'].'</td>
        <td>'.$value['prod_status'].'</td>
        <td>'.$value['price'].'đ</td>
        <td><a href="edit.php?id='.$value['prod_id'].'">Edit</a></td>
        <td><a href="delete.php?id='.$value['prod_id'].'"> Delete</a></td>
    </tr>';
}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            table{
                width: 800px;
                margin: auto;
                text-align: center;
            }
            tr {
                border: 1px solid;
            }
            th {
                border: 1px solid;
            }
            td {
                border: 1px solid;
            }
            h1{
                text-align: center;
                color: red;
            }
            #button{
                margin: 2px;
                margin-right: 10px;
                float: right;
            }
        </style>
        <link rel="stylesheet" href="Public/Css/manager.css">
        <link rel="stylesheet" href="Public/Template/fontawesome-free-6.2.0-web/css/all.min.css">
        <script src="Public/Template/Jquery/jquery-3.7.0.min.js"></script>
    </head>
    <body>

    <section>
    <div class="sidebar">
        <div class="warp">
            <div class="logo">
                <a href="manager.php">
                    <img src="./asset/img/LogoMeta.png" alt="">
                    <div class="logo-title">
    
                    </div>
                </a>
            </div>
            
            <div class="function">
                <a href="#" onclick="loadTable('electronices')">Đồ điện tử</a>

                <a href="#" onclick="loadTable('housewares')">Đồ gia dụng</a>

                <a href="#" onclick="loadTable('tools')">Công cụ</a>

                <a href="#" onclick="loadTable('medicals')">Y tế</a>

                <a href="#" onclick="loadTable('industrials')">Đồ công nghiệp</a>

                <a href="#" onclick="loadTable('sports')">Đồ thể thao</a>

                <a href="#" onclick="loadTable('digitals')">Thiết bị số</a>

                <a href="#" onclick="loadTable('interiors')">Nội thất</a>

                <a href="#" onclick="loadTable('offices')">Văn phòng</a>

                <a href="#" onclick="loadTable('cosmetics')">Mỹ phẩm</a>

                <a href="#" onclick="loadTable('childen')">Mẹ và bé</a>

                <a href="#" onclick="loadTable('car')">Phụ kiện xe hơi</a>

                <a href="#" onclick="loadTable('tourism')">Du lịch</a>

                <a href="#" onclick="loadTable('glocery')">Bách hóa</a>
            </div>
        </div>
    </div>
</section>
    <section id="datatable">
    <div class="navBar">
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form action="Admin/Model/mSearch.php" method="POST">
                    <input type="text" name="txtSearch">
                    <input type="submit" value="Tìm kiếm">
                </form>
            </div>
        </div>

        <h1>Quản lý sản phẩm </h1>

            <div class="content">
                <div id="table-container">
                    <table>
                        <thead>
                            <tr role="row">
                                <th>ID</th>
                                <th>Giảm giá</th>
                                <th>Hình ảnh</th>
                                <th>Thông tin</th>
                                <th>Giá</th>
                                <th>Trạng thái</th>
                                <th>Hãng</th>
                                <th style="width: 7%;">Edit</th>
                                <th style="width: 10%;">>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $html ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10">
                                    <a href="add.php"><button id="button">Thêm cầu thủ</button></a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
    </section>


    <script>
        function loadTable(tableName) {
            $.ajax({
                url: 'Admin/Model/load_table.php',
                method: 'POST',
                data: { table: tableName },
                success: function(response) {
                    // Cập nhật nội dung của bảng
                    $('#table-container').html(response);
                },
                error: function(error) {
                    console.error('Lỗi:', error);
                }
            });
        }
    </script>
    </body>
</html>