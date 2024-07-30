<?php
// session_start();
if (empty($dataDb)) {
    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
    ?>
      
    <main id="content" class="wrapper layout-page">
        <section class="z-index-2 position-relative pb-2 mb-12">
            <div class="bg-body-secondary mb-3">
                <div class="container">
                    <nav class="py-4 lh-30px" aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center py-1 mb-0">
                            <li class="breadcrumb-item"><a title="Home" href="../index.html">Home</a></li>
                            <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="shopping-cart">
                <h2 class="text-center fs-2 mt-12 mb-13">Shopping Cart</h2>
                <form class="table-responsive-md pb-8 pb-lg-10">
                    <table class="table border">
                        <thead class="bg-body-secondary">
                            <tr class="fs-15px letter-spacing-01 fw-semibold text-uppercase text-body-emphasis">
                                <th scope="col" class="fw-semibold border-1 ps-11">products</th>
                                <th scope="col" class="fw-semibold border-1">quantity</th>
                                <th colspan="2" class="fw-semibold border-1">Price</th>
                            </tr>
                        </thead>
                        <tbody id="order">
                            <?php
                            $sum_total = 0;
                            foreach ($dataDb as $key => $product):
                                $quantityInCart = 0;
                                // kiểm tra số lượng sản phẩm trong giỏ hàng
                                $hinhpart = "public/dist/img/";
                                foreach ($_SESSION['cart'] as $item) {
                                    if ($item['ma_san_pham'] == $product['ma_san_pham']) {
                                        $quantityInCart = $item['quantity'];
                                        break;
                                    }
                                }

                                ?>
                                <tr class="position-relative">
                                    <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input rounded-0" name="check-product"
                                                    value="<?= $key +1 ?>">
                                            </div>
                                            <div class="ms-6 me-7">
                                                <img src="#" data-src="<?= $hinhpart . $product['anh'] ?>" class="lazy-image"
                                                    width="75" height="100" alt="Natural Coconut Cleansing Oil">
                                            </div>
                                            <div class>
                                                <p class="fw-500 mb-1 text-body-emphasis"><?= $product['ten_san_pham'] ?></p>
                                                <p class="card-text">
                                                    <span class="fs-13px fw-500 text-decoration-line-through pe-3"></span>
                                                    <span
                                                        class="fs-15px fw-bold text-body-emphasis"><?= number_format((int) $product['don_gia'], 0, ",", ".") ?>
                                                        <u>đ</u></span>
                                                </p>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle">
                                        <div class="input-group  shop-quantity">
                                            <!-- <a href="#" class="shop-down position-absolute z-index-2"><i class="far fa-minus"></i></a> -->
                                            <input type="number" class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"  step="any" value="<?= $quantityInCart ?>" min="1"
                                                id="quantity_<?= $product['ma_san_pham'] ?>"
                                                oninput="updateQuantity(<?= $product['ma_san_pham'] ?>, <?= $key ?>)" inputmode="numeric">
                                            <!-- <a href="#" class="shop-up position-absolute z-index-2"><i class="far fa-plus"></i></a> -->
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">
                                            <?= number_format((int) $product['don_gia'] * (int) $quantityInCart, 0, ",", ".") ?>
                                            <u>đ</u></p>
                                    </td>
                                    <td class="align-middle text-end pe-8">
                                        <a href="#" onclick="removeFormCart(<?= $product['ma_san_pham'] ?>)"
                                            class="d-block text-secondary">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                // Tính tổng giá đơn hàng
                                $sum_total += ((int) $product['don_gia'] * (int) $quantityInCart);
                                // Lưu tổng giá trị vào sesion
                                $_SESSION['resultTotal'] = $sum_total;
                            endforeach;
                            ?>
                            
                            <tr>
                                <td class="pt-5 pb-10 position-relative bg-body ps-0 left">
                                    <a href="shop-layout-v1.html" title="Countinue Shopping"
                                        class="btn btn-outline-dark me-8 text-nowrap my-5">
                                        Countinue Shopping
                                    </a>
                                    <button type="submit" value="Clear Shopping Cart"
                                        class="btn btn-link p-0 border-0 border-bottom border-secondary text-decoration-none rounded-0 my-5 fw-semibold ">
                                        <i class="fa fa-times me-3"></i>
                                        Clear Shopping Cart
                                    </button>
                                </td>
                                <td colspan="3" class="text-end pt-5 pb-10 position-relative bg-body right pe-0">
                                    <button type="submit" value="Update Cart" class="btn btn-outline-dark my-5">Update Cart
                                    </button>
                                </td>
                            </tr>
                        </div>
                    </table>
                        <div class="card-footer bg-transparent px-0 pt-5 pb-7 mx-9">
                            <div class="d-flex align-items-center justify-content-between fw-bold mb-7">
                                <span class="text-secondary text-body-emphasis">Total pricre:</span>
                                <span
                                class="d-block ml-auto text-body-emphasis fs-4 fw-bold"> <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u></span>
                            </div>
                            <a href="index.php?act=checkout" class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary"
                            title="Check Out">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </tbody>
        </section>
    </main>
    <?php
}
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input

        let newQuantity = $('#quantity_' + id).val();
        console.log(newQuantity);
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './views/client/extension/update.php',
            data: {
                ma_san_pham: id,
                quantity: newQuantity
            },
            success: function (response) {
                // Sau khi cập nhật thành công
                $.post('views/client/extension/tablecart.php', function (data) {
                    $('#order').html(data);
                })
            },
            error: function (error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './views/client/extension/xoacart.php',
                data: {
                    ma_san_pham: id
                },
                success: function (response) {
                    // Sau khi cập nhật thành công
                    $.post('views/client/extension/tablecart.php', function (data) {
                        $('#order').html(data);
                    })
                },
                error: function (error) {
                    console.log(error);
                },
            })
        }
    }
</script>
