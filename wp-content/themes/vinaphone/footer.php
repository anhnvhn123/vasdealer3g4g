<section class="footer" id="footer">
                <div class="container">
                    <div class="col-md-3 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/>
                        <p style="font-size: 13px"><b>Đơn vị truyền thông</b></p>
                        <p style="line-height: 0px"><b>Công ty CP Stech Việt Nam</b></p>
                    </div>
                    <div class="col-md-2 ">
                        <p style="font-weight: bold">Sản phẩm và Dịch vụ</p>
                        <a style="font-size: 13px;color: #000000" href="<?php echo get_home_url() ?>/dang-ky-goi-cuoc-3g-vinaphone"><i class="fa fa-check"></i> Đăng ký 3G</a><br>
                        <a style="font-size: 13px;color: #000000" href="<?php echo get_home_url() ?>/cac-goi-4g-vinaphone"><i class="fa fa-check"></i> Đăng ký 4G</a><br>
                        <a style="font-size: 13px;color: #000000" href="<?php echo get_home_url() ?>/ban-sim-data-toc-do-cao-tang-60gb-data/"><i class="fa fa-check"></i> Bán Sim Data</a>
                    </div>
                    <div class="col-md-3">
                        <p style="font-weight: bold">Tổng đài hỗ trợ online</p>
                        <p style="font-size: 13px"><i class="fa fa-phone"></i> Hỗ trợ 3G/4G: <?php echo get_field('so_dien_thoai',91) ?></p>
                        <p style="font-size: 13px"><i class="fa fa-phone"></i> Hỗ trợ khác : 18001091</p>
                    </div>
                    <div class="col-md-4">
                        <p style="font-weight: bold">Địa chỉ liên hệ</p>
                        <p style="font-size: 13px"><i class="fa fa-map-marker"></i> Tầng 18 - Tháp A – Tòa nhà Sông Đà, Phạm Hùng, Nam Từ Liêm, Hà Nội, Việt Nam</p>
                    </div>
                </div>
            </section>
            <?php include('button-footer.php'); ?>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


<script  type="text/javascript" charset="utf-8">
    var md = new MobileDetect(window.navigator.userAgent);
    if (md.mobile() == 'iPhone') {
        $('.btn-dangky').each(function(){
            var link = $(this).attr('href');
            var newlink = link.replace("?", "&");
            $(this).attr('href',newlink);
        })
    }
    else{
        $('.btn-dangky').each(function(){
            var link = $(this).attr('href');
            var newlink = link.replace("&","?");
            $(this).attr('href',newlink);
        })
    }

    <?php include('button-footer-script.php'); ?>
    // ... see below
</script>
        <!-- Google Code dành cho Thẻ tiếp thị lại -->
        <!--------------------------------------------------
        Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
        --------------------------------------------------->
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 835681502;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/835681502/?guid=ON&script=0"/>
            </div>
        </noscript>
    </body>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4124834,4,0,0,0,00010000']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
        var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
        hs.src = ('//s10.histats.com/js15_as.js');
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4124834&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
    <?php wp_footer(); ?>
</html>
