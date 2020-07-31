<?php  
    global $nhamang;
    $nhamang = 'viettel';
    global $list_post;
    $cur = get_queried_object_id();
    $term = get_term( $cur, 'category' );
    switch ($term->term_id) {
        case 10:
            $nhamang = 'mobifone';
            break;
        case 7:
            $nhamang = 'vinaphone';
            break;
        case 15:
            $nhamang = 'viettel';
            break;
        case 9:
            $nhamang = 'mobifone';
            break;
        case 16:
            $nhamang = 'viettel';
            break;
        case 4:
            $nhamang = 'vinaphone';
            break;
        default:
            $nhamang = 'vinaphone';
            break;
    }
	$tin_km = array('mobifone' => 10, 'viettel' => 15, 'vinaphone' => 7);
?>
<?php $provider = $nhamang; ?>
<?php
$goi_cuoc_home = array();
if($nhamang == 'vinaphone'){
    $list_goi_cuoc_home = get_field('goi-cuoc', 3361);
    foreach ($list_goi_cuoc_home as $key => $value) {
        array_push($goi_cuoc_home, $value['goi-cuoc']);    
    }
}
if($nhamang == 'mobifone'){
    $list_goi_cuoc_home = get_field('goi-cuoc', 3360);
    foreach ($list_goi_cuoc_home as $key => $value) {
        array_push($goi_cuoc_home, $value['goi-cuoc']);    
    }
}
if($nhamang == 'viettel'){
    $list_goi_cuoc_home = get_field('goi-cuoc', 3362);
    foreach ($list_goi_cuoc_home as $key => $value) {
        array_push($goi_cuoc_home, $value['goi-cuoc']);    
    }
}
$dung_luong_goi_cuoc = array('4,8GB','1,2GB','600MB+Gọi,sms','2GB');
?>

<?php get_header($provider);  ?>
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
        <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage" style="float: left;background-color: #fff">
            <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry ">
                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="post-item"  style="margin-top: 10px">
                        <div class="row" >
                            <div class="col-md-3">
                                <a class="photo" href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
                                    <img class="home_thumb img-scale" src="<?= the_post_thumbnail_url('home-thumb') ?>" alt="<?= the_title(); ?>" style="object-fit: cover;" width="165" height="110" >
                                </a>
                            </div>
                            <div class="col-md-9">
                                <a href="<?php the_permalink(); ?>" class="title" style="font-size: 18px"><?php the_title(); ?></a>
                                <p class="description"><?php echo str_replace('[&hellip;]', '...', get_the_excerpt()); ?></p>
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
        <aside class="mh-widget-col-1 mh-sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" style="">
            <div id="tintuc">
                <h2 style="background: rgba(0, 90, 140, 0.6)">
                    <span class="chutrangnenxanh">Tin khuyến mại</span>
                </h2>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'  => $tin_km[$nhamang]
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
                <?php foreach ($goi_cuoc_home as  $value) :?>
                    <div id="regbox" class=" reg-box-item">
                        <div class="box-title">
                            Trải nghiệm gói <?php echo get_field('ma_goi_cuoc', $value); ?>
                        </div>
                        <div class="box-body">
                            <table style="width: 100%;" class="table table-striped">
                                <tbody>
                                <tr>
                                    <td style=" width: 30%;">Dung lượng</td>
                                    <td><?php echo get_field('toc_do', $value); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Giá cước</td>
                                    <td><?php echo product_price(get_field('gia_cuoc', $value)); ?>đ / <?php echo get_field('chu_ky', $value); ?></td>
                                </tr>
								<?php if($nhamang != 'viettel') :?>
                                <tr>
                                    <td style="width: 30%;">Cú pháp</td>
                                    <td><strong><?php echo get_field('cu_phap', $value); ?></strong>&nbsp;gửi&nbsp;<strong><?php echo get_field('dau_so', $value); ?></strong></td>
                                </tr>
								<?php endif ?>
                                <tr>
                                    <td>Cước phát sinh</td>
                                    <td><?php echo get_field('cuoc_phat_sinh', $value); ?></td>
                                </tr>
                                <?php if(get_field('mo_ta', $value) != '') : ?>
                                <tr >
                                    <td>Chú thích</td>
                                    <td>
                                        <?php echo get_field('mo_ta', $value); ?>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <?php render_btn_dangky(get_field('cu_phap', $value), get_field('dau_so', $value), get_field('register_type', $value), product_price(get_field('gia_cuoc', $value)), get_field('chu_ky', $value), get_field('toc_do', $value)); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div id="anh-quang-cao" style="margin-bottom: 5%">
                <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image.jpg" >
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>
            </div>
            <div class="clear-fix"></div>
        </aside>
    </div>
</section>

<?php get_footer($provider); // This fxn gets the footer.php file and renders it ?>
