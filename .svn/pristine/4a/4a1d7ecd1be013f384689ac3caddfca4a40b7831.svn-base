<?php
/*Template Name: Kiểm tra gói cước */

session_start();
include("captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kiểm tra gói cước</title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/loading.css" rel="stylesheet"/>
    <style>
        * {
            box-sizing: border-box;
        }
        body{
            background: #f0f0f0;
        }

        h1 {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .table{
            background: #f9f9f9;
        }
        .table thead tr td.name {
            font-size: 16px;
            padding: 10px 10px;
            margin-top: 0px;
            text-align: center;
            color: #ffffff;
            margin-bottom: 0px;
            background-color: #00918D;
        }

        td,
        th {
            padding: 5px 10px;
            border: 1px solid #cccccc;
            border-bottom: 1px solid #CCCCCC;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f0f0f0;
        }
        .btn-dangky {
            background-color: #ff9900;
            text-align: center;
            text-transform: uppercase;
            font-size: 16px;
            text-decoration: none !important;
            display: block;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #fff !important;
            width: 100px;
        }

        .img-captcha {
            height: 40px;
        }
    </style>
</head>

<body>
<div class="container">
    <div id="divLoading"></div>
    <h1>Kiểm tra gói cước</h1>
    <form class="form-horizontal" style="margin: 50px 0">
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Số điện thoại</label>
            <div class="col-sm-5">
                <input class="form-control" id="phone">
            </div>
        </div>
        <p id="phoneWarning" style="color: red;text-align: left;margin-left: 17%"></p>

        <div class="form-group">
            <label for="capcha" class="col-sm-2 control-label">Mã xác thực</label>
            <div class="col-sm-3">
                <input class="form-control" type="text" id="captcha" name="captcha" />
            </div>
            <div class="col-sm-2">
                <img class="img-captcha" src="<?php echo $_SESSION['captcha']['image_src'] ?>" alt="CAPTCHA code"/>
            </div>
        </div>
        <p id="captchaWarning" style="color: red;text-align: left;margin-left: 17%"></p>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <a href="#" class="btn btn-info " type="button" onclick="validate()">Kiểm tra gói cước</a>
            </div>

        </div>
    </form>
    <h5 id="warning"></h5>
    <div class="row" style="margin-top: 15px" id="packagesForm">

    </div>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery_3_3_1.min.js" crossorigin="anonymous"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/packages.js"></script>
</body>

</html>
