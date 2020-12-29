<?php
    class cart{
        function addcart(){
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $idsp=$_POST['idsp'];
                $name=$_POST['name'];
                $price=$_POST['gia'];
                $img=$_POST['hinh'];
                $quantity=1;
                $vitri= 0;
                for($i=0; $i< sizeof($_SESSION['cart']); $i++){
                    if($_SESSION['cart'][$i][0]==$idsp){
                        $vitri = $i+1;
                        $vitri_quantity = $_SESSION['cart'][$i][4];
                        break;
                    }
                }
                if($vitri >0 ){
                    $quantity_new = $vitri_quantity + $quantity;
                    $_SESSION['cart'][$vitri-1][4] = $quantity_new;
                }else{
                    $item=[$idsp,$name,$price,$img,$quantity];
                    $_SESSION['cart'][]=$item;
                }
            }
        }
    }
?>