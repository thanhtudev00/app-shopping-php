<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Requa.co | Rẻ quá cơ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="../view/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../view/assets/img/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../view/assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="../view/assets/css/main.css">
    <style>
        .search-box {
            position: absolute;
            top: 50%;
            left: 53%;
            transform: translate(-100%, -50%);
            background: rgb(246, 246, 246);
            ;
            height: 60px;
            border-radius: 40px;
            padding: 10px;
        }

        .search-box:hover>.search-txt {
            width: 240px;

        }



        .search-btn {
            color: #666666;
            float: right;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgb(246, 246, 246);
            ;
            display: flex;
            align-items: center;
        }

        .search-txt {
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color: #333;
            font-size: 16px;
            transition: 0.4s;
            line-height: 40px;
            width: 0px;
        }

        .search-txt:focus {
            width: 240px;
        }

        .search-btn i {
            margin-left: 25%;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="zakas-preloader active">
        <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="zakas-child zakas-bounce1"></div>
            <div class="zakas-child zakas-bounce2"></div>
            <div class="zakas-child zuka-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header">
            <div class="header-inner fixed-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-9 col-3">
                            <nav class="main-navigation">
                                <div class="site-branding">
                                    <a href="index.php" class="logo">
                                        <figure class="logo--transparent">
                                            <img src="../upload/logo1.png" alt="Logo">
                                        </figure>
                                        <figure class="logo--normal">
                                            <img src="../upload/logo1.png" alt="Logo" height="32px">
                                        </figure>

                                    </a>
                                </div>

                                <div class="mainmenu-nav d-none d-lg-block">

                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children <?php if (!isset($_GET['act'])) echo 'active'; ?>">
                                            <a href="index.php" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children <?php if (isset($_GET['act']) && $_GET['act'] == 'shop') echo 'active'; ?>">
                                            <a href="index.php?act=shop" class="mainmenu__link">
                                                <span class="mm-text">Shop</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children <?php if (isset($_GET['act']) && $_GET['act'] == 'contact') echo 'active'; ?>">
                                            <a href="index.php?act=contact" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                        <!-- <li class="mainmenu__item menu-item-has-children <?php if (isset($_GET['act']) && $_GET['act'] == 'order') echo 'active'; ?>">
                                            <a href="index.php?act=order" class="mainmenu__link">
                                                <span class="mm-text">Order tracking</span>
                                            </a>
                                        </li> -->

                                    </ul>
                                    <?php include '../view/searchbox.php'; ?>
                                </div>
                            </nav>

                        </div>

                        <div class="col-xl-2 col-lg-3 col-9 text-right">
                            <ul class="header-toolbar">
                                <!-- <li class="header-toolbar__item">
                                    <a href="wishlist.html" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-like"></i>
                                    </a>
                                </li> -->
                                <li class="header-toolbar__item mini-cart-item">
                                    <a href="#miniCart" class="header-toolbar__btn toolbar-btn mini-cart-btn">
                                        <i class="flaticon flaticon-shopping-cart"></i>
                                        <?php if (isset($_SESSION['cart'])) echo '<sup class="mini-cart-count">' . count($_SESSION['cart']) . '</sup>'; ?>
                                    </a>
                                </li>
                                <li class="header-toolbar__item user-info">
                                    <a style="font-size: 14px;" href="index.php?act=myaccount" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-user"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <?php
                                        if (isset($_SESSION['id']) && $_SESSION['id'] > 0) {
                                            $link = 'index.php?act=myaccount';
                                            if (isset($_SESSION['idadmin'])) {
                                                $link = 'admin.php';
                                            }
                                            echo '<li><a href="' . $link . '" class="login-panel"><i class="fa fa-user"></i> ' . $_SESSION['user'] . '</a></li>
                                            <li><a href="index.php?act=logout">Thoát</a></li>';
                                        } else {
                                        ?>
                                            <li>
                                                <a href="index.php?act=register">Sign Up</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=login">Log In</a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>



        </header>