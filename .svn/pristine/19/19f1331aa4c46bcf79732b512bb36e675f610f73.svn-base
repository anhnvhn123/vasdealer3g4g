<?php
/*
 * Template Name: Mua hàng thành công
 * Template Post Type: post, page, product
 */
?>
<?php get_header('vinaphone');  ?>
<!--    This fxn gets the header.php file and renders it-->


<section id="body" class="body">

    <div class="container entry-content" >
        <div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage" style="float: left;background-color: #fff">
            <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry ">
                <header class="entry-header clearfix">
                    <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
                    <p class="mh-meta entry-meta" style="font-size: 14px">
                        <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a ><?php echo get_the_date('d/m/Y');  ?></a></span>
                        <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" ><?php echo get_the_author(); ?></a></span>
                    </p>
                </header>
                <div class="entry-content clearfix">
                    <div class="post-item" style="text-align: center" >
                        <a class="photo"  title="<?= the_title(); ?>">
                            <img class="home_thumb img-scale" style="max-width: 600px" src="<?= the_post_thumbnail_url( ) ?>" alt="<?= the_title(); ?>" >
                        </a>
                    </div>
                    <br>
                    <?php echo get_the_content(); ?>
                </div>
                <div class="tin-lien-quan" style="width: 100%; margin: auto; overflow: hidden;">
                    <?php
                    $category = get_the_category();
                    $tin_lien_quan = get_posts(array(

                        'posts_per_page'   => 4,
                        'offset'           => 0,
                        'category'	   => $category[0]->term_id,
                        'orderby' => 'publish_date',
                        'order' => 'DESC'
                    ));?>
                    <h2 class="title">Tin liên quan</h2>

                    <?php foreach ( $tin_lien_quan as $key => $post ) : setup_postdata( $post ); ?>
                        <?php if ($key <4){ ?>
                            <div>
                                <div style="width: 40%; float: left">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <img src="<?= the_post_thumbnail_url('home-thumb');?>" style="width:120px ">
                                    </a>
                                </div>
                                <div style="width: 60%; float: right">
                                    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?></a>

                                    <p>
                                        <?php
                                        echo implode(' ', array_slice(explode(' ', get_the_excerpt()), 0, 10)).'...';
                                        ?>
                                    </p>

                                </div>

                            </div>
                            <?php if($key % 2 != 0): ?>
                                <div class="clearfix clear-fix"></div>
                            <?php endif; ?>
                        <?php }
                        elseif($key ) { ?>
                            <i class="fa fa-hand-o-right" style="padding-right: 10px"></i><a style="line-height: 25px;border-bottom:1px dotted #dcdcdc;font-size: 15px" href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?><span style="padding-left: 50px"><i style="color: #9ebaa0;font-size: 12px"><?php echo get_the_date('d/m/Y');  ?></i></span></a>

                            <br>

                        <?php } ?>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="tin-lien-quan" style="width: 100%; margin: auto; overflow: hidden;">
                    <?php
                    //                        mktime ($hour, $minute, $second, $month, $day , $year);

                    $date1 = mktime(0, 0, 0, get_the_date('m'), (get_the_date('d')-30), get_the_date('Y'));
                    $date2 = mktime(0, 0, 0, get_the_date('m'), (get_the_date('d')+30), get_the_date('Y'));
                    $category = get_the_category();
                    $xem_them = get_posts(array(

                        'posts_per_page'   => 8,
                        'offset'           => 0,
                        'category'	   => $category[0]->term_id,
                        'orderby' => 'publish_date',
                        'order' => 'DESC',

                    ));?>
                    <h2 class="title">Xem thêm</h2>

                    <?php  foreach ( $xem_them as $key => $post ) : setup_postdata( $post ); ?>
                        <i class="fa fa-dot-circle-o" style="padding-right: 10px;color: #1189b6"></i><a style="line-height: 25px;border-bottom:1px dotted #dcdcdc;font-size: 15px;color: #00acec" href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?><span style="padding-left: 50px"><i style="color: #9ebaa0;font-size: 12px"><?php echo get_the_date('d/m/Y');  ?></i></span></a>
                        <br>

                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </article>
            <!-- #respond -->
        </div>
        <aside class="mh-widget-col-1 mh-sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" style="">

            <div class="reg-box">

                <?php
                foreach ($goi_cuoc_home as $key => $value) {
                    ?>
                    <div id="regbox" class=" reg-box-item">
                        <div class="box-title">
                            Trải nghiệm gói <?php echo $value['ma_goi_cuoc']; ?>
                        </div>
                        <div class="box-body">
                            <table>
                                <thead>
                                <tr>
                                    <th colspan="3"><?php echo $value['ma_goi_cuoc']; ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo product_price($value['gia_cuoc']); ?><br/>VNĐ</td>
                                    <td>-</td>
                                    <td><?php echo $value['chu_ky']; ?><br/>sử dụng</td>
                                </tr>
                                <tr>
                                    <td><b><?php echo $value['cu_phap']; ?></b></td>
                                    <td>Gửi</td>
                                    <td><b><?php echo $value['dau_so']; ?></b></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
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
                <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image.jpg" >
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>

            </div>
            <div class="clear-fix"></div>
        </aside>
    </div>
    <div class="screen-width" style="background-color: #fff;width: 1170px">
        <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div>
    </div>
</section>

<?php get_footer('vinaphone'); // This fxn gets the footer.php file and renders it ?>