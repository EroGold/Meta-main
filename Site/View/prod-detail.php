        <div class="prod detail">
            <div class="prod title">
                <span><?php echo $catalogName ?></span>
            </div>
    
            <div class="item">
                <ul>
                    <?php 
                        $connection = mysqli_connect('localhost','root','','meta');

                        if (!$connection) {
                            die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM catalog_items WHERE catalog_id = $catalogId";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                            echo '<li>
                                    <a href="#" class="search-catalog" data-catalog_item="'.$row['catalog_item_id'].'">
                                        '.$row['item_name'].'
                                    </a>
                                </li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
