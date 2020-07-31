<?php
/*Template Name: Chuyên mục bên mobi*/
?>
<?php
$goi1 = get_field('goi_cuoc', 560);
foreach ($goi1 as $key => $value) {
    if($value['index'] == '1'){
        $goi1 = $value;
        break;
    }
}
$goi2 = get_field('goi_cuoc', 585);
foreach ($goi2 as $key => $value) {
    if($value['index'] == '1'){
        $goi2 = $value;
        break;
    }
}
$goi3 = get_field('goi_cuoc', 588);
foreach ($goi3 as $key => $value) {
    if($value['index'] == '1'){
        $goi3 = $value;
        break;
    }
}
$goi4 = get_field('goi_cuoc', 587);
foreach ($goi4 as $key => $value) {
    if($value['index'] == '1'){
        $goi4 = $value;
        break;
    }
}
$goi_cuoc_home = array();
array_push($goi_cuoc_home, $goi1);
array_push($goi_cuoc_home, $goi2);
array_push($goi_cuoc_home, $goi3);
array_push($goi_cuoc_home, $goi4);
?>
<?php get_header('mobifone');  ?>
<!--    This fxn gets the header.php file and renders it-->


<section id="body" class="body">
    <div class="container">
        <ol class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/" style="margin-top: 10px;font-size: 16px">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </ol>
    </div>
    <div class="container entry-content" >
        <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage" style="float: left;background-color: #fff;border-right: 1px solid rgb(220, 220, 220);">
            <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry " style="margin-right: 5px"> <?php
                while (have_posts()) : the_post(); ?>
                    <div class="post-item" >
                        <div class="row" >
                            <div class="col-md-3">
                                <a class="photo" href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
                                    <img class="home_thumb img-scale" src="<?= the_post_thumbnail_url('home-thumb') ?>" alt="<?= the_title(); ?>" >
                                </a>
                            </div>
                            <div class="col-md-9">
                                <a href="<?php the_permalink(); ?>" class="title" style="font-size: 18px"><?php the_title(); ?></a>
                                <p class="description"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
                <div class="clear-fix"></div>
                <?php page_nav(); ?>
            </article>
            <!-- #respond -->
        </div>
        <aside class="mh-widget-col-1 mh-sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" style="margin-left: 1%">
            <div id="tintuc">
                <h2 style="border-bottom: 3px solid #107eb7">
                    <span class="chutrangnenxanh">Tin khuyến mại</span>
                </h2>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 10
                );
                $posts_array = get_posts( $args );
                ?>
                <?php
                $color   =array('#fff','#fff','#fff','#4c4c4c','#4c4c4c');
                $bgcolor =array('#e74c3c','#1abc9c','#f39c12','#fff','#fff');

                foreach ( $posts_array as $key => $post ) : setup_postdata( $post ); ?>
                    <div style="width: 100%">
                        <ul style="list-style: none">
                            <li style="border-bottom: 1px dotted #ddd;margin-left: -20px;">
                                <span class="stt-icon" style="color: <?php echo $color[$key]; ?>;background-color: <?php echo $bgcolor[$key]; ?>"><?php echo $key+1; ?></span>
                                <a href="<?php echo the_permalink(); ?>"><p><?php echo the_title();?></p></a>
                            </li>
                        </ul>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>

            </div>
            <div class="reg-box">

                <?php
                foreach ($goi_cuoc_home as $key => $value) {
                    ?>
                    <div id="regbox" class=" reg-box-item">
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
                                    <td class="noborder" ><?php echo $dung_luong_goi_cuoc[$key];?></td>
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
                    <?php
                }
                ?>
            </div>
            <div id="anh-quang-cao">
                <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image-mobi.jpg" >
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>

            </div>
            <div class="clear-fix"></div>
        </aside>
    </div>
    <div class="container">
        <div class="row">
            <div class="screen-width" style="background-color: #fff;width: 1170px">
                <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time" ></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('mobifone'); // This fxn gets the footer.php file and renders it ?>
