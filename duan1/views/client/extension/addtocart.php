<?php
session_start();

// Kiểm tra xem có tồn tại mảng giỏ hàng hay không.
if (!isset($_SESSION['cart'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['ma_san_pham'];
    $productName = $_POST['ten_san_pham'];
    $productPrice = $_POST['don_gia'];

    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = false;
    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'ma_san_pham'));
    }
    
    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
    if ($index !== false) {
        $_SESSION['cart'][$index]['quantity'] += 1;
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $product = [
            'ma_san_pham' => $productId,
            'ten_san_pham' => $productName,
            'don_gia' => $productPrice,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
        // var_dump($_SESSION['cart']);die;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['cart']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>