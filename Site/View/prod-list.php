<div class="prod-list">
    <div class="tag">
        <div class="item">
            <a href="">Model 2023</a>
        </div>
    </div>

    <div class="brand-name">
        <div class="item">
            <ul>
                <li>
                    <a href="">
                        <img src="./asset/img/logo-bosch-nho.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="prod-count">
        <?php include 'Admin/Model/prod_count.php' ?>
    </div>

    <div class="sort">
        <div class="item">
            <ul>
                <li>
                    <a href="">
                        Bán chạy nhất
                    </a>
                </li>
                <li>
                    <a href="?sort=price_asc">
                        Giá tăng dần
                    </a>
                </li>
                <li>
                    <a href="?sort=price_desc">
                        Giá giảm dần
                    </a>
                </li>
                <li>
                    <a href="?sort=price_discount">
                        Giảm giá
                    </a>
                </li>
                <li>
                    <a href="?sort=new">
                        Mới nhất 
                    </a>
                </li>
                <li>
                    <a href="?sort=tragop">
                        Trả góp
                    </a>
                </li>
                <li>
                    <a href="?sort=suggest">
                        META gợi ý  
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="choose">
        <div class="item">
            <ul>
                <li id="contentContainer">
                    <p>

                    </p>
                </li>
            </ul>
        </div>
    </div>

    <div class="prod-review">
        <div class="prod">
            <div class="item" id="search-results">
                <?php include 'Admin/Model/get_catalist.php'; ?>
            </div>
        </div>
    </div>
</div>    
