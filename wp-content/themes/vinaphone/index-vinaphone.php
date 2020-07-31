<?php echo '111222'; die; ?>
<?php
$goi_cuoc_home = array();
$goi_cuoc_3g = array();
$goi_cuoc_4g = array();
$goi1 = get_field('goi_cuoc', 51);
foreach ($goi1 as $key => $value) {
    if($value['index'] == '1'){
        $goi1 = $value;
        array_push($goi_cuoc_home, $goi1);//BIG70
    }
    if($value['index_2'] == '1'){
        $goi3g = $value;
        array_push($goi_cuoc_3g, $goi3g);
    }
}
$goi3 = get_field('goi_cuoc', 50);
foreach ($goi3 as $key => $value) {
    if($value['index'] == '1'){
        $goi3 = $value;
        array_push($goi_cuoc_home, $goi3);//MAX
    }
    if($value['index_2'] == '1'){
        $goi3g = $value;
        array_push($goi_cuoc_3g, $goi3g);
    }
}
$goi4 = get_field('goi_cuoc', 57);
foreach ($goi4 as $key => $value) {
    if($value['index'] == '1'){
        $goi4 = $value;
        array_push($goi_cuoc_home, $goi4);//B99
    }
    if($value['index_2'] == '1'){
        $goi3g = $value;
        array_push($goi_cuoc_3g, $goi3g);
    }
}
$goi2 = get_field('goi_cuoc', 84);
foreach ($goi2 as $key => $value) {
    if($value['index'] == '1'){
        $goi2 = $value;
        array_push($goi_cuoc_home, $goi2);//DMax70
    }
    if($value['index_2'] == '1'){
        $goi4g = $value;
        array_push($goi_cuoc_4g, $goi4g);
    }
}
$dung_luong_goi_cuoc = array('4,8GB','1,2GB','600MB+Gọi,sms','2GB');
?>
<?php get_header('vinaphone'); ?>
<section id="body" class="body">

    <div class="container">
        <div class="banner">
            <a  href="">
                <img  src="<?php echo get_field('banner',1431) ?>"/>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="reg-box">
            <div class="container" style="width: 100%">

                <?php
                foreach ($goi_cuoc_home as $key => $value) { if ($key<4) :
                    ?>
                    <div id="regbox" class="col-md-3  col-sm-6 reg-box-item">
                        <div class="box-title">
                            Trải nghiệm gói <?php echo $value['ma_goi_cuoc']; ?>
                        </div>
                        <div class="box-body">
                            <table class="noborder">
                                <thead>
                                <tr>
                                    <th class="noborder" colspan="3" ><?php echo $value['ma_goi_cuoc']; ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="noborder" ><?php echo product_price($value['gia_cuoc']); ?>đ</td>
                                    <td class="noborder" >-</td>
                                    <td class="noborder" ><?php echo $value['chu_ky']; ?></td>
                                </tr>
                                <tr>
                                    <td class="noborder" >Dung lượng</td>
                                    <td class="noborder" >-</td>
                                    <td class="noborder" ><?php echo $value['dung_luong']; ?></td>
                                </tr>
                                <tr>
                                    <td class="noborder" ><b><?php echo $value['cu_phap']; ?></b></td>
                                    <td class="noborder" >Gửi</td>
                                    <td class="noborder" ><b><?php echo $value['dau_so']; ?></b></td>
                                </tr>
                                <tr>
                                    <td class="noborder" colspan="3" >
                                        <?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif;
                }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo get_home_url()?>/dang-ky-goi-cuoc-3g-vinaphone/">
                    <h2 style="    width: 100%;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding: 10px 0;
    border-left: 10px solid #3381C5;
    text-indent: 15px;
    color: #333;
    background: #d8d6d6;">GÓI CƯỚC 3G VINAPHONE</h2>
                </a>
            </div>

            <?php foreach ($goi_cuoc_3g as $key => $value) : if($key <4) :?>
                <div class="col-md-3 col-sm-6 category-list" style="margin-bottom: 1%;">
                    <div style="border: 2px solid #00a1e5;">
                        <p align="center" style="border:5px double #00a1e5;background-color: #00a1e5;color: #FFFFFF"><b><?php echo $value['ma_goi_cuoc']; ?></b></p>
                        <div class="table-responsive">
                            <table style="width: 100%;" class="table table-striped table-bordered table-condensed noborder">
                                <tbody>
                                <tr>
                                    <td class="noborder">
                                        <b>Dung lượng :</b> <?php echo $value['dung_luong']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td class="noborder" style="width: 30%;">-->
                                    <!--                                    Giá cước-->
                                    <!--                                </td>-->
                                    <td class="noborder">
                                        <b>Giá cước :</b> <?php echo product_price($value['gia_cuoc']); ?>đ/<?php echo $value['chu_ky']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td style="width: 30%;" class="noborder" >-->
                                    <!--                                    Cú pháp-->
                                    <!--                                </td>-->
                                    <td class="noborder" >
                                        <b>Cú pháp :</b> <strong style="color: red"><?php echo $value['cu_phap']; ?></strong>&nbsp;gửi&nbsp;<strong style="color: red"><?php echo $value['dau_so']; ?></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td style="width: 30%;" class="noborder" >-->
                                    <!--                                    Cước phát sinh-->
                                    <!--                                </td>-->
                                    <td class="noborder" >
                                        <b>Cước phát sinh :</b> <?php echo $value['cuoc_phat_sinh']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-style: none;">
                                        <?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo get_home_url()?>/cac-goi-4g-vinaphone/">
                    <h2 style="    width: 100%;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding: 10px 0;
    border-left: 10px solid #3381C5;
    text-indent: 15px;
    color: #333;
    background: #d8d6d6;">GÓI CƯỚC 4G VINAPHONE</h2>
                </a>
            </div>

            <?php foreach ($goi_cuoc_4g as $key => $value) : if($key <4) :?>
                <div class="col-md-3 col-sm-6 category-list" style="margin-bottom: 1%;">
                    <div style="border: 2px solid #00a1e5;">
                        <p align="center" style="border:5px double #00a1e5;background-color: #00a1e5;color: #FFFFFF"><b><?php echo $value['ma_goi_cuoc']; ?></b></p>
                        <div class="table-responsive">
                            <table style="width: 100%;" class="table table-striped table-bordered table-condensed noborder">
                                <tbody>
                                <tr>
                                    <td class="noborder">
                                        <b>Dung lượng :</b> <?php echo $value['dung_luong']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td class="noborder" style="width: 30%;">-->
                                    <!--                                    Giá cước-->
                                    <!--                                </td>-->
                                    <td class="noborder">
                                        <b>Giá cước :</b> <?php echo product_price($value['gia_cuoc']); ?>đ/<?php echo $value['chu_ky']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td style="width: 30%;" class="noborder" >-->
                                    <!--                                    Cú pháp-->
                                    <!--                                </td>-->
                                    <td class="noborder" >
                                        <b>Cú pháp :</b> <strong style="color: red"><?php echo $value['cu_phap']; ?></strong>&nbsp;gửi&nbsp;<strong style="color: red"><?php echo $value['dau_so']; ?></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <!--                                <td style="width: 30%;" class="noborder" >-->
                                    <!--                                    Cước phát sinh-->
                                    <!--                                </td>-->
                                    <td class="noborder" >
                                        <b>Cước phát sinh :</b> <?php echo $value['cuoc_phat_sinh']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; border-style: none;">
                                        <?php render_btn_dangky($value['cu_phap'], $value['dau_so']); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; endforeach; ?>
        </div>
        <div class="clearfix"></div>
        <div style="height: 30px;"></div>
        <div class="row">
            <div class="col-md-6">
                <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
                    <li class="active"> <a href="<?php echo get_category_link(4) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>TIN TỨC</b></a>
                    </li>
                </ul>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 4
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                foreach ( $posts_array as $key => $post ) : setup_postdata( $post );?>
                    <div class="media news_item" style="margin-bottom: 10px;">
                        <div class="" style="float: left; margin-right: 10px;">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo the_post_thumbnail_url('index-thumb');?>" class="media-object wp-post-image" alt="<?php echo the_title();?>" style="object-fit: cover; vertical-align: middle;" width="100" height="60">
                            </a>
                        </div>
                        <div class="media-body" style="vertical-align: middle;">
                            <a href="<?php echo the_permalink(); ?>">
                                <h4 class="media-heading" style="color: #444; font-size: 14px; vertical-align: middle;"><?php echo the_title();?></h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>

            <div class="col-md-6">
                <ul class="nav nav-pills" style="border-bottom: 2px solid #337ab7; ">
                    <li class="active"> <a href="<?php echo get_category_link(7) ?>" data-toggle="tab" aria-expanded="true"  style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"><b>KHUYẾN MÃI</b></a>
                    </li>
                </ul>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 7
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                foreach ( $posts_array as $key => $post ) : setup_postdata( $post );?>
                    <div class="media news_item" style="margin-bottom: 10px;">
                        <div class="" style="float: left; margin-right: 10px;">
                            <a href="<?php echo the_permalink(); ?>">
                                <img src="<?php echo the_post_thumbnail_url('index-thumb');?>" class="media-object wp-post-image" alt="<?php echo the_title();?>" style="height: 50px; vertical-align: middle;">
                            </a>
                        </div>
                        <div class="media-body" style="vertical-align: middle;">
                            <a href="<?php echo the_permalink(); ?>">
                                <h4 class="media-heading" style="color: #444; font-size: 14px; vertical-align: middle;"><?php echo the_title();?></h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer('vinaphone'); ?>