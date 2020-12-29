<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Checkout</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner">
        <div class="container">
            <div class="row pt--50 pt-md--40 pt-sm--20">
                <div class="col-12">
                    <!-- User Action Start -->
                    <div class="user-actions user-actions__coupon">
                        <div class="message-box mb--30">
                            <p><i class="fa fa-exclamation-circle"></i> Have A Coupon? <a class="expand-btn" href="#coupon_info">Click Here To Enter Your Code.</a></p>
                        </div>
                        <div id="coupon_info" class="user-actions__form hide-in-default">
                            <form action="#" class="form">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="form__group d-sm-flex">
                                    <input type="text" name="coupon" id="coupon" class="form__input form__input--2 mr--20 mr-xs--0" placeholder="Coupon Code">
                                    <button type="submit" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Apply Coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- User Action End -->
                </div>
            </div>
            <div class="row pb--80 pb-md--60 pb-sm--40">
                <!-- Checkout Area Start -->
                <div class="col-lg-6">
                    <div class="checkout-title mt--10">
                        <h2>Billing Details</h2>
                    </div>
                    <div class="checkout-form">
                        <form action="index.php?act=okcart" class="form form--checkout" method="post">
                            <div class="form-row mb--20">
                                <div class="form__group col-md-6 mb-sm--30">
                                    <label for="billing_fname" class="form__label form__label--2">Name <span class="required">*</span></label>
                                    <input type="text" name="name" class="form__input form__input--2" required>
                                </div>
                            </div>
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_streetAddress" class="form__label form__label--2">Address <span class="required">*</span></label>

                                    <input type="text" name="adress" class="form__input form__input--2 mb--30" placeholder="House number and street name" required>
                                </div>
                            </div>
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                    <input type="text" name="phone" class="form__input form__input--2" required>
                                </div>
                            </div>
                            <div class="form-row mb--20">
                                <div class="form__group col-12">
                                    <label for="billing_email" class="form__label form__label--2">Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" id="billing_email" class="form__input form__input--2" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form__group col-12">
                                    <label for="orderNotes" class="form__label form__label--2">Order Notes</label>
                                    <textarea class="form__input form__input--2 form__input--textarea" id="orderNotes" name="note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                    <div class="order-details">
                        <div class="checkout-title mt--10">
                            <h2>Your Order</h2>
                        </div>
                        <div class="table-content table-responsive mb--30">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo '<table class="table order-table order-table-2">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th class="text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                $tong = 0;
                                for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                    $idsp = $_SESSION['cart'][$i][0];
                                    $total = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][4];
                                    echo '<tr>
                                                        <th>' . $_SESSION['cart'][$i][1] . ' 
                                                        <strong><span>&#10005;</span>' . $_SESSION['cart'][$i][4] . '</strong>
                                                        </th>
                                                        <td class="text-right">$' . $_SESSION['cart'][$i][2] . '</td>
                                                    </tr>';
                                    $tong = $total + $tong;
                                }
                                $caship = 0;
                                if($tong>0){
                                    $caship = $tong + 1.99;
                                }
                                echo '</tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td class="text-right">$' . $tong . '</td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>Shipping</th>
                                                            <td class="text-right">
                                                                <span>Flat Rate $1.99</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Order Total</th>
                                                            <td class="text-right"><span class="order-total-ammount">$' .$caship. '</span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>';
                            }
                            ?>

                            <input type="hidden" name="total" value="<?php echo $caship; ?>">
                        </div>
                        <div class="checkout-payment">
                            <!-- <form action="index.php?act=okcart" class="payment-form" method="post"> -->
                            <div class="payment-group mb--10">
                                <div class="payment-radio">
                                    <input type="radio" name="pttt" value="1" checked>
                                    <label class="payment-label" for="cheque">CHUYỂN KHOẢN</label>
                                </div>
                                <div class="payment-info" data-method="bank">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                </div>
                            </div>
                            <div class="payment-group mb--10">
                                <div class="payment-radio">
                                    <input type="radio" name="pttt" value="2">
                                    <label class="payment-label" for="cheque">
                                        THANH TOÁN BẰNG THẺ TÍN DỤNG
                                    </label>
                                </div>
                                <div class="payment-info cheque hide-in-default" data-method="cheque">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                            </div>
                            <div class="payment-group mb--10">
                                <div class="payment-radio">
                                    <input type="radio" name="pttt" value="3">
                                    <label class="payment-label" for="cash">
                                        THANH TOÁN KHI GIAO HÀNG
                                    </label>
                                </div>
                                <div class="payment-info cash hide-in-default" data-method="cash">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                            <div class="payment-group mt--20">
                                <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                <input type="submit" name="checkok" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2" value="Place Order">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Checkout Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->