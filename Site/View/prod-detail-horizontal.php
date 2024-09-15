<div class="prod-detail-horizontal">
    <div class="item">
        <ul style="display: flex; flex-wrap: wrap;">
            <?php 
                $connection = mysqli_connect('localhost','root','','meta');

                if (!$connection) {
                    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                }

                $catalogId = isset($_GET['catalog_id']) ? $_GET['catalog_id'] : 0 ;

                $sql = "SELECT * FROM menu WHERE catalog_id = '$catalogId'";
                $result = $connection->query($sql);

                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo '<li>
                            <a href="">
                                <img src="./Public/img/'.$row['menu-img'].'" alt="">
                                <span>'.$row['item-name'].'</span>
                            </a>

                        </li>';
                    }
                }
            ?>
        </ul>
    </div>
</div>