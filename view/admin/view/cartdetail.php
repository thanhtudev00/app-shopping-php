<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Đơn Hàng</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Danh sách đơn hàng chi tiết
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form role="form" class="form-inline zt-form" id="zt-form" action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Cart</th>
                                        <th>ID Product</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>

                                    </tr>
                                </thead>
                                
                                <tbody>

                                    <?php
                                    if(isset($_GET['idcartdetail']) && $_GET['idcartdetail']!=""){
                                        foreach($cartdetail as $d){
                                            $hinh = $path_img . $d['hinh'];
                                            if (!is_file($hinh)) {
                                                $hinh = $path_img . "product-demo.jpg";
                                              }
                                            echo '
                                            <tr>
                                                <td>' . $d['id_cart'] . '</td>
                                                <td>' . $d['id_product'] . '</td>
                                                <td><img src="' . $hinh . '" width="50px"></td>
                                                <td>'.$d['name'].'</td>
                                                <td>'.$d['gia'].'</td>
                                                <td>' . $d['so_luong'] . '</td>
                                            </tr>
                                            ';
                                        } 
                                    }
   
                                    ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>