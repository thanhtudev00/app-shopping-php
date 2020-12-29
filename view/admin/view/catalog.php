<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Danh Mục</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thêm
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="admin.php?act=catalog" method="POST">
                                <input type="hidden" name="catalogId" value="<?php if (isset($cata)) echo $cata['id'] ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php if (isset($cata)) echo $cata['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="mota" value="<?php if (isset($cata)) echo $cata['mo_ta'] ?>">
                                </div>
                                <input type="submit" class="btn btn-primary" name="btnLuu" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Danh sách danh mục
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
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($listCatalog as $c) {
                                        echo '
                                        <tr>

                                        <td>' . $c['id'] . '</td>
                                        <td>' . $c['name'] . '</td>
                                        <td>' . $c['mo_ta'] . '</td>

                                            <td>
                                                <a href="admin.php?act=catalog&edit_id=' . $c['id'] . '" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="admin.php?act=catalog&delete_id=' . $c['id'] . '" type="button" class="btn btn-danger btn-sm btn-delete">Delete</a>
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