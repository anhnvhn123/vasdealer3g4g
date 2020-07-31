<?php
/*Template Name: Chuyên mục bên viettel*/
?>
<?php
$idlist_sidebar = array('2035','2028','2027','2026');
$goi_cuoc_home = array();
foreach ($idlist_sidebar as $id_item){
    $goicuoc = get_field('goi_cuoc', $id_item);
    if(count($goicuoc)>0){
        foreach ($goicuoc as $key => $value) {
            if($value['index'] == '1'){
                $goiitem = $value;
                array_push($goi_cuoc_home, $goiitem);
            }
        }
    }
}
?>
<?php get_header('viettel');  ?>
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
            <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry " style="margin-right: 5px">

                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="post-item"  style="margin-top: 10px">
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
                <h2 style="background:#00918D;border-top-right-radius: 40px;">
                    <b class="chudacamnenxanh">TIN KHUYẾN MÃI</b>
                </h2>
                <?php $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
                    'category'	=> 15
                );
                $posts_array = get_posts( $args );
                ?>
                <?php foreach ( $posts_array as $key => $post ) : setup_postdata( $post ); ?>
                    <div style="width: 100%">
                        <ul style="list-style: none">
                            <li style="border-bottom: 2px dotted #57ece8;;margin-left: -20px;">
                                <div class="row">

                                    <div class="col-md-1">
                                    <span class="stt-icon">
                                        <img src="<?php echo get_template_directory_uri()?>/sidebar-icon.png">
                                    </span>
                                    </div>
                                    <div class="col-md-11">
                                        <a style="color: #00918D" href="<?php echo the_permalink(); ?>"><p><?php echo the_title();?></p></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>

            </div>
            <div class="reg-box">

                <?php
                foreach ($goi_cuoc_home as $key => $value) { if($key<4):
                    ?>
                    <div id="regbox" class=" reg-box-item">
                        <div class="box-title">
                            Trải nghiệm gói <b><strong style="color: #1d8c89"><?php echo $value['ma_goi_cuoc']; ?></strong></b>
                        </div>
                        <div class="box-body">
                            <table  class="noborder">
                                <tbody>
                                <tr>
                                    <td class="noborder"><?php echo product_price($value['gia_cuoc']); ?><br/>VNĐ</td>
                                    <td class="noborder">-</td>
                                    <td class="noborder"><?php echo $value['chu_ky']; ?><br/>sử dụng</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="noborder">
                                        <?php if ($value['register_type'] == 0) : render_btn_dangky_viettel($value['cu_phap'], $value['dau_so']);?>
                                        <?php else: ?>
                                            <a href="https://shop.viettel.vn/frame/dang-ky-goi-cuoc?code=<?php echo $value['ma_goi_cuoc']; ?>&ch=maivt_hni_web" class="btn-dangky-link" style="width: 100px;" cuphap="<?php echo $value['cu_phap']?>" dau_so="<?php echo $value['dau_so']?>">
                                                Đăng ký
                                            </a>
                                        <?php endif;?>
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
            <div id="anh-quang-cao">
                <?php $list_anh = get_field('ads_image_list',2062); ?>
                <?php if(count($list_anh)>0): foreach($list_anh as $item): ?>
                    <a href="<?php echo $item['img_url'] ?>"><img class="imgs" src="<?php echo $item['image'] ?>" ></a>
                <?php endforeach; endif; ?>
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/dangky3g4gcom/" data-tabs="timeline" data-width="326" data-height="260 " data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dangky3g4gcom/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dangky3g4gcom/">Dịch vụ 3G 4G</a></blockquote></div>

            </div>
            <div class="clear-fix"></div>
        </aside>
    </div>
</section>

<?php get_footer('viettel'); // This fxn gets the footer.php file and renders it ?>
