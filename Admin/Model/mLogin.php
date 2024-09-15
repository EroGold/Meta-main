<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost","root","","meta");

        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

    // Lấy thông tin từ form đăng nhập
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];

    // Thực hiện câu truy vấn để tìm người dùng
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            session_start();
                $_SESSION["username"] = $row['username'];
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["avatar"] = $row['avatar'];
                $_SESSION["email"] = $row['email'];
                $_SESSION["password"] = $row['password'];
                $_SESSION["phone_number"] = $row['phone_number'];
                $_SESSION["sex"] = $row['sex'];
                $_SESSION["birthday"] = $row['birthday'];
                header("Location: http://localhost:8060/Meta-main/index.php");
            exit;
            // Bạn có thể tạo phiên làm việc ở đây và chuyển hướng người dùng
        } else {
            echo 'Đăng nhập thất bại. Vui lòng kiểm tra tên người dùng và mật khẩu. Quay lại <a href="http://localhost/Meta-main/Login.php">Đăng nhập<a/>';
        }
    } else {
        echo 'Đăng nhập thất bại. Tên người dùng không tồn tại. Quay lại <a href="http://localhost/Meta-main/Login.php">Đăng nhập<a/>';
    }

    $conn->close();
}
?>