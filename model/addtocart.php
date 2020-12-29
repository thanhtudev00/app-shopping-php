<?php
    function themdonhang($name,$phone,$adress,$email,$total,$pttt){
        $sql="insert into cart(name, phone, adress, email,total, pttt) values ('$name', '$phone', '$adress', '$email','$total', '$pttt')";
        return addSQL($sql);
    }
?>