<!DOCTYPE html>
<html lang="vi-vn">
<head>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/vinaphone.ico">
    <title><?php
        if (is_single()) {
            echo get_the_title();
        } elseif (is_category()) {
            echo "Chuyên mục: " . get_the_category()[0]->name;
        } elseif (is_page()) {
            echo get_the_title();
        } elseif (is_home()) {
            echo "Trang Đăng ký 3G, 4G nhà mạng Vinaphone";
        }

        ?></title>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="uORKkIAUiNDvx5M680kYaVsho8CTZQcKQedeX0Oncys"/>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106641788-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-106641788-1');
    </script>
    <meta property="fb:app_id" content="114113199505314">
	<meta property="og:url" content="url" />
	<meta property="og:title" content="TITLE" />
	<meta property="og:description" content="DESC" />
	<meta property="og:image" content="IMG" />
	<meta property="og:type" content="Website" />
	<meta property="og:site_name" content="dangky3g4g.com"/>
	
    <link rel="stylesheet" id="mh-magazine-lite-css" href="<?php echo get_template_directory_uri() ?>/image2/style.css"
          type="text/css" media="all">
    <link rel="stylesheet" id="mh-newsmagazine-css"
          href="<?php echo get_template_directory_uri() ?>/image2/style(1).css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>
/style-chung.css"/>
    <link rel="stylesheet" id="mh-font-awesome-css"
          href="<?php echo get_template_directory_uri() ?>/image2/font-awesome.min.css" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylevinaphone.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type='text/javascript' integrity=''
            src='<?php echo get_home_url(); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
    <link rel="alternate" href="<?php echo get_home_url() ?>" hreflang="vn-vi">
    <?php
        wp_head();
    ?>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "pub-8063653078243405",enable_page_level_ads: true});
</script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mobile-detect.min.js"></script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WN5WRP');</script>
<!-- End Google Tag Manager -->
    <script type="text/javascript" charset="utf-8" async defer>
        $(function () {
            $('.menu-line').click(function () {
                $('.navigate ul').slideToggle();
            })
        });
        $(function () {
            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
            if (!isMobile) {

                $('.btn-dangky').click(function () {
                    var cuphap = $(this).attr('cuphap');
                    var dau_so = $(this).attr('dau_so');
                    if ($(this).attr("href") != "#") {
                        alert('Soạn tin: ' + cuphap + ' gửi đến ' + dau_so);
                    }
                });
                $('.img-dangky').click(function () {
                    var cuphap = $(this).attr('cuphap');
                    var dau_so = $(this).attr('dau_so');
                    if ($(this).attr("href") != "#") {
                        alert('Soạn tin: ' + cuphap + ' gửi đến ' + dau_so);
                    }
                });
            }
        })
    </script>
    <style type="text/css">
        img.wp-smiley {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        @media (max-width: 767px) {
            .navigate ul > li > ul > li > a {
                display: none;
            }
        }

        img.imgs {
            margin: 5px 5px 50px 5px;
            max-width: 100%;
            max-height: 100%;
        }

        span.stt-icon {
            width: 34px;
            text-align: center;
            font-size: 1.1em;
            font-family: Arial, Tahoma;
            font-weight: bold !important;
            border-radius: 17px;
            -moz-border-radius: 17px;
            -webkit-border-radius: 17px;
            border: 1px solid #e4e4e4;
            float: left;
            display: block;
        }

        #noidung {
            flex: none;
            margin: 0;
            float: left;
            box-sizing: border-box;
            padding-left: 10px;
        }

        .chutrangnenxanh {
            display: inline-block;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            padding: 10px 15px;
            background: #005a8c;
        }

        .regbox {
            margin: 5px 5px 5px 5px;
        }

        #cotben {
            flex: none;
            margin: 0;
            float: left;
            box-sizing: border-box;
            padding-left: 10px;
        }

        p {
            margin-right: 10px;
        }

        .muahang-btn {
            text-transform: uppercase;
            background: #00a1e5;
            cursor: pointer;
            display: inline-block;
            color: #ffffff;
            padding: 7px 5px;
            font-size: 12px;
            margin: 0;
            border-radius: 4px;
            box-shadow: 0 2px 1px rgba(66, 66, 66, 0.1), 0 1px 3px rgba(66, 66, 66, 0.3);
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .simdata-menu {
            background-image: url(<?php echo get_template_directory_uri() ?>/image2/icon-hot.gif);
            background-repeat: no-repeat;
            background-position: 64px 8px;
            padding-right: 24px;
        }

    </style>
    <!--    <div id="fb-root"></div>-->
    <!--    <script>(function(d, s, id) {-->
    <!--            var js, fjs = d.getElementsByTagName(s)[0];-->
    <!--            if (d.getElementById(id)) return;-->
    <!--            js = d.createElement(s); js.id = id;-->
    <!--            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';-->
    <!--            fjs.parentNode.insertBefore(js, fjs);-->
    <!--        }(document, 'script', 'facebook-jssdk'));</script>-->
    <!--    --><?php //wp_head(); ?>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=114113199505314&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
	

</head>

<body <?php echo body_class(); ?> >
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WN5WRP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '114113199505314',
            xfbml: true,
            version: 'v2.8'
        });
        FB.AppEvents.logPageView();
    };
</script>
<div class="wrap">
    <section id="header" class="header">
        <div class="top-bar">
            <div class="container text-right">
                <div class="menu-line hidden-sm hidden-lg hidden-md col-xs-3">
                    <div class="button">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="carrers-icon pull-left">
                    <a href="<?php echo home_url(); ?>/" class="icon icon-vinaphone">
                    </a>
                    <a id="hover" class="icon mobiphoneicon" href="<?php echo home_url(); ?>/mobifone">
                    </a>
                    <a id="hover-viettel" class="icon" href="<?php echo home_url(); ?>/viettel"
                       style="background-image: url('<?php echo get_template_directory_uri(); ?>/viettel.png');">
                    </a>
                </div>
                <!--                       <div class="form-inline pull-right">
                                          <form action="search" class="form-group">
                                              <div class="input-group no-radius">
                                                  <input name="q" class="form-control" type="text" placeholder="Nhập nội dung tìm kiếm">
                                                  <span class="input-group-btn"><button class="btn btn-default btn-mod"><i class="fa fa-search"></i></button></span>
                                              </div>
                                          </form>
                                      </div> -->
                <div class="clearfix hidden-xs"></div>
                <div class="hidden-sm logo-mobile hidden-lg hidden-md text-center col-xs-6">
                    <a href="<?php echo home_url(); ?>"></a>
                </div>
                <div class="search-btn hidden-sm hidden-lg hidden-md col-xs-3">
                    <div class="button">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigate" id="navigate">
            <div class="over hidden-xs"></div>
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="logo hidden-xs">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png"/>
                </a>
                <ul class="menu-nav">
                    <?php
                    //include('menu-top-'.$page_name.'.php');
                    ?>
                    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'menu')); ?>
                </ul>

            </div>
        </div>
    </section>
