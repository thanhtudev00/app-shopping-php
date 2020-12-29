<?php
function showCatalog($home)
{
    $sql = "select * from catalog where 1";
    if ($home == 1) { // muốn show home thì cho $home = 1
        $sql .= " AND show_home=1";
    }
    $sql .= " ORDER BY name";
    return selectSQL($sql);
}
function insertCatalog($name, $mota)
{
    $sql = "insert into catalog (name, mo_ta) values ('$name', '$mota')";
    return addSQL($sql);
}
function delCatalog($id)
{
    $sql = "delete from catalog where id ='$id'";
    execSQL($sql, 0);
}
function selectCatalogById($id)
{
    $sql = "select * from catalog where id ='$id'";
    return select1SQL($sql);
}
function updateCatalog($name, $mota, $id)
{
    $sql = "update catalog set name='$name', mo_ta='$mota' where id='$id'";
    return execSQL($sql, 1);
}
