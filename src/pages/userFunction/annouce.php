<?php

require_once("../../database/database.php");

echo $_POST['value'];
$userid = 3;
if (isset($_POST['value'])) {
    $vouchercode = $_POST['value'];
    echo $vouchercode;
    $voucher = "SELECT VoucherCode, VoucherDiscount FROM sales WHERE VoucherCode = '$vouchercode' ";
    $result = $mysqli->query($voucher);
    // echo "a";
    if (mysqli_affected_rows($mysqli) > 0) {
        $message = "Áp dụng Voucher thành công";
        $row = $result->fetch_assoc();
        $discount = $row['VoucherDiscount'];
    } else {
        $message = "Mã khuyến mãi không hợp lệ";
        $discount = 0;
    }
    // echo $message;
    // echo $discount;
    $kq = array(
        "value1" => $message,
        "value2" => $discount,
    );
    header('Content-Type: application/json');
    // echo json_encode($kq);
    header("Location: userPay.php?value=" . urlencode($discount));
} else {
    $vouchercode = 0;
    echo "Không có dữ liệu được gửi đến.";
}
