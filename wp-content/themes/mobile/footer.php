<footer>

    <a href="tel:19001595">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/cal.svg">
    </a>
    <a href="https://www.messenger.com/t/dangky3g4gcom">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/ms.svg">
    </a>
	<a href="https://www.messenger.com/t/dangky3g4gcom">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon/talk.png">
    </a>
</footer>
</div><!-- end wraper-->
</body>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl/vendors/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/owl/owlcarousel/owl.carousel.min.js"></script>
<?php wp_footer(); ?>
<div id="divLoading"></div>
<div class="modal fade bd-example-modal-lg" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
     aria-hidden="true" style="z-index: 10000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="text-align: center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 100">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <p class="desc" style="margin-bottom: 10px">
                    Quý khách vui lòng nhập số điện thoại để đăng ký gói cước: <span id="packageNamePopup"></span>
                    (+<span id="data3gPopup"></span> lưu lượng)
                    với giá
                    <span id="packagePricePopup"></span> đồng, sử dụng trong <span id="packageUseTimePopup"></span>
                </p>
                <form id="formRegister" class="form-horizontal" method="post">
                    <input type="hidden" name="partner[_csrf_token]" value="f80b5afa3e018016c93821c263d59ee6" id="partner__csrf_token">
                    <div class="form-group" style="margin-bottom: 10px">
                        <div class="col-sm-10 text-left" style="width: 100%">
                            <input id="txtPhone" class="form-control" placeholder="Số điện thoại" type="text" name="partner[phone]" style="width: 100%">
                            <div class="text-danger text-left"></div>
                        </div>
                    </div>
                    <p id="phoneWarning" style="color: red;text-align: left"></p>
                    <div class="form-group">
                        <div class="col-sm-10">
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
<script src="<?php echo get_home_url() ?>/wp-content/themes/vinaphone/assets/js/register.js"></script>
</html>
<link href="<?php echo get_home_url() ?>/wp-content/themes/vinaphone/assets/css/loading.css" rel="stylesheet"/>
<style>
    footer {
        background-color: <?php global $nhamang; if($nhamang == 'viettel') echo '#00918c'; elseif ($nhamang == 'mobifone') echo '#00579c'; else echo '#0095f8' ?> !important;
    }

</style>
<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(function () {
            $('#tawto-modal').modal('show');
        }, 10000);
        setTimeout(function () {
            $('#tawto-modal').modal('hide');
        }, 40000);
    });
    $(function () {
        $('.logo-icon').removeClass('active');
        <?php global $nhamang; ?>
        <?php  if($nhamang == 'vinaphone') :?>
        $('.logo-icon.vinaphone').addClass('active');
        <?php endif; ?>
        <?php  if($nhamang == 'mobifone') :?>
        $('.logo-icon.mobifone').addClass('active');
        <?php endif; ?>
        <?php  if($nhamang == 'viettel') :?>
        $('.logo-icon.viettel').addClass('active');
        <?php endif; ?>
    });


</script>

<script type="text/javascript">
    // var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    // (function(){
    //     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    //     s1.async=true;
    //     s1.src='https://embed.tawk.to/59e9a3bd4854b82732ff6a46/default';
    //     s1.charset='UTF-8';
    //     s1.setAttribute('crossorigin','*');
    //     s0.parentNode.insertBefore(s1,s0);
    // })();
</script>

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
<style type="text/css">
    <?php global $nhamang; ?>
    <?php  if($nhamang == 'vinaphone') :?>
    .img-down {
        display: none !important;
    }

    <?php endif; ?>

    <?php  if($nhamang == 'mobifone') :?>
    .menu {
        background-color: #00579c !important;
    }

    .img-down {
        display: none !important;
    }

    .goicuoc-item {
        background-color: #00579c;
    }

    <?php endif; ?>

    <?php  if($nhamang == 'viettel') :?>
    .menu {
        background-color: #00918c !important;
    }

    .img-down {
        display: none !important;
    }

    .goicuoc-item {
        background-color: #00918c;
    }

    <?php endif; ?>
</style>