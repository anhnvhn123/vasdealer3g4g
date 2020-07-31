<?php

global $list_post;

$list_post = array();

global $nhamang;

include('cau-hinh-chung.php');

include('functions/get-post.php');

include('mobile_detect.php');

if (function_exists('add_theme_support')) {

    add_theme_support('menus');

    add_theme_support('post-thumbnails');

    add_image_size('size1', 300, 300, true);
    add_image_size('size2', 273, 182, true);
    add_image_size('size3', 100, 80, true);
    add_image_size('size4', 76, 51, true);
    add_image_size('single-slide', 750, 500, true);

    add_theme_support('automatic-feed-links');

    load_theme_textdomain('html5blank', get_template_directory() . '/languages');

}


add_filter('widget_text', 'do_shortcode');


//HỦY CROP ẢNH NHIỀU SIZE

function remove_unused_image_size($sizes)
{

    unset($sizes['thumbnail']);

    unset($sizes['medium']);

    unset($sizes['large']);

//unset( $sizes['post-thumbnail']);


    return $sizes;

}

add_filter('intermediate_image_sizes_advanced', 'remove_unused_image_size');


register_nav_menus(

    array('main-menu' => __('Main Menu', 'dulich'))

);

register_nav_menus(

    array('footer-menu' => __('danh muc footer', 'dulich'))

);

register_nav_menus(

    array('footer2-menu' => __('danh muc footer 2', 'dulich'))

);

register_nav_menus(

    array('footer3-menu' => __('danh muc footer 3', 'dulich'))

);


function donvi($donvi)
{
    switch ($donvi) {
        case '0':
            return 'cây';
            break;
        case '1':
            return 'gói';
            break;
        case '2':
            return 'cái';
            break;
        default:
            return 'cây';
            break;
    }
}

function product_price($priceFloat)
{
    $symbol = ' đ';
    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price;
}


add_filter('redirect_canonical', 'custom_disable_redirect_canonical');
function custom_disable_redirect_canonical($redirect_url)
{
    if (is_paged() && is_singular()) $redirect_url = false;
    return $redirect_url;
}

