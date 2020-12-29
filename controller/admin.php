<?php
ob_start();
session_start();
if (!isset($_SESSION['idadmin'])) {
    header('Location: index.php?act=login');
}
include "../model/connect.php";
include "../model/user.php";
include "../model/path.php";
include '../model/product.php';
include "../model/catalog.php";
include "../model/brands.php";
include "../model/tag.php";
include "../model/binhluan.php";
include "../model/cartdetail.php";
include "../view/admin/view/head.php";
include "../view/admin/view/nav.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'tag':
            if (isset($_POST['btnLuu']) && $_POST['name'] != '') {
                $name = $_POST['name'];
                $hot = $_POST['hot'];
                if (!empty($_POST['tagId'])) {
                    $id_edit = $_POST['tagId'];
                    updateTag($name, $hot, $id_edit);
                } else {
                    $id_tag = insertTag($name, $hot);
                }
            }
            if (isset($_GET['edit_id'])) {
                //load data
                $id = $_GET['edit_id'];
                $tag = selectTagById($id);
            }
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delTag($id);
                header('location: admin.php?act=tag');
            }

            $listTag = getTag(0);
            include '../View/admin/view/tag.php';
            break;
        case 'cart':
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delCart($id);
                header('location: admin.php?act=cart');
            }
            $listCart = getAllCart();
            include '../View/admin/view/cart.php';
            break;
        case 'cartdetail':
            if(isset($_GET['idcartdetail'])&& $_GET['idcartdetail']!=""){
                $id = $_GET['idcartdetail'];
                $cartdetail = getCartdetail($id);
            }
            include '../view/admin/view/cartdetail.php';
            break;
        case 'user':
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delUser($id);
                header('location: admin.php?act=user');
            }
            $listUser = getAllUser();
            include '../View/admin/view/user.php';
            break;
        case 'comment':
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delComment($id);
                header('location: admin.php?act=comment');
            }

            $listComment = getAllComment();
            include '../View/admin/view/comment.php';
            break;
        case 'catalog':
            if (isset($_POST['btnLuu'])) {
                $name = $_POST['name'];
                $mo_ta = $_POST['mota'];
                if (!empty($_POST['catalogId'])) {
                    $id_edit = $_POST['catalogId'];
                    updateCatalog($name, $mo_ta, $id_edit);
                } else {
                    $id_catalog = insertCatalog($name, $mo_ta);
                }
            }
            if (isset($_GET['edit_id'])) {
                //load data
                $id = $_GET['edit_id'];
                $cata = selectCatalogById($id);
            }
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delCatalog($id);
                header('location: admin.php?act=catalog');
            }

            $listCatalog = showCatalog(0);
            include '../View/admin/view/catalog.php';
            break;
        case 'product':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $id_catalog = $_POST['catalogID'];
                $id_brand = $_POST['brandID'];
                $name = $_POST['name'];
                $img = $_FILES['productImage']['name'];
                $path = $path_img . $img; // đường dẫn hình
                if ($_FILES['productImage']['name'] != '') {
                    move_uploaded_file($_FILES["productImage"]["tmp_name"], $path);
                }
                if (!empty($_POST['productId'])) {
                    $id_edit = $_POST['productId'];
                    updateProduct($name, $id_catalog, $id_brand, $img, $id_edit);
                } else {
                    $id_product = insertProduct($name, $id_catalog, $id_brand, $img);
                }
            }
            if (isset($_GET['edit_id'])) {
                //load data
                $id = $_GET['edit_id'];
                $prod = getProductById('product', $id);
            }
            if (isset($_GET['delete_id'])) {
                $id = $_GET['delete_id'];
                delProduct($id);
                header('location: admin.php?act=product');
            }
            $listCatalogs = showCatalog(0);
            $listBrands = showAllBrands(0);
            $listProducts = getAllProduct();
            include '../view/admin/view/product.php';
            break;
        default:
            include '../view/error.php';
            break;
    }
} else {
    //show chọn chức năng cần quản trị
    $totalProduct = totalProduct();
    $totalUser = totalUser();
    $totalCart = totalCart();
    $sumCart = sumCart();
    $productdOfcata = countProductOfCatalog();
    $orderOfBrand = getOrderOfBrand();
    include '../view/admin/view/home.php';
}
