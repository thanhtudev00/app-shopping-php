<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Tag</h1>
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
                            <form role="form" action="admin.php?act=tag" method="POST">
                                <input type="hidden" name="tagId" value="<?php if (isset($tag)) echo $tag['id'] ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="<?php if (isset($tag)) echo $tag['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Set Hot</label><br>
                                    <select name="hot">
                                        <option value="0">No</option>
                                        <option value="1">Hot</option>
                                    </select>
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
                    Danh sách Tag
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
                                    foreach ($listTag as $t) {

                                        echo '
                                        <tr>

                                        <td>' . $t['id'] . '</td>
                                        <td>' . $t['name'] . '</td>


                                            <td>
                                                <a href="admin.php?act=tag&edit_id=' . $t['id'] . '" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="admin.php?act=tag&delete_id=' . $t['id'] . '" type="button" class="btn btn-danger btn-sm btn-delete">Delete</a>
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