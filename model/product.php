<?php
include_once "../global.php";
function showProduct($hot, $sort = 1, $page, $c = 0) // muốn show product mới nhất thì hot != 1 là được
{
    global $soluongsp;
    if (!isset($page) || ($page == 0)) {
        $fr = 0;
    } else {
        $fr = ($page - 1) * $soluongsp;
    }
    $to = $soluongsp;
    $sql = "select * from product where 1";
    if ($hot == 1) {
        $sql .= " AND hot = 1";
    }
    if ($sort == 1) {
        $sql .= " ORDER BY name ASC";
    } elseif ($sort == 2) {
        $sql .= " ORDER BY name DESC";
    } elseif ($sort == 3) {
        $sql .= " ORDER BY gia ASC";
    } else {
        $sql .= " ORDER BY gia DESC";
    }
    if ($c == 0) {
        $sql .= " limit " . $fr . "," . $to;
    }
    return selectSQL($sql);
}
function phantrang($page)
{
    global $soluongsp;
    $tongsoluong = count(showProduct(0, 1, 0, 1));
    $sotrang = ceil($tongsoluong / $soluongsp);
    $phantrang = "";
    for ($i = 1; $i <= $sotrang; $i++) {
        $linkpage = "index.php?act=shop&page=" . $i;
        if ($i == $page) {
            $phantrang .= '<li><span class="current page-number">' . $i . '</span></li>';
        } else {
            $phantrang .= '<li><a href="' . $linkpage . '" class="page-number">' . $i . '</a></li>';
        }
    }
    return $phantrang;
}
function showProductbysearch($search)
{
    $sql = "select * from product where name";
    if ($search != "") {
        $sql .= " like '%" . $search . "%'";
    }
    $sql .= " ORDER BY id DESC";
    return selectSQL($sql);
}
function getProductById($cot = '', $id, $sort = 1)
{
    if ($cot == 'brand') { //nhập $cot = 'brand' load theo id brand
        $sql = "select * from product where id_brand=" . $id;
        if ($sort == 1) {
            $sql .= " ORDER BY name ASC";
        } elseif ($sort == 2) {
            $sql .= " ORDER BY name DESC";
        } elseif ($sort == 3) {
            $sql .= " ORDER BY gia ASC";
        } else {
            $sql .= " ORDER BY gia DESC";
        }
        return selectSQL($sql);
    } elseif ($cot == 'catalog') { //nhập $cột = 'catalog' load theo id catalog
        $sql = "select * from product where id_catalog=" . $id;
        if ($sort == 1) {
            $sql .= " ORDER BY name ASC";
        } elseif ($sort == 2) {
            $sql .= " ORDER BY name DESC";
        } elseif ($sort == 3) {
            $sql .= " ORDER BY gia ASC";
        } else {
            $sql .= " ORDER BY gia DESC";
        }
        return selectSQL($sql);
    } else { //nhập $cột = 'id' load ra sản phẩm theo id sản phẩm
        $sql = "select * from product where id=" . $id;
        return select1SQL($sql);
    }
}
function insertProduct($name, $id_catalog, $id_brand, $img)
{
    $sql = "insert into product (name, id_catalog, id_brand, hinh) values ('$name', '$id_catalog', '$id_brand', '$img')";
    return addSQL($sql, 0);
}
function updateProduct($name, $id_catalog, $id_brand, $img, $id)
{
    $sql = "update product set name='$name', id_catalog='$id_catalog', id_brand='$id_brand', hinh='$img' where id='$id'";
    return execSQL($sql, 1);
}
function delProduct($id)
{
    $sql = "delete from product where id ='$id'";
    execSQL($sql, 0);
}
function getAllProduct()
{
    $sql = "select * from product";
    return selectSQL($sql);
}
function totalProduct()
{
    $sql = "select count(id) from product";
    return select1SQL($sql);
}
function countProductOfCatalog()
{
    $sql = "SELECT c.name, COUNT(p.id) FROM product as p INNER JOIN catalog as c on p.id_catalog = c.id GROUP BY id_catalog";
    return selectSQL($sql);
}
