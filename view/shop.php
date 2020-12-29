<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Shop</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
                    <div class="shop-toolbar mb--50">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--50 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <?php
                                        if ($sortCase == 3) {
                                            echo '';
                                        } else {
                                        ?>

                                            <select id="sort" name="sort" class="product-ordering__select nice-select" onchange="location = this.value;">

                                                <?php
                                                if ($sortCase == 1) {
                                                    $linkCata = 'index.php?act=shop&catalog=' . $id;
                                                ?>
                                                    <option value="<?= $linkCata ?>&sortcata=1" <?= ($sortcata == 1) ? 'selected' : '' ?>>Name, A to Z</option>
                                                    <option value="<?= $linkCata ?>&sortcata=2" <?= ($sortcata == 2) ? 'selected' : '' ?>>Name, Z to A</option>
                                                    <option value="<?= $linkCata ?>&sortcata=3" <?= ($sortcata == 3) ? 'selected' : '' ?>>Price, low to high</option>
                                                    <option value="<?= $linkCata ?>&sortcata=4" <?= ($sortcata == 4) ? 'selected' : '' ?>>Price, high to low</option>
                                                <?php
                                                } elseif ($sortCase == 2) {
                                                    $linkBrand = 'index.php?act=shop&brand=' . $id;
                                                ?>
                                                    <option value="<?= $linkBrand ?>&sortbrand=1" <?= ($sortbrand == 1) ? 'selected' : '' ?>>Name, A to Z</option>
                                                    <option value="<?= $linkBrand ?>&sortbrand=2" <?= ($sortbrand == 2) ? 'selected' : '' ?>>Name, Z to A</option>
                                                    <option value="<?= $linkBrand ?>&sortbrand=3" <?= ($sortbrand == 3) ? 'selected' : '' ?>>Price, low to high</option>
                                                    <option value="<?= $linkBrand ?>&sortbrand=4" <?= ($sortbrand == 4) ? 'selected' : '' ?>>Price, high to low</option>

                                                <?php
                                                } else {
                                                ?>
                                                    <option value="index.php?act=shop&sort=1" <?= ($sort == 1) ? 'selected' : '' ?>>Name, A to Z</option>
                                                    <option value="index.php?act=shop&sort=2" <?= ($sort == 2) ? 'selected' : '' ?>>Name, Z to A</option>
                                                    <option value="index.php?act=shop&sort=3" <?= ($sort == 3) ? 'selected' : '' ?>>Price, low to high</option>
                                                    <option value="index.php?act=shop&sort=4" <?= ($sort == 4) ? 'selected' : '' ?>>Price, high to low</option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                        <?php
                                        }
                                        ?>



                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                                    <p class="product-pages">Showing : <?= count($product) ?> products</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products">
                        <div class="row">
                            <!-- show product -->
                            <?php
                            foreach ($product as $p) {
                                $id = $p['id'];
                                $name = $p['name'];
                                $old_price = $p['gia_cu'];
                                $price = $p['gia'];
                                $img = $path_img . $p['hinh'];
                                if (!is_file($img)) {
                                    $img = $path_img . "product-demo.jpg";
                                }
                                $link = "index.php?act=detail&id=" . $p['id'];
                                echo '<div class="col-xl-4 col-sm-6 mb--50">
                                <div class="zakas-product">
                                    <div class="product-inner">
                                        <figure style="width:270px;height:370px;" class="product-image">
                                            <a href="' . $link . '">
                                                <img src="' . $img . '" alt="Products">
                                            </a>
                                            <div class="zakas-product-action">
                                                <div class="product-action d-flex">
                                                    <div class="product-size">
                                                        <a href="" class="action-btn">
                                                            <span class="current">XL</span>
                                                        </a>
                                                    </div>
                                                    <div class="product-color">
                                                        <a href="" class="action-btn">
                                                            <span class="current abbey">Abbey</span>
                                                        </a>

                                                    </div>
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                        <span style="display:none;">' . $p['id'] . '</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--15">
                                                <a href="' . $link . '">' . $name . '</a>
                                            </h3>
                                            <div class="product-price-wrapper mb--30">
                                                <span class="money">$' . $price . '</span>
                                                <span class="money-separator">-</span>
                                                <span style="text-decoration: line-through;" class="money">$' . $old_price . '</span>
                                            </div>
                                            <form action="index.php?act=cart" method="post">
                                                <input type="hidden" name="stay" value="1">
                                                <input type="hidden" name="idsp" value="' . $id . '">
                                                <input type="hidden" name="name" value="' . $name . '">
                                                <input type="hidden" name="gia" value="' . $price . '">
                                                <input type="hidden" name="hinh" value="' . $img . '">
                                                <input type="submit" name="submit" value="Add To Cart " class="btn btn-small btn-bg-sand btn-color-dark">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <nav class="pagination-wrap">
                        <ul class="pagination">
                            <?php
                            if (isset($page)) {
                                echo '' . $phantrang . '';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <aside class="shop-sidebar">
                        <!-- <div class="shop-widget mb--40">
                            <form action="index.php?act=showsearch" method="POST">
                                <input style="margin-bottom: 5px;" type="text" name="search" placeholder="Nhập tìm kiếm">
                                <input type="submit" name="" value="Tìm kiếm">
                            </form>
                        </div> -->
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Category</h3>
                            <ul class="widget-list category-list">
                                <?php
                                foreach ($all_catalogs as $c) {

                                    $id = $c['id'];
                                    echo '
                                        <li>
                                        <a href="index.php?act=shop&catalog=' . $id . '">
                                            <span class="category-title">' . $c['name'] . '</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Brand</h3>
                            <ul class="widget-list brand-list">
                                <?php
                                foreach ($brand as $b) {
                                    $id = $b['id'];
                                    echo '
                                        <li>
                                        <a href="index.php?act=shop&brand=' . $id . '">
                                            <span>' . $b['name'] . '</span>
                                            <strong class="color--red font-weight-medium"></strong>
                                        </a>
                                    </li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h3 class="widget-title mb--25">Tag</h3>
                            <div class="tagcloud">
                                <?php
                                foreach ($tag as $t) {
                                    $name = $t['name'];
                                    $link = 'index.php?act=shop&search=' . $name;
                                    echo '<a href="' . $link . '">' . $name . '</a>';
                                }
                                ?>


                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>