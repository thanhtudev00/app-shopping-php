<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Comment</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Danh sách Comment
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form role="form" class="form-inline zt-form" id="zt-form" action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Nội dung</th>
                                        <th>Link Sản phẩm</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($listComment as $c) {
                                        $linksp = 'index.php?act=detail&id=' . $c['id_product'];
                                        echo '
                                        <tr>

                                            <td>' . $c['id'] . '</td>
                                            <td>' . $c['name'] . '</td>
                                            <td>' . $c['noidung'] . '</td>
                                            <td>  <a target="_blank" href="' . $linksp . '" type="button" class="btn btn-success btn-sm btn-delete">Đến sản phẩm</a>
                                            </td>
                                            <td>  <a href="admin.php?act=comment&delete_id=' . $c['id'] . '" type="button" class="btn btn-danger btn-sm btn-delete">Delete</a>
                                            </td>
                                        </tr>
            ';
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