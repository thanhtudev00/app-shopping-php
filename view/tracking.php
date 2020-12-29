<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Tracking Order</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Tracking Order</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->


<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <div class="row justify-content-center"style="border: 2px solid skyblue; border-radius: 1.5%; padding: 1rem; " >
                <div class="col-lg-6">
                    <p class="heading-color mb--30 text-center">Your Order Tracking</p>
                    <?php
                    foreach ($showidcarta as $cam) {
                        $idc = $cam['id'];
                        $namec = $cam['name'];
                        $phonec = $cam['phone'];
                        $adressc = $cam['adress'];
                        $emailc = $cam['email'];
                        $totalc = $cam['total'];
                        $ptttc = $cam['pttt'];
                        $ttdh = 0;
                        if ($ttdh == 0) {
                            $ttdh = 'Dang giao hang';
                        } else {
                            $ttdh = 'dang yeu cau huy';
                        }
                        if ($ptttc == 1) {
                            $ptttc = 'Bank';
                        } elseif ($ptttc == 2) {
                            $ptttc = 'Credit Card';
                        } else {
                            $ptttc = 'Cash';
                        }
                        echo '<ul class="widget-list category-list" >            
                                    <li>Your Order ID : ' . $idc . '</li>
                                    <li class="text-left">Your Name: ' . $namec . '</li>
                                    <li>Phone: ' . $phonec . '</li>
                                    <li>Address: ' . $adressc . '</li>
                                    <li>Email: ' . $emailc . '</li>
                                    <li>PTTT: ' . $ptttc . '</li>
                                    <li>Prosess: ' . $ttdh . '</li>
                                    <li>Total: $' . $totalc . ' </li>
                                </ul>';
                    }
                    echo '<table class="table text-center">
                    <thead>
                        <tr>
                            <th>Id Product </th>
                            <th>Image</th>
                            <th class="text-left">Product</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>total</th>
                        </tr>
                    </thead>
                    <tbody id="cart">';
                    foreach($showyourcdt as $pro){
                        $idps = $pro['id_product'];
                        $hinh = $path_img . $pro['hinh'];
                        if (!is_file($hinh)) {
                            $hinh = $path_img . "product-demo.jpg";
                          }
                        $na = $pro['name'];
                        $pri = $pro['gia'];
                        $sol = $pro['so_luong'];
                        $to = $pri * $sol;
                        echo '<tr>
                                    <td class="product-remove text-left">
                                        ' . $idps . '
                                    </td>
                                    <td class="product-thumbnail text-left">
                                        <img src="' . $hinh . '" alt="Product Thumnail">
                                    </td>
                                    <td class="product-name text-left wide-column">
                                        <h3>
                                            <a href="#">'.$na .'</a>
                                        </h3>
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-wrapper">
                                            $' . $pri.  ' 
                                        </span>
                                    </td>
                                    <td class="product-quantity">
                                        <span class="product-price-wrapper">
                                            '.$sol.'
                                        </span>
                                    </td>
                                    <td class="product-total-price">
                                        <span class="product-price-wrapper">
                                            $' . $to . ' 
                                        </span>
                                    </td>
                                </tr>';
                    }
                    echo '<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="product-quantity">
                                <span class="product-price-wrapper">
                                    Ship fees: 
                                </span>
                            </td>
                            <td class="product-total-price">
                                <span class="product-price-wrapper">
                                    $1.99
                                </span>
                            </td>
                        </tr>';
                    echo '<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td class="product-quantity">
                                <span class="product-price-wrapper">
                                    Total: 
                                </span>
                            </td>
                            <td class="product-total-price">
                                <span class="product-price-wrapper">
                                    $'.$totalc.'
                                </span>
                            </td>
                        </tr>';
                    echo '</tbody>
                            </table>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Main Content Wrapper Start -->