<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản Lý Sản Phẩm</h1>
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
                            <form role="form" action="admin.php?act=product" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="productId" value="<?php if (isset($prod)) echo $prod['id']; ?>">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input class="form-control" name="name" value="<?php if (isset($prod)) echo $prod['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Catalog</label><br>
                                    <select name="catalogID">
                                        <option value="">---Choose catalog---</option>
                                        <?php
                                        foreach ($listCatalogs as $catalog) {
                                            $selected = '';
                                            if ($prod['id_catalog'] == $catalog['id']) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="' . $catalog['id'] . '"' . $selected . '>' . $catalog['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Brand</label><br>
                                    <select name="brandID">
                                        <option value="">---------Choose brand---------</option>
                                        <?php
                                        foreach ($listBrands as $b) {
                                            $selected = '';
                                            if ($prod['id_brand'] == $b['id']) {
                                                $selected = 'selected';
                                            }
                                            echo '<option value="' . $b['id'] . '"' . $selected . '>' . $b['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea name="detail" id="" cols="60" rows="10">
                                        <?php if (isset($prod)) echo $prod['description']; ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input type="file" class="form-control" name="productImage" value="<?php if (isset($prod)) echo $prod['image']; ?>">
                                </div>
                                <input type="submit" class="btn btn-primary" name="them" value="Submit">
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
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($listProducts as $p) {
                                        $img = $path_img . $p['hinh'];
                                        if (!is_file($img)) {
                                            $img = $path_img . "product-demo.jpg";
                                        }
                                        echo '
                                        <tr>

                                        <td>' . $p['id'] . '</td>
                                        <td>' . $p['name'] . '</td>
                                        <td><img src="' . $img . '" width= "50px"></td>

                                            <td>
                                                <a href="admin.php?act=product&edit_id=' . $p['id'] . '" type="button" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="admin.php?act=product&delete_id=' . $p['id'] . '" type="button" class="btn btn-danger btn-sm btn-delete">Delete</a>
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