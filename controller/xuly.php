<?php
    session_start();
    $quantity = $_POST['quantity'];
    $vitri = $_POST['vitri'];
    $kq="";
    if($quantity > 0){
        for($i=0; $i < sizeof($_SESSION['cart']); $i++){
            if($i == $vitri){
                array_splice($_SESSION['cart'][$i],4,1,$quantity);
                break;
            }
        }
    }
    $tong = 0;
    for($i=0; $i < sizeof($_SESSION['cart']); $i++)
    {
        $idsp =$_SESSION['cart'][$i][0];
        $total=$_SESSION['cart'][$i][2]*$_SESSION['cart'][$i][4];
        $del = "<a href='index.php?act=cart&del=".$idsp."'><i class='flaticon flaticon-cross'></i></a>";
        $kq .= '<tr>
                <td class="product-remove text-left">
                    '.$del.'
                </td>
                <td class="product-thumbnail text-left">
                    <img src="'.$_SESSION['cart'][$i][3].'" alt="Product Thumnail">
                </td>
                <td class="product-name text-left wide-column">
                    <h3>
                        <a href="#">'.$_SESSION['cart'][$i][1].'</a>
                    </h3>
                </td>
                <td class="product-price">
                    <span class="product-price-wrapper">
                        '.$_SESSION['cart'][$i][2].'
                    </span>
                </td>
                <td class="product-quantity">
                    <div class="quantity">
                        <input type="number" class="quantity-input" onchange="clickxuly(this,'.$i.')" name="quantity" id="quantity" value="'.$_SESSION['cart'][$i][4].'">
                    </div>
                </td>
                <td class="product-total-price">
                    <span class="product-price-wrapper">
                        '.$total.'
                    </span>
                </td>
            </tr>';

            $tong = $total + $tong;
    }
    echo $kq;
?>