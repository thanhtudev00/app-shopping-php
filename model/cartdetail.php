<?php
function showcart($nam)
{
    if ($nam != "") {
        $sql = "select * from cart where 1";
    }
    return selectSQL($sql);
}
function insertcdt($idcart, $idpd, $hin, $na, $gi, $soluong)
{
    $sql = "insert into cart_detail(id_cart,id_product,hinh,name,gia,so_luong) values('$idcart','$idpd','$hin','$na','$gi','$soluong')";
    return addSQL($sql);
}
function showProductbysearchidc($searchidc)
{
    $sql = "select * from cart where id=" . $searchidc;
    return selectSQL($sql);
}
function showyourproduct($idpd)
{
    $sql = "select * from cart_detail where id_cart=" . $idpd;
    return selectSQL($sql);
}
function showcartdt($nama)
{
    if ($nama != "") {
        $sql = "select * from cart_detail where 1";
    }
    return selectSQL($sql);
}
function totalCart()
{
    $sql = "select count(id) from cart";
    return select1SQL($sql);
}
function sumCart()
{
    $sql = "SELECT SUM(total) FROM cart";
    return select1SQL($sql);
}
function delCart($id)
{
    $sql = "delete from cart where id ='$id'";
    execSQL($sql, 0);
}
function getAllCart()
{
    $sql = "select id,name,phone,adress,email,total,pttt,ttdh from cart";
    return selectSQL($sql);
}
function getAllcartdetail()
{
    $sql = "select id_cart,id_product,hinh,name,gia,so_luong from cart_detail";
    return selectSQL($sql);
}
function getCartdetail($id)
{
    $sql = "select id_cart,id_product,hinh,name,gia,so_luong from cart_detail where id_cart=".$id;
    return selectSQL($sql);
}
