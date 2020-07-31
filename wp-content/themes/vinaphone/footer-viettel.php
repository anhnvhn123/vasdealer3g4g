<div id="divLoading"></div>
<div class="footer_bar"></div>

<div class="modal fade bd-example-modal-lg" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="text-align: center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="desc">
                    Quý khách vui lòng nhập số điện thoại để đăng ký gói cước: <span id="packageNamePopup"></span>
                    (+<span id="data3gPopup"></span> lưu lượng)
                    với giá
                    <span id="packagePricePopup"></span> đồng, sử dụng trong <span id="packageUseTimePopup"></span>
                </p>
                <form id="formRegister" class="form-horizontal" method="post">
                    <input type="hidden" name="partner[_csrf_token]" value="f80b5afa3e018016c93821c263d59ee6" id="partner__csrf_token">
                    <div class="form-group">
                        <div class="col-sm-10 text-left" style="width: 100%">
                            <input id="txtPhone" class="form-control" placeholder="Số điện thoại" type="text" name="partner[phone]" style="width: 100%">
                            <div class="text-danger text-left"></div>
                        </div>
                    </div>
                    <p id="phoneWarning" style="color: red;text-align: left"></p>
                    <div class="form-group">
                        <div class="col-sm-10 text-left">
                            <input type="checkbox" name="partner[accept]" checked="checked" id="partner_accept">
                            <label for="partner_accept" style="display: inline;">Tôi đồng ý với các nội dung gói cước và <a target="_blank" href="/tin-tuc/dieu-khoan/dieu-khoan-dich-vu/maivt_hni_web">Điều khoản dịch vụ</a></label>
                            <div class="text-danger"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" class="button mybutton button btn btn-success" onclick="checkPhone()">Xác nhận</button>
                            <a class="button button-cancel mybutton btn btn-default" data-dismiss="modal">Hủy</a>
                        </div>
                    </div>
                    <p id="packageWarning" style="color: red;text-align: center"></p>
                </form>
                <div id="allowPackage" class="container-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/loading.css" rel="stylesheet"/>
<section class="footer" id="footer">
                <div class="container">
                    <div class="col-md-3 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/viettel_logo_footer.png"/>
                        <p style="font-size: 13px;color: #FF9E3B;"><b>Đơn vị truyền thông</b></p>
                        <p style="line-height: 0px;color: #FF9E3B;"><b>Công ty CP Stech Việt Nam</b></p>
                    </div>
                    <div class="col-md-2 ">
                        <p style="font-weight: bold;color: #FF9E3B;">Sản phẩm và Dịch vụ</p>
                        <a style="font-size: 13px;color: #000000" href="<?php echo get_the_permalink(2029) ?>"><i class="fa fa-check"></i> Đăng ký 3G</a><br>
                        <a style="font-size: 13px;color: #000000" href="<?php echo get_the_permalink(2026) ?>"><i class="fa fa-check"></i> Đăng ký 4G</a><br>
                    </div>
                    <div class="col-md-3">
                        <p style="font-weight: bold;color: #FF9E3B;">Tổng đài hỗ trợ online</p>
                        <p style="font-size: 13px"><i class="fa fa-phone"></i> Hỗ trợ 3G/4G: <?php echo get_field('so_dien_thoai',91) ?></p>
                        <p style="font-size: 13px"><i class="fa fa-phone"></i> Hỗ trợ khác : 1800 8098</p>
                    </div>
                    <div class="col-md-4">
                        <p style="font-weight: bold;color: #FF9E3B;">Địa chỉ liên hệ</p>
                        <p style="font-size: 13px"><i class="fa fa-map-marker"></i> Tầng 18 - Tháp A – Tòa nhà Sông Đà, Phạm Hùng, Nam Từ Liêm, Hà Nội, Việt Nam</p>
                    </div>
                </div>
            </section>
            <?php include('button-footer.php'); ?>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/register.js"></script>

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
<!--        <script src="--><?php //echo get_template_directory_uri(); ?><!--/assets/js/jquery_3_3_1.min.js" crossorigin="anonymous"></script>-->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

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
