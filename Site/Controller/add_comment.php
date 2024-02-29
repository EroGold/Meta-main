<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = mysqli_connect("localhost","root","","meta");

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

        $prodId = $_POST['prod_id'];
        $userId = $_POST['user_id'];
        $comment = $_POST['comment'];
        $rate = $_POST['rate-point'];
    
        $sql = "INSERT INTO comment (prod_id, user_id, rate, `comment-text`) VALUES ('$prodId', '$userId', '$rate', '$comment')";
        $result = $conn->query($sql);

        if ($result) {
            // Lặp qua các hàng kết quả và hiển thị bình luận
            echo '<script type="text/javascript">

            alert("Bình luận thành công"); 

            </script>';
        } else{
            echo 'Đăng thất bại';
        };

    };
?>