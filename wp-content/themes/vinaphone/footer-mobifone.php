<section class="footer" id="footer" style="border-color: #0060b0">
    <div class="container">
        <div class="col-md-3 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/mobifooter.png"/>
            <p style="font-size: 13px"><b>Đơn vị truyền thông</b></p>
            <p style="line-height: 0px"><b>Công ty CP Stech Việt Nam</b></p>
        </div>
        <div class="col-md-2 ">
            <p style="font-weight: bold">Sản phẩm và Dịch vụ</p>
            <a style="font-size: 13px;color: #000000" href="<?php home_url() ?>/goi-cuoc-3g-mobifone/"><i class="fa fa-check"></i> Đăng ký 3G</a><br>
            <a style="font-size: 13px;color: #000000" href="<?php home_url() ?>/dang-ky-goi-cuoc-4g-mobifone/"><i class="fa fa-check"></i> Đăng ký 4G</a><br>
            <a style="font-size: 13px;color: #000000" href="<?php home_url() ?>/cac-goi-tien-ich/"><i class="fa fa-check"></i> Các gói tiện ích</a><br>
        </div>
        <div class="col-md-3">
            <p style="font-weight: bold">Tổng đài hỗ trợ online</p>
            <p style="font-size: 13px"><i class="fa fa-phone"></i> Hotline Hỗ trợ : 9090</p>
            <p style="font-size: 13px"><i class="fa fa-phone"></i> Hỗ trợ dịch vụ 3G 4G : 0946 246 391</p>
        </div>
        <div class="col-md-4">
            <p style="font-weight: bold">Địa chỉ liên hệ</p>
            <p style="font-size: 13px"><i class="fa fa-map-marker"></i> Tầng 18 - Tháp A – Tòa nhà Sông Đà, Phạm Hùng, Nam Từ Liêm, Hà Nội, Việt Nam</p>
        </div>
    </div>
</section>
<?php include('button-footer.php'); ?>
</div>
<!--<script-->
<!--    src="--><?php //echo get_template_directory_uri(); ?><!--/assets/js/jquery_3_3_1.min.js"-->
<!--    crossorigin="anonymous"></script>-->
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
<!--<script src="--><?php //echo get_template_directory_uri()?><!--/image2/snow2012.js"></script>-->
<?php wp_footer(); ?>
</html>
