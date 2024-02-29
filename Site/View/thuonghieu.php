<section>
        <div class="warp">
            <div class="thuonghieu">
                <div class="thuonghieu-head">
                    <div class="title">
                        <h2>Thương hiệu nổi bật</h2>
                    </div>
                </div>
            
                <div class="thuonghieu-container">
                    <ul class="thuonghieu-list">

                    <?php 
                        $connection = mysqli_connect('localhost','root','','meta');

                        if (!$connection) {
                            die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                        }

                        $sql ="SELECT * FROM thuonghieu";
                        $result = mysqli_query($connection, $sql);

                        if (!$result) {
                            die('Lỗi truy vấn: ' . mysqli_error($connection));
                        }

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="thuonghieu-item">';
                                echo     '<a href="">';
                                echo       '<img src=".'. $row['brand_img'] .'" alt="">';
                                echo    '</a>';
                                echo'</li>';
                            }
                        }

                        $connection->close();
                    ?>
                   
                    </ul>
                </div>
            </div>
        </div>
    </section>