<?php
session_start();
ob_start();
include "../../../model/PDO.php";
include "../../../model/loaihang.php";
include "../../../model/khachhang.php";
include "../../../model/sanpham.php";
include "../../../model/donhang.php";
include "../../../global.php";
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'ma_san_pham');
    // var_dump($productId);

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idlist = implode(',', $productId);
    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idlist);
    // var_dump($dataDb);

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
                        <img src="<?= $hinhpart . $product['anh'] ?>" data-src="<?= $hinhpart . $product['anh'] ?>" class="lazy-image"
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
                <div class="input-group position-relative shop-quantity">
                    <!-- <a href="#" class="shop-down position-absolute z-index-2"><i class="far fa-minus"></i></a> -->
                    <input type="number" class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0" value="<?= $quantityInCart ?>" min="1"
                        id="quantity_<?= $product['ma_san_pham'] ?>"
                        oninput="updateQuantity(<?= $product['ma_san_pham'] ?>, <?= $key ?>)">
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
<?php
 } ?>
 
