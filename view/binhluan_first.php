<?php
include '../Model/connect.php';
include '../Model/binhluan.php';
if (isset($_POST['idpro'])) {
    $id = $_POST['idpro'];
}
$dsbl = load_select_all($id);
$kq = '';
foreach ($dsbl as $bl) {
    extract($bl);
    $kq .= ' <img src="../view/assets/img/others/comment-1.jpg" alt="Review Avatar" class="review__avatar">
        <div class="review__text">
            <div class="d-flex flex-sm-row flex-column justify-content-between">
                <div class="review__meta">
                    <strong class="review__author">' . $bl['name'] . ' </strong>
                    <span class="review__dash">-' . $bl['email'] . '</span>
                    <span class="review__published-date">' . $bl['date'] . '</span>
                </div>

                <div class="product-rating">
                    <div class="star-rating star-five">
                        <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                    </div>
                </div>
            </div>
            <p class="review__description">' . $bl['noidung'] . '</p>
    </div>';
}
echo $kq;
