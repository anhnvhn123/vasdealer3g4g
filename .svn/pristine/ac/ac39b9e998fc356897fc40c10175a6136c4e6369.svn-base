<?php
/*Template Name: Giỏ hàng*/
?>
<?php get_header('vinaphone');
$masanpham = $_GET['ID'];

$tensim = get_field('ten_sim',$masanpham);

$giamoi = get_field('gia_moi',$masanpham);
$giacu = get_field('gia_cu',$masanpham);
$uudai = get_field('uu_dai',$masanpham);
?>

<section id="body" class="body">
<div class="screen-width">
    <div class="container entry-content" >
        <article  class="post-141 post type-post status-publish format-standard has-post-thumbnail hentry ">
            <header class="entry-header clearfix">
                <p class="mh-meta entry-meta" style="font-size: 14px">
                    <span class="entry-meta-date updated"><i class="fa fa-arrow-left"></i><a href="<?php echo get_home_url() ?>/ban-sim-data/">Quay lại</a></span>
                </p>
                <h1 ><?php echo get_the_title(); ?></h1>
            <form method="POST" action="<?php echo home_url();?>/add-lienhe/">

                <table class="table table-striped table-responsive" id="result">
                    <thead>
                    <tr>

                        <th style="font-family: sans-serif">Sản phẩm </th>
                        <th style="font-family: sans-serif">Số lượng</th>
                        <th style="font-family: sans-serif">Giá</th>
                        <th style="font-family: sans-serif">Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $tensim ?></td>
                        <td>
                                <input type="number" id="select_quantity" value="1" name="quantity" min="1">
                        </td>
                        <td gia="<?php echo $giamoi ?>" id="gia"><?php echo number_format($giamoi);?> đ</td>
                        <td ><span id="thanh-tien"><?php echo number_format($giamoi);?> </span> đ</td>
                    </tr>
                    </tbody>
                </table>
                <h4 >Xin mời điền thông tin của bạn :</h4>

                <input id="tensanpham" type="hidden" name="tensanpham"  value="<?php echo $tensim ?>" >
                <div class="col-md-10  col-xs-10" style="margin-bottom: 10px">
                    <span for="name" class="col-md-3  col-xs-12">Họ và tên:</span>
                    <input id="name" type="text" name="fullname" value="" required="true">
                </div>
                <br>
                <div class="col-md-10  col-xs-10" style="margin-bottom: 10px">
                    <span for="tel" class="col-md-3  col-xs-12">Số điện thoại:</span>
                    <input id="tel" type="text" name="tel" value="" required="true">
                </div>
                <br>
                <div class="col-md-10  col-xs-10" style="margin-bottom: 10px">
                    <span for="email" class="col-md-3  col-xs-12">Email:</span>
                    <input id="email" type="email" name="email" value="" required="true">
                </div>
                <div class="col-md-10  col-xs-10" style="margin-bottom: 10px">
                    <span for="address" class="col-md-3  col-xs-12">Địa chỉ:</span>
                    <input id="address" type="text" name="address" value="" required="true">
                </div>
                <input id="thanhtien" type="hidden" name="thanhtien"  value="<?php echo $giamoi ?>">
                <input id="soluong" type="hidden" name="soluong"  value="1" required="true">
                <div class="col-md-10  col-xs-6" style="margin-bottom: 10px">
                    <input type="submit" value="Xác nhận" id="submit">
                </div>

                <div class="col-md-10  col-xs-6" style="margin-bottom: 10px">
                    <h4 style="color: red" id="message"></h4>
                </div>
                </form>
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
        // Create our number formatter.
        var formatter = new Intl.NumberFormat('en-US', {});
        $('#thanh-tien').text(formatter.format(thanh_tien));
        var t = document.getElementById('thanhtien').value = thanh_tien;
        var q = document.getElementById('soluong').value = quantity;


    })

</script>
<?php get_footer('vinaphone'); ?>
