<footer class="footer">
    <div class="footer-top ptb--50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="footer-widget mb--50">
                        <div class="textwidget">
                            <img src="../upload/logo1.png" alt="Logo">
                        </div>
                    </div>
                    <div class="footer-widget mb--50 pb--1">
                        <ul class="footer-menu">
                            <li><a href="">About Us</a></li>
                            <li><a href="">Terms &amp; Conditions</a></li>
                            <li><a href="">Policy</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget">
                        <!-- Social Icons Start Here -->
                        <ul class="social">
                            <li class="social__item">
                                <a href="https://plus.google.com/" class="social__link google-plus">
                                    <span>Google Plus</span>
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://facebook.com/" class="social__link facebook">
                                    <span>facebook</span>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://pinterest.com" class="social__link pinterest">
                                    <span>pinterest</span>
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="youtube.com" class="social__link twitter">
                                    <span>twitter</span>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Icons End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom border-top ptb--25">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6 text-sm-left text-center mb-xs--10">
                    <p class="copyright-text"><a href="index.html">Requaco</a> &copy; 2020 all rights reserved</p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->

<!-- Searchform Popup Start -->
<div class="searchform__popup" id="searchForm">
    <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
    <div class="searchform__body">
        <p>Start typing and press Enter to search</p>
        <form class="searchform">
            <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
            <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
        </form>
    </div>
</div>
<!-- Searchform Popup End -->

<!-- Mini Cart Start -->
<!-- <aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
        <div class="mini-cart-inner">
            <h3 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h3>
            <div class="mini-cart__content">
                <?php
                if (isset($_SESSION['cart'])) {
                    echo '<table class="table text-center">
                                <thead>
                                <tr>
            <th>&nbsp;</th>
       <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody id="cart">
    <div class="aa" style="overflow:scroll;">';
                    $tong = 0;
                    for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                        $idsp = $_SESSION['cart'][$i][0];
                        $total = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][4];
                        $del = "<a href='index.php?act=cart&del=" . $i . "'><i class='flaticon flaticon-cross'></i></a>";
                        echo '<tr>
                <td class="mini-cart__product__image">
                    <img src="' . $_SESSION['cart'][$i][3] . '" alt="Product Thumnail">
                </td>
                <td class="mini-cart__product__content">
                    <a href="#" class="mini-cart__product__title">' . $_SESSION['cart'][$i][1] . '</a>
                    <span class="mini-cart__product__quantity">' . $_SESSION['cart'][$i][4] . ' x ' . $_SESSION['cart'][$i][2] . '</span>
                </td>
                <td>
                ' . $del . '
                </td>
            </tr>';

                        $tong = $total + $tong;
                    }
                    echo '</div></tbody>
        </table>';
                    echo '<div class="mini-cart__total">
                <span>Subtotal</span>
                <span class="ammount">' . $tong . '</span>
        </div>
        <div class="mini-cart__buttons">
            <a href="index.php?act=viewcart" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
            <a href="checkout.html" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
        </div>';
                }
                ?> -->
<!-- <script src="../view/js/jquery-3.5.1.min.js"></script> -->

<!-- </div>
        </div>
    </div>
</aside> -->
<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
        <div class="mini-cart-inner">
            <h3 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h3>
            <div class="mini-cart__content">
                <ul class="mini-cart__list">
                    <?php
                    $tong = 0;
                    if (isset($_SESSION['cart'])) {
                        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {

                            $idsp = $_SESSION['cart'][$i][0];
                            $total = $_SESSION['cart'][$i][2] * $_SESSION['cart'][$i][4];
                            $del = '<a href="index.php?act=cart&del=' . $i . '" class="remove-from-cart remove">
                                            <i class="flaticon flaticon-cross"></i>
                                        </a>';
                            echo '<li class="mini-cart__product">

                                            ' . $del . '

                                            <div class="mini-cart__product__image">
                                                <img src="' . $_SESSION['cart'][$i][3] . '" alt="products">
                                            </div>
                                            <div class="mini-cart__product__content">
                                                <a class="">' . $_SESSION['cart'][$i][1] . '</a>
                                                <span class="mini-cart__product__quantity"> ' . $_SESSION['cart'][$i][4] . ' x $' . $_SESSION['cart'][$i][2] . '</span>
                                            </div>
                                        </li>';
                            $tong = $total + $tong;
                        }
                    }
                    ?>
                </ul>




                <div class="mini-cart__total">
                    <span>Subtotal</span>
                    <span class="ammount">$<?= $tong ?></span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="index.php?act=viewcart" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
                    <a href="index.php?act=checkout" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
                </div>

                <script>
                    var x = 0;
                    $(document).ready(function() {
                        $("#cart").scroll(function() {
                            $("span").text(x += 1);
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</aside>
<!-- Mini Cart End -->

<!-- Global Overlay Start -->
<div class="zakas-global-overlay"></div>
<!-- Global Overlay End -->

<!-- Qicuk View Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">

</div>
<!-- Qicuk View Modal End -->
</div>
<!-- Main Wrapper End -->


<!-- ************************* JS Files ************************* -->

<!-- jQuery JS -->
<script src="../view/assets/js/vendor.js"></script>

<!-- Main JS -->
<script src="../view/assets/js/main.js"></script>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        //search
        $("#search-btn").click(function() {
            $("#search-form").submit();
        });
        //preview
        $("#productModal").load("../view/preview.php");
        $(".quick-view").click(function(event) {
            var idpreview = $(this).text().trim();
            if (idpreview > 0) {
                $.ajax({
                    url: "../view/preview.php",
                    type: "post",
                    data: {
                        idpreview: idpreview
                    },
                    success: function(response) {
                        if (response != "") {
                            $("#productModal").html(response);
                        }
                    },
                });
            }
        });
        //cồm men
        var idpro = $("#bl_idpro").val().trim();
        $("#dsbl").load("../view/binhluan_first.php", {
            idpro: idpro
        });
        $("#sendmess").click(function(event) {
            var name = $("#bl_name").val().trim();
            var email = $("#bl_email").val().trim();
            var mess = $("#bl_mess").val().trim();
            if (name != "" && mess != "" && idpro > 0) {
                $.ajax({
                    url: "../view/binhluan_send.php",
                    type: "post",
                    data: {
                        name: name,
                        email: email,
                        idpro: idpro,
                        mess: mess
                    },
                    success: function(response) {
                        var msg = "";
                        if (response != "") {
                            $("bl_name").val("");
                            $("bl_email").val("");
                            $("bl_mess").val("");
                            msg = "Thực hiện thành công";
                            $("#dsbl").html(response);
                        } else {
                            msg = "lỗi! ko thêm được!";
                        }
                        $("#message").html(msg);
                    },
                });
            } else {
                $("message").html(
                    "chưa đủ quyền để bình luận. hoặc có dữ liệu bắt buộc chưa nhập!"
                );
            }
        });
    });
</script>