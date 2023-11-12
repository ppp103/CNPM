<?php
function construct()
{
    load_model('index');
}
function indexAction()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
    }
    if (isset($_GET['delete'])) {
        $index = $_GET['delete'];

        if (isset($_SESSION['giohang'][$index])) {
            unset($_SESSION['giohang'][$index]);
            // Optionally, you can reindex the array after deletion if needed.
            $_SESSION['giohang'] = array_values($_SESSION['giohang']);
        }
    }
    if (isset($_POST['addcart']) && ($_POST['addcart'])) {
        $id = $_POST['id'];
        $hinh = $_POST['anh'];
        $tensp = $_POST['tenSach'];
        $gia = $_POST['giaBan'];
        $soluong = $_POST['soluong'];
        $fl = 0;
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            if ($_SESSION['giohang'][$i][0] == $id) {
                $fl = 1;

                break;
            }
        }
        if ($fl == 0) {
            $sp = [$id, $hinh, $tensp, $gia, $soluong];
            $_SESSION['giohang'][] = $sp;
        }
    }
    load_view('index');
}

function showgiohang()
{
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            if (!isset($_SESSION['giohang'][$i][4])) {
                $_SESSION['giohang'][$i][4] = 1;
            }
        }
    }

    $quantities = array();
    $sum = 0;
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            $quantities[$i] = $_SESSION['giohang'][$i][4]; // Get quantity from session

            if (isset($_POST['quantity' . $i])) {
                $selected_quantity = $_POST['quantity' . $i];
                $quantities[$i] = $selected_quantity;
                $_SESSION['giohang'][$i][4] = $quantities[$i];
            }
            $total_price = $_SESSION['giohang'][$i][3] * $quantities[$i];
            $sum = $sum + $total_price;
            echo '
            <div id="cart-products">
                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img" style="background-image: url(\'public/images/books/' . $_SESSION['giohang'][$i][1] . '\'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                        </div>
                        <div class="display-tc">
                            <h3>' . $_SESSION['giohang'][$i][2] . '</h3>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">' . number_format($_SESSION['giohang'][$i][3]) . ' VNĐ</span>
                        </div>
                    </div>
                    
                    <form method="post">
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <input type="number" name="quantity' . $i . '" data-price="123" class="form-control input-number text-center quantity" value="' . $quantities[$i] . '" min="1" max="100">
                                <input type="submit" value="Update">
                            </div>
                        </div>
                    </form>
    
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="product-total tong-tien"> ' . number_format($total_price) . 'VNĐ</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="?mod=cart&delete=' . $i . '" class="closed remove-cart"></a>
                        </div>          
                    </div>
                </div>
            </div>';
        }
    }
}
