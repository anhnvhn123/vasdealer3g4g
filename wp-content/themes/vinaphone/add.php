<?php /* Template Name: add lien he */ ?>

<?php get_header('vinaphone'); ?>

<section id="body" class="body">
    <div class="screen-width">
        <div class="container entry-content" >
            <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry ">
                <header class="entry-header clearfix">
                    <p class="mh-meta entry-meta" style="font-size: 14px">
                        <span class="entry-meta-date updated"><i class="fa fa-arrow-left"></i><a href="<?php echo get_home_url() ?>">Quay lại trang chủ</a></span>
                    </p>
                    <?php

                    if(isset($_POST['fullname']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['soluong']) && isset($_POST['thanhtien'])){
                        $arg = array(
                            'post_title'	=> "Mua sim ".$_POST['tensanpham'].' - '.$_POST['fullname'].' - '.$_POST['tel'].' - '.$_POST['email'].' - '.$_POST['address'].' - '.$_POST['soluong'].' - '.$_POST['thanhtien'],
                            'meta_input'	=> array(
                                'tel'	=> $_POST['tel'],
                                'email'	=> $_POST['email'],
                                'address'	=> $_POST['address'],
                                'soluong'	=> $_POST['soluong'],
                                'thanhtien'	=> $_POST['thanhtien'],
                                'status'	=> '0',
                                'purchase_time'=> date("Y-m-d h:i:s"),
                                'post_status'   => 'publish'
                            ),
                            'post_type'	=> 'don_hang'
                        );
                        wp_insert_post($arg);


                        $to = $_POST['email'];
                        $subject = 'Thông báo đơn hàng mua sim KATE - '.date("Y-m-d");
                        $body = "Thông tin đơn hàng
                                            Họ tên: ".$_POST['fullname']."
                                            Số điện thoại: ".$_POST['tel']."
                                            Email: ".$_POST['email']."
                                            Địa chỉ: ".$_POST['address']."
                                            Số lượng: ".$_POST['soluong']."
                                            Tổng tiền: ".$_POST['thanhtien'];
                        wp_mail( $to, $subject, $body ); // gửi mail tới khách hàng
                        wp_mail( "nganltt@agrimedia.vn", $subject, $body );
                        wp_mail( "stechvietnamjsc@gmail.com", $subject, $body );
                        wp_mail( "lethithuyngan94@gmail.com", $subject, $body );
                        wp_mail( "hangptk28@gmail.com", $subject, $body );
                        ?>

                    <form >
                        <div class="col-md-10  col-xs-6" style="margin-bottom: 10px">
                            <h4 style="color: #6aa318;font-size: 18px" id="message" align="center">Chúc mừng bạn đã đặt hàng thành công!<br><br> Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Cảm ơn bạn!</h4>
                        </div>
                    </form>
                    <?php
                    }
                    else {
                        ?>
                        <form >
                            <div class="col-md-10  col-xs-6" style="margin-bottom: 10px">
                                <h4 style="color: red;font-size: 18px" id="message" align="center">Không tồn tại thông tin mua hàng !</h4>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </header>
                <div class="entry-content clearfix">
                    <?php echo get_the_content(); ?>
                </div>
            </article>

        </div>

    </div>
</section>
<script type="text/javascript">
    $('#select_quantity').on('change',function(){
        var quantity = $(this).val();
        var gia = $('#gia').attr('gia');
        var thanh_tien = gia * quantity;
        $('#thanh-tien').text(thanh_tien);
        var t = document.getElementById('thanhtien').value = thanh_tien;
        var q = document.getElementById('soluong').value = quantity;


    })
</script>
<?php get_footer('vinaphone'); ?>
