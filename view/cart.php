<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Cart</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->


<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80">
        <div class="container">
            <?php
            if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {


            ?>
                <div class="row">
                    <div class="col-lg-8 mb-md--50">
                        <form class="cart-form" action="#" method="post">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="table-content table-responsive">

                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            echo '<table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th class="text-left">Product</th>
                                                            <th>price</th>
                                                            <th>quantity</th>
                                                            <th>total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="cart">';
                                            $tong = 0;
                                            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                                $idsp = $_SESSION['cart'][$i][0];
                                                $total = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][4];
                                                $del = "<a href='index.php?act=cart&del=" . $i . "'><i class='flaticon flaticon-cross'></i></a>";
                                                echo '<tr>
                                                                <td class="product-remove text-left">
                                                                    ' . $del . '
                                                                </td>
                                                                <td class="product-thumbnail text-left">
                                                                    <img src="' . $_SESSION['cart'][$i][3] . '" alt="Product Thumnail">
                                                                </td>
                                                                <td class="product-name text-left wide-column">
                                                                    <h3>
                                                                        <a href="#">' . $_SESSION['cart'][$i][1] . ' id ' . $idsp . '</a>
                                                                    </h3>
                                                                </td>
                                                                <td class="product-price">
                                                                    <span class="product-price-wrapper">
                                                                        $' . $_SESSION['cart'][$i][2] .  ' 
                                                                    </span>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="quantity">
                                                                        <input type="number" class="quantity-input" onblur="clickxuly(this,' . $i . ')" name="quantity" id="quantity" value="' . $_SESSION['cart'][$i][4] . '" min="0">
                                                                    </div>
                                                                </td>
                                                                <td class="product-total-price">
                                                                    <span class="product-price-wrapper">
                                                                        $' . $total . ' 
                                                                    </span>
                                                                </td>
                                                            </tr>';

                                                $tong = $total + $tong;
                                            }
                                            echo '</tbody>
                                                        </table>';
                                            $caship = 0;
                                            if ($tong > 0) {
                                                $caship = $tong + 1.99;
                                            }
                                        }
                                        ?>
                                        <input type="hidden" name="total" value="<?php echo $caship; ?>">
                                        <script src="../view/assets/js/jquery-3.5.1.min.js"></script>
                                        <script>
                                            function clickxuly(x, vitri) {
                                                var quantity = x.value;

                                                $.post("xuly.php", {
                                                    quantity: quantity,
                                                    vitri: vitri
                                                }, function(result) {
                                                    $("#cart").html(result);
                                                });
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters border-top pt--20 mt--20">
                                <div class="col-sm-6">
                                    <div class="coupon">
                                        <input type="text" id="coupon" name="coupon" class="cart-form__input" placeholder="Coupon Code">
                                        <button type="submit" class="cart-form__btn">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                    <button type="submit" class="cart-form__btn"> <a href="index.php?act=cart&delall=1">Clear Cart</a>
                                    </button>
                                    <button type="submit" class="cart-form__btn"><a href="index.php?act=cart&updatecart=1">Update Cart</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-collaterals">
                            <div class="cart-totals">
                                <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                                <div class="cart-calculator">
                                    <div class="cart-calculator__item">
                                        <div class="cart-calculator__item--head">
                                            <span>Subtotal</span>
                                        </div>
                                        <div class="cart-calculator__item--value">
                                            <span>$
                                                <?php
                                                echo ("$tong");
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cart-calculator__item">
                                        <div class="cart-calculator__item--head">
                                            <span>Shipping</span>
                                        </div>
                                        <div class="cart-calculator__item--value">
                                            <span>Flat rate: $1.99</span>
                                        </div>
                                    </div>
                                    <div class="cart-calculator__item order-total">
                                        <div class="cart-calculator__item--head">
                                            <span>Total</span>
                                        </div>
                                        <div class="cart-calculator__item--value">
                                            <span class="product-price-wrapper">
                                                <span class="money">$
                                                    <?php
                                                    echo ("$caship");
                                                    ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php?act=checkout" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">
                                Proceed To Checkout
                            </a>
                        </div>
                    </div>
                </div>

            <?php
            } else {
                echo '<h3 style="text-align: center;">Cart Is Empty!</h3>';
            }
            ?>


        </div>
    </div>
</div>