<div id="page-wrapper">
    <div class="containershow">
        <div class="box">
            <div class="icon">
                <i class="fa fa-female fa-fw"></i>
            </div>

            <div class="content">
                <h3><?php echo $totalProduct['count(id)'] ?></h3>
                <p>Sản phẩm</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa  fa-shopping-cart fa-fw"></i>
            </div>

            <div class="content">
                <h3><?php echo $totalCart['count(id)'] ?></h3>
                <p>Tổng đơn hàng</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa  fa-user fa-fw"></i>
            </div>

            <div class="content">
                <h3><?php echo $totalUser['count(id)'] ?></h3>
                <p>Người dùng</p>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <i class="fa  fa-dollar fa-fw"></i>
            </div>

            <div class="content">
                <h3>$<?php echo $sumCart['SUM(total)'] ?></h3>
                <p>Tổng thu nhập</p>
            </div>
        </div>


    </div>
    <div style="margin-top:50px;" class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Liệt kê sản phẩm theo danh mục
                </div>
                <div class="panel-body">
                    <!-- start -->
                    <?php
                    $dataPoints = array();
                    foreach ($productdOfcata as $key => $value) {
                        array_push($dataPoints, array("label" => $value['name'], "y" => $value['COUNT(p.id)']));
                    }
                    ?>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    <!-- end -->
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Thương hiệu được mua nhiều nhất
                </div>
                <div class="panel-body">
                    <!-- start -->
                    <?php
                    $dataPoints1 = array();
                    foreach ($orderOfBrand as $value) {
                        array_push($dataPoints1, array("label" => $value['name'], "y" => $value['COUNT(p.id)']));
                    }

                    // $dataPoints1 = array(
                    //     array("label" => "Education", "y" => 284935),
                    //     array("label" => "Entertainment", "y" => 256548),
                    //     array("label" => "Lifestyle", "y" => 245214),
                    //     array("label" => "Business", "y" => 233464),
                    //     array("label" => "Music & Audio", "y" => 200285),
                    //     array("label" => "Personalization", "y" => 194422),
                    //     array("label" => "Tools", "y" => 180337),
                    //     array("label" => "Books & Reference", "y" => 172340),
                    //     array("label" => "Travel & Local", "y" => 118187),
                    //     array("label" => "Puzzle", "y" => 107530)
                    // );
                    ?>
                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    <!-- end -->
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title: {
                text: "Number of products "
            },
            subtitles: [{
                text: "by each catalog"
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Top Brand"
            },
            axisY: {
                title: "Total orders"
            },
            data: [{
                type: "column",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart1.render();
    }
</script>