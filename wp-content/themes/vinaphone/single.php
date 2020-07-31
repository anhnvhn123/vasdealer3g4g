<?php
$nhamang = 'vinaphone';
$goi_cuoc_home = array();
if($nhamang == 'vinaphone'){
    $list_goi_cuoc_home = get_field('goi-cuoc', 3361);
    foreach ($list_goi_cuoc_home as $key => $value) {
        array_push($goi_cuoc_home, $value['goi-cuoc']);
    }
}
$dung_luong_goi_cuoc = array('4,8GB','1,2GB','600MB+Gọi,sms','2GB');
?>
<?php get_header('vinaphone');  ?>
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
                    <header class="entry-header clearfix">
                        <h1 class="entry-title"><?php echo the_title(); ?></h1>
                        <p class="mh-meta entry-meta" style="font-size: 14px">
                            <span class="entry-meta-date updated"><i class="fa fa-clock-o"></i><a ><?php echo get_the_date('d/m/Y');  ?></a></span>
                            <span class="entry-meta-author author vcard"><i class="fa fa-user"></i><a class="fn" ><?php echo get_the_author(); ?></a></span>
                        </p>
                        <div class="td-post-sharing td-post-sharing-top ">
                        <div class="td-post-sharing td-post-sharing-top ">
                            <div class="td-default-sharing">
                                <a class="td-social-sharing-buttons td-social-facebook" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/facebook-icon.png"  style="height: 20px; padding-right: 6px;">
                                    <span style="color: #fff;">Chia sẻ Facebook</span>
                                </a>
                                <a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=H%E1%BB%8Fi+%C4%91%C3%A1p+c%C3%A1ch+d%C3%B9ng+internet+4G+th%E1%BA%A3+phanh+ch%E1%BB%89+v%E1%BB%9Bi+10000+%C4%91%E1%BB%93ng%2Fng%C3%A0y&url=<?php echo get_permalink(); ?>" style="background-color: #29c5f6;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/twitter-icon.png"  style="height: 20px; padding-right: 6px;">
                                    <span style="color: #fff;">twitter</span>
                                </a>

                                <a class="td-social-sharing-buttons td-social-google" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;" style="background-color: #eb4026;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/google-plus-icon.png"  style="height: 20px; padding-right: 6px;">
                                </a>
                                <a class="td-social-sharing-buttons td-social-pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>&amp;media=http://3gvinaphonevn.com/wp-content/uploads/2017/09/khuyen-mai-the-nap-vinaphone.bmp&description=H%E1%BB%8Fi+%C4%91%C3%A1p+c%C3%A1ch+d%C3%B9ng+internet+4G+th%E1%BA%A3+phanh+ch%E1%BB%89+v%E1%BB%9Bi+10000+%C4%91%E1%BB%93ng%2Fng%C3%A0y" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="td-icon-pinterest"></i></a>
                                <a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=H%E1%BB%8Fi+%C4%91%C3%A1p+c%C3%A1ch+d%C3%B9ng+internet+4G+th%E1%BA%A3+phanh+ch%E1%BB%89+v%E1%BB%9Bi+10000+%C4%91%E1%BB%93ng%2Fng%C3%A0y%20-%20<?php echo get_permalink(); ?>"><i class="td-icon-whatsapp"></i></a>
                            </div>
                        </div>

                    </header>
                    <div class="entry-content clearfix">
                        <div class="post-item" style="text-align: center" >
                            <a class="photo"  title="<?= the_title(); ?>">
                                <img class="home_thumb img-scale" src="<?= the_post_thumbnail_url( ) ?>" alt="<?= the_title(); ?>" >
                            </a>
                        </div>
                        <br>
                        <?php echo the_content(); ?>
                        <div class="screen-width" style="background-color: #fff;width: 100%">
                            <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div>
                        </div>
                    </div>
                    <div class="tin-lien-quan" style="width: 100%; margin: auto; overflow: hidden;">
                        <?php $tin_lien_quan = get_field('related'); ?>

                        <?php if(count($tin_lien_quan)>0) : echo '<h2 class="title">Tin liên quan</h2>'; foreach ( $tin_lien_quan as $key => $post ) : ?>
                            <?php if ($key <4){ ?>
                                <div>
                                    <div style="width: 40%; float: left">
                                        <a href="<?php echo get_permalink($post['post']); ?>">
                                            <img src="<?= get_the_post_thumbnail_url($post['post'], 'home-thumb');?>" style="width:120px ">
                                        </a>
                                    </div>
                                    <div style="width: 60%; float: right">
                                        <a href="<?php echo get_permalink($post['post']); ?>"><?php echo get_the_title($post['post']);?></a>

                                        <p>
                                            <?php
                                            echo implode(' ', array_slice(explode(' ', get_excerpt_by_id($post['post'])), 0, 10)).'...';
                                            ?>
                                        </p>

                                    </div>

                                </div>
                                <?php if($key % 2 != 0): ?>
                                    <div class="clearfix clear-fix"></div>
                                <?php endif; ?>
                            <?php }
                            else { ?>
                                    <i class="fa fa-hand-o-right" style="padding-right: 10px"></i><a style="line-height: 25px;border-bottom:1px dotted #dcdcdc;font-size: 15px" href="<?php echo get_permalink($post['post']); ?>"><?php echo get_the_title($post['post']);?><span style="padding-left: 50px"><i style="color: #9ebaa0;font-size: 12px"></i></span></a>

                                <br>

                            <?php } ?>
                        <?php endforeach; endif;
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
                        'category'	=> 7
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
                                <tr>
                                    <td style="width: 30%;">Cú pháp</td>
                                    <td><strong><?php echo get_field('cu_phap', $value); ?></strong>&nbsp;gửi&nbsp;<strong><?php echo get_field('dau_so', $value); ?></strong></td>
                                </tr>
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
                                        <?php render_btn_dangky(get_field('cu_phap', $value), get_field('dau_so', $value)); ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
                <div id="anh-quang-cao">
                    <img class="imgs" src="<?php echo get_template_directory_uri() ?>/sidebar-image.jpg" >
                    <br>
                    <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>

                </div>
                <div class="clear-fix"></div>
            </aside>
        </div>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>

<?php get_footer('vinaphone'); // This fxn gets the footer.php file and renders it ?>