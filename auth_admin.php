
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

// Nếu user hiện tại không phải admin thì buộc login lại
if ($user["role"] == 0) {
    $_SESSION = array();
    session_destroy();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    header("Location: login.php");
    exit();
}
