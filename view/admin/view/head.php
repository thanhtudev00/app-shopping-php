<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | L-SHOP</title>
    <link href="../View/admin/view/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/admin/view/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../View/admin/view/css/sb-admin.css" rel="stylesheet">
    <link href="../View/admin/view/css/custom.css" rel="stylesheet">
    <link rel="icon" href="../view/images/header-logo.png" type="image/gif" sizes="16x16">
    <style>
        .containershow {
            position: relative;
            width: 1000px;
            height: 300px;
            margin: 0px auto;

        }

        .containershow .box {
            position: relative;
            width: calc(250px - 30px);
            height: calc(300px - 30px);
            background: #000;
            float: left;
            margin: 15px;
            box-sizing: border-box;
            overflow: hidden;
            border-radius: 10px;

        }

        .containershow .box .icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f00;
            transition: 0.5s;
            z-index: 1;
        }

        .containershow .box:hover .icon {
            top: 20px;
            left: calc(50% - 40px);
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .containershow .box .icon .fa {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px;
            transition: 0.5s;
            color: #fff;
        }

        .containershow .box:hover .icon .fa {
            font-size: 40px;
        }

        .containershow .box .content {
            width: 100%;
            position: absolute;
            top: 100%;
            height: calc(100% - 100px);
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
            transition: 0.5s;
            opacity: 0;
        }

        .containershow .box:hover .content {

            top: 100px;
            opacity: 1;
        }

        .containershow .box .content h3 {
            margin: 0 0 10px;
            padding: 0;
            color: #fff;
            font-size: 28px;
        }

        .containershow .box .content p {

            margin: 0;
            padding: 0;
            color: #fff;
            font-size: 24px;
            text-align: center;
        }

        .clr {
            clear: both;
        }

        .containershow .box:nth-child(1) .icon {
            background: #319635;
        }

        .containershow .box:nth-child(1) {
            background: #4caf50;
        }

        .containershow .box:nth-child(2) .icon {
            background: #d03852;
        }

        .containershow .box:nth-child(2) {
            background: #f54967;
        }

        .containershow .box:nth-child(3) .icon {
            background: #23798e;
        }

        .containershow .box:nth-child(3) {
            background: #328fa5;
        }

        .containershow .box:nth-child(4) .icon {
            background: #a0b03a;
        }

        .containershow .box:nth-child(4) {
            background: #bccd4e;
        }
    </style>
</head>

<body>
    <div id="wrapper">