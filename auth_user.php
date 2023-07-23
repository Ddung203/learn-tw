
<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

require('database.php');

// Lấy thông tin user từ database dựa vào email đã lưu trong session
$email = $_SESSION["email"];
$query = "SELECT role FROM users WHERE email=?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Nếu user hiện tại là admin thì chuyển đến trang admin
if ($user["role"] == 1) {
    // User là admin, chuyển hướng đến admin.php
    header("Location: admin.php");
    exit();
}
