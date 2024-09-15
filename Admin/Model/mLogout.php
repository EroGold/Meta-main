<?php
// Bắt đầu phiên làm việc
session_start();

// Xóa tất cả biến phiên
$_SESSION = array();

// Xóa cookie phiên (nếu có)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hủy phiên làm việc
session_destroy();

// Chuyển hướng đến trang đăng nhập hoặc trang chủ
header("Location: http://localhost:8060/Meta-main/index.php");
exit();
?>
