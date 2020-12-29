<?php
include '../Model/connect.php';
include '../Model/product.php';
include '../Model/path.php';
if (isset($_POST['idpreview'])) {
  $idpreview = $_POST['idpreview'];
  $product_detail = getProductById('id', $idpreview);

  $name = $product_detail['name'];
  $old_price = $product_detail['gia_cu'];
  $price = $product_detail['gia'];
  $noi_dung = $product_detail['noi_dung'];
  $mo_ta = $product_detail['mo_ta'];
  $size_fit = $product_detail['size'];
  $link = 'index.php?act=detail&id=' . $idpreview;
  $img = $path_img . $product_detail['hinh'];
  $idCatalog = $product_detail['id_catalog'];
  if (!is_file($img)) {
    $img = $path_img . "product-demo.jpg";
  }
}


?>

<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
      </button>
      <div class="row">
        <div class="col-lg-6">
          <div class="zakas-element-carousel nav-vertical-center">
            <div class="product-image">
              <div class="product-image--holder">
                <a href="<?= $link ?>">
                  <img src="<?= $img ?>" alt="Product Image" class="primary-image">
                </a>
              </div>
              <span class="product-badge sale">sale</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="modal-box product-summary">
            <div class="product-navigation text-right mb--20">
              <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
              <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
            </div>
            <div class="product-rating d-flex mb--20">
              <div class="star-rating star-three">
                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
              </div>
            </div>
            <h3 class="product-title mb--20"><?= $name ?></h3>
            <p class="product-short-description mb--25"><?= $noi_dung ?></p>
            <div class="product-price-wrapper mb--25">
              <span class="money"><?= $old_price ?></span>
              <span class="price-separator">-</span>
              <span class="money"><?= $price ?></span>
            </div>
            <form action="#" class="variation-form mb--30">
              <div class="product-color-variations d-flex align-items-center mb--20">
                <p class="variation-label">Color:</p>
                <div class="product-color-variation variation-wrapper">
                  <div class="variation">
                    <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                      <span class="product-color-variation-label">Red</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                      <span class="product-color-variation-label">Black</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                      <span class="product-color-variation-label">Pink</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                      <span class="product-color-variation-label">Blue</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="product-size-variations d-flex align-items-center mb--15">
                <p class="variation-label">Size:</p>
                <div class="product-size-variation variation-wrapper">
                  <div class="variation">
                    <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                      <span class="product-size-variation-label">S</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                      <span class="product-size-variation-label">M</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                      <span class="product-size-variation-label">L</span>
                    </a>
                  </div>
                  <div class="variation">
                    <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                      <span class="product-size-variation-label">XL</span>
                    </a>
                  </div>
                </div>
              </div>

            </form>
            <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
              <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                <label class="quantity-label" for="quick-qty">Quantity:</label>
                <div class="quantity">
                  <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                </div>
              </div>
              <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='cart.html'">
                Add To Cart
              </button>
            </div>
            <div class="product-footer-meta">
              <p><span>Category:</span>
                <a href="shop.html">Full Sweater</a>,
                <a href="shop.html">SweatShirt</a>,
                <a href="shop.html">Jacket</a>,
                <a href="shop.html">Blazer</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>