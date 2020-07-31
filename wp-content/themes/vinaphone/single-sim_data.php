<?php
$tensim = get_field('ten_sim');
$giamoi = get_field('gia_moi');
$giacu = get_field('gia_cu');
$uudai = get_field('uu_dai');
?>
<?php get_header('vinaphone'); ?>
<div class="category-page">
    <div class="container entry-content" style="margin-top: 10px;margin-bottom: 10px">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div style="text-align: center" >
                    <a class="photo">
                        <img src="<?php echo the_post_thumbnail_url( ) ?>" alt="<?php echo $tensim ?>" >
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <h2 style="font-size: 30px"><?php echo $tensim ?><img src="<?php echo get_template_directory_uri() ?>/image2/icon-hot.gif" alt="" ></h2>
                <div id="price" style="border-bottom: 1px dotted #8a8484;">
                    <h4 style="color:#8a8484"><span><b>Giá : </b></span><span style="font-size: 20px;color: red;font-weight: bold"><?php echo number_format($giamoi);?> đ  </span><span style="font-size: 16px;text-decoration: line-through;"><?php echo number_format($giacu);?> đ</span></h4>
                </div>
                <div id="thongtin" style="border-bottom: 1px dotted #8a8484;margin-left: 5%">
                    <?php echo $uudai ?>

                </div>
                <div id="btn" style="border-bottom: 1px dotted #8a8484">
                    <div align="center">
                        <a class="muahang-btn" href="tel:0948053485" style="color: white;line-height: 45px;height:50px;margin-bottom: 10px;margin-top: 10px;margin-right: 10px">
                            <h4 style="font-weight: bold"><i class="fa fa-phone"></i> Gọi ngay</h4>
                        </a>
                        <a class="muahang-btn" href="<?php echo get_home_url().'/gio-hang/?ID='.get_the_ID(); ?>" style="color: white;line-height: 45px;height:50px;margin-bottom: 10px;margin-top: 10px;background: #fc5300;">
                            <h4 style="font-weight: bold"><i class="fa fa-shopping-cart"></i> ĐẶT HÀNG</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>

        </div>
        <div class="row"">
        <div class="row" style="margin-left: 15px;margin-right: 15px;">
            <div class="entry-content clearfix">
                <?php echo get_the_content() ?>
            </div>
        </div>
        <div class="row" id="comment" style="margin-left: 0px;margin-right: 0px">
            <script src="https://apis.google.com/js/plusone.js">

            </script>
            <g:comments
                    href="[URL]"
                    width="642"
                    first_party_property="BLOGGER"
                    view_type="FILTERED_POSTMOD">
            </g:comments>
        </div>
        <div class="row" id="comment" style="margin-left: 0px;margin-right: 0px">

            <?php global $wp;$current_url = home_url(add_query_arg(array(),$wp->request)); ?>
            <div class="fb-comments" data-href="<?php echo $current_url; ?>" data-numposts="5" data-width="100%" data-order-by="reverse_time"></div>
        </div>
    </div>

</div>
</div>

<?php get_footer('vinaphone'); ?>
