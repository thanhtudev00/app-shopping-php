<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin.php"> Admin Page </a>
        <a target="_blank" style="position: absolute;right:0px;" class="navbar-brand" href="index.php">Go to Home Page </a>
    </div>
    <div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="admin.php?act=catalog">
                        <i class="fa  fa-th-large fa-fw"></i> Danh mục
                    </a>
                </li>
                <li>
                    <a href="admin.php?act=product">
                        <i class="fa fa-female fa-fw"></i> Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="admin.php?act=tag">
                        <i class="fa  fa-tags fa-fw"></i> Tag
                    </a>
                </li>
                <li>
                    <a href="admin.php?act=user">
                        <i class="fa  fa-user fa-fw"></i> Người dùng
                    </a>
                </li>
                <li>
                    <a href="admin.php?act=comment">
                        <i class="fa  fa-comment fa-fw"></i> Bình Luận
                    </a>
                </li>
                <li>
                    <a href="admin.php?act=cart">
                        <i class="fa  fa-shopping-cart fa-fw"></i> Đơn hàng
                    </a>
                </li>
                <li>
                    <a href="index.php?act=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /#side-menu -->
        </div>
        <!-- /.sidebar-collapse -->
    </div>
</nav>