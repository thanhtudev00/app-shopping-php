<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý User</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Danh sách User
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($listUser as $u) {

                                        echo '
                                        <tr>

                                        <td>' . $u['id'] . '</td>
                                        <td>' . $u['name'] . '</td>
                                            <td>  <a href="admin.php?act=user&delete_id=' . $u['id'] . '" type="button" class="btn btn-danger btn-sm btn-delete">Delete</a>
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