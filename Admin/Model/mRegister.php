<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost","root","","meta");

        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }
    
        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];
        $tel = $_POST["txtTel"];
        $confirm_password = $_POST["txtPasswordConfirm"];

        if ($password != $confirm_password) {
            echo 'Mật khẩu và xác nhận mật khẩu không khớp. Vui lòng thử lại.<a href="http://localhost/Meta-main/Register.php">Đăng kí</a>';
        } else {
            $sql = "INSERT INTO user (user_id, username, phone_number, password, role )VALUES ('', '$username', '$tel', '$password', 'user')";

            if ($conn->query($sql) === TRUE) {
                session_start();
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["username"] = $row['username'];
                header("Location: http://localhost/Meta-main/index.php"); 
            } else{
                echo 'Đăng ký thất bại';
            }
        }
    }
?>

