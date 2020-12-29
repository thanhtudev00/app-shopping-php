<?php
function showBrands()
{
    $sql = "select * from brand";
    return selectSQL($sql);
}
function showAllBrands($home)
{
    $sql = "select * from brand where 1";
    if ($home == 1) {
        $sql .= " AND show_home=1";
    }
    $sql .= " ORDER BY name";
    return selectSQL($sql);
}
function getOrderOfBrand()
{
    $sql = "SELECT b.name, COUNT(p.id) FROM product as p INNER JOIN brand as b on p.id_brand = b.id INNER JOIN cart_detail as c on c.id_product = p.id GROUP BY b.name";
    return selectSQL($sql);
}