function cut($mota, $limit = 15)
{
    $excerpt = explode(' ', $mota, $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

function bo_dau($str)
{
    $str = preg_replace(“ / (à | á | ạ | ả | ã | â | ầ | ấ | ậ | ẩ | ẫ | ă | ằ | ắ | ặ | ẳ | ẵ) / ”, ‘a’, $str);
    $str = preg_replace(“ / (è | é | ẹ | ẻ | ẽ | ê | ề | ế | ệ | ể | ễ) / ”, ‘e’, $str);
    $str = preg_replace(“ / (ì | í | ị | ỉ | ĩ) / ”, ‘i’, $str);
    $str = preg_replace(“ / (ò | ó | ọ | ỏ | õ | ô | ồ | ố | ộ | ổ | ỗ | ơ | ờ | ớ | ợ | ở | ỡ) / ”, ‘o’, $str);
    $str = preg_replace(“ / (ù | ú | ụ | ủ | ũ | ư | ừ | ứ | ự | ử | ữ) / ”, ‘u’, $str);
    $str = preg_replace(“ / (ỳ | ý | ỵ | ỷ | ỹ) / ”, ‘y’, $str);
    $str = preg_replace(“ / (đ) / ”, ‘d’, $str);
    $str = preg_replace(“ / (À | Á | Ạ | Ả | Ã | Â | Ầ | Ấ | Ậ | Ẩ | Ẫ | Ă | Ằ | Ắ | Ặ | Ẳ | Ẵ) / ”, ‘A’, $str);
    $str = preg_replace(“ / (È | É | Ẹ | Ẻ | Ẽ | Ê | Ề | Ế | Ệ | Ể | Ễ) / ”, ‘E’, $str);
    $str = preg_replace(“ / (Ì | Í | Ị | Ỉ | Ĩ) / ”, ‘I’, $str);
    $str = preg_replace(“ / (Ò | Ó | Ọ | Ỏ | Õ | Ô | Ồ | Ố | Ộ | Ổ | Ỗ | Ơ | Ờ | Ớ | Ợ | Ở | Ỡ) / ”, ‘O’, $str);
    $str = preg_replace(“ / (Ù | Ú | Ụ | Ủ | Ũ | Ư | Ừ | Ứ | Ự | Ử | Ữ) / ”, ‘U’, $str);
    $str = preg_replace(“ / (Ỳ | Ý | Ỵ | Ỷ | Ỹ) / ”, ‘Y’, $str);
    $str = preg_replace(“ / (Đ) / ”, ‘D’, $str);
    //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
    return $str;
}

function new_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu" /', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'new_submenu_class');

function phuongtien($phuongtien, $label = '')
{
    switch ($phuongtien) {
        case '1':
            return '<i class="fa fa-car" title = "' . $label . '"></i>';
            break;
        case '2':
            return '<i class="fa fa-train"  title = "' . $label . '"></i>';
            break;
        case '3':
            return '<i class="fa fa-ship"  title = "' . $label . '"></i>';
            break;
        case '4':
            return '<i class="fa fa-plane"  title = "' . $label . '"></i>';
            break;
        case '5':
            return '<i class="fa fa-motorcycle"  title = "' . $label . '"></i>';
            break;
        default:
            return '<i class="fa fa-car"  title = "' . $label . '"></i>';
            break;
    }
}

function phone($phone)
{
    $phone = str_replace(' ', '', $phone);
    $phone = str_replace('.', '', $phone);
    return $phone;
}

function render_btn_dangky_m($cuphap, $dau_so, $register_type = 0)
{
    $detect = new Mobile_Detect();
    if ($register_type == 1) {
        $tmp = explode(" ", $cuphap);
        $url = "https://shop.viettel.vn/frame/dang-ky-goi-cuoc?code=" . $tmp[0] . "&ch=maivt_hni_web";
        echo '<a href=' . $url . ' class="btn-primary btn-dangky xanhduong" style="width: 100px;" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">Đăng ký</a>';

        return;
    }
    if ($detect->is('iOS')) {
        echo '<a href="sms:' . $dau_so . '&amp;body=' . $cuphap . '" class="btn-dangky xanhduong" style="width: 100px;"  cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>&nbsp;';
    } else {
        echo '<a href="sms:' . $dau_so . '?body=' . $cuphap . '" class="btn-dangky xanhduong" style="width: 100px;" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>';
    }
}

function parent_id($id)
{
    // switch ($id) {
    //   case '18':
    //     return 'mobifone';
    //     break;
    //   case '19':
    //     return 'vinafone';
    //     break;
    //   case '20':
    //     return 'viettel';
    //     break;

    //   default:
    //     return 'viettel';
    //     break;

    // }

}

function render_btn_dangky($cuphap, $dau_so, $register_type = 0, $gia_cuoc = '', $chu_ky = '', $luu_luong = '')
{
    $detect = new Mobile_Detect();
    if ($register_type == 1) {
        $tmp = explode(" ", $cuphap);
        echo '<a href="#" onclick="viettelModal(\''.$tmp[0].'\', \''.$gia_cuoc.'\', \''.$chu_ky.'\', \''.$luu_luong.'\')" class="btn-dangky" style="width: 100px;" data-toggle="modal" data-target="#basicModal" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">Đăng ký</a>';
        return;
    }

    if ($detect->is('iOS')) {
        echo '<a href="sms:' . $dau_so . '&amp;body=' . $cuphap . '" class="btn-dangky xanhduong" style="width: 100px;"  cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>&nbsp;';
    } else {
        echo '<a href="sms:' . $dau_so . '?body=' . $cuphap . '" class="btn-dangky xanhduong" style="width: 100px;" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>';
    }
}

function render_btn_dangky_viettel($cuphap, $dau_so)
{
    $detect = new Mobile_Detect();
    if ($detect->is('iOS')) {
        echo '<a href="sms:' . $dau_so . '&amp;body=' . $cuphap . '" class="btn-dangky" style="width: 100px;"  cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>&nbsp;';
    } else {
        echo '<a href="sms:' . $dau_so . '?body=' . $cuphap . '" class="btn-dangky" style="width: 100px;" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>';
    }
}

function render_btn_dangky_mobi($cuphap, $dau_so, $index = false)
{
    $detect = new Mobile_Detect();
    if ($index == false) {
        if ($detect->is('iOS')) {
            echo '<a href="sms:' . $dau_so . '&amp;body=' . $cuphap . '" class="btn-dangky" style="width: 100px;color:white"  cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>&nbsp;';
        } else {
            echo '<a href="sms:' . $dau_so . '?body=' . $cuphap . '" class="btn-dangky" style="width: 100px;color:white" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>';
        }
    } else {
        if ($detect->is('iOS')) {
            echo '<a href="sms:' . $dau_so . '&amp;body=' . $cuphap . '" class="btn-dangky" style="width: 190px;color:white;margin-top: 10px;"  cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>&nbsp;';
        } else {
            echo '<a href="sms:' . $dau_so . '?body=' . $cuphap . '" class="btn-dangky" style="width: 190px;color:white;margin-top: 10px;" cuphap = "' . $cuphap . '" dau_so = "' . $dau_so . '">
    Đăng ký
  </a>';
        }
    }
}