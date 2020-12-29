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
                    Danh sách đơn hàng
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form role="form" class="form-inline zt-form" id="zt-form" action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Cart</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Total</th>
                                        <th>Payment</th>
                                        <th>Detail</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                
                                <tbody>

                                    <?php
                                    foreach ($listCart as $c) {
                                        //detail

                                        //payment

                                        if ($c['pttt'] == 1) {
                                            $payment = 'Bank';
                                        } elseif ($c['pttt'] == 2) {
                                            $payment = 'Credit Card';
                                        } elseif ($c['pttt'] == 3) {
                                            $payment = 'Credit Card';
                                        } else {
                                            $payment = 'COD';
                                        }
                                        //status
                                        $status = '<label style="padding:3px; border-radius: 5px" class="btn-success ">Done</label>';
                                        if ($c['ttdh'] == 1) {
                                            $status = '<label style="padding:3px; border-radius: 5px" class="btn-warning ">Processing</label>';
                                        }
                                        echo '
                                        <tr>
                                            <td>' . $c['id'] . '</td>
                                            <td>' . $c['name'] . '</td>
                                            <td>'.$c['phone'].'</td>
                                            <td>' . $c['adress'] . '</td>
                                            <td>' . $c['email'] . '</td>
                                            <td>' . $c['total'] . '</td>
                                            <td>' . $payment . '</td>
                                            <td>
                                                <a href="admin.php?act=cartdetail&idcartdetail='.$c['id'].'">Detail</a>
                                            </td> 
                                            <td>' . $status . '</td>
               
                                        </tr>';
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