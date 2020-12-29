<?php
ob_start();
session_start();
include "../view/header.php";
include "../model/connect.php";
include "../model/path.php";
include "../model/catalog.php";
include "../model/brands.php";
include "../model/product.php";
include "../model/user.php";
include "../model/cart.php";
include "../model/addtocart.php";
include "../model/cartdetail.php";
include "../model/tag.php";



if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop':
            $sortCase = 0;
            if (isset($_GET['sort'])) {
                $sort = $_GET['sort'];
            } else {
                $sort = 1;
            }
            $tag = getTag(1);
            $brand = showAllBrands(0);
            $all_catalogs = showCatalog(0);
            if (isset($_GET['brand'])) {
                $sortCase = 2; //sort theo brand
                if (isset($_GET['sortbrand'])) {
                    $sortbrand = $_GET['sortbrand'];
                } else {
                    $sortbrand = 1;
                }
                //show theo brand
                $id = $_GET['brand'];
                $product = getProductById('brand', $id, $sortbrand);
            } elseif (isset($_GET['catalog'])) {
                $sortCase = 1; //sort theo catalog
                if (isset($_GET['sortcata'])) {
                    $sortcata = $_GET['sortcata'];
                } else {
                    $sortcata = 1;
                }
                //show theo catalog
                $id = $_GET['catalog'];
                $product = getProductById('catalog', $id, $sortcata);
            } elseif (isset($_GET['search'])) {
                $sortCase = 3; //ẩn sort
                $search = $_GET['search'];
                if (isset($_POST['search']) && ($_POST['search']) != "") {
                    //show theo search
                    $search = $_POST['search'];
                }
                $product = showProductbysearch($search);
            } else {
                //show all
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 0;
                }
                $product = showProduct(0, $sort, $page);
                $phantrang = phantrang($page);
            }
            include "../View/shop.php";
            break;
        case 'contact':
            include "../view/contact.php";
            break;
        case 'detail':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                // hiện trang chi tiết
                $id = $_GET['id'];
                $product_detail = getProductById('id', $id);
                $product = getProductById('catalog', $product_detail['id_catalog']);
                include "../View/shopdetail.php";
            }
            break;
        case 'cart':
            if (isset($_GET['delall']) && ($_GET['delall']) == 1) {
                $_SESSION['cart'] = null;
                header('location: index.php?act=viewcart');
            }
            if (isset($_GET['del']) && ($_GET['del']) >= 0) {
                array_splice($_SESSION['cart'], $_GET['del'], 1);
                header('location: index.php?act=shop');
                if ($_SESSION['cart'] == null) {
                    header('location: index.php?act=viewcart');
                }
            }
            if (isset($_GET['updatecart']) && ($_GET['updatecart']) == 1) {
                if (isset($_POST['quantity'])) {
                    foreach ($_POST['quantity'] as $key => $val) {
                        if ($val > 0) {
                            $_SESSION['cart'][$key]['quantity'] = $val;
                        }
                    }
                }
                header('location: index.php?act=viewcart');
            }
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (isset($_POST['submit']) && $_POST['submit']) {
                $mycart = new cart;
                $mycart->addcart();
                if (isset($_POST['stay']) && $_POST['stay'] == 1) {
                    header('location: index.php?act=shop');
                } else {
                    header('location: index.php');
                }
            }
            break;
        case 'viewcart':
            include "../view/cart.php";
            break;
        case 'checkout':
            include "../view/checkout.php";
            break;
        case 'okcart':
            if (isset($_POST['name']) && ($_POST['name']) != "") $name = $_POST['name'];
            if (isset($_POST['phone']) && ($_POST['phone']) != "") $phone = $_POST['phone'];
            if (isset($_POST['adress']) && ($_POST['adress']) != "") $adress = $_POST['adress'];
            if (isset($_POST['email']) && ($_POST['email']) != "") $email = $_POST['email'];
            if (isset($_POST['total']) && ($_POST['total']) != "") $total = $_POST['total'];
            if (isset($_POST['pttt']) && ($_POST['pttt']) != "") $pttt = $_POST['pttt'];
            echo '<script type="text/javascript">
                        alert("Đặt hàng thành công!");
                    </script>';
            themdonhang($name, $phone, $adress, $email, $total, $pttt);

            $showcart = showcart(1);
            foreach ($showcart as $cam) {
                $idc = $cam['id'];
                $namec = $cam['name'];
                $phonec = $cam['phone'];
                $adressc = $cam['adress'];
                $emailc = $cam['email'];
                $totalc = $cam['total'];
                $ptttc = $cam['pttt'];
            }
            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                $idcart = $idc;
                $idpd = $_SESSION['cart'][$i][0];
                $na = $_SESSION['cart'][$i][1];
                $gi = $_SESSION['cart'][$i][2];
                $hin = $_SESSION['cart'][$i][3];
                $soluong = $_SESSION['cart'][$i][4];
                insertcdt($idcart, $idpd, $hin, $na, $gi, $soluong);
            }
            if (isset($_SESSION['cart'])) unset($_SESSION['cart']);
            header('location: index.php?act=tracking');
            break;
        case 'tracking':
            $showcart = showcart(1);
            foreach ($showcart as $cam) {
                $idc = $cam['id'];
                $namec = $cam['name'];
                $phonec = $cam['phone'];
                $adressc = $cam['adress'];
                $emailc = $cam['email'];
                $totalc = $cam['total'];
                $ptttc = $cam['pttt'];
            }
            if (isset($idc) && ($idc) != "") {
                $idpd = $idc;
                $showidcarta = showProductbysearchidc($idpd);
                $showyourcdt = showyourproduct($idpd);
            }
            include "../view/tracking.php";
            break;
        case 'showyourpd':
            $showcart = showcart(1);
            foreach ($showcart as $cam) {
                $idc = $cam['id'];
                $namec = $cam['name'];
                $phonec = $cam['phone'];
                $adressc = $cam['adress'];
                $emailc = $cam['email'];
                $totalc = $cam['total'];
                $ptttc = $cam['pttt'];
            }
            $idcar = $idc;
            $showyp = showyourproduct($idcar);
            include "../view/order.php";
            break;
        case 'login':
            if (isset($_POST['btn_submit']) && ($_POST['btn_submit'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $user1 = checkUser($user, $pass);
                if (isset($user1) && $user1['id'] > 0) {
                    $_SESSION['id'] = $user1['id'];
                    $_SESSION['user'] = $user1['username'];
                    if ($user1['role'] == 1) {
                        $_SESSION['idadmin'] = $_SESSION['id'];
                        echo '<script type="text/javascript">
                                window.location = "admin.php"
                            </script>';
                    } else {
                        echo '<script type="text/javascript">
                            window.location = "index.php"
                        </script>';
                    }
                } else {
                    $txt_err_login = "tài khoản không tồn tại";
                }
            }
            include "../view/login.php";
            break;
        case 'register':
            if (isset($_POST['btn_register']) && ($_POST['btn_register'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $role = 0;
                $email = $_POST['email'];
                $id_user = addUser($user, $pass, $role, $email);
                // if ($_POST['dongy']) {
                //     $_SESSION['id'] = $id_user;
                //     $_SESSION['user'] = $user;
                // }
                if ($id_user > 0) {
                    echo '<script type="text/javascript">
                                window.location = "index.php"
                            </script>';
                } else {
                    $txt_err_register = "Tài khoản đã tồn tại!";
                }
            }
            include "../view/register.php";
            break;
        case 'logout':
            if (isset($_SESSION['id'])) {
                unset($_SESSION['id']);
            }
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
            }
            if (isset($_SESSION['idadmin'])) {
                unset($_SESSION['idadmin']);
            }
            echo '<script type="text/javascript">
                         window.location = "index.php?act=login"
                    </script>';

            break;
        case 'myaccount':
            if (isset($_SESSION['user'])) {
                if (isset($_POST['new_pass']) && $_POST['new_pass'] != '') {
                    $newpass = $_POST['new_pass'];
                    updateUser($newpass, $_SESSION['id']);
                    header('location: index.php?act=changepass');
                }
                $user = getUserById($_SESSION['id']);
                include '../view/my-account.php';
            } else {
                include '../view/login.php';
            }
            break;
        case 'changepass':
            include '../view/changepass.php';
            break;
        default:
            # code...
            break;
    }
} else {
    $hot_product = showProduct(1, 1, 0);
    $new_product = showProduct(0, 1, 0);
    $showcart = showcart(1);
    include "../view/home.php";
}

include "../view/footer.php";
