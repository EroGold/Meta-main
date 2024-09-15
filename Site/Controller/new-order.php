<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect("localhost","root","","meta");

        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $city_id = $_POST['city'];
        $district_id = $_POST['district'];
        $province_id = $_POST['province'];
        $address = $_POST['address'];
        $prod_ids = isset($_POST['prod_id']) ? (array)$_POST['prod_id'] : [];

        if (empty($name) || empty($phone_number) || empty($city_id) || empty($district_id) || empty($province_id) || empty($address) || empty($prod_ids)) {
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin.'); window.history.back();</script>";
            exit();
        }
        $conn->begin_transaction();

        try {
            // 1. Chèn vào bảng orders
            $sql_order = "INSERT INTO `order` (name, phone_number, city_id, district_id, province_id, address) 
                        VALUES (?, ?, ?, ?, ?, ?)";
            $stmt_order = $conn->prepare($sql_order);
            $stmt_order->bind_param("ssssss", $name, $phone_number, $city_id, $district_id, $province_id ,$address);
            $stmt_order->execute();

            // Lấy ID của đơn hàng vừa tạo
            $order_id = $stmt_order->insert_id;

            // 2. Chèn vào bảng order_items cho từng sản phẩm
            $sql_item = "INSERT INTO order_items (order_id, prod_id) VALUES (?, ?)";
            $stmt_item = $conn->prepare($sql_item);

            foreach ($prod_ids as $prod_id) {
                $stmt_item->bind_param("ii", $order_id, $prod_id);
                $stmt_item->execute();
            }

            // Commit transaction nếu mọi thứ đều thành công
            $conn->commit();

            echo "Order created successfully with Order ID: " . $order_id;
            session_start();
            unset($_SESSION['cart']);

            echo "<script>alert('Đặt hàng thành công! Mã đơn hàng: " . $order_id . "'); window.location.href='http://localhost:8060/Meta-main/index.php';</script>";


            // header("Location: http://localhost:8060/Meta-main/index.php");

        } catch (Exception $e) {
            // Rollback transaction nếu có lỗi
            $conn->rollback();
            echo "<script>alert('Đặt hàng thất bại: " . $e->getMessage() . "'); window.history.back();</script>";
        }

        // Đóng statement và kết nối
        $stmt_order->close();
        $stmt_item->close();
        $conn->close();

    }
?>